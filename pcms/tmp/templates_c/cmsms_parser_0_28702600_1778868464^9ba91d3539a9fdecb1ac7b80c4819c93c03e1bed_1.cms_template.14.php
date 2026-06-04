<?php
/* Smarty version 4.5.5, created on 2026-05-15 20:07:44
  from 'cms_template:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0760f04b8e32_22370056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1778868419',
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
function content_6a0760f04b8e32_22370056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('cms_template:a_part_top', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '5e52a7ff02015b3437281cd41feed83ce74fdc3f', 'content_6a0760f04696a3_23371588');
?>

						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Dolore Amet Consequat</h3>
										</header>
										<p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum massa. Morbi eu faucibus massa. Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>
										<p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique. Sed id sem et massa ornare pellentesque. Maecenas pharetra porta accumsan. </p>
										<p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus, non hendrerit ipsum arcu tristique est.</p>
									</section>
								</div>

						</section>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:a_part_bottom', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'dcfaa38296f0e8f21319f0ae6d0fc3bf9d1be786', 'content_6a0760f04b0843_33764310');
}
/* Start inline template "cms_template:a_banner" =============================*/
function content_6a0760f04ad548_38640072 (Smarty_Internal_Template $_smarty_tpl) {
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
function content_6a0760f04696a3_23371588 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->_subTemplateRender('cms_template:a_banner', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '7c57091409747cf5c8762ebaf6084296c919fe66', 'content_6a0760f04ad548_38640072');
}
/* End inline template "cms_template:a_part_top" =============================*/
/* Start inline template "cms_template:a_part_bottom" =============================*/
function content_6a0760f04b0843_33764310 (Smarty_Internal_Template $_smarty_tpl) {
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
