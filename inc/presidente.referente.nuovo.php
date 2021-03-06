<?php

/*
 * ©2012 Croce Rossa Italiana
 */
paginaPresidenziale();
$t = $_GET['id'];
?>
<form class="form-horizontal" action="?p=presidente.referente.nuovo.ok&id=<?php echo $t; ?>" method="POST">
    
          <div class="control-group">
            <label class="control-label" for="inputComitato">Comitato</label>
            <div class="controls">
                <select required name="inputComitato" id="inputComitato" autofocus class="input-xlarge">
                    <option value="" selected="selected">[ Seleziona un Comitato ]</option>
                    <?php 
                    foreach ( $me->comitatiDiCompetenza() as $c ) { ?>
                        <option value="<?php echo $c->id; ?>"><?php echo $c->nome; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
    
<div class="control-group">
            <label class="control-label" for="inputApplicazione"> Applicazione</label>
            <div class="controls">
                <select required name="inputApplicazione" autofocus class="span8">
                    <?php foreach ( $conf['applicazioni'] as $numero => $app) { 
                        if ( $numero == APP_PRESIDENTE ) { continue; } ?>
                        <option value="<?php echo $numero; ?>"><?php echo $app; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
    
 <div class="control-group">
            <label class="control-label" for="inputDominio"> Dominio</label>
            <div class="controls">
                <select required name="inputDominio" autofocus class="span8">
                    <?php foreach ( $conf['app_attivita'] as $numero => $app) { ?>
                        <option value="<?php echo $numero; ?>"><?php echo $app; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
    <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-large btn-success">
                  <i class="icon-ok"></i>
                  Nomina
              </button>
            </div>
          </div>

