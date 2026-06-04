<?php
/* Smarty version 5.4.5, created on 2026-01-16 21:33:09
  from 'file:ContactView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696aa085a788e2_31641711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f255138b7cb683a5236bb33cbccfa456f4268be' => 
    array (
      0 => 'ContactView.tpl',
      1 => 1768595586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696aa085a788e2_31641711 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_37204473696aa085a74447_21035897', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_37204473696aa085a74447_21035897 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views';
?>
        
<section id="contact" class="four contact-container">
    <div class="container">

        <header>
            <h2>Kontakt</h2>


        <p>Masz pytania dotyczące sprzętu lub rezerwacji? Napisz do nas! <br>
           Odpowiemy na Twoją wiadomość tak szybko, jak to możliwe.</p>
        </header>
        <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
contactSend">
            <div class="row gtr-50">
                <div class="col-6 col-12-mobile">
                    <input type="text" name="name" placeholder="Twoje Imię" required />
                </div>
                <div class="col-6 col-12-mobile">
                    <input type="email" name="email" placeholder="Adres E-mail" required />
                </div>
                <div class="col-12">
                    <textarea name="message" placeholder="Treść wiadomości" rows="6" required></textarea>
                </div>
                <div class="col-12 auth-buttons">
                    <input type="submit" value="Wyślij wiadomość" class="button primary" />
                </div>
            </div>
        </form>

    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
