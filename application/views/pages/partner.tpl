{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<div class="join_us_banner">
	</div>
	<section class="join_us">
		<div class="join_us_wrapper wrap_column">
			<div class="join_us_details">
			<header class="join_us_header container mt-xl-3">
				<h3 class="join_us_subtitle subtitle">Sé Nuestro Asociado</h3>
			</header>
			<ul class="join_us_list list">
				<li class="info item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="{$RESOURCES}img/compressed/icons/requirements.svg"
							alt="Ícono de una lista de chequeo" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Requisitos</h4>
						<p class="info_text text">
							Para ser uno de nuestros asociados debes cumplir con todos nuestros requisitos para que juntos
							creemos una gran alianza.
						</p>
						<p class="link_more">
							<a class="info_link link" href="{$path_requirements}">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
				<li class="item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="{$RESOURCES}img/compressed/icons/benefits.svg" alt="Saludo de manos" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Beneficios</h4>
						<p class="info_text text">
							Por ser parte de nuestro selecto grupo de asociados puedes disfrutar de nuestros beneficios.
						</p>
						<p class="link_more">
							<a class="info_link link" href="{$path_benefits}">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
				<li class="item">
					<div class="info_icon_wrapper">
						<img class="info_icon" src="{$RESOURCES}img/compressed/icons/investment.svg"
							alt="Planta con símbolo de dinero" />
					</div>
					<div>
						<h4 class="info_subtitle subtitle_small">Inversión</h4>
						<p class="info_text text">
							Conoce la inversión que debes hacer pare ser parte de nuestros afiliados y acceder a todos
							nuestros beneficios. </p>
						<p class="link_more">
							<a class="info_link link" href="{$path_invest}">Ver Más
							</a>
							<i class="info_figure fas fa-angle-double-right fa-2x"></i>
						</p>
					</div>
				</li>
			</ul>
			</div>
			<img class="catalog_banner" src="{$RESOURCES}img/compressed/partner_banner.avif" alt="Personas estrechando las manos" />
		</div>
	</section>
	<div class="affiliate bg_section">
		<a class="link_section" href="{$path_affiliation}">
			</a>
	</div>
	<section class="bylaws bg_section py-xl-3">
		<div class="bylaws_container container">
			<header>
				<h3 class="bylaws_subtitle subtitle">Conoce Nuestros Estatutos</h3>
				<p class="bylaws_text text_small">Cooperativa Regional para la Integración y el Desarrollo
					de Hospitales e Instituciones de Salud Pública del Oriente Colombiano - COHORIENTE</p>
			</header>
			<a class="bylaws_download_mobile button" href="{$path_download_bylaws}" download>Ver estatutos</a>
			<a class="bylaws_download button" href="{$path_download_bylaws}" download>Estatutos</a>
		</div>
	</section>
	<section class="associates">
		<div class="associates_wrapper wrap_column">
		<header class="associates_header container">
			<h3 class="associates_subtitle subtitle">Nuestros Asociados</h3>
		</header>
		<div class="members">
		<ul class="members_list list">
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="members_item item">
				<p class="members_picture">
					<img class="members_image" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div class="members_row">
					<h4 class="members_text text">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="members_location text_small">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
		</ul>
	</div>
	</div>
	</section>
</main>
{/block}