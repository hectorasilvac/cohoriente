<?php
/* Smarty version 3.1.39, created on 2021-09-08 15:26:22
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138b9fe189d30_26773150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35700633732fdc5fc967b01ce7915773a7b1eadb' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\templates\\head.tpl',
      1 => 1631032543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138b9fe189d30_26773150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2243268486138b9fe184a12_18457419', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './footer.tpl');
}
/* {block 'head'} */
class Block_2243268486138b9fe184a12_18457419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2243268486138b9fe184a12_18457419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/styles.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/flickity-docs/flickity.css" rel="stylesheet" media="screen">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/c094c4f2ad.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
libs/flickity-docs/flickity.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>
    
    <?php
}
}
/* {/block 'head'} */
}