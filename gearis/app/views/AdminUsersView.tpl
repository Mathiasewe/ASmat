{extends file="main.tpl"}

{block name=content}
<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Zarządzanie użytkownikami</h2>
        </header>

        <div class="search-container">
            <form action="{$conf->action_url}adminUsersView" method="post" class="pure-form">
                <legend>Zarządzanie użytkownikami</legend>
                <div class="search-flex-row">
                    <input type="text" name="sf_search" placeholder="Szukaj użytkownika lub roli"
                        value="{$searchForm|default:''}">
                    <button type="submit" class="button primary">Szukaj</button>
                    <a href="{$conf->action_url}adminUsersView" class="button alt">Wyczyść</a>
                </div>
            </form>
        </div>

        <table class="pure-table pure-table-bordered" style="width: 100%; margin-top: 2em;">
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Obecna rola</th>
                    <th>Zmień rolę na</th>
                    <th>Akcja</th>
                </tr>
            </thead>
            <tbody>
                {foreach $users as $u}
                <tr>
                    <td>{$u.imie}</td>
                    <td>{$u.nazwisko}</td>
                    <td><strong>{$u.rola_nazwa}</strong></td>
                    <td>

                        <form action="{$conf->action_url}adminChangeRole" method="post" style="margin: 0;">
                            <input type="hidden" name="id_u" value="{$u.id}">
                            <select name="id_r" style="color: black;">
                                {foreach $roles as $r}
                                <option value="{$r.id}" {if $u.id_rola==$r.id}selected{/if}>
                                    {$r.nazwa}
                                </option>
                                {/foreach}
                            </select>
                    </td>
                    <td>
                        <input type="submit" value="Zapisz" class="button small button-save">
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
{/block}