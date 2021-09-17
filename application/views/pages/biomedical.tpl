{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="our_services">
		<header class="d-flex wrap--center my-2">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<div class="item mb-1">
			<div class="item_icon_wrapper bg--tertiary">
				<img class="item_icon" src="{$RESOURCES}img/icons/biomedical.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Acompañamiento en Tecnología Biomédica</h4>
				<p class="text text--justify color--secondary">
					Contamos con un portafolio de soporte técnico para soluciones en equipo médico para acompañarte en todo el proceso.
				</p>
			</div>
		</div>
		<ul class="our_services_list list">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/geometry.svg"
						alt="Ícono de figuras de geométricas" />
				</div>
				<p class="text color--secondary text--justify">Soporte y diseño del programa de aseguramiento metrológico.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/adn.svg"
						alt="Ícono de un tarro con una figura de ADN." />
				</div>
				<p class="text color--secondary text--justify">Soporte técnico para la calibración de equipos biomédicos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/adn2.svg" alt="Ícono de ADN" />
				</div>
				<p class="text color--secondary text--justify">Soporte técnico para mantenimiento correctivo y preventivo de equipos biomédicos.</p>
			</li>
		</ul>
		<p class="wrapper pd-t-0">
		<a class="btn btn--primary wd-100p mt-1" href="/">
			<i class="fas fa-angle-left mr-d5"></i>
			Volver
		</a>
		</p>
	</section>
</main>
{/block}