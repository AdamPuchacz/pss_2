{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane do kredytu</legend>
		<div class="pure-control-group">
            <label for="kwota">Kwota</label>
            <input id="kwota" type="text" placeholder="Kwota" name="kwota" value="{$form->kwota}">
        </div>
        <div class="pure-control-group">
            <label for="lata">Lata</label>
            <input id="lata" type="text" placeholder="Lata" name="lata" value="{$form->lata}">
        </div>
		<div class="pure-control-group">
            <label for="procent">Procent</label>
            <input id="procent" type="text" placeholder="Procent" name="procent" value="{$form->procent}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Oblicz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_wynik" value="{$form->id_wynik}">
</form>	
</div>

{/block}
