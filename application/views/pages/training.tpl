{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="d-flex wrap-xl pb-xl-0">
		<div class="me-xl-6">
			<header class="wrap flex-column p-xl-0 mb-xl-9">
				<h3 class="fs-2d5 text-primary text-center mb-3 fs-xl-7 text-xl-start w-xl-27 mb-xl-7 mt-xl-2">Nuestros Servicios
				</h3>
				<div class="flex-center flex-row flex-nowrap">
					<div class="d-flex wrap_icon bg-success flex-center me-1 me-xl-2d7">
						<img class="icon_item" src="{$RESOURCES}img/icons/study.svg"
							alt="Pantalla de computador" />
					</div>
					<div class="">
						<h4 class="fs-1d6 mb-d4 fs-xl-4">Formación y Crecimiento</h4>
						<p class="fs-1d4 text-justify fs-xl-2d5">
							Contamos con un amplio portafolio de Formación para capacitación y entrenamiento todos nuestros asociados.
						</p>
					</div>
				</div>
			</header>
			<ul class="row list_styled list_xl_no_styled column-gap-xl-3 row-gap-xl-5">
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/exhibition.svg"
							alt="Persona exponiendo un tema a los espectadores" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Asesoría y acompañamiento para el desarrollo de modelos de atención.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/health.svg"
							alt="Símbolo de Salud y Medicina" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Programa de entrenamiento en el manejo de equipos biomédicos para el personal asistencial.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/blackboard.svg" alt="Pizarra" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Programa de entrenamiento en el manejo de equipos biomédicos para el
						personal asistencial.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/microscope.svg" alt="Ícono de un microscopio" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Formación continua, acompañamiento y consecución de recursos para el
						desarrollo científico y
						tecnológico.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/nurse.svg" alt="Enfermera" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Programas de capacitación en el área de la salud para el personal
						asistencial.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/icons/book.svg" alt="Ícono de un libro abierto" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Formación integral en compentencias de la salud.</p>
				</li>
			</ul>
			<p class="wrap flex-center px-xl-0 justify-content-xl-start py-xl-4">
				<a class="btn btn-primary wd-80p w-xl-26 fs-xl-2d5" href="/">
					<i class="fas fa-angle-left me-d5"></i>
					Volver
				</a>
			</p>
		</div>
		<p class="d-none d-xl-flex">
			<img class="w-40" src="{$RESOURCES}img/supply_offer_banner.png" alt="Estante con medicamentos" />
		</p>
	</section>
</main>
{/block}
