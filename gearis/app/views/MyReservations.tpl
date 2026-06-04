{extends file="main.tpl"}

{block name=content}
<div class="container">
    <header>
        <h2>Moje rezerwacje sprzętu</h2>
        <p>Tu znajdziesz historię i status swoich wypożyczeń.</p>
    </header>

    {if count($list) > 0}
    <table class="pure-table pure-table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>Sprzęt</th>
                <th>Od dnia</th>
                <th>Do dnia</th>
                <th>Koszt</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            {foreach $list as $res}
            <tr>
                <td><strong>{$res.nazwa}</strong></td>
                <td>{$res.data_od}</td>
                <td>{$res.data_do}</td>
                <td>{$res.koszt_calkowity} zł</td>
                <td>
                    <a href="{$conf->action_url}reservationDelete/{$res.id}" class="button small alt"
                        onclick="return confirm('Czy na pewno chcesz anulować tę rezerwację?')">
                        Anuluj
                    </a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
    {else}
    <div class="res-empty-msg">
        <p>Nie masz jeszcze żadnych rezerwacji. Zapraszamy do zapoznania się z naszą ofertą sprzętu!</p>
    </div>
    <a href="{$conf->action_url}gearList" class="button primary">Przejdź do oferty</a>
    {/if}
</div>
{/block}