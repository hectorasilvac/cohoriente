<?php
/* Smarty version 3.1.39, created on 2021-10-01 00:22:19
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\partner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6156389b00d7c5_28906263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e8e90cbdab67fdd77edf1aa7129395f8e28577' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\partner.tpl',
      1 => 1633040534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6156389b00d7c5_28906263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3276952486156389b00ae29_06726092', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_3276952486156389b00ae29_06726092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3276952486156389b00ae29_06726092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<div class="join_us_banner">
	</div>
	<section class="join_us">
		<div class="join_us_wrapper wrap_column">
			<div class="join_us_details">
			<header class="join_us_header container mt-xl-3">
				<h3 class="join_us_subtitle subtitle">Sé Nuestro Asociado</h3>
			</header>
			<ul class="join_us_list list">
				<li class="info item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/requirements.svg"
							alt="Ícono de una lista de chequeo" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Requisitos</h4>
						<p class="info_text text">
							Para ser uno de nuestros asociados debes cumplir con todos nuestros requisitos para que juntos
							creemos una gran alianza.
						</p>
						<p class="link_more">
							<a class="info_link link" href="<?php echo $_smarty_tpl->tpl_vars['path_requirements']->value;?>
">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
				<li class="item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/benefits.svg" alt="Saludo de manos" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Beneficios</h4>
						<p class="info_text text">
							Por ser parte de nuestro selecto grupo de asociados puedes disfrutar de nuestros beneficios.
						</p>
						<p class="link_more">
							<a class="info_link link" href="<?php echo $_smarty_tpl->tpl_vars['path_benefits']->value;?>
">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
				<li class="item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/icons/investment.svg"
							alt="Planta con símbolo de dinero" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Inversión</h4>
						<p class="info_text text">
							Conoce la inversión que debes hacer pare ser parte de nuestros afiliados y acceder a todos
							nuestros beneficios. </p>
						<p class="link_more">
							<a class="info_link link" href="<?php echo $_smarty_tpl->tpl_vars['path_invest']->value;?>
">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
			</ul>
			</div>
			<img class="catalog_banner" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/compressed/partner_banner.avif" alt="Personas estrechando las manos" />
		</div>
	</section>
	<div class="affiliate bg_section">
		<a class="link_section" href="<?php echo $_smarty_tpl->tpl_vars['path_affiliation']->value;?>
">
			</a>
	</div>
	<section class="bylaws bg_section">
		<div class="bylaws_container container">
			<header>
				<h3 class="bylaws_subtitle subtitle">Conoce Nuestros Estatutos</h3>
				<p class="bylaws_text text_small">Cooperativa Regional para la Integración y el Desarrollo
					de Hospitales e Instituciones de Salud Pública del Oriente Colombiano - COHORIENTE</p>
			</header>
			<a class="bylaws_download_mobile button" href="<?php echo $_smarty_tpl->tpl_vars['path_download_bylaws']->value;?>
" download>Ver estatutos</a>
			<a class="bylaws_download button" href="<?php echo $_smarty_tpl->tpl_vars['path_download_bylaws']->value;?>
" download>Estatutos</a>
		</div>
	</section>
	<section class="associates">
		<div class="associates_wrapper wrap_column">
		<header class="associates_header container">
			<h3 class="associates_subtitle subtitle">Nuestros Asociados</h3>
		</header>
		<div class="members">
		<ul class="members_list list">
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
		</ul>
	</div>
	</div>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
