<?php
/* Smarty version 3.1.39, created on 2021-09-24 18:12:28
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\supplier_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614df8ec80fb02_66369922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784282a092b5952651166158a156da9763a3af97' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\supplier_form.tpl',
      1 => 1632499948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/confirmation_dialog.tpl' => 1,
  ),
),false)) {
function content_614df8ec80fb02_66369922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2139815272614df8ec8086e0_80034983', "body");
?>

<!-- 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69372915614df8ec80d1b5_06114636', "body");
?>
 --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_2139815272614df8ec8086e0_80034983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2139815272614df8ec8086e0_80034983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="wrap flex-column p-xl-0">
		<div class="d-xl-flex">
			<div class="w-xl-100p me-xl-5">
				<header class="justify-content-center mb-4">
					<h3 class="fs-2d5 text-primary text-center fs-xl-6 w-xl-48 text-xl-start text-xl-secondary mt-xl-3">
						¿Quieres ser un Proveedor?
					</h3>
				</header>
				<form id="order_form" class="form" action="contacto/enviar" method="POST">
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
					<button class="order_submit btn btn-primary w-70p fs-xl-2d5" type="submit">Enviar</button>
				</footer>
			</div>
			<div class="d-none d-xl-block h-50p">
				<img class="wd-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/supplier_form_banner.png" alt="Enfermera escribiendo en una hoja" />
			</div>
		</div>
	</section>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/request_form.js"><?php echo '</script'; ?>
>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/supplier_form.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
/* {block "body"} */
class Block_69372915614df8ec80d1b5_06114636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_69372915614df8ec80d1b5_06114636',
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
