<?php
/* Smarty version 5.4.5, created on 2026-01-15 14:51:13
  from 'file:ManageWorkers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6968f0d1aa85f8_07957289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39368d00d44ab9b5b0d388b93ba0cd5979866a42' => 
    array (
      0 => 'ManageWorkers.tpl',
      1 => 1768485071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6968f0d1aa85f8_07957289 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14949407386968f0d1a99449_49303262', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_14949407386968f0d1a99449_49303262 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="container">
    <header>
        <h2>Zarządzanie pracownikami</h2>
        <p>Lista osób z uprawnieniami kierownika i pracownika</p>
    </header>

    <div class="bottom-margin">
        <a class="button primary" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
workerAdd">Dodaj nowego pracownika</a>
    </div>

    <table class="pure-table pure-table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Login</th>
                <th>Rola</th>
                <th>Email</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('workers'), 'w');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('w')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getValue('w')['imie'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('w')['nazwisko'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('w')['login'];?>
</td>
                <td><strong><?php echo $_smarty_tpl->getValue('w')['rola_nazwa'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->getValue('w')['email'];?>
</td>
                <td>
                    <a class="button small button-save" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
workerEdit/<?php echo $_smarty_tpl->getValue('w')['id'];?>
">Edytuj</a>
                    <a class="button small alt" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
workerDelete/<?php echo $_smarty_tpl->getValue('w')['id'];?>
"
                        onclick="return confirm('Czy na pewno chcesz usunąć tego pracownika?')">Usuń</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php
}
}
/* {/block 'content'} */
}
