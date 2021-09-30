<?php
/* Smarty version 3.1.39, created on 2021-09-29 16:53:47
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\classifieds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61547dfb7ef851_29970431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61adb51d8de28e4ac90611b1a903c59121c96df5' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\classifieds.tpl',
      1 => 1632927226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../shared/classifieds_header.tpl' => 1,
    'file:../shared/classifieds_nav.tpl' => 1,
  ),
),false)) {
function content_61547dfb7ef851_29970431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184352139961547dfb7e6453_52711434', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_184352139961547dfb7e6453_52711434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_184352139961547dfb7e6453_52711434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main class="h-fill bg-gray-100 bg-xl-light">
	<section>
		<?php $_smarty_tpl->_subTemplateRender("file:../shared/classifieds_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selected_tab'=>$_smarty_tpl->tpl_vars['selected_tab']->value), 0, false);
?>
		<div class="wrap-xl">
			<nav class="d-none d-xl-flex flex-column me-12">
				<?php $_smarty_tpl->_subTemplateRender("file:../shared/classifieds_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selected_tab'=>$_smarty_tpl->tpl_vars['selected_tab']->value), 0, false);
?>
			</nav>
			<div class="d-flex flex-column p-2d5 row-gap-2 p-xl-0">
			<?php if ((isset($_smarty_tpl->tpl_vars['jobs']->value))) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
$_smarty_tpl->tpl_vars['job']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->do_else = false;
?>
			<article class="card_container shadow-xl-none">
				<div class="card_content bg-xl-none">
					<header class="mb-1d4">
						<h3 class="fs-1d8 text-primary mb-d4 text-justify">
							<a class="text-decoration-none color-inherit fs-xl-3d5" href="/clasificados/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a>
						</h3>
						<p class="fs-1d4 fw-bold fs-xl-2d5 text-gray-700"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</p>
					</header>
					<p class="fs-1d3 text-justify text-gray-650 fs-xl-2d5">
						<?php echo $_smarty_tpl->tpl_vars['job']->value['brief'];?>

					</p>
				</div>
				<footer class="card_footer bg-primary d-xl-none">
					<a class="fs-1d6 text-light text-decoration-none d-block" href="/clasificados/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">Aplicar</a>
				</footer>
			</article>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } elseif ((isset($_smarty_tpl->tpl_vars['empty_jobs']->value))) {?>
			<p class="empty_classified fs-1d6 text-light rounded-d4 p-2 text-center"><?php echo $_smarty_tpl->tpl_vars['empty_jobs']->value;?>
</p>
			<?php }?>
		</div>
		</div>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
