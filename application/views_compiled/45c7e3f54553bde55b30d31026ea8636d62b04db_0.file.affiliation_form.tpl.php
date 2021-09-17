<?php
/* Smarty version 3.1.39, created on 2021-09-16 21:10:09
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\affiliation_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61439691846320_91377139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c7e3f54553bde55b30d31026ea8636d62b04db' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\affiliation_form.tpl',
      1 => 1631819409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/confirmation_dialog.tpl' => 1,
  ),
),false)) {
function content_61439691846320_91377139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144888724161439691841681_85083955', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_144888724161439691841681_85083955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_144888724161439691841681_85083955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-50p">¿Quieres Ser Uno de Nosotros?</h3>
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
				<input class="input input_primary" type="email" id="email"
					placeholder="Ingresa tu correo electrónico" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Nombre de la Entidad que Representas</label>
				<input class="input input_primary" type="email" id="email"
					placeholder="Ingresa el nombre de la entidad que representas" />
			</p>
			<p class="text color--primary mb-1">Adjunta los documentos requeridos aquí.</p>
			<button class="affiliation_submit btn btn--primary" type="submit">Enviar</button>
		</form>
        <!-- Dialog -->
        <?php $_smarty_tpl->_subTemplateRender("file:../shared/confirmation_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"affiliation_dialog",'icon'=>"fa-user-friends",'title'=>"Quiero ser un Asociado",'question'=>"¿Estas seguro que deseas crear esta solicitud para ser asociado?",'sucess_message'=>"Gracias por crear la solicitud para ser asociado, en breve uno de nuestros asesores te contactará."), 0, false);
?>
	</section>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/affiliation_form.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
