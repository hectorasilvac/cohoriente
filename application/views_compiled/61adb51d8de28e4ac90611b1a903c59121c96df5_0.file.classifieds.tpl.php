<?php
/* Smarty version 3.1.39, created on 2021-09-15 16:31:17
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\classifieds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614203b52f9505_09460577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61adb51d8de28e4ac90611b1a903c59121c96df5' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\classifieds.tpl',
      1 => 1631716277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614203b52f9505_09460577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_582572659614203b52f75a0_01646704', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_582572659614203b52f75a0_01646704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_582572659614203b52f75a0_01646704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main class="classifieds_page">
	<section id="all_classifieds">
		<header class="classified_banner wrapper wrap_quaternary wrap--center">
			<h2 class="subtitle color--light">Te Estamos Buscando</h2>
			<p class="text_small color--light">¿Crees tener lo necesario para formar parte de nuestro equipo?</p>
		</header>
		<div class="d-flex">
			<div id="classified_jobs" class="classified_tab">
				<p class="text text--bold">Talento</p>
			</div>
			<div id="classified_supplies" class="classified_tab">
				<p class="text text--bold">Insumos</p>
			</div>
		</div>
		<div class="classified_content wrapper wrap_quaternary">
			<!-- This content is dynamic and is loaded through JS -->
		</div>
	</section>
	<section id="classified_description" class="wrapper wrap_quaternary bg--light">
			<!-- This content is dynamic and is loaded through JS -->
	</section>
</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/classifieds.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
