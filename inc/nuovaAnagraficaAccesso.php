<?php

/*
* ©2012 Croce Rossa Italiana
*/

caricaSelettoreComitato();

?>

<hr />
<?php if ( isset($_GET['esistente'] ) ) { ?>
    <div class="alert alert-success">
    <h4>Stai completando la tua registrazione</h4>
    <p>La tua anagrafica è già presente sul nostro database. Ultima la registrazione.</p>
    </div>
<?php } ?>


<div class="row-fluid">
    <div class="span4">
        <h2>
            <i class="icon-group"></i>
            Comitato e password
        </h2>
        <p>Seleziona il comitato del quale fai parte.</p>
        <p>La tua iscrizione verrà confermata da un vertice del tuo comitato.</p>
        <p>
            <i class="icon-key"></i> Inserisci inoltre la password che userai per accedere.
        </p>
    </div>
    <div class="span8">

    <?php if (isset($_GET['e'])) { ?>
        <div class="alert alert-block alert-error">
            <h4>Inserisci una password complessa</h4>
            <p>Le password complesse sono più difficili da indovinare.</p>
            <p>Scegli una password tra 6 e 15 caratteri.</p>
        </div>
    <?php } ?>
    <?php if (isset($_GET['c'])) { ?>
        <div class="alert alert-block alert-error">
            <h4>Seleziona il tuo comitato di appartenenza</h4>
            <p>Clicca sul pulsante e seleziona la tua unità di appartenenza.</p>
            <p>Verrà chiesta conferma al Presidente del comitato.</p>
        </div>
    <?php } ?>
    <form id="moduloRegistrazione" class="form-horizontal" action="?p=nuovaAnagraficaAccesso.ok" method="POST">
        <div class="control-group">
            <label class="control-label" for="inputComitato">Comitato</label>
            <div class="controls">

                <a class="btn btn-primary" data-selettore-comitato="true" data-input="inputComitato">
                    <i class="icon-warning-sign"></i> Seleziona il comitato...
                </a>

            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputAnno">Anno di ingresso</label>
            <div class="controls">
                <select required name="inputAnno" class="span6">
                <?php for ( $i = date('Y'); $i >= 1900; $i-- ) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <hr />
        <div class="control-group input-prepend">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls ">
                <span class="add-on"><i class="icon-key"></i></span>
                <input type="password" id="inputPassword" name="inputPassword" required pattern=".{6,15}" />
            </div>
        </div>
        <p class="centrato muted">Scegli una password complessa, dai 6 ai 15 caratteri.</p>
        <hr />
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-large btn-danger">
                <i class="icon-ok"></i>
                Completa registrazione
                </button>
            </div>
        </div>
    </form>

    </div>
</div>