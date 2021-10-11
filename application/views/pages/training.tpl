{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="d-flex wrap-xl pb-xl-0 h-xl-fit">
		<div class="me-xl-6">
			<header class="wrap flex-column h-fit-force p-xl-0 mb-xl-9">
				<h3 class="fs-2d5 text-primary text-center mb-3 fs-xl-7 text-xl-start w-xl-27 mb-xl-7 mt-xl-2">Nuestros Servicios
				</h3>
				<div class="flex-center flex-row flex-nowrap">
					<div class="d-flex wrap_icon bg-success flex-center me-1 me-xl-2d7">
						<img class="icon_item" src="{$RESOURCES}img/compressed/icons/study.svg"
							alt="Pantalla de computador" />
					</div>
					<div class="">
						<h4 class="fs-1d6 mb-d4 fs-xl-4">Formación y Crecimiento</h4>
						<p class="fs-1d4 text-justify fs-xl-2d5">
							Contamos con un amplio portafolio de formación para capacitación y entrenamiento de todos nuestros asociados.
						</p>
					</div>
				</div>
			</header>
			<ul class="row list_styled list_xl_no_styled column-gap-xl-3 row-gap-xl-5">
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/exhibition.svg"
							alt="Persona exponiendo un tema a los espectadores" />
					</div>
					<p class="fs-1d4 fs-xl-1d7">Asesoría y acompañamiento para el desarrollo de modelos de atención.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/blackboard.svg" alt="Pizarra" />
					</div>
					<p class="fs-1d4 fs-xl-1d7">Programa de entrenamiento en el manejo de equipos biomédicos para el
						personal asistencial.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/microscope.svg" alt="Ícono de un microscopio" />
					</div>
					<p class="fs-1d4 fs-xl-1d7">Formación continua, acompañamiento y consecución de recursos para el
						desarrollo científico y
						tecnológico.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/nurse.svg" alt="Enfermera" />
					</div>
					<p class="fs-1d4 fs-xl-1d7">Programas de capacitación en el área de la salud para el personal
						asistencial.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/book.svg" alt="Ícono de un libro abierto" />
					</div>
					<p class="fs-1d4 fs-xl-1d7">
						Formación integral en competencias de la salud y prácticas de buen gobierno.
					</p>
				</li>
			</ul>
			<p class="wrap flex-center h-fit-force px-xl-0 justify-content-xl-start py-xl-4">
				<a class="btn btn-primary wd-80p w-xl-26 fs-xl-2d5 me-xl-2" href="/inicio#servicios">
					<i class="fas fa-angle-left me-d5"></i>
					Volver
				</a>
				<a class="btn btn-outline-primary wd-80p w-xl-26 fs-xl-2d5" href="/servicios">
					Ver todos
				</a>
			</p>
		</div>
		<p class="d-none d-xl-flex">
			<img class="w-40" src="{$RESOURCES}img/compressed/training_banner.webp" alt="persona señalando a una pizarra" />
		</p>
	</section>
</main>
{/block}
