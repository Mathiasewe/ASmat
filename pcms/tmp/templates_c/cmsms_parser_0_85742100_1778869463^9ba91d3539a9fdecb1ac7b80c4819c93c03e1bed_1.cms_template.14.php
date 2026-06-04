<?php
/* Smarty version 4.5.5, created on 2026-05-15 20:24:23
  from 'cms_template:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0764d7d51dd0_93490779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1778869452',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0764d7d51dd0_93490779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>



<article id="main">
    <header class="special container">
        <span class="icon solid fa-wine-glass"></span>
        <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
    </header>

    <section class="wrapper style4 container">
        <div class="row gtr-150">
            
            <div class="col-4 col-12-narrower">
                <div class="sidebar">
                    <section>

                        
                    </section>

                    <section>

                        <span class="image featured">
                            <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/images/pic03.jpg" alt="" />
                        </span>
                        

                        
                    </section>
                </div>
            </div>

            <div class="col-8 col-12-narrower imp-narrower">
                <div class="content">
                    <section>

                        <span class="image featured">
                            <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/images/pic02.jpg" alt="<?php echo smarty_function_title(array(),$_smarty_tpl);?>
" />
                        </span>
                        
                        <header>
                            <h3><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h3>
                        </header>


                        
                    </section>
                </div>
            </div>

        </div>
    </section>
</article>
	
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
