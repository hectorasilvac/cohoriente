<?php
/* Smarty version 3.1.39, created on 2021-09-16 17:09:00
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435e0cf0f8f8_54591102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1df206510f60c3344ff7002d4b70df1d3292f9b' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\gallery.tpl',
      1 => 1631804940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435e0cf0f8f8_54591102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90969586861435e0cf0c4b9_40997719', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_90969586861435e0cf0c4b9_40997719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_90969586861435e0cf0c4b9_40997719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section class="gallery">
		<div class="wrapper wrap_secondary wrap--between">
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
			<p class="gallery_img_wrapper">
				<img class="wd-100p ht-11d7" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png" alt="" />
			</p>
		</div>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
