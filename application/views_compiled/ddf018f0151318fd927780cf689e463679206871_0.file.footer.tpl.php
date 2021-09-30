<?php
/* Smarty version 3.1.39, created on 2021-09-30 17:25:55
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155d703cf8666_56800857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf018f0151318fd927780cf689e463679206871' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\footer.tpl',
      1 => 1633008727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155d703cf8666_56800857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12258307956155d703cf6f18_68633230', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./header.tpl");
}
/* {block "footer"} */
class Block_12258307956155d703cf6f18_68633230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12258307956155d703cf6f18_68633230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer class="footer">
	<div class="footer_container container">
		<div class="footer_details wrap_column">
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/location_new.webp" alt="Ubicación" />
					<p class="footer_text text_small">
						Calle 33 #31-143 local 08 Riviera Plaza
						<br>
						<strong>Bucaramanga / Santander</strong>
					</p>
				</div>
			</div>
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/call_new.webp" alt="Teléfono"/>
					<p class="footer_text text_small">(57) 315 378 5627</p>
				</div>
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/email_new.webp" alt="Correo electrónico"/>
					<p class="footer_text text_small">contacto@cohoriente.co</p>
				</div>
			</div>
		</div>
		<div class="copyright wrap_row_between">
			<div class="copyright_row">
				<i class="copyright_icon fab fa-linkedin fa-4x"></i>
				<i class="copyright_icon fab fa-facebook-square fa-4x"></i>
			</div>
			<div>
				<img class="copyright_logo" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/full_logo_white.webp" alt="Logo de Cohoriente" />
			</div>
		</div>
	</div>
</footer>
<?php
}
}
/* {/block "footer"} */
}
