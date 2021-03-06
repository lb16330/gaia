
<?php
/*
 * ©2013 Croce Rossa Italiana
 */

class Patentirichieste extends Entita {
    
    protected static
        $_t  = 'patentiRichieste',
        $_dt = null;
    
    public function volontario() {
        return new Volontario($this->appartenenza()->volontario());
    }
    
    public function appartenenza() {
        return new Appartenenza($this->appartenenza);
    }
    
    public function comitato() {
        return $this->appartenenza()->comitato();
    }
    
    public function titolo() {
        return $this->titolo;
    }
    
}
