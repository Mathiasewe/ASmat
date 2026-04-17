{if $msgs->isMessage()}
<div class="messages">
    {foreach $msgs->getMessages() as $msg}
    <div class="alert {if $msg->isInfo()}alert-success{/if} 
                 {if $msg->isWarning()}alert-warning{/if} 
                 {if $msg->isError()}alert-danger{/if}">
        {$msg->text}
    </div>
    {/foreach}
</div>
{/if}

<div class="row">
    {foreach $gear as $item}
    <div class="col-4 col-12-mobile">
        <article class="item">
            <a href="javascript:void(0)" class="image fit">
                <img src="{$conf->app_url}/images/{$item.id}.jpg" alt="{$item.nazwa}" />
            </a>
            <header>
                <h3>{$item.nazwa}</h3>
            </header>
            <p>
                Rozmiar: {$item.rozmiar}<br>
                Kategoria: {$item.kategoria}<br>
                Cena: {$item.cena_za_dobe} zł/dobę
            </p>

            {if \core\RoleUtils::inRole('klient')}
            <a href="{$conf->action_url}reserveGear/{$item.id}" class="button small">Zarezerwuj</a>
            {/if}

            {if \core\RoleUtils::inRole('kierownik')}
            <div style="margin-top: 10px;">
                <a href="{$conf->action_url}gearEdit/{$item.id}" class="button small">Edytuj</a>
                <a onclick="if(confirm('Usunąć sprzęt?')) ajaxReloadElement('table_content','{$conf->action_url}gearDelete/{$item.id}'); return false;"
                    href="javascript:void(0)" class="button small alt">Usuń</a>
            </div>
            {/if}
        </article>
    </div>
    {/foreach}
</div>

<div class="pagination" style="text-align: center; margin-top: 20px;">
    {if $currentPage > 1}
    <a onclick="ajaxReloadElement('table_content','{$conf->action_url}gearListPart?page={$currentPage-1}&sf_nazwa={$searchForm}'); return false;"
        href="javascript:void(0)" class="button small">« Poprzednia</a>
    {/if}
    <span class="page">Strona {$currentPage} z {$totalPages}</span>
    {if $currentPage < $totalPages} <a
        onclick="ajaxReloadElement('table_content','{$conf->action_url}gearListPart?page={$currentPage+1}&sf_nazwa={$searchForm}'); return false;"
        href="javascript:void(0)" class="button small">Następna »</a>
        {/if}
</div>