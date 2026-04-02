<?php
/* Smarty version 5.4.5, created on 2026-01-17 00:20:33
  from 'file:AdminUsersView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696ac7c1413f13_42579921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5da0b4ecd066f56a2651a3c3976d917cc7fa994' => 
    array (
      0 => 'AdminUsersView.tpl',
      1 => 1768595891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696ac7c1413f13_42579921 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_812481936696ac7c13c3d89_39882330', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_812481936696ac7c13c3d89_39882330 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Zarządzanie użytkownikami</h2>
        </header>

        <div class="search-container">
            <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
adminUsersView" method="post" class="pure-form">
                <legend>Zarządzanie użytkownikami</legend>
                <div class="search-flex-row">
                    <input type="text" name="sf_search" placeholder="Szukaj użytkownika lub roli"
                        value="<?php echo (($tmp = $_smarty_tpl->getValue('searchForm') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <button type="submit" class="button primary">Szukaj</button>
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
adminUsersView" class="button alt">Wyczyść</a>
                </div>
            </form>
        </div>

        <table class="pure-table pure-table-bordered" style="width: 100%; margin-top: 2em;">
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Obecna rola</th>
                    <th>Zmień rolę na</th>
                    <th>Akcja</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'u');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('u')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('u')['imie'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('u')['nazwisko'];?>
</td>
                    <td><strong><?php echo $_smarty_tpl->getValue('u')['rola_nazwa'];?>
</strong></td>
                    <td>

                        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
adminChangeRole" method="post" style="margin: 0;">
                            <input type="hidden" name="id_u" value="<?php echo $_smarty_tpl->getValue('u')['id'];?>
">
                            <select name="id_r" style="color: black;">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('roles'), 'r');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach1DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('r')['id'];?>
" <?php if ($_smarty_tpl->getValue('u')['id_rola'] == $_smarty_tpl->getValue('r')['id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->getValue('r')['nazwa'];?>

                                </option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                    </td>
                    <td>
                        <input type="submit" value="Zapisz" class="button small button-save">
                        </form>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
