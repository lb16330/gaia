<?php

/*
 * ©2012 Croce Rossa Italiana
 */

paginaPresidenziale();

$t     = $_GET['id'];
$t = new Trasferimento($t);

if (isset($_GET['si'])) {
    $t->trasferisci();    
    redirect('presidente.trasferimento&ok');  
}

if (isset($_GET['no'])) {
    $t->nega($_POST['motivo']);
    redirect('presidente.trasferimento&no');   
}
?>