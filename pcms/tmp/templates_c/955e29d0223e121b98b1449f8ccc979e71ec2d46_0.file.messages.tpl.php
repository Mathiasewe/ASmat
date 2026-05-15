<?php
/* Smarty version 4.5.5, created on 2026-05-14 23:06:28
  from 'C:\xampp\htdocs\pcms\admin\themes\OneEleven\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a063954037034_39245768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955e29d0223e121b98b1449f8ccc979e71ec2d46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcms\\admin\\themes\\OneEleven\\templates\\messages.tpl',
      1 => 1778790121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a063954037034_39245768 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value[0] != '') {?><aside class="message pageerrorcontainer" role="alert"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
if ($_smarty_tpl->tpl_vars['error']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
if ((isset($_smarty_tpl->tpl_vars['messages']->value)) && $_smarty_tpl->tpl_vars['messages']->value[0] != '') {?><aside class="message pagemcontainer" role="status"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
}
}
