{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="bg-primary">
		<div class="main_carousel">
			<div class="main_carousel_cell">
				<picture>
					<source media="(min-width:1200px)"
						srcset="{$RESOURCES}img/compressed/main_banner_web_4.webp">
						<img class="w-100p h-100p"  src="{$RESOURCES}img/compressed/main_banner_4.png"
					alt="Estamos en proceso de certificación ISO 9000" />
				</picture>
			</div>
			<div class="main_carousel_cell">
				<picture>
					<source media="(min-width:1200px)"
						srcset="{$RESOURCES}img/compressed/main_banner_web_5.webp">
						<img class="w-100p h-100p"  src="{$RESOURCES}img/compressed/main_banner_5.png"
					alt="Estamos en proceso de certificación ISO 9000" />
				</picture>
			</div>
		  </div>
	</section>
	{include file="../shared/order.tpl"}
	<section class="location">
		<div class="wrap flex-wrap align-items-center justify-content-between flex-xl-nowrap h-fit-force">
			<header class="location_header">
				<h3 class="location_subtitle subtitle">Nuestra Presencia</h3>
				<p class="location_desc text">
					Nos encontramos ubicados en varios departamentos de Colombia tales como: Arauca, Boyacá, César, Norte de Santander, Santa Marta, Santander y Sur de Bolívar. Con nuestra oficina principal en el parque Zimura Bodega 18 - Anillo vial KM 4 - Vía Palenque - Floridablanca - Girón / Santander.
				</p>
			</header>
			<p class="location_map">
				<img class="location_img"  src="{$RESOURCES}img/compressed/world.avif"
					alt="Imagen de planeta destacando el territorio de Colombia" />
			</p>
		</div>
	</section>
	<section id="servicios" class="services">
		<div class="wrap h-fit-force pb-xl-0">
			<div class="services_details">
				<header class="services_header">
					<h3 class="services_subtitle subtitle">Nuestros Servicios</h3>
					<p class="services_desc text">
						En COHORIENTE tenemos una amplia gama de servicios pensados en la satisfacción de todos nuestros clientes y afiliados.
					</p>
				</header>
				<ul class="featured">
					<li class="featured_item align-items-start">
						<div class="wrap_icon bg-primary flex-center me-xl-1d4 min-width-xl-12 min-height-xl-12">
							<img class="icon_item icon_xl w-xl-8 h-xl-8"  src="{$RESOURCES}img/compressed/icons/health.svg"
								alt="Símbolo de Salud y Medicina" />
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Oferta de Abastecimiento</h4>
							<p class="featured_desc">
								Contamos con un amplio portafolio de productos farmacéuticos, dispositivos médicos, quirúrgicos, productos de odontología, laboratorio y tecnología biomédica...
							</p>
							<p class="featured_cta">
								<a class="featured_link" href="{$path_supply}">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>

						</div>
					</li>
					<li class="featured_item align-items-start">
						<div class="wrap_icon bg-primary flex-center me-xl-1d4 min-width-xl-12 min-height-xl-12">
							<img class="icon_item icon_xl w-xl-8 h-xl-8"  src="{$RESOURCES}img/compressed/icons/study.svg"
								alt="Computador" />
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Formación y Crecimiento</h4>
							<p class="featured_desc">
								Contamos con un amplio portafolio de formación para capacitación y entrenamiento...
							</p>
							<p class="featured_cta">
								<a class="featured_link" href="{$path_training}">Ver Más
								</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
					<li class="featured_item align-items-start">
						<div class="wrap_icon bg-primary flex-center me-xl-1d4 min-width-xl-12 min-height-xl-12">
							<img class="icon_item icon_xl w-xl-8 h-xl-8"  src="{$RESOURCES}img/compressed/icons/molecule.svg"
								alt="Molécula" />
						</div>
						<div class="featured_wrapper">
							<h4 class="featured_subtitle">Acompañamiento en Tecnología Biomédica</h4>
							<p class="featured_desc">
								Contamos con un portafolio de soporte técnico para soluciones en equipo médico...
							</p>
							<p class="featured_cta">
								<a class="featured_link" href="{$path_biomedical}">Ver Más</a>
								<i class="featured_figure fas fa-angle-double-right fa-2x"></i>
							</p>
						</div>
					</li>
				</ul>
				<footer class="services_footer">
					<a class="btn btn-primary w-85p mx-auto fs-xl-2d5 w-xl-35p mx-xl-0" href="{$path_services}">Ver todos</a>
				</footer>
			</div>
			<div class="services_banner">
				<img class="services_image"  src="{$RESOURCES}img/compressed/research_banner.avif" />
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
{block name="scripts"}
<script src="{$RESOURCES}js/home.js"></script>
{/block}