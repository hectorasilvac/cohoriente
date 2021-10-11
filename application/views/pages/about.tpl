{extends file="../templates/head.tpl"}
{block name="body"}
<main class="bg--secondary300 h-fit-force">
	{include file="../shared/order.tpl"}
	<section class="about_wrap wrap pt-xl-0 h-fit-force">
		<div class="d-none d-xl-block me-xl-7 mt-xl-6">
			<img class="w-64 h-40" src="{$RESOURCES}img/compressed/about_banner.avif"
				alt="Droguero con medicamentos en las manos">
		</div>
		<div class="abt_card_container d-flex w-fill flex-column flex-xl-row position-xl-relative">
			<!-- Mission -->
			<details class="card mb-1d5 p-xl-0 border-0" open>
				<summary
					class="abt_first_tab abt_card_header active d-flex justify-content-between py-xl-2 justify-content-xl-center px-1">
					<div class="d-flex justify-content-between w-100p justify-content-xl-center">
						<div class="d-flex">
							<picture>
								<source media="(min-width:1200px)"
									srcset="{$RESOURCES}img/compressed/icons/mission_white.svg">
								<img class="w-2d3 h-2d1" src="{$RESOURCES}img/compressed/icons/mission_icon.svg"
									alt="Diana con una flecha" />
							</picture>
							<h3 class="text_large text-primary ml-d5 text-xl-light fs-xl-1d6">Misión</h3>
						</div>
						<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430 d-xl-none"></i>
					</div>
				</summary>
				<div class="abt_card_body text text--justify mt-2 mt-xl-0 text-xl-gray-650 px-xl-2">
					<div class="d-none d-xl-flex mt-8 mb-6">
						<img class="w-6 h-5d5" src="{$RESOURCES}img/compressed/icons/mission_icon.svg"
							alt="Diana con una flecha" />
						<h3 class="text-primary ml-1 fs-5">Misión</h3>
					</div>
					En COHORIENTE ofrecemos, disponibilidad en la dispensación y la comercialización de medicamentos y
					dispositivos médicos a las entidades de salud. Promoviendo soluciones logísticas oportunas,
					disponibilidad
					operativa y espacios de almacenamiento adecuados. Cumpliendo con los requerimientos legales,
					ambientales y
					de seguridad y salud en el trabajo, con el fin de asegurar los productos y servicios de alta calidad
					a
					nuestros clientes.
				</div>
			</details>
			<!-- Vision -->
			<details class="card mb-1d5 p-xl-0 border-0">
				<summary class="abt_card_header d-flex justify-content-between py-xl-2 justify-content-xl-center px-1">
					<div class="d-flex justify-content-between w-100p justify-content-xl-center">
						<div class="d-flex">
						<picture>
							<source media="(min-width:1200px)"
								srcset="{$RESOURCES}img/compressed/icons/vision_white.svg">
							<img class="w-2d3 h-2d1" src="{$RESOURCES}img/compressed/icons/vision_icon.svg"
								alt="Montaña con una bandera en la cima" />
						</picture>
						<h3 class="text_large text-primary ml-d5 text-xl-light fs-xl-1d6">Visión</h3>
					</div>
					<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430 d-xl-none"></i>
					</div>
				</summary>
				<div class="abt_card_body text text--justify mt-2 mt-xl-0 text-xl-gray-650 px-xl-2">
					<div class="d-none d-xl-flex mt-8 mb-6">
						<img class="w-6 h-5d5" src="{$RESOURCES}img/compressed/icons/vision_icon.svg"
							alt="Montaña con una bandera en la cima" />
						<h3 class="text-primary ml-1 fs-5">Visión</h3>
					</div>
					En el 2025 COHORIENTE será reconocida como una empresa innovadora y solvente, en la comercialización
					y
					dispensación de medicamentos y dispositivos médicos. Resaltando su ética y compromiso en la
					prestación
					de los servicios logísticos caracterizados por la disponibilidad operativa y un servicio oportuno.
				</div>
			</details>
			<!-- Quality Policy -->
			<details class="card mb-1d5 p-xl-0 border-0">
				<summary class="abt_card_header d-flex justify-content-between py-xl-2 justify-content-xl-center px-1">
					<div class="d-flex justify-content-between w-100p justify-content-xl-center">
						<div class="d-flex">
						<picture>
							<source media="(min-width:1200px)"
								srcset="{$RESOURCES}img/compressed/icons/quality_policy_white.svg">
							<img class="w-2d3 h-2d1" src="{$RESOURCES}img/compressed/icons/quality_policy_icon.svg"
								alt="Medalla" />
						</picture>
						<h3 class="text_large text-primary ml-d5 text-xl-light fs-xl-1d6">Política de Calidad</h3>
					</div>
					<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430 d-xl-none"></i>
					</div>
				</summary>
				<div class="abt_card_body text text--justify mt-2 mt-xl-0 text-xl-gray-650 px-xl-2">
					<div class="d-none d-xl-flex mt-8 mb-6">
						<img class="w-6 h-5d5" src="{$RESOURCES}img/compressed/icons/quality_policy_icon.svg"
							alt="Medalla" />
						<h3 class="text-primary ml-1 fs-5">Política de Calidad</h3>
					</div>
					En COHORIENTE estamos comprometidos con la compra, almacenamiento, comercialización y dispensación
					de
					medicamentos y dispositivos médicos. Con el fin de asegurar la satisfacción de nuestros clientes,
					bajo
					el principio de oportunidad en las entregas, disponibilidad y buen estado de los productos. Contando
					con
					un equipo humano competente y el compromiso del mejoramiento continuo en cada uno de los procesos.
				</div>
			</details>
			<!-- General Purpose -->
			<details class="card mb-1d5 p-xl-0 border-0">
				<summary
					class="abt_card_header abt_last_tab d-flex justify-content-between py-xl-2  px-1">
					<div class="d-flex justify-content-between w-100p justify-content-xl-center">
						<div class="d-flex">
						<picture>
							<source media="(min-width:1200px)"
								srcset="{$RESOURCES}img/compressed/icons/general_purpose_white.svg">
							<img class="w-2d3 h-2d1" src="{$RESOURCES}img/compressed/icons/general_purpose_icon.svg"
								alt="Bombillo">
						</picture>
						<h3 class="text_large text-primary ml-d5 text-xl-light fs-xl-1d6">Objetivo General</h3>
					</div>
					<i class="about_card_icon fas fa-angle-double-down fa-2x color--secondary430 d-xl-none"></i>
					</div>
				</summary>
				<div class="abt_card_body text text--justify mt-2 mt-xl-0 text-xl-gray-650 px-xl-2">
					<div class="d-none d-xl-flex mt-8 mb-6">
						<img class="w-6 h-5d5" src="{$RESOURCES}img/compressed/icons/general_purpose_icon.svg"
							alt="Bombillo" />
						<h3 class="text-primary ml-1 fs-5">Objetivo General</h3>
					</div>
					Fortalecimiento de la red pública de salud en las regiones del Oriente y Caribe Colombiano, mediante la
					integración,
					desarrollo y promoción de alianzas entre sus asociados a través de estrategias cooperativas que
					permitan
					el avance social y la oferta de bienes y servicios de forma oportuna, garantizándose así la
					promoción de
					salud en la comunidad.
				</div>
			</details>
		</div>
	</section>
	{include file="../shared/employee.tpl"}
	{include file="../shared/team.tpl"}
	<section class="bg--light">
		<div class="wrap flex-column h-fit-force pb-0">
			<header class="wrap wrap_subtitle h-fit-force">
				<h3 class="subtitle color--primary">Galería</h3>
			</header>
			<ul id="gallery" class="abt_gallery d-flex flex-wrap pure-js-lightbox-container justify-content-center">
				<li class="basis-48">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="w-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="basis-48">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="w-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="basis-48">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="w-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
				<li class="basis-48">
					<a href="{$RESOURCES}img/gallery/example_photo.png">
						<img class="w-100p" src="{$RESOURCES}img/gallery/example_photo.png" />
					</a>
				</li>
			</ul>
			<p class="d-flex mt-2 p-0 justify-content-end">
				<a class="link link_primary mr-d4" href="#">Ver Más
				</a>
				<i class="fas fa-angle-double-right fa-2x color--primary"></i>
			</p>
		</div>
	</section>
	{include file="../shared/partner_gallery.tpl"}
</main>
{/block}
{block name="scripts"}
<script src="{$RESOURCES}js/about.js"></script>
<script type="text/javascript">
	// Make sure include the lightbox library BEFORE you use it
	var test = new pureJSLightBox({
		navigation: true,
		overlay: true,
		swipe: false
	});
</script>
{/block}