<?php
/* Smarty version 5.4.5, created on 2026-01-16 21:32:22
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696aa0563c22f5_64726382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab3e3a2a00d52d5903d73cf68a2e684efead5d0' => 
    array (
      0 => 'main.tpl',
      1 => 1768595512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696aa0563c22f5_64726382 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
</head>

<body class="is-preload">

    <div id="header">

        <div class="top">

            <nav id="nav">
                <ul>

                    <?php if (\core\RoleUtils::inRole('administrator')) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
adminUsersView" id="admin-link">
                            <span class="icon solid fa-sync">Zmiana roli</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout">
                            <span class="icon solid fa-sign-out-alt">Wyloguj</span>
                        </a>
                    </li>
                    <?php } elseif (\core\RoleUtils::inRole('kierownik')) {?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
manageWorkers"><span class="icon solid fa-user-tie">Zarządzaj
                                pracownikami</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList"><span class="icon solid fa-tools">Zarządzaj
                                sprzętem</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reports"><span class="icon solid fa-chart-line">Raporty</span></a>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>

                    <?php } elseif (\core\RoleUtils::inRole('pracownik')) {?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
manageReservations"><span class="icon solid fa-tasks">Obsługa
                                rezerwacji</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>

                    <?php } elseif (\core\RoleUtils::inRole('klient')) {?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
homeView" id="top-link"><span class="icon solid fa-home">Strona
                                główna</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" id="portfolio-link"><span
                                class="icon solid fa-th">Sprzęt</span></a>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
reservations" id="portfolio-link"><span
                                class="icon solid fa-th">Moje rezerwacje</span></a>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
contactView" id="contact-link"><span
                                class="icon solid fa-envelope">Kontakt</span></a>
                    </li>
                    <?php } else { ?>

                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
homeView" id="top-link"><span class="icon solid fa-home">Strona
                                główna</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
gearList" id="portfolio-link"><span
                                class="icon solid fa-th">Sprzęt</span></a>
                    </li>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('conf')->roles) == 0) {?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
loginView" class="..."><span
                                class="icon solid fa-user">Logowanie</span></a></li>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
registerView"><span
                                class="icon solid fa-user-plus">Rejestracja</span></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>
                    <?php }?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
contactView" id="contact-link"><span
                                class="icon solid fa-envelope">Kontakt</span></a>
                    </li>
                    <?php }?>
                </ul>
            </nav>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <section id="top" class="one dark cover"
            style="background-image: url('<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/tlo.jpg'); background-size: cover; background-position: center;">

            <div class="container">

                <div id="content">
                    <div class="container messages-container">
                        <?php if ($_smarty_tpl->getValue('msgs')->isMessage()) {?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                        <div class="alert <?php if ($_smarty_tpl->getValue('msg')->isInfo()) {?>alert-success<?php }?> 
                             <?php if ($_smarty_tpl->getValue('msg')->isWarning()) {?>alert-warning<?php }?> 
                             <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>alert-danger<?php }?>" role="alert">
                            <?php echo $_smarty_tpl->getValue('msg')->text;?>

                        </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </div>
                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_592355437696aa0563b9820_88473100', 'content');
?>

                </div>

            </div>
        </section>

    </div>

    <!-- Footer -->
    <div id="footer">

        <footer>Stopka strony Gearis 2026</footer>
        <!-- Copyright 
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
        -->
    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>

<?php echo '<script'; ?>
>
    // Czekamy 5 sekund (5000 ms) przed rozpoczęciem znikania
    setTimeout(function () {
        let alerts = document.querySelectorAll('.alert');
        alerts.forEach(function (alert) {
            // Płynne przejście przezroczystości i wysokości
            alert.style.transition = "opacity 0.6s ease, margin 0.6s ease, padding 0.6s ease, height 0.6s ease";
            alert.style.opacity = "0";
            alert.style.margin = "0";
            alert.style.padding = "0";

            // Całkowite usunięcie z widoku po zakończeniu animacji
            setTimeout(function () {
                alert.style.display = "none";
            }, 600);
        });
    }, 5000);
<?php echo '</script'; ?>
>

</html><?php }
/* {block 'content'} */
class Block_592355437696aa0563b9820_88473100 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\gearis\\app\\views\\templates';
?>

                    <?php
}
}
/* {/block 'content'} */
}
