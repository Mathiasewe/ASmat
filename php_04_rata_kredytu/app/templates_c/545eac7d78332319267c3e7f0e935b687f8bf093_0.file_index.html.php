<?php
/* Smarty version 5.5.1, created on 2025-11-14 12:11:00
  from 'file:C:\xampp\htdocs\php_04_rata_kredytu\app\../templates/index.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69170e44c29172_21780528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545eac7d78332319267c3e7f0e935b687f8bf093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\app\\../templates/index.html',
      1 => 1763110795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69170e44c29172_21780528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? " Opis domyślny" ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<div id="header" class="container">

				<!-- Logo -->
				<h1 id="logo"><a href="index.html">Kalkulator</a></h1>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li class="break"><a href="right-sidebar.html">Right Sidebar</a></li>
					</ul>
				</nav>

			</div>

			<!-- Hero -->
			<section id="hero" class="container">
				<header>
					<h2>Kalkulator

					</h2>
				</header>

				<ul class="actions">
					<li><a href="#" class="button">Get this party started</a></li>
				</ul>
			</section>
			<div id="app_content" class="content">

				<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_135882963069170e44c1c959_10457617', 'content');
?>


			</div>

		</div>

		<!-- Footer -->
		<div id="footer-wrapper">
			<div id="footer" class="container">


			</div>
		</div>
		<div id="copyright" class="container">
			<ul class="menu">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</div>

	</div>

	<!-- Scripts -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'content'} */
class Block_135882963069170e44c1c959_10457617 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_rata_kredytu\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
