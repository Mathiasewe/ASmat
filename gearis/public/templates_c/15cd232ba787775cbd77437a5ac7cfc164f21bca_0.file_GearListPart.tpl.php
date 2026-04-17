<?php
/* Smarty version 5.4.5, created on 2026-04-16 02:49:19
  from 'file:GearListPart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69e0320f495d79_54682698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15cd232ba787775cbd77437a5ac7cfc164f21bca' => 
    array (
      0 => 'GearListPart.tpl',
      1 => 1776300543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e0320f495d79_54682698 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
if ($_smarty_tpl->getValue('msgs')->isMessage()) {?>
<div class="messages">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
    <div class="alert <?php if ($_smarty_tpl->getValue('msg')->isInfo()) {?>alert-success<?php }?> 
                 <?php if ($_smarty_tpl->getValue('msg')->isWarning()) {?>alert-warning<?php }?> 
                 <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>alert-danger<?php }?>">
        <?php echo $_smarty_tpl->getValue('msg')->text;?>

    </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<div class="row">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gear'), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
    <div class="col-4 col-12-mobile">
        <article class="item">
            <a href="javascript:void(0)" class="image fit">
                <img src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/<?php echo $_smarty_tpl->getValue('item')['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
" />
            </a>
            <header>
                <h3><?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
</h3>
            </header>
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
                    href="javascript:void(0)" class="button small alt">Usuń</a>
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
        href="javascript:void(0)" class="button small">« Poprzednia</a>
    <?php }?>
    <span class="page">Strona <?php echo $_smarty_tpl->getValue('currentPage');?>
 z <?php echo $_smarty_tpl->getValue('totalPages');?>
</span>
    <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?> <a
        onclick="ajaxReloadElement('table_content','<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearListPart?page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
&sf_nazwa=<?php echo $_smarty_tpl->getValue('searchForm');?>
'); return false;"
        href="javascript:void(0)" class="button small">Następna »</a>
        <?php }?>
</div><?php }
}
