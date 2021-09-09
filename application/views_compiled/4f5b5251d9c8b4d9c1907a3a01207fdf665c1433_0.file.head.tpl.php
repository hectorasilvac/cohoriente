<?php
/* Smarty version 3.1.39, created on 2021-09-07 18:35:43
  from 'C:\Users\USUARIO.INNOVACION2\Desktop\Cohoriente\application\views\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613794df3d5505_83984767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5b5251d9c8b4d9c1907a3a01207fdf665c1433' => 
    array (
      0 => 'C:\\Users\\USUARIO.INNOVACION2\\Desktop\\Cohoriente\\application\\views\\templates\\head.tpl',
      1 => 1631032543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613794df3d5505_83984767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426013803613794df3cf1f1_71471668', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './footer.tpl');
}
/* {block 'head'} */
class Block_1426013803613794df3cf1f1_71471668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1426013803613794df3cf1f1_71471668',
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
