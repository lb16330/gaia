<?php  

/*
 * ©2013 Croce Rossa Italiana
 */

paginaApp([APP_SOCI , APP_PRESIDENTE]);

?>
<form action="?" method="GET">
    <input type="hidden" name="p" value="us.quote.ricerca.ok">
<div class="modal fade automodal">
        <div class="modal-header">
          <h3><i class="icon-search"></i> Cerca</h3>
        </div>
    <div class="modal-body">
          <div class="row-fluid">
              <div class="span4 centrato">
                    <label class="control-label" for="inputNumero"> Per numero</label>
                </div>
                <div class="span8">
                  <input class="input-medium" type="text" name="inputNumero" id="inputNumero" required />
                </div>
        </div>
    </div>
        <div class="modal-footer">
          <a href="?p=us.dash" class="btn">Annulla</a>
          <button type="submit" class="btn btn-primary">
              <i class="icon-list"></i> Cerca quota
          </button>
        </div>
</div>
    
</form>
