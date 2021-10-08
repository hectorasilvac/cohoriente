{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="d-flex wrap-xl pb-xl-0">
		<div class="me-xl-6">
			<header class="wrap flex-column h-fit-force p-xl-0 mb-xl-9">
				<h3 class="fs-2d5 text-primary text-center mb-3 fs-xl-7 text-xl-start w-xl-27 mb-xl-7 mt-xl-2">Nuestros
					Servicios
				</h3>
				<div class="flex-center flex-row flex-nowrap">
					<div class="d-flex wrap_icon bg-success flex-center me-1 me-xl-2d7">
						<img class="icon_item" src="{$RESOURCES}img/compressed/icons/biomedical.svg" alt="Moléculas" />
					</div>
					<div class="">
						<h4 class="fs-1d6 mb-d4 fs-xl-4">Acompañamiento en Tecnología Biomédica</h4>
						<p class="fs-1d4 text-justify fs-xl-2d5">
							Contamos con un portafolio de soporte técnico para soluciones en equipo médico y brindamos
							acompañamiento durante todo el proceso.
						</p>
					</div>
				</div>
			</header>
			<ul class="row list_styled list_xl_no_styled column-gap-xl-3 row-gap-xl-5">
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/geometry.svg"
							alt="Ícono de figuras de geométricas" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Soporte y diseño del programa de aseguramiento metrológico.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/adn.svg"
							alt="Ícono de un tarro con una figura de ADN." />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Soporte técnico para la calibración de equipos biomédicos.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/adn2.svg"
							alt="Ícono de ADN" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Soporte técnico para mantenimiento correctivo y preventivo
						de equipo biomédico.</p>
				</li>
			</ul>
			<p class="wrap flex-center px-xl-0 justify-content-xl-start py-xl-4 h-fit-force">
				<a class="btn btn-primary wd-80p w-xl-26 fs-xl-2d5" href="/inicio#servicios">
					<i class="fas fa-angle-left me-d5"></i>
					Volver
				</a>
			</p>
		</div>
		<p class="d-none d-xl-flex">
			<img class="w-40" src="{$RESOURCES}img/compressed/biomedical_banner.webp" alt="Laboratorio médico" />
		</p>
	</section>
</main>
{/block}