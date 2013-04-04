<?php

/*
 * ©2012 Croce Rossa Italiana
 */

/*
 * Rende la corrente pagina privata (login necessario)
 */
function paginaPrivata() {
    global $sessione;
    if ( !$sessione->utente() ) {
        redirect('login');
    }
}

function paginaPubblica() {
    global $sessione;
    if ( $sessione->utente ) {
        redirect('utente.me');
    }
}

function paginaAdmin() {
    paginaPrivata();
    global $sessione;
    if ( !$sessione->utente()->admin ) {
        redirect('utente.me');
    }
}

function richiediComitato() {
    paginaPrivata();
    global $sessione;
    if ( !$sessione->utente()->comitati() ) {
        redirect('errore.comitato');
    }
}

function paginaPresidenziale() {
    global $sessione;
        paginaPrivata();
    if ( !$sessione->utente()->presiede() && !$sessione->utente()->admin ) {
        redirect('utente.me');
    }
}

function menuVolontario() {
    include('./inc/utente.menu.php');
}

/*
 * Redirige ad una pagina
 * @param $pagina la pagina richiesta
 */
function redirect($pagina) {
    header('Location: ?p=' . $pagina);
    exit(0);
}