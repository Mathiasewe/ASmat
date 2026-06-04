<?php
/* Smarty version 5.4.5, created on 2026-04-16 00:06:47
  from 'file:GearListTable.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69e00bf710a439_03936472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edbb0d6710e517e0e721c28c6c526a2e4b993269' => 
    array (
      0 => 'GearListTable.tpl',
      1 => 1776290443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e00bf710a439_03936472 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?><div class="row">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gear'), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
    <div class="col-4 col-12-mobile">
        <article class="item">
            <a href="#" class="image fit">
                <img src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/<?php echo $_smarty_tpl->getValue('item')['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
" />
            </a>
            <header><h3><?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
</h3></header>
            <p>
                Rozmiar: <?php echo $_smarty_tpl->getValue('item')['rozmiar'];?>
<br>
                Kategoria: <?php echo $_smarty_tpl->getValue('item')['kategoria'];?>
<br>
                Cena: <?php echo $_smarty_tpl->getValue('item')['cena_za_dobe'];?>
 zł/dobę
            </p>

            <?php if (\core\RoleUtils::inRole('klient')) {?>
                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reserveGear/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="button small">Zarezerwuj</a>
            <?php }?>

            <?php if (\core\RoleUtils::inRole('kierownik')) {?>
            <div style="margin-top: 10px;">
                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearEdit/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="button small">Edytuj</a>
                <a onclick="if(confirm('Usunąć sprzęt?')) ajaxReloadElement('table_content','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearDelete/<?php echo $_smarty_tpl->getValue('item')['id'];?>
'); return false;" 
                   href="#" class="button small alt">Usuń</a>
            </div>
            <?php }?>
        </article>
    </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<div class="pagination" style="text-align: center; margin-top: 20px;">
    <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>
        <a onclick="ajaxReloadElement('table_content','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearListPart?page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
&sf_nazwa=<?php echo $_smarty_tpl->getValue('searchForm');?>
'); return false;" 
           href="#" class="button small">« Poprzednia</a>
    <?php }?>
    <span class="page">Strona <?php echo $_smarty_tpl->getValue('currentPage');?>
 z <?php echo $_smarty_tpl->getValue('totalPages');?>
</span>
    <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?> 
        <a onclick="ajaxReloadElement('table_content','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearListPart?page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
&sf_nazwa=<?php echo $_smarty_tpl->getValue('searchForm');?>
'); return false;" 
           href="#" class="button small">Następna »</a>
    <?php }?>
</div><?php }
}
