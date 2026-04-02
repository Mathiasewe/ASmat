{extends file="main.tpl"}

{block name=content}
<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Obsługa rezerwacji i płatności</h2>
        </header>

        <table class="pure-table pure-table-bordered" style="width: 100%; margin-top: 2em; color: black;">
            <thead>
                <tr>
                    <th>Klient</th>
                    <th>Sprzęt</th>
                    <th>Termin</th>
                    <th>Koszt</th>
                    <th>Metoda płatności</th>
                    <th>Status</th>
                    <th>Akcja</th>
                </tr>
            </thead>
            <tbody>
                {foreach $reservations as $r}
                <tr>
                    <td>{$r.imie} {$r.nazwisko}</td>
                    <td>{$r.sprzet_nazwa}</td>
                    <td>{$r.data_od} do {$r.data_do}</td>
                    <td>{$r.koszt_calkowity} zł</td>
                    <form action="{$conf->action_url}updatePayment" method="post">
                        <input type="hidden" name="id_rez" value="{$r.id}">
                        <input type="hidden" name="kwota" value="{$r.koszt_calkowity}">
                        <td>
                            <select name="id_metoda" style="color: black;">
                                {foreach $methods as $m}
                                <option value="{$m.id}" {if $r.id_metoda_platnosci==$m.id}selected{/if}>{$m.nazwa}
                                </option>
                                {/foreach}
                            </select>
                        </td>
                        <td>
                            <select name="status" style="color: black;">
                                <option value="Nieopłacone" {if $r.status_platnosci=='Nieopłacone' }selected{/if}>
                                    Nieopłacone</option>
                                <option value="Opłacone" {if $r.status_platnosci=='Opłacone' }selected{/if}>Opłacone
                                </option>
                            </select>
                        </td>
                        <td><input type="submit" value="Aktualizuj" class="button primary small button-save"></td>
                    </form>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
{/block}