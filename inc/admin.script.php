<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaAdmin();

?>
<div class="row-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="span12 centrato">
                <h1><i class="icon-stackexchange"></i> Script</h1>
                <div class="alert alert-block alert-danger">
                    <h3><i class="icon-warning-sign"></i> Attenzione!!!</h3>
                    <p>Pagina contenente gli script di gaia</p>
                    <p>Prestare massima attenzione!!!</p>
                </div>        
            </div>
            <hr/>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6 centrato">
            <div class='alert alert-info'>
                <strong>Script per il pagamento delle quote associative</strong>
                <p>Questo script paga tutte le quote associative dell'anno corrente</p>
            </div>
            <a href="?p=admin.quotepaga" class="btn btn-large btn-info">
                <i class="icon-money"></i>
                Paga quote associative
            </a>
            <hr/>
            <div class='alert alert-danger'>
                <strong>Script per le statistiche personali</strong>
                <p>Questo script genera le statistiche personali del volontario<br/>
                Attenzione lo script impiega mediamente 15 minuti ad essere eseguito!!!</p>
            </div>
            <a href="?p=admin.statistiche" class="btn btn-large btn-danger">
                <i class="icon-puzzle-piece"></i>
                Genera statistiche
            </a>
        </div>
        
        <div class="span6 centrato">
            <div class="alert alert-success">
                <strong>Script per il popolamento del campo sesso</strong>
                <p>Questo script assegna il sesso agli utenti di gaia sulla base del loro codice fiscale</p>
            </div>
            <a href="?p=admin.sesso" class="btn btn-large btn-success">
                <i class="icon-male"></i><i class="icon-female"></i>
                Sesso
            </a>
        </div>
    </div>
</div>