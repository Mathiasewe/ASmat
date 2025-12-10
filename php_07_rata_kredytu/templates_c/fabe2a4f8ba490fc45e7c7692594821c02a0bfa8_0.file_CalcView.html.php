<?php
/* Smarty version 5.5.1, created on 2025-11-24 19:08:21
  from 'file:C:\xampp\htdocs\php_05_rata_kredytuu/app/CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69249f15cd3ce3_16499067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fabe2a4f8ba490fc45e7c7692594821c02a0bfa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_rata_kredytuu/app/CalcView.html',
      1 => 1764007345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69249f15cd3ce3_16499067 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_rata_kredytuu\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1026049069249f15c90c36_51401238', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_136603692469249f15c9fc54_85699378', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/index.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_1026049069249f15c90c36_51401238 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_rata_kredytuu\\app';
?>
@Mathias Ewe<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_136603692469249f15c9fc54_85699378 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_rata_kredytuu\\app';
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php" method="post">
			<fieldset>

				<label for="kwota">Kwota:</label>
				<input id="kwota" type="text" placeholder="kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
">
				<br>
				<label for="liczba_lat">Liczba lat:</label>
				<input id="liczba_lat" type="text" placeholder="Liczba lat" name="liczba_lat"
					value="<?php echo $_smarty_tpl->getValue('form')->liczba_lat;?>
">
				<br>
				<label for="oprocentowanie">Oprocentowanie:</label>
				<input id="oprocentowanie" type="text" placeholder="Oprocentowanie" name="oprocentowanie"
					value="<?php echo $_smarty_tpl->getValue('form')->oprocentowanie;?>
">
				<br>
				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

				<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
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
		<?php }?>

				<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
		<?php }?>

		<?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->result ?? null)))) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->getValue('res')->result;?>

		</p>
		<?php }?>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
