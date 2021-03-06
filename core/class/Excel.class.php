<?php

/*
 * ©2013 Croce Rossa Italiana
 */

class Excel extends File {
    
    private 
            $intestazione = [],
            $righe        = [];

    
    public function intestazione( $array ) {
        $this->intestazione = $array;
    }
    
    public function aggiungiRiga( $array ) {
        $this->righe[] = $array;
    }
    
    public function genera($nome) {
        $this->nome = $nome;
        $this->mime = 'application/vnd.ms-excel';
        
        $s  = "<meta charset='utf-8'>";
        $s .= '<table border="0">';
        $s .= '<thead>';
        foreach ( $this->intestazione as $int ) {
            $s .= "<th><strong>{$int}</strong></th>";
        }
        $s .= '</thead>';
        $s .= '<tbody>';
        foreach ( $this->righe as $riga ) {
            $s .= '<tr>';
            foreach ( $riga as $cont ) {
                $s .= '<td style="min-width: 200px;">';
                $s .= htmlentities($cont);
                $s .= '</td>';
            }
            $s .= '</tr>';
        }
        $s  .= '</tbody>';
        $s  .= '</table>';
        file_put_contents($this->percorso(), $s);
    }
    
}