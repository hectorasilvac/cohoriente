<?php
/* Smarty version 3.1.39, created on 2021-09-16 15:04:45
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\supply_offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614340ed819b61_18118701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f28817e1cdf2f2a65f0272a2877026638f97909' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\supply_offer.tpl',
      1 => 1631797485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614340ed819b61_18118701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_716977936614340ed817391_60549898', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_716977936614340ed817391_60549898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_716977936614340ed817391_60549898',
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
img/icons/requirements.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Oferta de Abastecimiento</h4>
				<p class="text text--justify color--secondary">
					Contamos con un amplio portafolio de productos farmacéuticos de laboratorio, EPP´S, tecnología biomédica e insumos hospitalarios.
				</p>
			</div>
		</div>
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
