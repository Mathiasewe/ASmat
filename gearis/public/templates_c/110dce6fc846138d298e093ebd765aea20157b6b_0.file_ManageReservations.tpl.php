<?php
/* Smarty version 5.4.5, created on 2026-01-17 00:06:10
  from 'file:ManageReservations.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696ac4626e6d82_90411744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110dce6fc846138d298e093ebd765aea20157b6b' => 
    array (
      0 => 'ManageReservations.tpl',
      1 => 1768604741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696ac4626e6d82_90411744 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1739139687696ac46266a1c3_14530920', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1739139687696ac46266a1c3_14530920 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Obsługa rezerwacji i płatności</h2>
        </header>

        <table class="pure-table pure-table-bordered" style="width: 100%; margin-top: 2em; color: black;">
            <thead>
                <tr>
                    <th>Klient</th>
                    <th>Sprzęt</th>
                    <th>Termin</th>
                    <th>Koszt</th>
                    <th>Metoda płatności</th>
                    <th>Status</th>
                    <th>Akcja</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reservations'), 'r');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('r')['imie'];?>
 <?php echo $_smarty_tpl->getValue('r')['nazwisko'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('r')['sprzet_nazwa'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('r')['data_od'];?>
 do <?php echo $_smarty_tpl->getValue('r')['data_do'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('r')['koszt_calkowity'];?>
 zł</td>
                    <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
updatePayment" method="post">
                        <input type="hidden" name="id_rez" value="<?php echo $_smarty_tpl->getValue('r')['id'];?>
">
                        <input type="hidden" name="kwota" value="<?php echo $_smarty_tpl->getValue('r')['koszt_calkowity'];?>
">
                        <td>
                            <select name="id_metoda" style="color: black;">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('methods'), 'm');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach1DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('m')['id'];?>
" <?php if ($_smarty_tpl->getValue('r')['id_metoda_platnosci'] == $_smarty_tpl->getValue('m')['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('m')['nazwa'];?>

                                </option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </td>
                        <td>
                            <select name="status" style="color: black;">
                                <option value="Nieopłacone" <?php if ($_smarty_tpl->getValue('r')['status_platnosci'] == 'Nieopłacone') {?>selected<?php }?>>
                                    Nieopłacone</option>
                                <option value="Opłacone" <?php if ($_smarty_tpl->getValue('r')['status_platnosci'] == 'Opłacone') {?>selected<?php }?>>Opłacone
                                </option>
                            </select>
                        </td>
                        <td><input type="submit" value="Aktualizuj" class="button primary small button-save"></td>
                    </form>
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
