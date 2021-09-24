<?php
/* Smarty version 3.1.39, created on 2021-09-24 21:20:40
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\about_us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e25088ee799_00862837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d118d39a6ab111cda7bda9e7944f593d679767' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\about_us.tpl',
      1 => 1632511240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/order.tpl' => 1,
    'file:../shared/employee.tpl' => 1,
    'file:../shared/team.tpl' => 1,
    'file:../shared/partner_gallery.tpl' => 1,
  ),
),false)) {
function content_614e25088ee799_00862837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_264467234614e25088e6f12_22745710', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_264467234614e25088e6f12_22745710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_264467234614e25088e6f12_22745710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main class="bg--secondary300 ht-fill">
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="wrapper wrap_quaternary">
		<!-- Mission -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/mission_icon.svg"
						alt="Ícono de una diana con un dardo">
					<h3 class="text_large color--primary ml-d5">Misión</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En COHORIENTE ofrecemos, disponibilidad en la dispensación y la comercialización de medicamentos y
				dispositivos médicos a las entidades de salud. Promoviendo soluciones logísticas oportunas,
				disponibilidad operativa y espacios de almacenamiento adecuados. Cumpliendo con los requerimientos
				legales, ambientales y de seguridad y salud en el trabajo, con el fin de asegurar los productos y
				servicios de alta calidad a nuestros clientes.
			</p>
		</details>
		<!-- Vision -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/vision_icon.svg"
						alt="Ícono de una montaña con una bandera en la cima">
					<h3 class="text_large color--primary ml-d5">Visión</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En el 2020 COHORIENTE será reconocida como una cooperativa líder en investigación, tecnología y
				oportunidad en la oferta de sus servicios, garantizando así el desarrollo social, la integración y
				avance del sector salud de sus asociados y en general del oriente Colombiano.
			</p>
		</details>
		<!-- Quality Policy -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/quality_policy_icon.svg"
						alt="Ícono de una medalla">
					<h3 class="text_large color--primary ml-d5">Política de calidad</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En COHORIENTE estamos comprometidos con la compra, almacenamiento, comercialización y dispensación de
				medicamentos y dispositivos médicos. Con el fin de asegurar la satisfacción de nuestros clientes, bajo
				el principio de oportunidad en las entregas, disponibilidad y buen estado de los productos. Contando con
				un equipo humano competente y el compromiso del mejoramiento continuo en cada uno de los procesos.
			</p>
		</details>
		<!-- General Purpose -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/general_purpose_icon.svg"
						alt="Ícono de un bombillo">
					<h3 class="text_large color--primary ml-d5">Objetivo General</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				Fortalecimiento de la red pública de salud en la Región del Oriente Colombiano, mediante la integración,
				desarrollo y promoción de alianzas entre sus asociados a través de estrategias Cooperativas que permitan
				el avance social y la oferta de bienes y servicios de forma oportuna, garantizándose así la Promoción de
				Salud en la Comunidad.
			</p>
		</details>
	</section>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/employee.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/team.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="bg--light">
		<div class="wrapper wrap_quaternary pd-b-0">
			<header class="wrapper wrap_subtitle">
				<h3 class="subtitle color--primary">Galería</h3>
			</header>

			<ul id="gallery" class="row pure-js-lightbox-container">
				<li class="column w-50p mb-d8">
					<a href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png">
						<img clasS="wd-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="column w-50p mb-d8">
					<a href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png">
						<img clasS="wd-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="d-flex">
					<a class="mr-d8" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png">
						<img class="wd-100p ht-11d5" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" />
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png">
						<img class="wd-100p ht-11d5" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" />
					</a>
				</li>
			</ul>

			<p class="read_more_wrapper wrapper wrap_primary wrap--end">
				<a class="link link_primary mr-d4" href="galeria">Ver Más
				</a>
				<i class="fas fa-angle-double-right fa-2x color--primary"></i>
			</p>
		</div>

		<?php echo '<script'; ?>
 type="text/javascript">
			// Make sure include the lightbox library BEFORE you use it
			var test = new pureJSLightBox({
				navigation: true,
				overlay: true,
				swipe: false
			});
		<?php echo '</script'; ?>
>
	</section>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/partner_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/about_us.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
