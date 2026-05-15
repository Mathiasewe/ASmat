<?php
/* Smarty version 4.5.5, created on 2026-05-15 19:58:47
  from 'cms_template:a_part_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a075ed7bb0242_08241897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1778867924',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:a_banner' => 1,
  ),
),false)) {
function content_6a075ed7bb0242_08241897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),5=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>
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
<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

			</nav>
		</header>
<?php $_smarty_tpl->_subTemplateRender('cms_template:a_banner', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
