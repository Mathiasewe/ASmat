{extends file="main.tpl"}

{block name=content}
<div class="container">
    <header>
        <h2>Zarządzanie pracownikami</h2>
        <p>Lista osób z uprawnieniami kierownika i pracownika</p>
    </header>

    <div class="bottom-margin">
        <a class="button primary" href="{$conf->action_url}workerAdd">Dodaj nowego pracownika</a>
    </div>

    <table class="pure-table pure-table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Login</th>
                <th>Rola</th>
                <th>Email</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            {foreach $workers as $w}
            <tr>
                <td>{$w.imie}</td>
                <td>{$w.nazwisko}</td>
                <td>{$w.login}</td>
                <td><strong>{$w.rola_nazwa}</strong></td>
                <td>{$w.email}</td>
                <td>
                    <a class="button small button-save" href="{$conf->action_url}workerEdit/{$w.id}">Edytuj</a>
                    <a class="button small alt" href="{$conf->action_url}workerDelete/{$w.id}"
                        onclick="return confirm('Czy na pewno chcesz usunąć tego pracownika?')">Usuń</a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{/block}