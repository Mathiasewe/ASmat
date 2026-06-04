<?php
/* Smarty version 4.5.5, created on 2026-05-15 20:24:30
  from 'tpl_body:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0764de1f9743_93973155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763e63b089e7c52bfafe4a16588e3defdf19eb95' => 
    array (
      0 => 'tpl_body:1',
      1 => '1778869394',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0764de1f9743_93973155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>



<article id="main">
    <header class="special container">
        <span class="icon solid fa-file-alt"></span>
        <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
    </header>

    <section class="wrapper style4 container">
        <div class="content">
            <section>

                <span class="image featured">
                    <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/images/pic04.jpg" alt="<?php echo smarty_function_title(array(),$_smarty_tpl);?>
" />
                </span>

                <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
            </section>
        </div>
    </section>
</article>
	
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
