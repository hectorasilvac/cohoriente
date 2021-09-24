<?php
/* Smarty version 3.1.39, created on 2021-09-24 00:10:07
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\shared\request_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cfb3f7c6a66_23244502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28d472e520cff74f0ce515f2b0879b45197b820' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\shared\\request_form.tpl',
      1 => 1632435007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614cfb3f7c6a66_23244502 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-60p"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Título' : $tmp);?>
</h3>
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
			<div id="my-dropzone" class="form_drop d-flex wrap--center dropzone">
				<div class="d-flex wrap_quaternary wrap--center dz-message my-0">

					<img class="wd-6" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/pdf.png" alt="" />
					<span class="text_small text--italic mt-1">Arrastrar archivo o buscar en el equipo</span>
				</div>
			</div>
			<p class="dropzone_error error d-none">Debes adjuntar un archivo.</p>
			<button class="order_submit btn btn--primary mt-2" type="submit">Enviar</button>
		</div>
		<!-- Dialog: Action Confirmation -->
		<dialog id="order_dialog" class="dialog wd-80p">
			<div class="dialog_wrapper dialog--primary wrapper wrap_quaternary">
				<p class="dialog_close">
					<i class="fas fa-times-circle fa-2x color--secondary430"></i>
				</p>
				<div class="dialog_icon">
					<i class="fas <?php echo (($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'fa-question' : $tmp);?>
 fa-5x color--light"></i>
				</div>
				<h3 class="subtitle_small color--primary my-2">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dialog_title']->value)===null||$tmp==='' ? 'Título' : $tmp);?>

				</h3>
				<hr class="wd-100p" />
				<p class="subtitle_small text--center text--normal color--secondary mt-2">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dialog_question']->value)===null||$tmp==='' ? 'Pregunta' : $tmp);?>

				</p>
			</div>
			<div class="wrapper wrap_primary pd-0">
				<a class="dialog_confirm btn btn--primary">Si</a>
				<a class="dialog_cancel btn btn--primary">No</a>
			</div>
			<!-- Dialog: Success message -->
			<div class="dialog_wrapper wrapper d-none">
				<p class="dialog_close">
					<i class="fas fa-times-circle fa-2x color--secondary430"></i>
				</p>
				<p class="dialog_response subtitle_small text--normal text--center color--secondary mt-2">
				</p>
				<p class="dialog_loading text--center">
					<img class="wd-15" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/loading.gif" alt="Cargando.." />
					<span class="d-block text_regular color--secondary">Por favor espere un momento...</span>
				</p>
			</div>
		</dialog>
	</section>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/request_form.js"><?php echo '</script'; ?>
><?php }
}
