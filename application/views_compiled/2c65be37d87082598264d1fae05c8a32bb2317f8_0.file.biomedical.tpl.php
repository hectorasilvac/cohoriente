<?php
/* Smarty version 3.1.39, created on 2021-09-24 18:53:09
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\biomedical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e027597c310_65231931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c65be37d87082598264d1fae05c8a32bb2317f8' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\biomedical.tpl',
      1 => 1632502389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e027597c310_65231931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_351378374614e0275979d67_89157967', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_351378374614e0275979d67_89157967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_351378374614e0275979d67_89157967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="d-flex wrap-xl pb-xl-0">
		<div class="me-xl-6">
			<header class="wrap flex-column p-xl-0 mb-xl-9">
				<h3 class="fs-2d5 text-primary text-center mb-3 fs-xl-7 text-xl-start w-xl-27 mb-xl-7 mt-xl-2">Nuestros Servicios
				</h3>
				<div class="flex-center flex-row flex-nowrap">
					<div class="d-flex wrap_icon bg-success flex-center me-1 me-xl-2d7">
						<img class="icon_item" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/biomedical.svg"
							alt="Moléculas" />
					</div>
					<div class="">
						<h4 class="fs-1d6 mb-d4 fs-xl-4">Acompañamiento en Tecnología Biomédica</h4>
						<p class="fs-1d4 text-justify fs-xl-2d5">
							Contamos con un portafolio de soporte técnico para soluciones en equipo médico para acompañarte en todo el proceso.
						</p>
					</div>
				</div>
			</header>
			<ul class="row list_styled list_xl_no_styled column-gap-xl-3 row-gap-xl-5">			<li class="item p-xl-0 mb-xl-0 basis-xl-31">
				<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
					<img class="icon_item icon_xl" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/geometry.svg"
						alt="Ícono de figuras de geométricas" />
				</div>
				<p class="fs-1d4 text-justify fs-xl-1d7">Soporte y diseño del programa de aseguramiento metrológico.</p>
			</li>
			<li class="item p-xl-0 mb-xl-0 basis-xl-31">
				<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
					<img class="icon_item icon_xl" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/adn.svg"
						alt="Ícono de un tarro con una figura de ADN." />
				</div>
				<p class="fs-1d4 text-justify fs-xl-1d7">Soporte técnico para la calibración de equipos biomédicos.</p>
			</li>
			<li class="item p-xl-0 mb-xl-0 basis-xl-31">
				<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
					<img class="icon_item icon_xl" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/adn2.svg" alt="Ícono de ADN" />
				</div>
				<p class="fs-1d4 text-justify fs-xl-1d7">Soporte técnico para mantenimiento correctivo y preventivo de equipos biomédicos.</p>
			</li>
		</ul>
			<p class="wrap flex-center px-xl-0 justify-content-xl-start py-xl-4">
				<a class="btn btn-primary wd-80p w-xl-26 fs-xl-2d5" href="/">
					<i class="fas fa-angle-left me-d5"></i>
					Volver
				</a>
			</p>
		</div>
		<p class="d-none d-xl-flex">
			<img class="w-40" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/biomedical_banner.png" alt="Laboratorio médico" />
		</p>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
