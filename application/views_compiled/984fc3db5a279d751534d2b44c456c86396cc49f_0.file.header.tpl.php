<?php
/* Smarty version 3.1.39, created on 2021-09-21 16:46:58
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6149f062c3c5f1_22534028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fc3db5a279d751534d2b44c456c86396cc49f' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\header.tpl',
      1 => 1632235618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6149f062c3c5f1_22534028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727964506149f062c38e25_84852581', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "header"} */
class Block_727964506149f062c38e25_84852581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_727964506149f062c38e25_84852581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="header">
	<div class="header_wrapper wrapper">
		<a href="/">
			<img class="header_logo" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="Cohoriente" />
		</a>
		<div class="hamburger">
			<i class="hamburger_icon fas fa-bars fa-3x"></i>
		</div>
		<nav class="menu">
			<ul class="menu_list">
				<li class="menu_item">
					<a class="menu_link link" href="/">
						<i class="menu_icon fas fa-home"></i>
						Inicio
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="servicios">
						<i class="menu_icon fas fa-hand-holding-heart"></i>
						Servicios
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="nosotros">
						<i class="menu_icon fas fa-city"></i>
						Nosotros
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="asociarte">
						<i class="menu_icon fas fa-users"></i>
						Asociarte
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="clasificados">
						<i class="menu_icon fas fa-thumbtack"></i>
						Clasificados
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="contacto">
						<i class="menu_icon fas fa-phone-alt"></i>
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
