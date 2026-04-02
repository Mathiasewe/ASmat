{extends file="main.tpl"}

{block name=content}
<div class="container">
    <header>
        <h2>Dostępny sprzęt zimowy</h2>
    </header>

    <div class="search-container">
        <form action="{$conf->action_url}gearList" method="post" class="pure-form">
            <legend>Wyszukaj sprzęt</legend>

            <div class="search-flex-row">
                <input type="text" name="sf_nazwa" placeholder="Nazwa sprzętu..." value="{$searchForm|default:''}">

                <button type="submit" class="button primary">Filtruj</button>

                <a href="{$conf->action_url}gearList" class="button alt">Wyczyść</a>
            </div>
        </form>
    </div>

    {if \core\RoleUtils::inRole('kierownik')}
    <div style="margin-bottom: 2em;">
        <a href="{$conf->action_url}gearAdd" class="button primary icon solid fa-plus">
            Dodaj nowy sprzęt
        </a>
    </div>
    {/if}

    <div class="row">
        {foreach $gear as $item}
        <div class="col-4 col-12-mobile">
            <article class="item">
                <a href="#" class="image fit">
                    <img src="{$conf->app_url}/images/{$item.id}.jpg" alt="{$item.nazwa}" />
                </a>
                <header>
                    <h3>{$item.nazwa}</h3>
                </header>


                <p>Rozmiar: {$item.rozmiar}<br>
                    Kategoria: {$item.kategoria}<br>
                    Cena: {$item.cena_za_dobe} zł/dobę
                </p>

                {if \core\RoleUtils::inRole('klient')}
                <p>Status: <span class="badge">{$item.status}</span></p>

                <a href="{$conf->action_url}reserveGear/{$item.id}" class="button small">Zarezerwuj</a>
                {/if}

                {if \core\RoleUtils::inRole('kierownik')}
                <div style="margin-top: 10px;">
                    <a href="{$conf->action_url}gearEdit/{$item.id}" class="button small">Edytuj</a>
                    <a href="{$conf->action_url}gearDelete/{$item.id}" class="button small alt"
                        onclick="return confirm('Czy na pewno chcesz trwale usunąć ten sprzęt?')">
                        Usuń
                    </a>
                </div>
                {/if}
            </article>
        </div>
        {/foreach}
    </div>
    <div class="pagination" style="text-align: center; margin-top: 20px;">
        {if $currentPage > 1}
        <a href="{$conf->action_url}gearList?page={$currentPage-1}&sf_nazwa={$searchForm}" class="button small">«
            Poprzednia</a>
        {/if}

        <span class="page">Strona {$currentPage} z {$totalPages}</span>

        {if $currentPage < $totalPages} <a
            href="{$conf->action_url}gearList?page={$currentPage+1}&sf_nazwa={$searchForm}" class="button small">
            Następna »</a>
            {/if}
    </div>
</div>
{/block}