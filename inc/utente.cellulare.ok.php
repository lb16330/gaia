<?php

/*
 * ©2012 Croce Rossa Italiana
 */

paginaPrivata();

$cell       = normalizzaNome($_POST['inputCellulare']);
$cells      = normalizzaNome(@$_POST['inputCellulareServizio']);

if ( Utente::by('cellulare', $cellulare) ) {
    redirect('utente.cellulare&e');
}

$me->cellulare               = $cell;
$me->cellulareServizio   = $cells;

redirect('utente.cellulare&ok');
