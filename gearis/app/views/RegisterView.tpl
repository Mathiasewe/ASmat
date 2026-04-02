{extends file="main.tpl"}

{block name=content}
<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2>Załóż nowe konto</h2>
        </header>

        <form action="{$conf->action_url}register" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                <div class="pure-control-group">
                    <label for="imie">Imię</label>
                    <input id="imie" type="text" name="imie" value="{$form['imie']|default:''}" placeholder="Imię"
                        required />
                </div>

                <div class="pure-control-group">
                    <label for="nazwisko">Nazwisko</label>
                    <input id="nazwisko" type="text" name="nazwisko" value="{$form['nazwisko']|default:''}"
                        placeholder="Nazwisko" required />
                </div>

                <div class="pure-control-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="{$form['email']|default:''}"
                        placeholder="adres@email.pl" required />
                </div>

                <div class="pure-control-group">
                    <label for="login">Login</label>
                    <input id="login" type="text" name="login" value="{$form['login']|default:''}"
                        placeholder="Twój login" required />
                </div>

                <div class="pure-control-group">
                    <label for="pass">Hasło</label>
                    <input id="pass" type="password" name="pass" placeholder="Twoje hasło" required />
                </div>

                <div class="pure-control-group">
                    <label for="pass">Powtórz hasło</label>
                    <input id="pass2" type="password" name="pass2" placeholder="Powtórz haslo" required />
                </div>

                <div class="pure-controls auth-buttons">
                    <button type="submit" class="button primary">Zarejestruj się</button>
                    <a href="{$conf->action_url}loginView" class="button primary">Masz już konto? Zaloguj się</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
{/block}