<?php
/* Smarty version 3.1.39, created on 2021-09-13 23:45:00
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613fc65c36b132_48501630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fc3db5a279d751534d2b44c456c86396cc49f' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\header.tpl',
      1 => 1631569500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613fc65c36b132_48501630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1602836458613fc65c369af7_66763947', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "header"} */
class Block_1602836458613fc65c369af7_66763947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1602836458613fc65c369af7_66763947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="main_header">
	<div class="main_header_wrapper wrapper wrap_primary wrap--between">
		<img class="wd-15" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="" />
		<div id="icon_menu">
			<i id="hamburger" class="burger fas fa-bars fa-3x color--primary"></i>
		</div>
		<nav id="nav_menu" class="nav_menu">
			<ul class="nav_menu_list">
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Inicio</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Servicios</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Nosotros</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Asóciate</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Clasificados</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>
<?php
}
}
/* {/block "header"} */
}
