{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="carousel">
		<div class="wrapper wrap_secondary">
			<img class="wd-80p" src="{$RESOURCES}img/main_banner_bg.png" alt="Ícono de Vara de Esculapio">
		</div>
	</section>
	{include file="../shared/order.tpl"}
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
						<a class="link link_primary mr-d4" href="oferta-de-abastecimiento">Ver Más
						</a>
						<i class="fas fa-angle-double-right fa-2x color--primary"></i>
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
							<a class="link link_primary mr-d4" href="formacion">Ver Más
							</a>
							<i class="fas fa-angle-double-right fa-2x color--primary"></i>
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
							<a class="link link_primary mr-d4" href="biomedica">Ver Más
							</a>
							<i class="fas fa-angle-double-right fa-2x color--primary"></i>
						</p>
				</div>
			</li>
		</ul>
		<footer class="wrapper wrap_quaternary pd-t-0">
			<a class="btn btn--primary wd-100p" href="servicios">Ver todos</a>
		</footer>
	</section>
	{include file="../shared/employee.tpl"}
	{include file="../shared/team.tpl"}
	{include file="../shared/partner_gallery.tpl"}
	{include file="../shared/supplier.tpl"}
	{include file="../shared/map.tpl"}
	{include file="../shared/contact.tpl"}
</main>
{/block}