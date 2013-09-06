<?php

/*
 * ©2013 Croce Rossa Italiana
 */

class Statistiche extends Entita {
        protected static
            $_t  = 'statistiche',
            $_dt = null;
     
 	public function volontario() {
    	return new Volontario($this->volontario);
    }
}