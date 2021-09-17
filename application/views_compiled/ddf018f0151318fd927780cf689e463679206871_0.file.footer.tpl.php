<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:19:51
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435287626d69_33719252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf018f0151318fd927780cf689e463679206871' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\footer.tpl',
      1 => 1631801991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435287626d69_33719252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458359161435287623d77_23870591', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./header.tpl");
}
/* {block "footer"} */
class Block_1458359161435287623d77_23870591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1458359161435287623d77_23870591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer class="main_footer">
	<div class="wrapper wrap_quaternary">
		<div class="wrapper wrap_quaternary pd-0">
			<div class="footer_info wrapper wrap_primary">
				<img class="wd-1d7 mr-1d3" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/location_new.svg" />
				<p class="text_small color--light">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
					Anillo Vial, Parque Industrial Zimura - Bodega
					8, Girón, Santander.</p>
			</div>
			<div class="footer_info wrapper wrap_primary">
				<img class="wd-2 mr-1d3" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/call_new.svg" />
				<p class="text_small color--light">(57) 315 378 5627</p>
			</div>
			<div class="footer_info wrapper wrap_primary mb-0">
				<img class="wd-2 mr-1d3" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/email_new.svg" />
				<p class="text_small color--light">contacto@cohoriente.co</p>
			</div>
		</div>
		<div class="copyright wrapper wrap--between">
			<div>
				<i class="fab fa-linkedin fa-4x color--light mr-3"></i>
				<i class="fab fa-facebook-square fa-4x color--light"></i>
			</div>
			<div>
				<img class="wd-17" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/full_logo_white.svg" alt="" />
			</div>
		</div>
	</div>
</footer>
<?php
}
}
/* {/block "footer"} */
}
