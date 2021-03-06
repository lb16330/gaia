<?php

/*
 * ©2013 Croce Rossa Italiana
 */

class RichiestaTurno extends Entita {
        protected static
            $_t  = 'richiesteTurni',
            $_dt = null;
        
    public function elementi(){
        return ElementoRichiesta::filtra([
            ['richiesta', $this->id]
        ]);
    } 
    
    public function turno() {
        return new Turno($this->turno);
    }
        
        
}