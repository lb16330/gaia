<?php

/*
 * ©2013 Croce Rossa Italiana
 */

class Nazionale extends GeoPolitica {
        
    protected static
        $_t  = 'nazionali',
        $_dt = 'datiNazionali';

    public static 
        $_ESTENSIONE = EST_NAZIONALE;

    public function nomeCompleto() {
        return $this->nome;
    }

    public function estensione() {
        $r = [];
        foreach  ( $this->regionali() as $l ) {
            $r = array_merge($l->estensione(), $r);
        }
        return array_unique($r);
    }

    public function figli() {
        return $this->regionali();
    }

    public function superiore() {
        return false;
    }
    
    public function regionali() {
        return Regionale::filtra([
            ['nazionale',  $this->id]
        ]);
    }
    
    public function toJSON() {
        $regionali = $this->regionali();
        foreach ( $regionali as &$regionale ) {
            $regionale = $regionale->toJSON();
        }
        return [
            'nome'          =>  $this->nome,
            'regionali'     =>  $regionali
        ];
    }
    
}