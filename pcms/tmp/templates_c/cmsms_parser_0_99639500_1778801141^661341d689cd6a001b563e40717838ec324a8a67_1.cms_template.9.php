<?php
/* Smarty version 4.5.5, created on 2026-05-15 01:25:42
  from 'cms_template:9' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0659f602d677_04267848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661341d689cd6a001b563e40717838ec324a8a67' => 
    array (
      0 => 'cms_template:9',
      1 => '1778795563',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0659f602d677_04267848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>
<?php echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>
	
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
