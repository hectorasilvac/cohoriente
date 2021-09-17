<?php
/* Smarty version 3.1.39, created on 2021-09-14 16:53:14
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6140b75ae39c67_02576401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eff02bf00ea39f19ba286e462dc6d079ef6f2e4' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\contact.tpl',
      1 => 1631631194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/order.tpl' => 1,
    'file:../shared/map.tpl' => 1,
    'file:../shared/contact.tpl' => 1,
  ),
),false)) {
function content_6140b75ae39c67_02576401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2175139836140b75ae36736_74242676', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_2175139836140b75ae36736_74242676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2175139836140b75ae36736_74242676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>
<?php
}
}
/* {/block "body"} */
}
