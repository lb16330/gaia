<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaPresidenziale();

$g = $_POST['id'];
$g = new Gruppo($g);
$referente = $_POST['inputReferente'];
$referente = new Volontario($referente);
$g->referente   =   $referente;

redirect('gruppi.dash&newref');
?>
