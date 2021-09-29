{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="carousel">
		<p class="carousel_wrapper">
			<img class="carousel_img" src="{$RESOURCES}img/carousel_text.png" alt="Ícono de Vara de Esculapio">
		</p>
	</section>
	{include file="../shared/order.tpl"}
	<section class="location">
		<div class="location_wrapper wrapper">
			<header class="location_header">
				<h3 class="location_subtitle subtitle">Nuestra presencia</h3>
				<p class="location_desc text">Nos encontramos ubicados en varios departamentos del oriente Colombiano
					tales
					como: Arauca, César, Norte de
					Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
					Bucaramanga, Santander.</p>
			</header>
			<p class="location_map">
				<img class="location_img" src="{$RESOURCES}img/world.png"
					alt="Imagen de planeta destacando el territorio de Colombia" />
			</p>
		</div>
	</section>
	<section class="services">
		<div class="services_wrapper wrapper">
			<div class="services_details">
				<header class="services_header">
					<h3 class="services_subtitle subtitle">Nuestros Servicios</h3>
					<p class="services_desc text">En COHORIENTE tenemos una amplia gama de servicios pensados en la
						satisfacción de todos nuestros clientes y afiliados.</p>
				</header>
				<ul class="featured">
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="{$RESOURCES}img/health_icon.png"
							alt="Ícono de Vara de Esculapio">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Oferta de Abastecimiento</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de productos
								farmacéuticos de laboratorio
								EPPS, tecnología
								biomédica</p>
							<p class="featured_cta">
								<a class="featured_link" href="/servicios/oferta-abastecimiento">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>

						</div>
					</li>
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="{$RESOURCES}img/study_icon.png" alt="Ícono de un computador">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Formación y Crecimiento</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de formación para
								capacitación y
								entretenimiento</p>
							<p class="featured_cta">
								<a class="featured_link" href="/servicios/formacion">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
					<li class="featured_item">
						<div class="featured_icon">
							<img class="featured_image" src="{$RESOURCES}img/molecule_icon.png" alt="Ícono de átomos">
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Acompañamiento en Tecnología Biomédica</h4>
							<p class="featured_desc">Contamos con un amplio portafolio de soporte técnico
								para
								soluciones en equipos médicos</p>
							<p class="featured_cta">
								<a class="featured_link" href="/servicios/tecnologia-biomedica">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
				</ul>
				<footer class="services_footer">
					<a class="services_button" href="servicios">Ver todos</a>
				</footer>
			</div>
			<div class="services_banner">
				<img class="services_image" src="{$RESOURCES}img/research_banner.png" />
			</div>
		</div>
	</section>
	{include file="../shared/employee.tpl"}
	{include file="../shared/team.tpl"}
	{include file="../shared/partner_gallery.tpl"}
	{include file="../shared/supplier.tpl"}
	{include file="../shared/map.tpl"}
	{include file="../shared/contact.tpl"}
</main>
{/block}