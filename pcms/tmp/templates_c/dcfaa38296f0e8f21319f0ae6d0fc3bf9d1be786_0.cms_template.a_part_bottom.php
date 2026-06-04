<?php
/* Smarty version 4.5.5, created on 2026-05-15 20:32:25
  from 'cms_template:a_part_bottom' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0766b9536656_86051987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcfaa38296f0e8f21319f0ae6d0fc3bf9d1be786' => 
    array (
      0 => 'cms_template:a_part_bottom',
      1 => '1778869939',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0766b9536656_86051987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.current_date.php','function'=>'smarty_cms_function_current_date',),1=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'C:\\xampp\\htdocs\\pcms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
?>
<footer id="footer">
    <ul class="copyright">
        <li>&copy; <?php echo smarty_cms_function_current_date(array('format'=>'%Y'),$_smarty_tpl);?>
 <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</li>
        <li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
    </ul>
</footer>

<?php echo '<script'; ?>
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

</html><?php }
}
