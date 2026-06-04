{extends file="main.tpl"}

{block name=content}
<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2>{if isset($form['id'])}Edycja pracownika{else}Dodaj nowego pracownika{/if}</h2>
        </header>

        <form action="{$conf->action_url}workerSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                <input type="hidden" name="id" value="{$form['id']|default:''}">

                <div class="pure-control-group">
                    <label for="imie">Imię</label>
                    <input id="imie" type="text" name="imie" value="{$form['imie']|default:''}" placeholder="Imię" />
                </div>

                <div class="pure-control-group">
                    <label for="nazwisko">Nazwisko</label>
                    <input id="nazwisko" type="text" name="nazwisko" value="{$form['nazwisko']|default:''}"
                        placeholder="Nazwisko" />
                </div>

                <div class="pure-control-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="{$form['email']|default:''}"
                        placeholder="adres@email.pl" />
                </div>

                <div class="pure-control-group">
                    <label for="login">Login</label>
                    <input id="login" type="text" name="login" value="{$form['login']|default:''}"
                        placeholder="Login użytkownika" />
                </div>

                <div class="pure-control-group">
                    <label for="pass">Hasło</label>
                    <input id="pass" type="password" name="pass"
                        placeholder="{if isset($form['id'])}Zostaw puste, by nie zmieniać{else}Wpisz hasło{/if}" />
                </div>

                <div class="pure-control-group">
                    <label for="id_rola">Rola systemowa</label>
                    <select id="id_rola" name="id_rola">
                        {foreach $roles as $r}
                        <option value="{$r['id']}" {if isset($form['id_rola']) &&
                            $form['id_rola']==$r['id']}selected{/if}>
                            {$r['nazwa']}
                        </option>
                        {/foreach}
                    </select>
                </div>

                <div class="pure-controls">
                    <input type="submit" value="Zapisz dane" class="button primary" />
                    <a href="{$conf->action_url}manageWorkers" class="button">Powrót do listy</a>
                </div>
            </fieldset>
        </form>

    </div>
</div>
{/block}