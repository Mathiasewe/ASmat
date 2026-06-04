{extends file="main.tpl"}

{block name=content}
<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Edycja / Dodawanie sprzętu</h2>
        </header>

        <form action="{$conf->action_url}gearSave" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned">
            <fieldset>
                <input type="hidden" name="id" value="{$form['id']|default:''}">

                <div class="pure-control-group">
                    <label for="nazwa">Nazwa sprzętu</label>
                    <input id="nazwa" type="text" name="nazwa" value="{$form['nazwa']|default:''}" required>
                </div>

                <div class="pure-control-group">
                    <label for="id_kat">Kategoria</label>
                    <select id="id_kat" name="id_kat">
                        {foreach $categories as $c}
                            <option value="{$c.id}" {if isset($form.id_kategorie_sprzetu) && $form.id_kategorie_sprzetu == $c.id}selected{/if}>
                                {$c.nazwa}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="pure-control-group">
                    <label for="rozmiar">Rozmiar</label>
                    <input id="rozmiar" type="text" name="rozmiar" value="{$form['rozmiar']|default:''}">
                </div>

                <div class="pure-control-group">
                    <label for="cena">Cena za dobę</label>
                    <input id="cena" type="number" name="cena" value="{$form['cena_za_dobe']|default:''}">
                </div>

                <div class="pure-control-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="dostepne" {if isset($form.status) && $form.status == 'dostepne'}selected{/if}>Dostępne</option>
                        <option value="wypozyczone" {if isset($form.status) && $form.status == 'wypozyczone'}selected{/if}>Wypożyczone</option>
                        <option value="serwis" {if isset($form.status) && $form.status == 'serwis'}selected{/if}>W serwisie</option>
                    </select>
                </div>

                <div class="pure-control-group">
                    <label for="foto">Zdjęcie sprzętu (.jpg)</label>
                    <input id="foto" type="file" name="foto" accept="image/jpeg">
                </div>

                <div class="pure-control-group">
                    <label for="opis">Opis</label>
                    <textarea id="opis" name="opis" rows="4">{$form['opis']|default:''}</textarea>
                </div>

                <div class="pure-controls">
                    <input type="submit" value="Zapisz sprzęt" class="button button-save">
                    <a href="{$conf->action_url}gearList" class="button">Anuluj</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
{/block}