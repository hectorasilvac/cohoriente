<?php
/* Smarty version 3.1.39, created on 2021-09-16 14:36:16
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61433a4040d2d8_60022727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fc3db5a279d751534d2b44c456c86396cc49f' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\header.tpl',
      1 => 1631795776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61433a4040d2d8_60022727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211378696361433a4040bf79_26164913', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "header"} */
class Block_211378696361433a4040bf79_26164913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_211378696361433a4040bf79_26164913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="main_header">
	<div class="main_header_wrapper wrapper wrap_primary wrap--between">
		<a href="/">
		<img class="wd-15" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="Cohoriente" />
	</a>
		<div id="icon_menu">
			<i class="hamburger fas fa-bars fa-3x color--primary"></i>
		</div>
		<nav class="nav_menu">
			<ul class="nav_menu_list">
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="/">
						<i class="fas fa-home mr-1"></i>
						Inicio
					</a>
					</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="servicios">
						<i class="fas fa-hand-holding-heart mr-1"></i>
						Servicios
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="nosotros">
						<i class="fas fa-city mr-1"></i>
						Nosotros
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="asociarte">
						<i class="fas fa-users mr-1"></i>
						Asociarte
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="clasificados">
						<i class="fas fa-thumbtack mr-1"></i>
						Clasificados
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="contacto">
						<i class="fas fa-phone-alt mr-1"></i>
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
