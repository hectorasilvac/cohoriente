<?php
/* Smarty version 3.1.39, created on 2021-09-16 21:05:31
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\supplier_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143957b7d5b13_21188276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784282a092b5952651166158a156da9763a3af97' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\supplier_form.tpl',
      1 => 1631819131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/confirmation_dialog.tpl' => 1,
  ),
),false)) {
function content_6143957b7d5b13_21188276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4492788026143957b7c2cf0_08101230', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_4492788026143957b7c2cf0_08101230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4492788026143957b7c2cf0_08101230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center">¿Quieres ser un Proveedor?</h3>
		</header>
        <form class="form wrapper wrap_quaternary">
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text-secondary" for="fullname">Nombre completo</label>
                <input class="input input_primary" type="text" id="fullname" placeholder="Ingresa tu nombre completo" />
            </p>
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Teléfono</label>
                <input class="input input_primary" type="tel" id="phone" placeholder="Teléfono" />
            </p>
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Correo electrónico</label>
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa tu correo electrónico" />
            </p>
			<p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Nombre de la Entidad que Representas</label>
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa el nombre de la entidad que representas" />
            </p>
			<p class="text color--primary mb-2">
                En breve nos comunicaremos contigo.
            </p>
            <button class="supplier_submit btn btn--primary" type="submit">Enviar</button>
        </form>
        <!-- Dialog -->
        <?php $_smarty_tpl->_subTemplateRender("file:../shared/confirmation_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"supplier_dialog",'icon'=>"fa-truck-moving",'title'=>"Solicitar ser Proveedor",'question'=>"¿Estas seguro que deseas crear esta solicitud de ser proveedor?",'sucess_message'=>"Gracias por crear la solicitud para ser uno de nuestros proveedores, en breve uno de nuestros asesores te contactará."), 0, false);
?>
	</section>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/supplier_form.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "body"} */
}
