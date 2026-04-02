<?php
/* Smarty version 5.4.5, created on 2026-04-01 22:34:00
  from 'file:GearList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69cd81385f63e1_67267439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '923810b2b2ba48a93fd2d583377c53e0a0987297' => 
    array (
      0 => 'GearList.tpl',
      1 => 1775075573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69cd81385f63e1_67267439 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_23952959869cd81385d0ae4_11933955', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_23952959869cd81385d0ae4_11933955 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="container">
    <header>
        <h2>Dostępny sprzęt zimowy</h2>
    </header>

    <div class="search-container">
        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" method="post" class="pure-form">
            <legend>Wyszukaj sprzęt</legend>

            <div class="search-flex-row">
                <input type="text" name="sf_nazwa" placeholder="Nazwa sprzętu..." value="<?php echo (($tmp = $_smarty_tpl->getValue('searchForm') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                <button type="submit" class="button primary">Filtruj</button>

                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" class="button alt">Wyczyść</a>
            </div>
        </form>
    </div>

    <?php if (\core\RoleUtils::inRole('kierownik')) {?>
    <div style="margin-bottom: 2em;">
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearAdd" class="button primary icon solid fa-plus">
            Dodaj nowy sprzęt
        </a>
    </div>
    <?php }?>

    <div class="row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gear'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        <div class="col-4 col-12-mobile">
            <article class="item">
                <a href="#" class="image fit">
                    <img src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/<?php echo $_smarty_tpl->getValue('item')['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
" />
                </a>
                <header>
                    <h3><?php echo $_smarty_tpl->getValue('item')['nazwa'];?>
</h3>
                </header>


                <p>Rozmiar: <?php echo $_smarty_tpl->getValue('item')['rozmiar'];?>
<br>
                    Kategoria: <?php echo $_smarty_tpl->getValue('item')['kategoria'];?>
<br>
                    Cena: <?php echo $_smarty_tpl->getValue('item')['cena_za_dobe'];?>
 zł/dobę
                </p>

                <?php if (\core\RoleUtils::inRole('klient')) {?>
                <p>Status: <span class="badge"><?php echo $_smarty_tpl->getValue('item')['status'];?>
</span></p>

                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reserveGear/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="button small">Zarezerwuj</a>
                <?php }?>

                <?php if (\core\RoleUtils::inRole('kierownik')) {?>
                <div style="margin-top: 10px;">
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearEdit/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="button small">Edytuj</a>
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearDelete/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="button small alt"
                        onclick="return confirm('Czy na pewno chcesz trwale usunąć ten sprzęt?')">
                        Usuń
                    </a>
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
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList?page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
&sf_nazwa=<?php echo $_smarty_tpl->getValue('searchForm');?>
" class="button small">«
            Poprzednia</a>
        <?php }?>

        <span class="page">Strona <?php echo $_smarty_tpl->getValue('currentPage');?>
 z <?php echo $_smarty_tpl->getValue('totalPages');?>
</span>

        <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?> <a
            href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList?page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
&sf_nazwa=<?php echo $_smarty_tpl->getValue('searchForm');?>
" class="button small">
            Następna »</a>
            <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
