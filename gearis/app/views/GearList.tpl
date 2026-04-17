{extends file="main.tpl"}

{block name=content}
<div class="container">
    <header>
        <h2>Dostępny sprzęt zimowy</h2>
    </header>

    <div class="search-container">
        {* Zawsze celujemy w jeden konkretny div: table_content *}
        <form id="search-form" class="pure-form"
            onsubmit="ajaxPostForm('search-form','{$conf->action_url}gearListPart','table_content'); return false;">
            <div class="search-flex-row">
                <input type="text" name="sf_nazwa" id="sf_nazwa" placeholder="Nazwa sprzętu..."
                    value="{$searchForm|default:''}">
                <button type="submit" class="button primary">Filtruj</button>

                {* Poprawiony przycisk Wyczść - musi czyścić pole I wywołać AJAX *}
                <button type="button" class="button alt"
                    onclick="document.getElementById('sf_nazwa').value=''; ajaxPostForm('search-form','{$conf->action_url}gearListPart','table_content');">
                    Wyczyść
                </button>
            </div>
        </form>
    </div>

    {if \core\RoleUtils::inRole('kierownik')}
    <div style="margin-bottom: 2em;">
        <a href="{$conf->action_url}gearAdd" class="button primary icon solid fa-plus">Dodaj nowy sprzęt</a>
    </div>
    {/if}

    {* Tylko ten jeden div będzie odświeżany *}
    <div id="table_content">
        {include file="GearListPart.tpl"}
    </div>
</div>
{/block}