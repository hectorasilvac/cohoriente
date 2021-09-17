<?php
/* Smarty version 3.1.39, created on 2021-09-16 15:33:26
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\biomedical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614347a6838bd7_15135284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c65be37d87082598264d1fae05c8a32bb2317f8' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\biomedical.tpl',
      1 => 1631799206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614347a6838bd7_15135284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_899237210614347a68349a7_42926452', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_899237210614347a68349a7_42926452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_899237210614347a68349a7_42926452',
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
img/icons/biomedical.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Acompañamiento en Tecnología Biomédica</h4>
				<p class="text text--justify color--secondary">
					Contamos con un portafolio de soporte técnico para soluciones en equipo médico para acompañarte en todo el proceso.
				</p>
			</div>
		</div>
		<ul class="our_services_list list">
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
