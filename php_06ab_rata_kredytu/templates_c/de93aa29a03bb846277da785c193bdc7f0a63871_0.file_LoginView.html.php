<?php
/* Smarty version 5.5.1, created on 2025-12-02 21:09:19
  from 'file:LoginView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_692f476fdcd933_32211614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de93aa29a03bb846277da785c193bdc7f0a63871' => 
    array (
      0 => 'LoginView.html',
      1 => 1764706157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_692f476fdcd933_32211614 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06ab_rata_kredytu\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_984357394692f476fdc7560_21020329', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_984357394692f476fdc7560_21020329 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06ab_rata_kredytu\\app\\views';
?>

<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
		<div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" />
		</div>
		<div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
		</div>
	</fieldset>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
