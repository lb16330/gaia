<?php

/*
 * ©2012 Croce Rossa Italiana
 */

?>

<div class="row-fluid">
    <div class="span4">
        <h2>
            <i class="icon-question-sign muted"></i>
            Perso la password?
        </h2>
        <p>
            Inserisci il tuo codice fiscale,<br />
            ci permetterà di aiutarti velocemente.
        </p>
    </div>
    <div class="span8">
        <?php if ( isset($_GET['e']) ) { ?>
        <div class="alert alert-block alert-error">
            <h4><i class="icon-exclamation-sign"></i> Codice Fiscale non registrato</h4>
            <p>Hai inserito un codice fiscale che non risulta registrato.<br />
                È una parte essenziale del recupero password. Riprova.</p>
        </div>
        <?php } ?>
        
        <hr />
          <form class="form-horizontal" action="?p=recuperaPassword.ok" method="POST">

          <div class="control-group">
            <label class="control-label" for="inputCodiceFiscale">Cod. Fiscale</label>
            <div class="controls">
              <input autofocus class="input-large" type="text" id="inputCodiceFiscale" name="inputCodiceFiscale" placeholder="16 caratteri alfanumerici" required  pattern="[A-Za-z0-9]{16}" />
            </div>
          </div>
          
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-large btn-success">
                  Richiedi nuova password
                  <i class="icon-chevron-right"></i>
              </button>
            </div>
          </div>
        </form>

    </div>
</div>
