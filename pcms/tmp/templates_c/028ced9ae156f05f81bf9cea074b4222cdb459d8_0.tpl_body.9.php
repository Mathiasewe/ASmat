<?php
/* Smarty version 4.5.5, created on 2026-05-14 23:52:44
  from 'tpl_body:9' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a06442c8f0608_78687207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028ced9ae156f05f81bf9cea074b4222cdb459d8' => 
    array (
      0 => 'tpl_body:9',
      1 => '1778795563',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a06442c8f0608_78687207 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>
	
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
