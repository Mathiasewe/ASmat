<?php
/* Smarty version 5.4.5, created on 2026-01-16 20:56:08
  from 'file:ReserveGear.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696a97d824ecf1_50766844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04efc4a7dd6bfe7c3d2ee6e525e757b60f7d742d' => 
    array (
      0 => 'ReserveGear.tpl',
      1 => 1768593360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a97d824ecf1_50766844 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_700746562696a97d823ca64_70101437', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_700746562696a97d823ca64_70101437 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="container res-form-container">
    <h2>Rezerwacja: <?php echo $_smarty_tpl->getValue('gear')['nazwa'];?>
</h2>
    <p>Cena za dobę: <?php echo $_smarty_tpl->getValue('gear')['cena_za_dobe'];?>
 zł</p>

    <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reservationSave" method="post" class="pure-form pure-form-aligned">
        <input type="hidden" name="id_sprzet" value="<?php echo $_smarty_tpl->getValue('gear')['id'];?>
">

        <div class="pure-control-group">
            <label for="data_od">Od dnia:</label>
            <input type="date" name="data_od" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['data_od'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                min="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),'%Y-%m-%d');?>
" required>
        </div>

        <div class="pure-control-group">
            <label for="data_do">Do dnia:</label>
            <input type="date" name="data_do" id="data_do" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['data_do'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                min="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),'%Y-%m-%d');?>
" required>
        </div>

        <div class="pure-controls">
            <button type="submit" class="button primary">Potwierdź rezerwację</button>
        </div>
    </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
