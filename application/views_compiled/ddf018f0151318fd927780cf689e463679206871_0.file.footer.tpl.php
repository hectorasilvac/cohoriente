<?php
/* Smarty version 3.1.39, created on 2021-09-22 16:56:59
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b443b81b722_53490697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf018f0151318fd927780cf689e463679206871' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\footer.tpl',
      1 => 1632322619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b443b81b722_53490697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_305695638614b443b819185_80276403', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./header.tpl");
}
/* {block "footer"} */
class Block_305695638614b443b819185_80276403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_305695638614b443b819185_80276403',
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
img/icons/location_new.svg" />
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
img/icons/call_new.svg" />
					<p class="footer_text text_small">(57) 315 378 5627</p>
				</div>
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/email_new.svg" />
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
