{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="our_services">
		<header class="d-flex wrap--center my-2">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<div class="item mb-1">
			<div class="item_icon_wrapper bg--tertiary">
				<img class="item_icon" src="{$RESOURCES}img/icons/requirements.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Oferta de Abastecimiento</h4>
				<p class="text text--justify color--secondary">
					Contamos con un amplio portafolio de productos farmacéuticos de laboratorio, EPP´S, tecnología biomédica e insumos hospitalarios.
				</p>
			</div>
		</div>
		<ul class="our_services_list list">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/radioactive.svg"
						alt="Ícono de residuos peligrosos" />
				</div>
				<p class="text color--secondary">Oferta de servicios para el manejo ambiental de residuos hospitalarios y peligrosos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/medicine.svg"
						alt="Ícono de un tarro con una pastilla" />
				</div>
				<p class="text color--secondary">Oferta de medicamentos POS y No POS.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/funnel.svg"
						alt="Ícono de residuos peligrosos" />
				</div>
				<p class="text color--secondary">Convenios de acercamiento al sistema de salud y recuperación de cartera.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/molecule.svg" alt="Moléculas" />
				</div>
				<p class="text color--secondary">Oferta de tecnología biomédica.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/monitor.svg"
						alt="Monitor" />
				</div>
				<p class="text color--secondary">
					Oferta de equipos para la información y comunicación.
				</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/health_kit.svg"
						alt="Botiquín de primeros auxilios" />
				</div>
				<p class="text color--secondary">Oferta de dispositivos médicos e insumos.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/tooth.svg"
						alt="Mano sosteniendo un diente" />
				</div>
				<p class="text color--secondary">
					Oferta de material para odontología.
				</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/notes.svg" alt="Notas" />
				</div>
				<p class="text color--secondary">
					Oferta de papelería y material de oficina.
				</p>
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