<?php
/* Smarty version 5.4.5, created on 2026-01-16 21:24:34
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696a9e828e14e8_00629247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e60ea33bf3ff87c896f26ce6bba23b2644564c8' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1768595073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a9e828e14e8_00629247 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1018207911696a9e828ccb07_76143940', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1018207911696a9e828ccb07_76143940 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1-1">
        <header>
            <h2>Logowanie do systemu</h2>
        </header>
        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
            <fieldset>
                <div class="pure-control-group">
                    <label for="id_login">Login: </label>

                    <input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
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


        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
        <div class="messages error bottom-margin">
            <ol>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
        <?php }?>


        <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <div class="messages info bottom-margin">
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('msg')->isInfo()) {?>
                <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
                <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
