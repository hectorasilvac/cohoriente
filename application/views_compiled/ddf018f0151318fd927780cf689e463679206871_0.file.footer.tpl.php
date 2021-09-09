<?php
/* Smarty version 3.1.39, created on 2021-09-08 15:26:22
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138b9fe195424_96975322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf018f0151318fd927780cf689e463679206871' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\footer.tpl',
      1 => 1631045207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138b9fe195424_96975322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2217178386138b9fe193ff6_90647281', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "footer"} */
class Block_2217178386138b9fe193ff6_90647281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2217178386138b9fe193ff6_90647281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="main-footer primary-bg">
        <div class="container container--primary">
            <div class="wrapper mb-2">
                <div class="wrapper wrapper--primary mb-1">
                    <img class="icon icon--light" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/location-outline.svg" />
                    <p class="text text--light ml-d5">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
                        Anillo Vial, Parque Industrial Zimura - Bodega
                        8, Girón, Santander.</p>
                </div>
                <div>
                    <div class="wrapper wrapper--center mb-1">
                        <img class="icon icon--light" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/call-outline.svg" />
                        <p class="text text--light ml-d5">(57) 315 378 5627</p>
                    </div>
                    <div class="wrapper wrapper--center">
                        <img class="icon icon--light" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/mail-outline.svg" />
                        <p class="text text--light ml-d5">contacto@cohoriente.co</p>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper--secondary">
                <div>
                    <i class="fab fa-linkedin fa-5x icon--light mr-1"></i>
                    <i class="fab fa-facebook-square fa-5x icon--light"></i>
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
