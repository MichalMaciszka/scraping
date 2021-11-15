<?php
/* Smarty version 3.1.39, created on 2021-11-15 16:27:00
  from '/var/www/html/themes/classicPL/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61927c44c95952_09919680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da80c732a936de3dee3c32c74ce6a8c88a337824' => 
    array (
      0 => '/var/www/html/themes/classicPL/templates/index.tpl',
      1 => 1636911183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61927c44c95952_09919680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107762685361927c44c86ae7_44955524', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_209286595361927c44c88781_35681397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_30417422461927c44c8d892_77207180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_150945577661927c44c8b7e3_57525132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30417422461927c44c8d892_77207180', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_107762685361927c44c86ae7_44955524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_107762685361927c44c86ae7_44955524',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_209286595361927c44c88781_35681397',
  ),
  'page_content' => 
  array (
    0 => 'Block_150945577661927c44c8b7e3_57525132',
  ),
  'hook_home' => 
  array (
    0 => 'Block_30417422461927c44c8d892_77207180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209286595361927c44c88781_35681397', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150945577661927c44c8b7e3_57525132', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
