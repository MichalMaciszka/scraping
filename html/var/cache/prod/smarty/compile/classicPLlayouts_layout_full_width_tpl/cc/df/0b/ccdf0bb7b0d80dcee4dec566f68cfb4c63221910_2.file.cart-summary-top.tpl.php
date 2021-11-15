<?php
/* Smarty version 3.1.39, created on 2021-11-15 16:31:39
  from '/var/www/html/themes/classicPL/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61927d5b156ad7_85413280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccdf0bb7b0d80dcee4dec566f68cfb4c63221910' => 
    array (
      0 => '/var/www/html/themes/classicPL/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1636911183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61927d5b156ad7_85413280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
