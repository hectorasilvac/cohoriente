<?php
/* Smarty version 3.1.39, created on 2021-09-28 23:46:35
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\supplier_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61538d3bdab7a3_22378205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784282a092b5952651166158a156da9763a3af97' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\supplier_form.tpl',
      1 => 1632764878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61538d3bdab7a3_22378205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62279807061538d3bda8a77_49545250', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_62279807061538d3bda8a77_49545250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_62279807061538d3bda8a77_49545250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="wrap flex-column py-xl-0">
		<div class="d-xl-flex">
			<div class="w-xl-100p me-xl-5">
				<header class="justify-content-center mb-4">
					<h3 class="fs-2d5 text-primary text-center fs-xl-6 w-xl-48 text-xl-start text-xl-secondary mt-xl-3">
						¿Quieres ser un Proveedor?
					</h3>
				</header>
				<form id="supplier_form" class="form" action="contacto/enviar" method="POST">
					<div class="d-flex flex-column flex-xl-row column-gap-xl-2">
					<p class="d-flex flex-column mb-2 w-xl-fill">
						<label class="form-label form-label-xl" for="fullname">
							Nombre completo
						</label>
						<input class="form-control form-control-xl" type="text" id="fullname" name="fullname"
							placeholder="Ingresa tu nombre completo" />
					</p>
					<p class="d-flex flex-column mb-2 w-xl-fill">
						<label class="form-label form-label-xl" for="phone">Teléfono</label>
						<input class="form-control form-control-xl" type="tel" id="phone" name="phone" placeholder="Teléfono" />
					</p>
				</div>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="email">Correo electrónico</label>
						<input class="form-control form-control-xl" type="email" id="email" name="email"
							placeholder="Ingresa tu correo electrónico" />
					</p>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="company">Nombre de la Entidad que
							Representas</label>
						<input class="form-control form-control-xl" type="text" id="company" name="company"
							placeholder="Ingresa el nombre de la entidad que representas" />
					</p>
				</form>
				<p class="fs-1d4 text-primary mb-2 fs-xl-2 mt-xl-3">
					En breve nos comunicaremos contigo.
				</p>
				<footer class="flex-center mt-2 justify-content-xl-start w-xl-26">
					<button class="form_submit btn btn-primary w-70p fs-xl-2d5" type="submit">Enviar</button>
				</footer>
			</div>
			<div class="d-none d-xl-block h-50p">
				<img class="wd-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/supplier_form_banner.png" alt="Enfermera escribiendo en una hoja" />
			</div>
		</div>
			<!-- Dialog: Action Confirmation -->
			<dialog id="form_dialog" class="dialog w-80p w-xl-20p">
				<div class="dialog_conf dialog_wrap dialog_primary d-flex flex-column">
					<p class="dialog_close">
						<i class="fas fa-times-circle fa-2x text-gray-600"></i>
					</p>
					<div class="wrap_icon bg-primary p-5 flex-center mt-5">
						<i class="fas fa-truck-moving fa-5x text-light"></i>
					</div>
					<h3 class="fs-1d8 text-primary my-2">
						Solicitar ser Proveedor
					</h3>
					<hr class="wd-100p m-0" />
					<p class="fs-1d8 text-secondary text-center p-2">
						¿Estas seguro que deseas crear esta solicitud de ser proveedor? </p>
				</div>
				<div class="dialog_btns d-flex flex-nowrap">
					<a class="dialog_confirm btn btn-primary">Si</a>
					<a class="dialog_cancel btn btn-primary">No</a>
				</div>
				<!-- Dialog: Success message -->
				<div class="dialog_msg dialog_wrap d-none-force">
					<p class="dialog_close">
						<i class="fas fa-times-circle fa-2x text-gray-600"></i>
					</p>
					<p class="dialog_response fs-1d8 text-center text-secondary px-2d5 py-6d5 d-none">
					</p>
					<p class="dialog_loading text-center p-2d5">
						<img class="w-15" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/loading.gif" alt="Cargando.." />
						<span class="fs-1d8 d-block text-center text-secondary">Por favor espere un momento...</span>
					</p>
				</div>
			</dialog>
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
