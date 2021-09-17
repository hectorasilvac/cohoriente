<?php
/* Smarty version 3.1.39, created on 2021-09-17 23:43:34
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\order_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61450c06e6f8b2_00898000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaee1f357ccdef62ca5fd5bcbb7cec0c909e21c5' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\order_form.tpl',
      1 => 1631915014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/confirmation_dialog.tpl' => 1,
  ),
),false)) {
function content_61450c06e6f8b2_00898000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211320831261450c06e67a80_00506729', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_211320831261450c06e67a80_00506729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_211320831261450c06e67a80_00506729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-60p">¿Tienes un Pedido para Nosotros?</h3>
		</header>
		<div class="wrapper wrap_quaternary">
			<form id="order_form" class="form" action="contacto/enviar" method="POST">
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text-secondary" for="fullname">Nombre completo</label>
					<input class="input input_primary" type="text" id="fullname" name="fullname"
						placeholder="Ingresa tu nombre completo" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="phone">Teléfono</label>
					<input class="input input_primary" type="tel" id="phone" name="phone" placeholder="Teléfono" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="email">Correo electrónico</label>
					<input class="input input_primary" type="email" id="email" name="email"
						placeholder="Ingresa tu correo electrónico" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="company">Nombre de la Entidad que
						Representas</label>
					<input class="input input_primary" type="text" id="company" name="company"
						placeholder="Ingresa el nombre de la entidad que representas" />
				</p>
			</form>
            <p class="text color--primary mb-2">
                Adjunta el documento de solicitud para enviarte una cotización
            </p>
			<div id="my-dropzone" class="form_drop mb-2 d-flex wrap--center dropzone">
				<div class="d-flex wrap_quaternary wrap--center dz-message my-0">
					<img class="wd-6" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/pdf.png" alt="" />
					<span class="text_small text--italic mt-1">Arrastrar archivo o buscar en el equipo</span>
				</div>
			</div>
			<button class="order_submit btn btn--primary" type="submit">Enviar</button>
		</div>
		<!-- Dialog -->
		<?php $_smarty_tpl->_subTemplateRender("file:../shared/confirmation_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"order_dialog",'icon'=>"fa-syringe",'title'=>"Solicitar Pedido",'question'=>"¿Estas seguro que deseas crear esta solicitud de pedido?",'sucess_message'=>"Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará."), 0, false);
?>
	</section>
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
