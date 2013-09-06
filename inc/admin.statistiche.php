<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaAdmin();

set_time_limit(0);
$start= time();
$anno = date('Y', time());
$mese = date('m', time());
$inizio = mktime(0, 0, 0, $mese, 1, $anno);
$giorno = cal_days_in_month(CAL_GREGORIAN, $mese, $anno);
$fine = mktime(0, 0, 0, $mese, $giorno, $anno);

$comitati = Comitato::elenco();
    foreach($comitati as $comitato){
        $volontari = $comitato->membriAttuali();
        foreach($volontari as $v){
            $partecipazioni = $v->partecipazioni();
            $c=0;
            $x=0;
            foreach ($partecipazioni as $part){
                if ($x==0){
                    if ( $part->turno()->inizio >= $inizio && $part->turno()->fine <= $fine ){
                        $auts = $part->autorizzazioni();
                        if ($auts[0]->stato == AUT_OK){
                            $x=1;
                        }
                    	$turno = $part->turno();
                        $co = Coturno::filtra([['turno', $turno],['volontario', $v]]);
                        if ($co){
                            $x=1;
                        }
                    }
                }
                if ( $x==1 ){
        			$c++;
    			}
            }
            $s = Statistiche::by('volontario', $v);
            if ($s){
	            $s = new Statistiche ($s);
	            $s->volontario = $v;
	            $s->nTurni = $c;
	            $s->comitato = $comitato;
	            $s->timestamp = time();
            }else{
            	$s = new Statistiche ();
	            $s->volontario = $v;
	            $s->nTurni = $c;
	            $s->comitato = $comitato;
	            $s->timestamp = time();
            }
		}
		$p = Statistiche::filtra([['comitato', $comitato]],'nTurni DESC');
		$l=0;
		foreach($p as $pos){
			$l++;
			echo $pos->volontario()->nomeCompleto(), " - ", $pos;
			$s = new Statistiche ($pos);
			$s->pos = $l;
		}
	} 
$end = time();
$time = $end - $start;
$time = $time/60;
echo "Minuti impiegati dallo script:", $time;