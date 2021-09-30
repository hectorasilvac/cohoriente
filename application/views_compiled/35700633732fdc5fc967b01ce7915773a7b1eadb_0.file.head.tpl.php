<?php
/* Smarty version 3.1.39, created on 2021-09-30 17:25:55
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155d703cd7260_50592756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35700633732fdc5fc967b01ce7915773a7b1eadb' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\head.tpl',
      1 => 1633013092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155d703cd7260_50592756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15547028556155d703cc8ab2_98582188', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './footer.tpl');
}
/* {block 'head'} */
class Block_15547028556155d703cc8ab2_98582188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15547028556155d703cc8ab2_98582188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/favicon.ico">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/flickity-docs/flickity.css" rel="stylesheet" media="screen">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/pure-js/css/pure-js-lightbox.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/dropzone/dist/basic.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/styles.css" rel="stylesheet">
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="https://kit.fontawesome.com/c094c4f2ad.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/flickity-docs/flickity.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/pure-js/js/pure-js-lightbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/dropzone/dist/dropzone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/jquery-validation/dist/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/jquery-form/dist/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/main.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
