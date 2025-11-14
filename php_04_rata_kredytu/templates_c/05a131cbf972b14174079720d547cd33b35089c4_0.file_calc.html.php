<?php
/* Smarty version 5.5.1, created on 2025-11-14 09:34:30
  from 'file:C:\xampp\htdocs\php_04_rata_kredytu/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6916e99608e4e8_29701137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a131cbf972b14174079720d547cd33b35089c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_rata_kredytu/app/calc.html',
      1 => 1763109265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6916e99608e4e8_29701137 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3827954356916e995dc8027_55835841', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20801936546916e995dd6e01_95022642', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/index.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_3827954356916e995dc8027_55835841 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\app';
?>
@Mathias Ewe<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_20801936546916e995dd6e01_95022642 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\app';
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
			<fieldset>

				<label for="kwota">Kwota:</label>
				<input id="kwota" type="text" placeholder="kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
">
				<br>
				<label for="liczba_lat">Liczba lat:</label>
				<input id="liczba_lat" type="text" placeholder="Liczba lat" name="liczba_lat"
					value="<?php echo $_smarty_tpl->getValue('form')['liczba_lat'];?>
">
				<br>
				<label for="oprocentowanie">Oprocentowanie:</label>
				<input id="oprocentowanie" type="text" placeholder="Oprocentowanie" name="oprocentowanie"
					value="<?php echo $_smarty_tpl->getValue('form')['oprocentowanie'];?>
">
				<br>
				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5"></div>
		<?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null)))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>
	<?php }?>
		<?php if ((true && ($_smarty_tpl->hasVariable('infos') && null !== ($_smarty_tpl->getValue('infos') ?? null)))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>
	<?php }?>

	<?php if ((true && ($_smarty_tpl->hasVariable('result') && null !== ($_smarty_tpl->getValue('result') ?? null)))) {?>
	<h4>Wynik</h4>
	<p class="res">
		<?php echo $_smarty_tpl->getValue('result');?>

	</p>
	<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
