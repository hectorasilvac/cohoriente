<?php
/* Smarty version 3.1.39, created on 2021-09-09 22:43:49
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613a7205c68fc6_56988714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf018f0151318fd927780cf689e463679206871' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\footer.tpl',
      1 => 1631220229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a7205c68fc6_56988714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1773092210613a7205c64d20_34930327', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./header.tpl");
}
/* {block "footer"} */
class Block_1773092210613a7205c64d20_34930327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1773092210613a7205c64d20_34930327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer class="main_footer">
	<div class="main_footer_container container">
		<div class="info_location wrapper">
			<div class="info_location_item wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/location-outline.svg" />
				<p class="info_location_text text">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
					Anillo Vial, Parque Industrial Zimura - Bodega
					8, Girón, Santander.</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/call-outline.svg" />
				<p class="info_location_text text">(57) 315 378 5627</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/mail-outline.svg" />
				<p class="info_location_text text">contacto@cohoriente.co</p>
			</div>
		</div>
		<div class="copyright wrapper">
			<div>
				<i class="fab fa-linkedin fa-5x icon_media icon_light"></i>
				<i class="fab fa-facebook-square fa-5x icon_light"></i>
			</div>
			<div>
				<img class="footer_logo" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
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
