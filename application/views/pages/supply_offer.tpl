{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="d-flex wrap-xl pb-xl-0 h-xl-fit">
		<div class="me-xl-6">
			<header class="wrap flex-column p-xl-0 mb-xl-9 h-fit-force">
				<h3 class="fs-2d5 text-primary text-center mb-3 fs-xl-7 text-xl-start w-xl-27 mb-xl-7 mt-xl-2">Nuestros Servicios
				</h3>
				<div class="flex-center flex-row flex-nowrap">
					<div class="d-flex wrap_icon bg-success flex-center me-1 me-xl-2d7">
						<img class="icon_item" src="{$RESOURCES}img/compressed/icons/requirements.svg"
							alt="Ícono de una lista de chequeo" />
					</div>
					<div class="">
						<h4 class="fs-1d6 mb-d4 fs-xl-4">Oferta de Abastecimiento</h4>
						<p class="fs-1d4 text-justify fs-xl-2d5">
							Contamos con un amplio portafolio de productos farmacéuticos, dispositivos médicos, quirúrgicos, productos de odontología, laboratorio y tecnología biomédica.
						</p>
					</div>
				</div>
			</header>
			<ul class="row list_styled list_xl_no_styled column-gap-xl-3 row-gap-xl-5">
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/radioactive.svg"
							alt="Ícono de residuos peligrosos" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Oferta de servicios para el manejo ambiental de residuos
						hospitalarios
						y peligrosos.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/medicine.svg"
							alt="Ícono de un tarro con una pastilla" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Oferta de medicamentos POS y No POS.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/funnel.svg"
							alt="Ícono de residuos peligrosos" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Convenios de acercamiento al sistema de Salud y recuperación de cartera.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/molecule.svg" alt="Moléculas" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Oferta de tecnología biomédica.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/monitor.svg" alt="Monitor" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">
						Oferta de equipos para la información y comunicación.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/health_kit.svg"
							alt="Botiquín de primeros auxilios" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">Oferta de dispositivos médicos e insumos.</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/tooth.svg"
							alt="Mano sosteniendo un diente" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">
						Oferta de material para odontología.
					</p>
				</li>
				<li class="item p-xl-0 mb-xl-0 basis-xl-31">
					<div class="wrap_icon bg-primary flex-center me-2 wrap_icon_xl me-xl-1d4">
						<img class="icon_item icon_xl" src="{$RESOURCES}img/compressed/icons/notes.svg" alt="Notas" />
					</div>
					<p class="fs-1d4 text-justify fs-xl-1d7">
						Oferta de papelería y material de oficina.
					</p>
				</li>
			</ul>
			<p class="wrap flex-center h-fit-force px-xl-0 justify-content-xl-start py-xl-4">
				<a class="btn btn-primary wd-80p w-xl-26 fs-xl-2d5" href="/inicio#servicios">
					<i class="fas fa-angle-left me-d5"></i>
					Volver
				</a>
			</p>
		</div>
		<p class="d-none d-xl-flex">
			<img class="w-40" src="{$RESOURCES}img/compressed/supply_offer_banner.webp" alt="Estante con medicamentos" />
		</p>
	</section>
</main>
{/block}

