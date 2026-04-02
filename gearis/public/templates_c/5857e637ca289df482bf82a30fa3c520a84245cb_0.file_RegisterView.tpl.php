<?php
/* Smarty version 5.4.5, created on 2026-01-17 10:54:29
  from 'file:RegisterView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696b5c55310d20_64774124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5857e637ca289df482bf82a30fa3c520a84245cb' => 
    array (
      0 => 'RegisterView.tpl',
      1 => 1768643661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696b5c55310d20_64774124 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_633873639696b5c552b3784_29558922', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_633873639696b5c552b3784_29558922 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2>Załóż nowe konto</h2>
        </header>

        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                <div class="pure-control-group">
                    <label for="imie">Imię</label>
                    <input id="imie" type="text" name="imie" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['imie'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Imię"
                        required />
                </div>

                <div class="pure-control-group">
                    <label for="nazwisko">Nazwisko</label>
                    <input id="nazwisko" type="text" name="nazwisko" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['nazwisko'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                        placeholder="Nazwisko" required />
                </div>

                <div class="pure-control-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                        placeholder="adres@email.pl" required />
                </div>

                <div class="pure-control-group">
                    <label for="login">Login</label>
                    <input id="login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['login'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
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
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
loginView" class="button primary">Masz już konto? Zaloguj się</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
