<?php
/* Smarty version 3.1.39, created on 2021-09-22 00:49:26
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\shared\partner_gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a6176b165e5_47722392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecd7dc89b661c6f9873b606a48ddd501425332b3' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\shared\\partner_gallery.tpl',
      1 => 1632264566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a6176b165e5_47722392 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="partner">
    <div class="partner_wrapper">
        <header class="partner_header">
            <h3 class="partner_subtitle">Nuestros Aliados</h3>
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
js/partner_gallery.js"><?php echo '</script'; ?>
>
<?php }
}
