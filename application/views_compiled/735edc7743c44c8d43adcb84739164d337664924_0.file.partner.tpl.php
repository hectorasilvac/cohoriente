<?php
/* Smarty version 3.1.39, created on 2021-09-16 00:29:05
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\shared\partner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614273b102bc64_80588975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735edc7743c44c8d43adcb84739164d337664924' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\shared\\partner.tpl',
      1 => 1631744944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614273b102bc64_80588975 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="partner bg--light">
    <div class="wrapper wrap_quaternary">
        <header class="wrapper wrap_subtitle">
            <h3 class="subtitle color--primary">Nuestros Aliados</h3>
        </header>
        <div class="partner_carousel">
            <div class="partner_carousel_cell">
                <img class="wd-18" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_manuela_beltran.png"
                    alt="Logo del Hospital Manuela Beltran " />
            </div>
            <div class="partner_carousel_cell">
                <img class="wd-18" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_san_camilo.svg"
                    alt="Logo del Hospital Psiquiátrico San Camilo" />
            </div>
            <div class="partner_carousel_cell">
                <img class="wd-18" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_garcia_rovira.png"
                    alt="Logo del Hospital Garcia Rovira" />
            </div>
            <div class="partner_carousel_cell">
                <img class="wd-18" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_piedecuesta.png"
                    alt="Logo del Hospital Local de Piedecuesta" />
            </div>
        </div>
    </div>
</section>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/partner.js"><?php echo '</script'; ?>
>
<?php }
}
