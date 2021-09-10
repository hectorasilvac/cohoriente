<?php
/* Smarty version 3.1.39, created on 2021-09-09 22:07:56
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613a699ccfa5e1_98063554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d8996f6066d5ebddb6d8e35ee1406891e89fda' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\home.tpl',
      1 => 1631218076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a699ccfa5e1_98063554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_651671298613a699ccf75e6_18906283', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_651671298613a699ccf75e6_18906283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_651671298613a699ccf75e6_18906283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="carousel">
	<div class="carousel_container container">
        <img class="banner_text" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/main_banner_text.png" alt="Ícono de Vara de Esculapio">
        <img class="banner_text" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/main_banner_bg.png" alt="Ícono de Vara de Esculapio">
    </div>
</section>
<section class="order">
</section>
<section class="location">
	<div class="location_container container">
		<h3 class="location_subtitle subtitle">Nuestra Presencia</h3>
		<p class="location_desc text">Nos encontramos ubicados en varios departamentos del oriente Colombiano tales
			como: Arauca, César, Norte de
			Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
			Bucaramanga, Santander.</p>
		<img class="location_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/world.png" alt="Imagen de planeta destacando el territorio de Colombia" />
	</div>
</section>
<section class="services">
	<div class="services_container container">
		<h3 class="services_subtitle subtitle">Nuestros Servicios</h3>
		<p class="services_desc text">En COHORIENTE tenemos una amplia gama de servicios pensados en la
			satisfacción de todos nuestros clientes y afiliados.</p>
		<ul class="services_list list">
			<li class="list_item">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/health_icon.png" alt="Ícono de Vara de Esculapio">
				<div class="services_card">
					<h4 class="services_heading text">Oferta de Abastecimiento</h4>
					<p class="services_detail text">Contamos con un amplio portafolio de productos
						farmacéuticos de laboratorio
						EPPS, tecnología
						biomédica</p>
					<p class="list_item_link">
						<a class="link" href="">Ver más</a>
					</p>

				</div>
			</li>
			<li class="list_item">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/study_icon.png" alt="Ícono de un computador">
				<div class="services_card">
					<h4 class="services_heading text">Formación y Crecimiento</h4>
					<p class="services_detail text">Contamos con un amplio portafolio de formación para
						capacitación y
						entretenimiento</p>
					<p class="list_item_link">
						<a class="link" href="">Ver más</a>
					</p>
				</div>
			</li>
			<li class="list_item">
				<img class="services_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/molecule_icon.png" alt="Ícono de átomos">
				<div class="services_card">
					<h4 class="services_heading text">Acompañamiento en Tecnología Biomédica</h4>
					<p class="services_detail text">Contamos con un amplio portafolio de soporte técnico
						para
						soluciones en equipos médicos</p>
					<p class="list_item_link">
						<a class="link" href="">Ver más</a>
					</p>
				</div>
			</li>
		</ul>
        <a class="primary_button button" href="#">Ver todos</a>
	</div>
</section>
<section class="employee">
	<div class="employee_container container">
			<h3 class="employee_badge">Emplead@ del Mes</h3>
			<p class="employee_name subtitle">Cristopher Solano</p>
		<p clasS="employee_desc text">Somos producto de lo que hacemos constantemente, la excelencia no es un acto, es producto de los hábitos.</p>
		<img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/employee_img.png" alt="Foto frontal de Cristopher Solano" />
	</div>
</section>
<section class="team">
	<div class="team_container container">
		<h3 class="team_subtitle subtitle">Nuestro Equipo</h3>
		<p class="team_text text">Contamos con:</p>
		<img class="team_image" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/our_team.png" alt="Mapa de Servicios ofrecidos por Cohoriente" />
	</div>
</section>
<section class="partner">
	<div class="partner_container container">
		<h3 class="partner_subtitle subtitle">Nuestro Respaldo</h3>
		<div class="partner_carousel">
			<div class="partner_carousel_cell">
				<img class="partner_carousel_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_manuela_beltran.png" alt="Logo del Hospital Manuela Beltran " />
			</div>
			<div class="partner_carousel_cell">
				<img class="partner_carousel_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_san_camilo.svg" alt="Logo del Hospital Psiquiátrico San Camilo"/>
			</div>
			<div class="partner_carousel_cell">
				<img class="partner_carousel_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_garcia_rovira.png" alt="Logo del Hospital Garcia Rovira" />
			</div>
			<div class="partner_carousel_cell">
				<img class="partner_carousel_img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_piedecuesta.png" alt="Logo del Hospital Local de Piedecuesta" />
			</div>
		</div>
	</div>
</section>
<section class="map">
	<p><iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.5078642176596!2d-73.11347199707903!3d7.126778786633991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e681567310b020f%3A0x130ed28f17ba26f0!2sRivera%20Plaza!5e0!3m2!1ses-419!2sco!4v1631031744708!5m2!1ses-419!2sco"
			width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
</section>
<section class="contact">
	<div class="contact_container container">
		<div class="find_us">
			<h4 class="find_us_subtitle subtitle">Encuéntranos</h4>
			<div class="info_location_item wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/location-outline.svg" alt="Ícono de Ubicación" />
				<p class="info_location_text text">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
					Anillo Vial, Parque Industrial Zimura - Bodega
					8, Girón, Santander.</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/call-outline.svg" alt="Ícono de Teléfono" />
				<p class="info_location_text text">(57) 315 378 5627</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/icons/mail-outline.svg" alt="Ícono de Correo Electrónico" />
				<p class="info_location_text text">contacto@cohoriente.co</p>
			</div>
		</div>
		<form class="contact_form wrapper">
			<h4 class="form_subtitle subtitle">Escríbenos</h4>
			<p class="form_input wrapper">
				<label class="form_label" for="fullname">Nombre completo</label>
				<input class="input" type="text" id="fullname" placeholder="Ingresa tu nombre completo" />
			</p>
			<p class="form_input wrapper">
				<label class="form_label" for="phone">Teléfono</label>
				<input class="input" type="tel" id="phone" placeholder="Teléfono" />
			</p>
			<p class="form_input wrapper">
				<label class="form_label" for="phone">Correo electrónico</label>
				<input class="input" type="email" id="email" placeholder="Ingresa tu correo electrónico" />
			</p>
			<p class="form_input wrapper">
				<label class="form_label" for="phone">Mensaje</label>
				<textarea class="input" id="message" placeholder="Ingresa tu mensaje"></textarea>
			</p>
			<button class="primary_button button" type="submit">Contactar</button>
		</form>
	</div>
</section>
<?php
}
}
/* {/block "body"} */
}
