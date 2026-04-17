<?php
/* Smarty version 5.4.5, created on 2026-04-16 00:55:32
  from 'file:GearList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69e01764496d99_18392870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923810b2b2ba48a93fd2d583377c53e0a0987297' => 
    array (
      0 => 'GearList.tpl',
      1 => 1776293729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:GearListPart.tpl' => 1,
  ),
))) {
function content_69e01764496d99_18392870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_147231126369e01764486030_65973986', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_147231126369e01764486030_65973986 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="container">
    <header>
        <h2>Dostępny sprzęt zimowy</h2>
    </header>

    <div class="search-container">
                <form id="search-form" class="pure-form"
            onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearListPart','table_content'); return false;">
            <div class="search-flex-row">
                <input type="text" name="sf_nazwa" id="sf_nazwa" placeholder="Nazwa sprzętu..."
                    value="<?php echo (($tmp = $_smarty_tpl->getValue('searchForm') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <button type="submit" class="button primary">Filtruj</button>

                                <button type="button" class="button alt"
                    onclick="document.getElementById('sf_nazwa').value=''; ajaxPostForm('search-form','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearListPart','table_content');">
                    Wyczyść
                </button>
            </div>
        </form>
    </div>

    <?php if (\core\RoleUtils::inRole('kierownik')) {?>
    <div style="margin-bottom: 2em;">
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearAdd" class="button primary icon solid fa-plus">Dodaj nowy sprzęt</a>
    </div>
    <?php }?>

        <div id="table_content">
        <?php $_smarty_tpl->renderSubTemplate("file:GearListPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
