<?php /* Smarty version Smarty-3.1.19, created on 2021-05-13 21:29:48
         compiled from "C:\laragon\www\prestashop16\modules\ps_metrics\\views\templates\hook\HookDashboardZoneTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573671754609d7e2c598d29-14693343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f856a5332489f036d11422880c30b7dc12998f' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop16\\modules\\ps_metrics\\\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1620475524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573671754609d7e2c598d29-14693343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pathDashboardVendor' => 0,
    'pathDashboardApp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_609d7e2c59e805_15159386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609d7e2c59e805_15159386')) {function content_609d7e2c59e805_15159386($_smarty_tpl) {?>

<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardVendor']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<script src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardVendor']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<script src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<?php }} ?>
