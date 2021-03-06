<?php

/*
 * ©2013 Croce Rossa Italiana
 */

paginaPrivata();


?>
<div class="row-fluid">
    <div class="span12">
        <h2><i class="icon-edit muted"></i> Scheda Veicolo</h3>
    </div>
    
    <div class="span3 allinea-centro">
        <?php if ( isset($_GET['aok']) ) { ?>
            <div class="alert alert-success">
                <i class="icon-ok"></i> Fotografia modificata!
            </div>
        <?php } elseif ( isset($_GET['aerr']) ) { ?>
            <div class="alert alert-error">
                <i class="icon-warning-sign"></i>
                <strong>Errore</strong> &mdash; File troppo grande o non valido.
            </div>
        <?php } else { ?>
            <p><h4>Fronte</h4></p>
        <?php } ?>
            
        <img src="<?php echo $me->avatar()->img(20); ?>" class="img-polaroid" />
        <hr />
        <?php if($a!=1){ ?>
        <form id="caricaFoto" action="?p=#" method="POST" enctype="multipart/form-data" class="allinea-sinistra">
            <p>Per modificare la foto:</p>
          <p>1. <strong>Scegli</strong>: <input type="file" name="avatar" required /></p>
          <p>2. <strong>Clicca</strong>:<br />
              <button type="submit" class="btn btn-block btn-success">
              <i class="icon-save"></i> Salva la foto
          </button></p>
        </form>
        <?php } ?>
    </div>
    
    
    <div class="span12">
        <hr />
        <?php if ( isset($_GET['ok']) ) { ?>
        <div class="alert alert-success">
            <i class="icon-save"></i> <strong>Salvato</strong>.
            Le modifiche richieste sono state memorizzate con successo.
        </div>
        <?php } else { ?>
        <div class="alert alert-block alert-info">
            <h4><i class="icon-road"></i> Dati Veicolo</h4>
            <p>Inserisci i dati del veicolo per aggiungerlo all'autoparco del tuo Comitato. </p>
        </div>
        <?php } ?>
        <form class="form-horizontal" action="?p=co.autoparco.nuovo.ok" method="POST">
            <div class="control-group">
            <label class="control-label" for="inputVeicolo">Tipologia Veicolo</label>
            <div class="controls">
                <select class="input-medium" id="inputVeicolo" name="inputVeicolo"  required>
                <?php
                    foreach ( $conf['veicoli'] as $numero => $tipo ) { ?>
                    <option value="<?php echo $numero; ?>" <?php if ( $numero == $me->grsanguigno ) { ?>selected<?php } ?>><?php echo $tipo; ?></option>
                    <?php } ?>
                </select>   
            </div>
          </div>
            
            <div class="control-group">
              <label class="control-label" for="inputTarga">Targa </label>
              <div class="controls">
                <input class="input-medium" type="text" name="inputTarga" id="inputTarga"></div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="inputTelaio">N. telaio </label>
              <div class="controls">
                <input type="text" name="inputTelaio" id="inputTelaio" ></div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="inputImmatricolazione">Data Immatricolazione </label>
              <div class="controls">
                <input type="text" name="inputImmatricolazione" id="inputImmatricolazione"></div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="inputDataNascita">Data di Nascita</label>
              <div class="controls">
                <input type="text" class="input-small" name="inputDataNascita" id="inputDataNascita" readonly value="<?php echo date('d-m-Y', $me->dataNascita); ?>">
                 

              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputProvinciaNascita">Provincia di Nascita</label>
              <div class="controls">
                <input class="input-mini" type="text" name="inputProvinciaNascita" id="inputProvinciaNascita" readonly value="<?php echo $me->provinciaNascita; ?>" pattern="[A-Za-z]{2}">
                 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputComuneNascita">Comune di Nascita</label>
              <div class="controls">
                <input type="text" name="inputComuneNascita" id="inputComuneNascita" readonly value="<?php echo $me->comuneNascita; ?>">
                 
              </div>
            </div>

            <div class="control-group">
               <label class="control-label" for="inputIndirizzo">Indirizzo</label>
               <div class="controls">
                 <input value="<?php echo $me->indirizzo; ?>" type="text" id="inputIndirizzo" name="inputIndirizzo" required <?php if($a==1){ ?>readonly<?php }?> />
               </div>
             </div>
             <div class="control-group">
               <label class="control-label" for="inputCivico">Civico</label>
               <div class="controls">
                 <input value="<?php echo $me->civico; ?>" type="text" id="inputCivico" name="inputCivico" class="input-small" required <?php if($a==1){ ?>readonly<?php }?> />
               </div>
             </div>
             <div class="control-group">
               <label class="control-label" for="inputComuneResidenza">Comune di residenza</label>
               <div class="controls">
                 <input value="<?php echo $me->comuneResidenza; ?>" type="text" id="inputComuneResidenza" name="inputComuneResidenza" required <?php if($a==1){ ?>readonly<?php }?> />
               </div>
             </div>
             <div class="control-group">
               <label class="control-label" for="inputCAPResidenza">CAP di residenza</label>
               <div class="controls">
                 <input value="<?php echo $me->CAPResidenza; ?>" class="input-small" type="text" id="inputCAPResidenza" name="inputCAPResidenza" required pattern="[0-9]{5}" <?php if($a==1){ ?>readonly<?php }?> />
               </div>
             </div>
             <div class="control-group">
               <label class="control-label" for="inputProvinciaResidenza">Provincia di residenza</label>
               <div class="controls">
                 <input value="<?php echo $me->provinciaResidenza; ?>" class="input-mini" type="text" id="inputProvinciaResidenza" name="inputProvinciaResidenza" required pattern="[A-Za-z]{2}" <?php if($a==1){ ?>readonly<?php }?> />
                 &nbsp; <span class="muted">ad es.: CT</span>
               </div>
             </div>
            <div class="control-group">
            <label class="control-label" for="inputVeicolo">Gruppo Sanguigno</label>
            <div class="controls">
                <select class="input-small" id="inputVeicolo" name="inputVeicolo"  required <?php if($a==1){ ?>readonly<?php }?> >
                <?php
                    foreach ( $conf['sangue_gruppo'] as $numero => $gruppo ) { ?>
                    <option value="<?php echo $numero; ?>" <?php if ( $numero == $me->grsanguigno ) { ?>selected<?php } ?>><?php echo $gruppo; ?></option>
                    <?php } ?>
                </select>   
            </div>
          </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success btn-large">
                    <i class="icon-save"></i>
                    Aggiungi Veicolo
                </button>
            </div>
          </form>

    </div>
    
    
</div>
