{extends file="../templates/head.tpl"}
{block name="body"}
<section class="carousel">
	<div class="wrapper wrap_secondary">
		<img class="wd-80p" src="{$RESOURCES}img/main_width-80p.png" alt="Ícono de Vara de Esculapio">
		<img class="wd-80p" src="{$RESOURCES}img/main_banner_bg.png" alt="Ícono de Vara de Esculapio">
	</div>
</section>
<section class="order">
</section>
<section class="location">
	<div class="wrapper wrap_quaternary">
		<header class="wrapper wrap_subtitle">
			<h3 class="subtitle color--primary">Nuestra presencia</h3>
		</header>
		<p class="text text--center">Nos encontramos ubicados en varios departamentos del oriente Colombiano tales
			como: Arauca, César, Norte de
			Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
			Bucaramanga, Santander.</p>
		<img class="location_image" src="{$RESOURCES}img/world.png"
			alt="Imagen de planeta destacando el territorio de Colombia" />
	</div>
</section>
<section class="services">
	<div class="wrapper wrap_quaternary">
		<header class="wrapper wrap_subtitle">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<p class="text text--center">En COHORIENTE tenemos una amplia gama de servicios pensados en la
			satisfacción de todos nuestros clientes y afiliados.</p>
	</div>
	<ul class="list mb-2">
		<li class="item item_primary">
			<img class="services_icon" src="{$RESOURCES}img/health_icon.png" alt="Ícono de Vara de Esculapio">
			<div class="ml-1">
				<h4 class="text mb-d4">Oferta de Abastecimiento</h4>
				<p class="text_small">Contamos con un amplio portafolio de productos
					farmacéuticos de laboratorio
					EPPS, tecnología
					biomédica</p>
				<p class="services_link">
					<a class="link link_primary" href="">Ver más</a>
				</p>

			</div>
		</li>
		<li class="item item_primary">
			<img class="services_icon" src="{$RESOURCES}img/study_icon.png" alt="Ícono de un computador">
			<div class="ml-1">
				<h4 class="text mb-d4">Formación y Crecimiento</h4>
				<p class="text_small">Contamos con un amplio portafolio de formación para
					capacitación y
					entretenimiento</p>
				<p class="services_link">
					<a class="link link_primary" href="">Ver más</a>
				</p>
			</div>
		</li>
		<li class="item item_primary">
			<img class="services_icon" src="{$RESOURCES}img/molecule_icon.png" alt="Ícono de átomos">
			<div class="ml-1">
				<h4 class="text mb-d4">Acompañamiento en Tecnología Biomédica</h4>
				<p class="text_small">Contamos con un amplio portafolio de soporte técnico
					para
					soluciones en equipos médicos</p>
				<p class="services_link">
					<a class="link link_primary" href="">Ver más</a>
				</p>
			</div>
		</li>
	</ul>
	<footer class="wrapper wrap_quaternary pd-t-0">
		<a class="btn btn--primary wd-100p" href="#">Ver todos</a>
	</footer>
</section>
<section class="employee bg--primary">
	<div class="wrapper wrap_quaternary wrap--center">
		<h3 class="employee_badge subtitle color--light">Emplead@ del Mes</h3>
		<img class="wd-60p" src="{$RESOURCES}img/employee.png" alt="Foto frontal de Cristopher Solano" />
		<p class="employee_name subtitle color--light">Cristopher Solano</p>
		<p clasS="text_regular color--light text--center">Somos producto de lo que hacemos constantemente, la excelencia
			no es un acto, es producto de los hábitos.</p>
	</div>
</section>
<section class="team">
	<div class="wrapper wrap_quaternary">
		<header class="wrapper wrap_subtitle">
			<h3 class="subtitle color--light">Nuestro Equipo</h3>
		</header>
		<p class="text_regular color--light text--center">Contamos con:</p>
		<footer>
			<img class="wd-100p mt-3" src="{$RESOURCES}img/our_team.png"
				alt="Mapa de Servicios ofrecidos por Cohoriente" />
		</footer>
	</div>
</section>
<section class="partner">
	<div class="wrapper wrap_quaternary">
		<header class="wrapper wrap_subtitle">
			<h3 class="subtitle color--primary">Nuestro Respaldo</h3>
		</header>
		<div class="partner_carousel">
			<div class="partner_carousel_cell">
				<img class="wd-18" src="{$RESOURCES}img/partner_carousel/hospital_manuela_beltran.png"
					alt="Logo del Hospital Manuela Beltran " />
			</div>
			<div class="partner_carousel_cell">
				<img class="wd-18" src="{$RESOURCES}img/partner_carousel/hospital_san_camilo.svg"
					alt="Logo del Hospital Psiquiátrico San Camilo" />
			</div>
			<div class="partner_carousel_cell">
				<img class="wd-18" src="{$RESOURCES}img/partner_carousel/hospital_garcia_rovira.png"
					alt="Logo del Hospital Garcia Rovira" />
			</div>
			<div class="partner_carousel_cell">
				<img class="wd-18" src="{$RESOURCES}img/partner_carousel/hospital_piedecuesta.png"
					alt="Logo del Hospital Local de Piedecuesta" />
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
	<div class="wrapper wrap_quaternary">
		<div class="find_us">
			<header class="wrapper wrap_subtitle">
				<h4 class="find_us_subtitle subtitle color--light">Encuéntranos</h4>
			</header>
			<div class="find_us_info wrapper wrap_primary">
				<img class="wd-2d5 mr-1d3" src="{$RESOURCES}img/icons/location-outline.svg" alt="Ícono de Ubicación" />
				<p class="text_small color--light">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
					Anillo Vial, Parque Industrial Zimura - Bodega
					8, Girón, Santander.</p>
			</div>
			<div class="find_us_info wrapper wrap_primary">
				<img class="wd-2d5 mr-1d3" src="{$RESOURCES}img/icons/call-outline.svg" alt="Ícono de Teléfono" />
				<p class="text_small color--light">(57) 315 378 5627</p>
			</div>
			<div class="find_us_info wrapper wrap_primary">
				<img class="wd-2d5 mr-1d3" src="{$RESOURCES}img/icons/mail-outline.svg"
					alt="Ícono de Correo Electrónico" />
				<p class="text_small color--light">contacto@cohoriente.co</p>
			</div>
		</div>
		<form class="contact_form wrapper wrap_quaternary">
			<h4 class="contact_subtitle subtitle">Escríbenos</h4>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text-secondary" for="fullname">Nombre completo</label>
				<input class="input input_primary" type="text" id="fullname" placeholder="Ingresa tu nombre completo" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Teléfono</label>
				<input class="input input_primary" type="tel" id="phone" placeholder="Teléfono" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Correo electrónico</label>
				<input class="input input_primary" type="email" id="email" placeholder="Ingresa tu correo electrónico" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Mensaje</label>
				<textarea class="input input_primary" id="message" placeholder="Ingresa tu mensaje"></textarea>
			</p>
			<button class="btn btn--primary" type="submit">Contactar</button>
		</form>
	</div>
</section>
{/block}