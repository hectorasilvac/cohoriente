<?php
/* Smarty version 3.1.39, created on 2021-09-21 21:22:49
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a31096cb204_19531713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d8996f6066d5ebddb6d8e35ee1406891e89fda' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\home.tpl',
      1 => 1632252169,
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
function content_614a31096cb204_19531713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1894944022614a31096c61b1_18227590', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_1894944022614a31096c61b1_18227590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1894944022614a31096c61b1_18227590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="carousel">
		<p class="carousel_wrapper">
			<img class="carousel_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/carousel_text.png" alt="Ícono de Vara de Esculapio">
		</p>
	</section>
	<?php $_smarty_tpl->_subTemplateRender("file:../shared/order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="location">
		<div class="location_wrapper wrapper">
			<header class="location_header">
				<h3 class="location_subtitle subtitle">Nuestra presencia</h3>
				<p class="location_desc text">Nos encontramos ubicados en varios departamentos del oriente Colombiano
					tales
					como: Arauca, César, Norte de
					Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
					Bucaramanga, Santander.</p>
			</header>
			<p class="location_map">
				<img class="location_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/world.png"
					alt="Imagen de planeta destacando el territorio de Colombia" />
			</p>
		</div>
	</section>
	<section class="services">
		<div class="services_wrapper wrapper">
			<div class="services_details">
				<header class="services_header">
					<h3 class="services_subtitle subtitle">Nuestros Servicios</h3>
					<p class="services_desc text">En COHORIENTE tenemos una amplia gama de servicios pensados en la
						satisfacción de todos nuestros clientes y afiliados.</p>
				</header>
				<ul class="featured">
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/health_icon.png"
							alt="Ícono de Vara de Esculapio">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Oferta de Abastecimiento</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de productos
								farmacéuticos de laboratorio
								EPPS, tecnología
								biomédica</p>
							<p class="featured_cta">
								<a class="featured_link" href="oferta-de-abastecimiento">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>

						</div>
					</li>
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/study_icon.png" alt="Ícono de un computador">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Formación y Crecimiento</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de formación para
								capacitación y
								entretenimiento</p>
							<p class="featured_cta">
								<a class="featured_link" href="formacion">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/molecule_icon.png" alt="Ícono de átomos">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Acompañamiento en Tecnología Biomédica</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de soporte técnico
								para
								soluciones en equipos médicos</p>
							<p class="featured_cta">
								<a class="featured_link" href="biomedica">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
				</ul>
				<footer class="services_footer">
					<a class="services_button" href="servicios">Ver todos</a>
				</footer>
			</div>
			<div class="services_banner">
				<img class="services_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/research_banner.png" />
			</div>
		</div>
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
