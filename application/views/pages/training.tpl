{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="our_services">
		<header class="d-flex wrap--center my-2">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
		<div class="item mb-1">
			<div class="item_icon_wrapper bg--tertiary">
				<img class="item_icon" src="{$RESOURCES}img/icons/study.svg"
					alt="Ícono de una lista de chequeo" />
			</div>
			<div>
				<h4 class="text_regular mb-d4">Formación y Crecimiento</h4>
				<p class="text text--justify color--secondary">
					Contamos con un amplio portafolio de Formación para capacitación y entrenamiento todos nuestros asociados.
				</p>
			</div>
		</div>
		<ul class="our_services_list list">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/exhibition.svg"
						alt="Persona exponiendo un tema a los espectadores" />
				</div>
				<p class="text color--secondary text--justify">Asesoría y acompañamiento para el desarrollo de modelos de atención.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/blackboard.svg" alt="Pizarra" />
				</div>
				<p class="text color--secondary text--justify">Programa de entrenamiento en el manejo de equipos biomédicos para el personal asistencial.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/microscope.svg"
						alt="Ícono de un microscopio" />
				</div>
				<p class="text color--secondary text--justify">Formación continua, acompañamiento y consecución de recursos para el desarrollo científico y
					tecnológico.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/nurse.svg" alt="Enfermera" />
				</div>
				<p class="text color--secondary text--justify">Programas de capacitación en el área de la salud para el personal asistencial.</p>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/book.svg" alt="Ícono de un libro abierto" />
				</div>
				<p class="text color--secondary text--justify">Formación integral en compentencias de la salud.</p>
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