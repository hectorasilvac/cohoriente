<?php
/* Smarty version 3.1.39, created on 2021-09-20 21:02:27
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\order_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6148dac3373c38_63939544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaee1f357ccdef62ca5fd5bcbb7cec0c909e21c5' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\order_form.tpl',
      1 => 1632164547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/request_form.tpl' => 1,
  ),
),false)) {
function content_6148dac3373c38_63939544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10365171626148dac336fa16_73174591', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_10365171626148dac336fa16_73174591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10365171626148dac336fa16_73174591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
		<?php $_smarty_tpl->_subTemplateRender("file:../shared/request_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"¿Tienes un Pedido para Nosotros?",'icon'=>"fa-syringe",'dialog_title'=>"Solicitar Pedido",'dialog_question'=>"¿Estas seguro que deseas crear esta solicitud de pedido?"), 0, false);
?>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/order_form.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
