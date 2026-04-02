<?php
/* Smarty version 5.4.5, created on 2026-01-16 20:46:43
  from 'file:GearEdit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696a95a36a3772_07113829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4c3bca985c11bacd3021d9f29d2879b104f68c' => 
    array (
      0 => 'GearEdit.tpl',
      1 => 1768592798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696a95a36a3772_07113829 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1040735694696a95a3685394_15547408', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1040735694696a95a3685394_15547408 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>

<div class="pure-g">
    <div class="pure-u-1">
        <header>
            <h2>Edycja / Dodawanie sprzętu</h2>
        </header>

        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearSave" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                <div class="pure-control-group">
                    <label for="nazwa">Nazwa sprzętu</label>
                    <input id="nazwa" type="text" name="nazwa" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['nazwa'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                </div>

                <div class="pure-control-group">
                    <label for="id_kat">Kategoria</label>
                    <select id="id_kat" name="id_kat">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('c')['id'];?>
" <?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['id_kategorie_sprzetu'] ?? null))) && $_smarty_tpl->getValue('form')['id_kategorie_sprzetu'] == $_smarty_tpl->getValue('c')['id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->getValue('c')['nazwa'];?>

                            </option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="pure-control-group">
                    <label for="rozmiar">Rozmiar</label>
                    <input id="rozmiar" type="text" name="rozmiar" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['rozmiar'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </div>

                <div class="pure-control-group">
                    <label for="cena">Cena za dobę</label>
                    <input id="cena" type="number" name="cena" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['cena_za_dobe'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                </div>

                <div class="pure-control-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="dostepne" <?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['status'] ?? null))) && $_smarty_tpl->getValue('form')['status'] == 'dostepne') {?>selected<?php }?>>Dostępne</option>
                        <option value="wypozyczone" <?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['status'] ?? null))) && $_smarty_tpl->getValue('form')['status'] == 'wypozyczone') {?>selected<?php }?>>Wypożyczone</option>
                        <option value="serwis" <?php if ((true && (true && null !== ($_smarty_tpl->getValue('form')['status'] ?? null))) && $_smarty_tpl->getValue('form')['status'] == 'serwis') {?>selected<?php }?>>W serwisie</option>
                    </select>
                </div>

                <div class="pure-control-group">
                    <label for="foto">Zdjęcie sprzętu (.jpg)</label>
                    <input id="foto" type="file" name="foto" accept="image/jpeg">
                </div>

                <div class="pure-control-group">
                    <label for="opis">Opis</label>
                    <textarea id="opis" name="opis" rows="4"><?php echo (($tmp = $_smarty_tpl->getValue('form')['opis'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                </div>

                <div class="pure-controls">
                    <input type="submit" value="Zapisz sprzęt" class="button button-save">
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" class="button">Anuluj</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
