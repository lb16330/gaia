<?php  

/*
 * ©2013 Croce Rossa Italiana
 */

paginaApp([APP_SOCI , APP_PRESIDENTE]);
$id = $_GET['id'];

?>
<form action="?" method="GET">
    <input type="hidden" name="p" value="us.quote.nuova.ok">
<div class="modal fade automodal">
        <div class="modal-header">
          <h3><i class="icon-certificate"></i> Pagamento quota</h3>
        </div>
    <div class="modal-body">
          <div class="row-fluid form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputData">Data versamento quota</label>
                <div class="controls">
                  <input class="input-medium" type="text" name="inputData" id="inputData" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}">
                </div>
            </div>
              
            <div class="control-group">
                <label class="control-label" for="inputQuota">Quota</label>
                <div class="controls">
                    <select class="input-large" id="inputQuota" name="inputQuota">
                <?php
                        foreach ( $conf['quote'] as $numero => $quota ) { ?>
                            <option value="<?php echo $numero; ?>"><?php echo $quota; ?></option>
                    <?php } ?>
                </select>   
            </div>
          </div>

            <div class="control-group">
                <label class="control-label" id="causale" for="inputCausale" style="display: none">Causale</label>
                <div class="controls">
                  <input class="input-large" type="text" name="inputCausale" id="inputCausale" style="display: none">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" id="importo" for="inputImporto" style="display: none">Importo</label>
                <div class="controls">
                  <input class="input-medium" type="text" name="inputImporto" id="inputImporto" style="display: none">
                </div>
            </div>


           <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
    </div>
        <div class="modal-footer">
          <a href="?p=us.quoteNo" class="btn">Annulla</a>
          <button type="submit" class="btn btn-primary">
              <i class="icon-list"></i> Registra quota
          </button>
        </div>
</div>
</form>
