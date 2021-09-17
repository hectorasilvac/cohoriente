<?php
/* Smarty version 3.1.39, created on 2021-09-16 15:34:13
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614347d5df73d9_61650230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22fd11cabb8fec6247a2df516e023d808bd38b54' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\services.tpl',
      1 => 1631799250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/order.tpl' => 1,
  ),
),false)) {
function content_614347d5df73d9_61650230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1440528023614347d5de9380_06997381', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_1440528023614347d5de9380_06997381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1440528023614347d5de9380_06997381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="our_services">
		<header class="wrapper wrap_subtitle wrap--container">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<ul class="our_services_list list">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/radioactive.svg"
						alt="Ícono de residuos peligrosos" />
				</div>
				<p class="text color--secondary">Oferta de servicios para el manejo ambiental de residuos hospitalarios y peligrosos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/medicine.svg"
						alt="Ícono de un tarro con una pastilla" />
				</div>
				<p class="text color--secondary">Oferta de medicamentos POS y No POS.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/funnel.svg"
						alt="Ícono de residuos peligrosos" />
				</div>
				<p class="text color--secondary">Convenios de acercamiento al sistema de salud y recuperación de cartera.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/molecule.svg" alt="Moléculas" />
				</div>
				<p class="text color--secondary">Oferta de tecnología biomédica.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/monitor.svg"
						alt="Monitor" />
				</div>
				<p class="text color--secondary">
					Oferta de equipos para la información y comunicación.
				</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/health_kit.svg"
						alt="Botiquín de primeros auxilios" />
				</div>
				<p class="text color--secondary">Oferta de dispositivos médicos e insumos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/tooth.svg"
						alt="Mano sosteniendo un diente" />
				</div>
				<p class="text color--secondary">
					Oferta de material para odontología.
				</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/notes.svg" alt="Notas" />
				</div>
				<p class="text color--secondary">
					Oferta de papelería y material de oficina.
				</p>
			</li>
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
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/geometry.svg"
						alt="Ícono de figuras de geométricas" />
				</div>
				<p class="text color--secondary text--justify">Soporte y diseño del programa de aseguramiento metrológico.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/adn.svg"
						alt="Ícono de un tarro con una figura de ADN." />
				</div>
				<p class="text color--secondary text--justify">Soporte técnico para la calibración de equipos biomédicos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/adn2.svg" alt="Ícono de ADN" />
				</div>
				<p class="text color--secondary text--justify">Soporte técnico para mantenimiento correctivo y preventivo de equipos biomédicos.</p>
			</li>
		</ul>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
