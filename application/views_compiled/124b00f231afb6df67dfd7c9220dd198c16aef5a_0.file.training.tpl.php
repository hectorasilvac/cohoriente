<?php
/* Smarty version 3.1.39, created on 2021-09-16 15:28:57
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\training.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614346998454c8_46621373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124b00f231afb6df67dfd7c9220dd198c16aef5a' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\training.tpl',
      1 => 1631798937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614346998454c8_46621373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_710892554614346998430c4_26767598', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_710892554614346998430c4_26767598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_710892554614346998430c4_26767598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="our_services">
		<header class="d-flex wrap--center my-2">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<div class="item mb-1">
			<div class="item_icon_wrapper bg--tertiary">
				<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/study.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Formación y Crecimiento</h4>
				<p class="text text--justify color--secondary">
					Contamos con un amplio portafolio de Formación para capacitación y entrenamiento todos nuestros asociados.
				</p>
			</div>
		</div>
		<ul class="our_services_list list">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/exhibition.svg"
						alt="Persona exponiendo un tema a los espectadores" />
				</div>
				<p class="text color--secondary text--justify">Asesoría y acompañamiento para el desarrollo de modelos de atención.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/blackboard.svg" alt="Pizarra" />
				</div>
				<p class="text color--secondary text--justify">Programa de entrenamiento en el manejo de equipos biomédicos para el personal asistencial.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/microscope.svg"
						alt="Ícono de un microscopio" />
				</div>
				<p class="text color--secondary text--justify">Formación continua, acompañamiento y consecución de recursos para el desarrollo científico y
					tecnológico.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/nurse.svg" alt="Enfermera" />
				</div>
				<p class="text color--secondary text--justify">Programas de capacitación en el área de la salud para el personal asistencial.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/book.svg" alt="Ícono de un libro abierto" />
				</div>
				<p class="text color--secondary text--justify">Formación integral en compentencias de la salud.</p>
			</li>
		</ul>
		<p class="wrapper pd-t-0">
		<a class="btn btn--primary wd-100p mt-1" href="/">
			<i class="fas fa-angle-left mr-d5"></i>
			Volver
		</a>
		</p>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
