{extends file="../templates/head.tpl"}
{block name="body"}
<main class="bg--secondary300 ht-fill">
	{include file="../shared/order.tpl"}
	<section class="wrapper wrap_quaternary">
		<!-- Mission -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="{$RESOURCES}img/icons/mission_icon.svg"
						alt="Ícono de una diana con un dardo">
					<h3 class="text_large color--primary ml-d5">Misión</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En COHORIENTE ofrecemos, disponibilidad en la dispensación y la comercialización de medicamentos y
				dispositivos médicos a las entidades de salud. Promoviendo soluciones logísticas oportunas,
				disponibilidad operativa y espacios de almacenamiento adecuados. Cumpliendo con los requerimientos
				legales, ambientales y de seguridad y salud en el trabajo, con el fin de asegurar los productos y
				servicios de alta calidad a nuestros clientes.
			</p>
		</details>
		<!-- Vision -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="{$RESOURCES}img/icons/vision_icon.svg"
						alt="Ícono de una montaña con una bandera en la cima">
					<h3 class="text_large color--primary ml-d5">Visión</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En el 2020 COHORIENTE será reconocida como una cooperativa líder en investigación, tecnología y
				oportunidad en la oferta de sus servicios, garantizando así el desarrollo social, la integración y
				avance del sector salud de sus asociados y en general del oriente Colombiano.
			</p>
		</details>
		<!-- Quality Policy -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="{$RESOURCES}img/icons/quality_policy_icon.svg"
						alt="Ícono de una medalla">
					<h3 class="text_large color--primary ml-d5">Política de calidad</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				En COHORIENTE estamos comprometidos con la compra, almacenamiento, comercialización y dispensación de
				medicamentos y dispositivos médicos. Con el fin de asegurar la satisfacción de nuestros clientes, bajo
				el principio de oportunidad en las entregas, disponibilidad y buen estado de los productos. Contando con
				un equipo humano competente y el compromiso del mejoramiento continuo en cada uno de los procesos.
			</p>
		</details>
		<!-- General Purpose -->
		<details class="card mb-1d5">
			<summary class="d-flex justify-content-between">
				<div class="d-flex">
					<img class="wd-2d3 ht-2d1" src="{$RESOURCES}img/icons/general_purpose_icon.svg"
						alt="Ícono de un bombillo">
					<h3 class="text_large color--primary ml-d5">Objetivo General</h3>
				</div>
				<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430"></i>
			</summary>
			<p class="text text--justify mt-2">
				Fortalecimiento de la red pública de salud en la Región del Oriente Colombiano, mediante la integración,
				desarrollo y promoción de alianzas entre sus asociados a través de estrategias Cooperativas que permitan
				el avance social y la oferta de bienes y servicios de forma oportuna, garantizándose así la Promoción de
				Salud en la Comunidad.
			</p>
		</details>
	</section>
	{include file="../shared/employee.tpl"}
	{include file="../shared/team.tpl"}
	<section class="bg--light">
		<div class="wrapper wrap_quaternary pd-b-0">
			<header class="wrapper wrap_subtitle">
				<h3 class="subtitle color--primary">Galería</h3>
			</header>

			<ul id="gallery" class="row pure-js-lightbox-container">
				<li class="column w-50p mb-d8">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img clasS="wd-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="column w-50p mb-d8">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img clasS="wd-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="d-flex">
					<a class="mr-d8" href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="wd-100p ht-11d5" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="wd-100p ht-11d5" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
			</ul>

			<p class="read_more_wrapper wrapper wrap_primary wrap--end">
				<a class="link link_primary mr-d4" href="galeria">Ver Más
				</a>
				<i class="fas fa-angle-double-right fa-2x color--primary"></i>
			</p>
		</div>

		<script type="text/javascript">
			// Make sure include the lightbox library BEFORE you use it
			var test = new pureJSLightBox({
				navigation: true,
				overlay: true,
				swipe: false
			});
		</script>
	</section>
	{include file="../shared/partner_gallery.tpl"}
</main>
<script src="{$RESOURCES}js/about_us.js"></script>
{/block}