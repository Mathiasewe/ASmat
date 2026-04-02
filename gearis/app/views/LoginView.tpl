{extends file="main.tpl"}

{block name="content"}
<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2>Logowanie do systemu</h2>
        </header>
        <form action="{$conf->action_url}login" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                <div class="pure-control-group">
                    <label for="id_login">Login: </label>

                    <input id="id_login" type="text" name="login" value="{$form->login|default:""}" />
                </div>
                <div class="pure-control-group">
                    <label for="id_pass">Hasło: </label>
                    <input id="id_pass" type="password" name="pass" />
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary" />
                </div>
            </fieldset>
        </form>


        {if $msgs->isError()}
        <div class="messages error bottom-margin">
            <ol>
                {foreach $msgs->getErrors() as $err}
                <li>{$err}</li>
                {/foreach}
            </ol>
        </div>
        {/if}


        {if $msgs->isInfo()}
        <div class="messages info bottom-margin">
            <ul>
                {foreach $msgs->getMessages() as $msg}
                {if $msg->isInfo()}
                <li>{$msg->text}</li>
                {/if}
                {/foreach}
            </ul>
        </div>
        {/if}
    </div>
</div>
{/block}