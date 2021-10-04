<?php
/* Smarty version 3.1.39, created on 2021-10-01 00:49:49
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\invest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61563f0d4c19b3_99567818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251109dd491c29d2dca31403bd37929e6836c167' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\invest.tpl',
      1 => 1633042188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61563f0d4c19b3_99567818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156597223061563f0d4bf0f1_25867224', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_156597223061563f0d4bf0f1_25867224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_156597223061563f0d4bf0f1_25867224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section>
		<header class="inv_header hdr_bg bg-xl-none h-xl-fill">
			<div class="flex-center">
				<div class="wrap_icon me-2 me-xl-3 flex-center bg-light bg-xl-primary">
					<img class="icon_item d-xl-none" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/investment_blue.svg"
						alt="Planta con símbolo de dolar" />
					<img class="icon_item d-none d-xl-block" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/investment.svg"
						alt="Planta con símbolo de dolar" />
				</div>
				<h3 class="fs-2d5 text-light text-xl-primary fs-xl-7">
					Inversión
				</h3>
			</div>
		</header>
		<div class="d-xl-flex wrap-xl pt-xl-0">
			<div class="px-2d5 py-2 w-xl-100p">
				<p class="fs-1d4 text-justify mb-1d5 fs-xl-2d5 p-xl-0 mb-xl-2">
					La inversión para convertirte en uno de nuestros socios consta de tres partes:
				</p>
				<ul class="mb-1d5">
					<li class="d-flex align-items-center text-justify">
						<img class="w-d8 me-d4 me-d8" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/dot_blue.webp" alt="Punto Azul" />
						<p class="fs-1d4 fs-xl-2d5 text-xl-start">
							Aportes sociales (Único pago)
						</p>
					</li>
					<li class="d-flex align-items-center text-justify">
						<img class="w-d8 me-d4 me-d8" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/dot_blue.webp" alt="Punto Azul" />
						<p class="fs-1d4 fs-xl-2d5 text-xl-start">
							Cuota de admisión (Único pago)
						</p>
					</li>
					<li class="d-flex align-items-center text-justify">
						<img class="w-d8 me-d4 me-d8" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/dot_blue.webp" alt="Punto Azul" />
						<p class="fs-1d4 fs-xl-2d5 text-xl-start">
							Cuota de sostenimiento ( pago anual si no se realizan compras a COHORIENTE)
						</p>
					</li>
				</ul>
				<p class="fs-1d2 text-justify fs-xl-1d5">
					La cuota de sostenimiento será pagada anualmente únicamente hasta lograr el equilibrio económico o
					al
					demostrar perdidas en balances al final de ejercicio; de la misma manera se acuerda que durante el
					tiempo
					que deba ser efectiva esta cuota estarán exentas del pago aquellas entidades que adquiera a través
					de la
					cooperativa mínimo el 50 % del valor asignado para compras en su entidad.
				</p>
			</div>
			<div class="d-flex justify-content-end mb-2">
				<p class="rds_left fs-1d4 text-light h-fit bg-primary pd-2d5 w-90p fs-xl-2d5">
					Los aportes sociales y cuota de sostenimiento serán estimados de acuerdo al nivel de complejidad de
					cada
					E.S.E.
				</p>
			</div>
		</div>
		<div class="invest_img bg-gray-100">
			<div class="wrap flex-column py-2 flex-xl-row flex-xl-wrap justify-content-center gap-xl-3">
				<div class="bs_img">
					<img class="w-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/invest_1.png"
						alt="Información sobre afiliación E.S.E Nivel 1" />
				</div>
				<div class="bs_img">
					<img class="w-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/invest_2.png"
						alt="Información sobre afiliación E.S.E Nivel 1 Saneamiento fiscal" />
				</div>
				<div class="bs_img">
					<img class="w-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/invest_3.png"
						alt="Información sobre afiliación E.S.E Nivel 2" />
				</div>
				<div class="bs_img">
					<img class="w-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/invest_4.png"
						alt="Información sobre afiliación E.S.E Nivel 2 Saneamiento fiscal" />
				</div>
				<div class="bs_img">
					<img class="w-100p" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/invest/invest_5.png"
						alt="Información sobre afiliación E.S.E Nivel 3" />
				</div>
			</div>
		</div>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
