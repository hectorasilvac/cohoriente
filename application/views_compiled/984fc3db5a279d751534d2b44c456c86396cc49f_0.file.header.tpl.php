<?php
/* Smarty version 3.1.39, created on 2021-09-28 22:32:43
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61537beb64ef44_64223565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fc3db5a279d751534d2b44c456c86396cc49f' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\header.tpl',
      1 => 1632861162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61537beb64ef44_64223565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31997437361537beb64a682_32368142', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "header"} */
class Block_31997437361537beb64a682_32368142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_31997437361537beb64a682_32368142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="header">
	<div class="wrap py-2 px-2d5 justify-content-between align-items-center">
		<a href="/">
			<img class="w-15 w-xl-22d6" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="Cohoriente" />
		</a>
		<div class="hamburger d-xl-none">
			<i class="hamburger_icon fas fa-bars fa-3x"></i>
		</div>
		<nav class="menu">
			<ul class="menu_list">
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'home') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/">
							<?php }?>
							<i class="me-1 d-xl-none fas fa-home"></i>
							Inicio
						</a>
				</li>
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'services') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/servicios">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/servicios">
							<?php }?>
							<i class="me-1 d-xl-none fas fa-hand-holding-heart"></i>
							Servicios
						</a>
				</li>
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'about_us') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/nosotros">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/nosotros">
							<?php }?>
						<i class="me-1 d-xl-none fas fa-city"></i>
						Nosotros
					</a>
				</li>
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'partner') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/asociarte">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/asociarte">
							<?php }?>
						<i class="me-1 d-xl-none fas fa-users"></i>
						Asociarte
					</a>
				</li>
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'classifieds') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/clasificados">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/clasificados">
							<?php }?>
						<i class="me-1 d-xl-none fas fa-thumbtack"></i>
						Clasificados
					</a>
				</li>
				<li class="menu_item p-1">
					<?php if (constant('SELECTED_NAV') == 'contact') {?>
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/contacto">
						<?php } else { ?>
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/contacto">
							<?php }?>
						<i class="me-1 d-xl-none fas fa-phone-alt"></i>
						Contacto
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="overlay"></div>
<?php
}
}
/* {/block "header"} */
}
