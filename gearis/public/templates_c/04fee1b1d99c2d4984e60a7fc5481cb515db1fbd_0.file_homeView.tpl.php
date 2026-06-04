<?php
/* Smarty version 5.4.5, created on 2026-01-16 21:32:28
  from 'file:homeView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696aa05cd07378_63710143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fee1b1d99c2d4984e60a7fc5481cb515db1fbd' => 
    array (
      0 => 'homeView.tpl',
      1 => 1768595535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696aa05cd07378_63710143 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1299745565696aa05cd02e55_58895785', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1299745565696aa05cd02e55_58895785 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<header>
	<h2 class="alt">Gearis </h2>
	<p>Wypożyczalnia sprzętu zimowego</p>
</header>

<div>
	<a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" class="button scrolly">Sprzęt</a>
</div>
<?php
}
}
/* {/block 'content'} */
}
