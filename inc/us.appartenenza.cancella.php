<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaAdmin();

$a = $_GET['a'];

$app = new Appartenenza($a);
$v = $app->volontario;
$app->cancella();

redirect('presidente.utente.visualizza&id=' . $v);
