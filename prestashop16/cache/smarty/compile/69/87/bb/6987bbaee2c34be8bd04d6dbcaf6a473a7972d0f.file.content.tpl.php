<?php /* Smarty version Smarty-3.1.19, created on 2021-05-13 06:37:31
         compiled from "C:\laragon\www\prestashop16\admin159\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132258117609cad0b437b21-80822783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6987bbaee2c34be8bd04d6dbcaf6a473a7972d0f' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop16\\admin159\\themes\\default\\template\\content.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132258117609cad0b437b21-80822783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_609cad0b43a284_74417247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609cad0b43a284_74417247')) {function content_609cad0b43a284_74417247($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
