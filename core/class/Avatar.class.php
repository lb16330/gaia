<?php

/*
 * ©2012 Croce Rossa Italiana
 */

class Avatar extends Entita {
    
    protected static
            $_t     = 'avatar',
            $_dt    = null;
    
    public function utente() {
        return new Utente($this->utente);
    }

    
    public function caricaFile ( $file ) {
    	/* Carica la libreria Imagine */
    	require_once 'phar://./core/phar/imagine.phar';
    	global $conf;

    	$this->timestamp = time();

	$iniziale = new Imagine\Gd\Imagine();
    	$iniziale = $iniziale->open($file['tmp_name']);
    	$mode    = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

        /* Controlla se ci sono errori */
        if ( is_array($file['error']) ) { 
            foreach ($file['error'] as $error) {
                if ($error != UPLOAD_ERR_OK) {
                   return false;
                }
            }
        }
        
    	foreach ( $conf['avatar'] as $dn => $dim ) {
    		set_time_limit(0);
    		$dest 	 = $this->file($dn);
			$size    = new Imagine\Image\Box($dim[0], $dim[1]);
			$iniziale
			    ->thumbnail($size, $mode)
			    ->save($dest);
    	}
        
	return true;
    }

    public function file( $dimensione = null ) {
    	if ( $dimensione ) {
    		return $this->file()[$dimensione];
    	} else {
    		global $conf;
    		$r = [];
    		foreach ($conf['avatar'] as $dv => $dim) {
                    $r[$dv] = "./upload/avatar/$dv/{$this->id}.jpg"; 
    		}
    		return $r;
    	}
    }

    public function img( $dimensione ) {
        if ( is_readable( $this->file($dimensione) ) ) {
            return $this->file($dimensione);
        } else {
            return "./upload/avatar/placeholder/$dimensione.jpg";
        }
    }
    
    public function cancella () {
    	foreach ( $this->file() as $file ) {
    		@unlink($file);
    	}
    	parent::cancella();
    }


}