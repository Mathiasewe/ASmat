<?php
/* Smarty version 5.4.5, created on 2026-01-17 10:20:41
  from 'file:MyReservations.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696b5469bcd116_04758069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c31976bbf29498cf3b3cc3783e4b6586e83db7' => 
    array (
      0 => 'MyReservations.tpl',
      1 => 1768595869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696b5469bcd116_04758069 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_738694156696b5468dfda65_43877453', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_738694156696b5468dfda65_43877453 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="container">
    <header>
        <h2>Moje rezerwacje sprzętu</h2>
        <p>Tu znajdziesz historię i status swoich wypożyczeń.</p>
    </header>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('list')) > 0) {?>
    <table class="pure-table pure-table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>Sprzęt</th>
                <th>Od dnia</th>
                <th>Do dnia</th>
                <th>Koszt</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('list'), 'res');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('res')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><strong><?php echo $_smarty_tpl->getValue('res')['nazwa'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->getValue('res')['data_od'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('res')['data_do'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('res')['koszt_calkowity'];?>
 zł</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reservationDelete/<?php echo $_smarty_tpl->getValue('res')['id'];?>
" class="button small alt"
                        onclick="return confirm('Czy na pewno chcesz anulować tę rezerwację?')">
                        Anuluj
                    </a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <?php } else { ?>
    <div class="res-empty-msg">
        <p>Nie masz jeszcze żadnych rezerwacji. Zapraszamy do zapoznania się z naszą ofertą sprzętu!</p>
    </div>
    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" class="button primary">Przejdź do oferty</a>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
