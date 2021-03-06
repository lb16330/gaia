<?php

/*
 * ©2013 Croce Rossa Italiana
 */

class Dimissione extends Entita {
        protected static
            $_t  = 'dimissioni',
            $_dt = null;
        
        public function dimetti() {
            $this->tConferma  = time();
            $this->pConferma  = $me;
        }

        public function comitato() {
            return new Comitato($this->comitato);
        }
        
        public function volontario() {
            return new Volontario($this->volontario);
        }
     
}