{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	{include file="../shared/order.tpl"}
	<section class="catalog">
		<div class="catalog_wrapper wrap_column h-fit-force">
			<div class="catalog_details">
				<header class="wrap h-fit-force justify-content-center d-xl-block p-xl-0">
					<h3 class="catalog_subtitle subtitle">Nuestros Servicios</h3>
				</header>
				<ul class="catalog_list list">
					<div class="item_row">
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/radioactive.svg"
									alt="Ícono de residuos peligrosos" />
							</div>
							<p class="item_text text">Oferta de servicios para el manejo ambiental de residuos
								hospitalarios
								y peligrosos.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/medicine.svg"
									alt="Ícono de un tarro con una pastilla" />
							</div>
							<p class="item_text text">Oferta de medicamentos POS y No POS.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/funnel.svg"
									alt="Ícono de residuos peligrosos" />
							</div>
							<p class="item_text text">Convenios de acercamiento al sistema de Salud y recuperación de cartera.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/molecule.svg" alt="Moléculas" />
							</div>
							<p class="item_text text">Oferta de tecnología biomédica.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/monitor.svg" alt="Monitor" />
							</div>
							<p class="item_text text">
								Oferta de equipos para la información y comunicación.
							</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/health_kit.svg"
									alt="Botiquín de primeros auxilios" />
							</div>
							<p class="item_text text">Oferta de dispositivos médicos e insumos.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/tooth.svg"
									alt="Mano sosteniendo un diente" />
							</div>
							<p class="item_text text">
								Oferta de material para odontología.
							</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/notes.svg" alt="Notas" />
							</div>
							<p class="item_text text">
								Oferta de papelería y material de oficina.
							</p>
						</li>
					</div>
					<div class="item_row">
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/exhibition.svg"
									alt="Persona exponiendo un tema a los espectadores" />
							</div>
							<p class="item_text text">Asesoría y acompañamiento para el desarrollo
								de
								modelos
								de atención.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/blackboard.svg" alt="Pizarra" />
							</div>
							<p class="item_text text">Programa de entrenamiento en el manejo de
								equipos
								biomédicos para el personal asistencial.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/microscope.svg"
									alt="Ícono de un microscopio" />
							</div>
							<p class="item_text text">Formación continua, acompañamiento y
								consecución
								de
								recursos para el desarrollo científico y
								tecnológico.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/nurse.svg" alt="Enfermera" />
							</div>
							<p class="item_text text">Programas de capacitación en el área de la
								salud
								para el
								personal asistencial.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/book.svg"
									alt="Ícono de un libro abierto" />
							</div>
							<p class="item_text text">
								Formación integral en competencias de la salud y prácticas de buen gobierno.
							</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/geometry.svg"
									alt="Ícono de figuras de geométricas" />
							</div>
							<p class="item_text text">Soporte y diseño del programa de
								aseguramiento
								metrológico.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/adn.svg"
									alt="Ícono de un tarro con una figura de ADN." />
							</div>
							<p class="item_text text">Soporte técnico para la calibración de
								equipos
								biomédicos.</p>
						</li>
						<li class="item">
							<div class="item_icon_wrapper">
								<img class="item_icon" src="{$RESOURCES}img/compressed/icons/adn2.svg" alt="Ícono de ADN" />
							</div>
							<p class="item_text text">Soporte técnico para mantenimiento correctivo
								y
								preventivo de equipo biomédico.</p>
						</li>
					</div>
				</ul>
			</div>
			<img class="catalog_banner" src="{$RESOURCES}img/compressed/catalog_banner.avif" alt="Estante con medicamentos" />
		</div>
	</section>
</main>
{/block}
