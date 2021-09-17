<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:26:35
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143541b9e5fb6_50491882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d8996f6066d5ebddb6d8e35ee1406891e89fda' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\home.tpl',
      1 => 1631802395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/order.tpl' => 1,
    'file:../shared/employee.tpl' => 1,
    'file:../shared/team.tpl' => 1,
    'file:../shared/partner_gallery.tpl' => 1,
    'file:../shared/supplier.tpl' => 1,
    'file:../shared/map.tpl' => 1,
    'file:../shared/contact.tpl' => 1,
  ),
),false)) {
function content_6143541b9e5fb6_50491882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7699980166143541b9dfff7_22705807', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_7699980166143541b9dfff7_22705807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7699980166143541b9dfff7_22705807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="carousel">
		<div class="wrapper wrap_secondary">
			<img class="wd-80p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/main_banner_bg.png" alt="Ícono de Vara de Esculapio">
		</div>
	</section>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="location">
		<div class="wrapper wrap_quaternary">
			<header class="wrapper wrap_subtitle">
				<h3 class="subtitle color--primary">Nuestra presencia</h3>
			</header>
			<p class="text text--center">Nos encontramos ubicados en varios departamentos del oriente Colombiano tales
				como: Arauca, César, Norte de
				Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
				Bucaramanga, Santander.</p>
			<img class="location_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/world.png"
				alt="Imagen de planeta destacando el territorio de Colombia" />
		</div>
	</section>
	<section class="services">
		<div class="wrapper wrap_quaternary">
			<header class="wrapper wrap_subtitle">
				<h3 class="subtitle color--primary">Nuestros Servicios</h3>
			</header>
			<p class="text text--center">En COHORIENTE tenemos una amplia gama de servicios pensados en la
				satisfacción de todos nuestros clientes y afiliados.</p>
		</div>
		<ul class="list mb-2">
			<li class="item item_primary">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/health_icon.png" alt="Ícono de Vara de Esculapio">
				<div class="ml-1">
					<h4 class="text mb-d4">Oferta de Abastecimiento</h4>
					<p class="text_small">Contamos con un amplio portafolio de productos
						farmacéuticos de laboratorio
						EPPS, tecnología
						biomédica</p>
					<p class="services_link">
						<a class="link link_primary mr-d4" href="oferta-de-abastecimiento">Ver Más
						</a>
						<i class="fas fa-angle-double-right fa-2x color--primary"></i>
					</p>
	
				</div>
			</li>
			<li class="item item_primary">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/study_icon.png" alt="Ícono de un computador">
				<div class="ml-1">
					<h4 class="text mb-d4">Formación y Crecimiento</h4>
					<p class="text_small">Contamos con un amplio portafolio de formación para
						capacitación y
						entretenimiento</p>
						<p class="services_link">
							<a class="link link_primary mr-d4" href="formacion">Ver Más
							</a>
							<i class="fas fa-angle-double-right fa-2x color--primary"></i>
						</p>
				</div>
			</li>
			<li class="item item_primary">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/molecule_icon.png" alt="Ícono de átomos">
				<div class="ml-1">
					<h4 class="text mb-d4">Acompañamiento en Tecnología Biomédica</h4>
					<p class="text_small">Contamos con un amplio portafolio de soporte técnico
						para
						soluciones en equipos médicos</p>
						<p class="services_link">
							<a class="link link_primary mr-d4" href="biomedica">Ver Más
							</a>
							<i class="fas fa-angle-double-right fa-2x color--primary"></i>
						</p>
				</div>
			</li>
		</ul>
		<footer class="wrapper wrap_quaternary pd-t-0">
			<a class="btn btn--primary wd-100p" href="servicios">Ver todos</a>
		</footer>
	</section>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/employee.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/team.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/partner_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/supplier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>
<?php
}
}
/* {/block "body"} */
}
