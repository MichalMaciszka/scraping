<?php
/* Smarty version 3.1.39, created on 2021-11-15 16:26:10
  from '/var/www/html/siema/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61927c12bd8e42_09487341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8207b974b691c6c31f27c21db509871f2c9308e3' => 
    array (
      0 => '/var/www/html/siema/themes/new-theme/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61927c12bd8e42_09487341 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
