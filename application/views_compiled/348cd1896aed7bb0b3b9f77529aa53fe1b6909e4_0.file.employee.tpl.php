<?php
/* Smarty version 3.1.39, created on 2021-09-24 18:58:03
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\shared\employee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e039bab6b76_63536837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348cd1896aed7bb0b3b9f77529aa53fe1b6909e4' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\shared\\employee.tpl',
      1 => 1632502683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e039bab6b76_63536837 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="employee">
	<div class="employee_wrapper">
		<h3 class="employee_badge">Emplead@ del Mes</h3>
		<picture class="employee_picture">
			<source media="(min-width:1200px)" srcset="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/employee_web.png">
			<img class="w-70p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/employee.png"
				alt="Foto frontal de Laura Fernanda Medina Dotor" />
		</picture>
		<p class="employee_name">Laura Fernanda Medina Dotor</p>
		<p class="employee_desc">
			Colaboradora dinámica, activa y eficiente, se destaca por su compromiso con la institución y el cumplimiento
			de sus funciones. Lleva a cabo sus actividades con orden y método.
			<br>
			<br>
			<strong>Gracias por formar parte de la familia COHORIENTE</strong>
		</p>
	</div>
</section><?php }
}
