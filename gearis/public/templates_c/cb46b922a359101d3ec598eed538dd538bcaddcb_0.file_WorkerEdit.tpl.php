<?php
/* Smarty version 5.4.5, created on 2026-01-15 16:20:23
  from 'file:WorkerEdit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696905b71a14b4_57846789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb46b922a359101d3ec598eed538dd538bcaddcb' => 
    array (
      0 => 'WorkerEdit.tpl',
      1 => 1768490419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696905b71a14b4_57846789 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1409757009696905b717faf5_69275691', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1409757009696905b717faf5_69275691 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2><?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['id'] ?? null)))) {?>Edycja pracownika<?php } else { ?>Dodaj nowego pracownika<?php }?></h2>
        </header>

        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
workerSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                                <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                <div class="pure-control-group">
                    <label for="imie">Imię</label>
                    <input id="imie" type="text" name="imie" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['imie'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Imię" />
                </div>

                <div class="pure-control-group">
                    <label for="nazwisko">Nazwisko</label>
                    <input id="nazwisko" type="text" name="nazwisko" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['nazwisko'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                        placeholder="Nazwisko" />
                </div>

                <div class="pure-control-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                        placeholder="adres@email.pl" />
                </div>

                <div class="pure-control-group">
                    <label for="login">Login</label>
                    <input id="login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['login'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                        placeholder="Login użytkownika" />
                </div>

                <div class="pure-control-group">
                    <label for="pass">Hasło</label>
                    <input id="pass" type="password" name="pass"
                        placeholder="<?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['id'] ?? null)))) {?>Zostaw puste, by nie zmieniać<?php } else { ?>Wpisz hasło<?php }?>" />
                </div>

                <div class="pure-control-group">
                    <label for="id_rola">Rola systemowa</label>
                    <select id="id_rola" name="id_rola">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('roles'), 'r');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('r')['id'];?>
" <?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['id_rola'] ?? null))) && $_smarty_tpl->getValue('form')['id_rola'] == $_smarty_tpl->getValue('r')['id']) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->getValue('r')['nazwa'];?>

                        </option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="pure-controls">
                    <input type="submit" value="Zapisz dane" class="button primary" />
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
manageWorkers" class="button">Powrót do listy</a>
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
