<?php
/* Smarty version 3.1.39, created on 2021-09-09 22:33:18
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613a6f8e7e6ad4_69595252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fc3db5a279d751534d2b44c456c86396cc49f' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\header.tpl',
      1 => 1631219598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a6f8e7e6ad4_69595252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183566164613a6f8e7e57c3_11928988', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "header"} */
class Block_183566164613a6f8e7e57c3_11928988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_183566164613a6f8e7e57c3_11928988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="main_header">
	<div class="main_header_container container">
		<img class="logo" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="" />
		<div id="icon_menu">
			<i id="hamburger" class="burger fas fa-bars fa-3x"></i>
		</div>
		<nav id="nav_menu" class="nav_menu">
			<ul class="list" style="border-top: solid #F6F5FA .1rem; border-bottom: solid #F6F5FA .1rem;">
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Inicio</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Servicios</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Nosotros</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Asóciate</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Clasificados</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>
<?php
}
}
/* {/block "header"} */
}
