{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	{include file="../shared/order.tpl"}
	<section class="our_services">
		<header class="wrapper wrap_subtitle wrap--container">
			<h3 class="subtitle color--primary">Nuestros Servicios</h3>
		</header>
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
	</section>
</main>
{/block}