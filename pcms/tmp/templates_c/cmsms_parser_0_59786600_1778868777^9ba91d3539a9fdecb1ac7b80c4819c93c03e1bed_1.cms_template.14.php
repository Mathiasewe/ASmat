<?php
/* Smarty version 4.5.5, created on 2026-05-15 20:12:57
  from 'cms_template:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a07622998f728_11885180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1778868768',
      2 => 'cms_template',
    ),
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1778867924',
      2 => 'cms_template',
    ),
    '7c57091409747cf5c8762ebaf6084296c919fe66' => 
    array (
      0 => 'cms_template:a_banner',
      1 => '1778867624',
      2 => 'cms_template',
    ),
    'dcfaa38296f0e8f21319f0ae6d0fc3bf9d1be786' => 
    array (
      0 => 'cms_template:a_part_bottom',
      1 => '1778802973',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:a_part_top' => 1,
    'cms_template:a_banner' => 1,
    'cms_template:a_part_bottom' => 1,
  ),
),false)) {
function content_6a07622998f728_11885180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
$_smarty_tpl->_subTemplateRender('cms_template:a_part_top', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '5e52a7ff02015b3437281cd41feed83ce74fdc3f', 'content_6a076229947c75_36611957');
?>

<article id="main">
    <header class="special container">
        <span class="icon solid fa-file-alt"></span>
        <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>     </header>

    <section class="wrapper style4 container">
        <div class="content">
            <section>
                                <span class="image featured">
                    <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/images/pic04.jpg" alt="<?php echo smarty_function_title(array(),$_smarty_tpl);?>
" />
                </span>

                                
            </section>
        </div>
    </section>
</article>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:a_part_bottom', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'dcfaa38296f0e8f21319f0ae6d0fc3bf9d1be786', 'content_6a07622998cf85_74201299');
}
/* Start inline template "cms_template:a_banner" =============================*/
function content_6a076229985496_81796554 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="banner">

			<div class="inner">

				<header>
					<h2>Nazwa Winnicy</h2>
				</header>

			</div>

		</section><?php
}
/* End inline template "cms_template:a_banner" =============================*/
/* Start inline template "cms_template:a_part_top" =============================*/
function content_6a076229947c75_36611957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),5=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/css/main.css" />
    
    <noscript>
        <link rel="stylesheet" href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/css/noscript.css" />
    </noscript>
	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body class="index is-preload">
    <div id="page-wrapper">
        		<header id="header" class="alt">
			<nav id="nav">

			</nav>
		</header>
<?php
$_smarty_tpl->_subTemplateRender('cms_template:a_banner', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '7c57091409747cf5c8762ebaf6084296c919fe66', 'content_6a076229985496_81796554');
}
/* End inline template "cms_template:a_part_top" =============================*/
/* Start inline template "cms_template:a_part_bottom" =============================*/
function content_6a07622998cf85_74201299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/main.js"><?php echo '</script'; ?>
>
</div>
</body>

</html><?php
}
/* End inline template "cms_template:a_part_bottom" =============================*/
}
