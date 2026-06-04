{extends file="main.tpl"}

{block name=content}
<div class="container res-form-container">
    <h2>Rezerwacja: {$gear.nazwa}</h2>
    <p>Cena za dobę: {$gear.cena_za_dobe} zł</p>

    <form action="{$conf->action_url}reservationSave" method="post" class="pure-form pure-form-aligned">
        <input type="hidden" name="id_sprzet" value="{$gear.id}">

        <div class="pure-control-group">
            <label for="data_od">Od dnia:</label>
            <input type="date" name="data_od" value="{$form.data_od|default:''}"
                min="{$smarty.now|date_format:'%Y-%m-%d'}" required>
        </div>

        <div class="pure-control-group">
            <label for="data_do">Do dnia:</label>
            <input type="date" name="data_do" id="data_do" value="{$form.data_do|default:''}"
                min="{$smarty.now|date_format:'%Y-%m-%d'}" required>
        </div>

        <div class="pure-controls">
            <button type="submit" class="button primary">Potwierdź rezerwację</button>
        </div>
    </form>
</div>
{/block}