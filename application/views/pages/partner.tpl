{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<div class="join_us_banner">
	</div>
	<section class="join_us">
		<header class="wrapper wrap_subtitle wrap--container">
			<h3 class="subtitle color--primary">Sé Nuestro Asociado</h3>
		</header>
		<ul class="list list--styled">
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/requirements.svg"
						alt="Ícono de una lista de chequeo" />
				</div>
				<div>
					<h4 class="subtitle_small mb-d4">Requisitos</h4>
					<p class="text text--justify color--secondary">
						Para ser uno de nuestros asociados debes cumplir con todos nuestros requisitos para que juntos
						creemos una gran alianza.
					</p>
					<p class="link_more">
						<a class="link link_primary mr-d4" href="requisitos">Ver Más
						</a>
						<i class="fas fa-angle-double-right fa-2x color--primary"></i>
					</p>
				</div>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/benefits.svg" alt="Saludo de manos" />
				</div>
				<div>
					<h4 class="subtitle_small mb-d4">Beneficios</h4>
					<p class="text text--justify color--secondary">
						Por ser parte de nuestro selecto grupo de asociados puedes disfrutar de nuestros beneficios.
					</p>
					<p class="link_more">
						<a class="link link_primary mr-d4" href="beneficios">Ver Más
						</a>
						<i class="fas fa-angle-double-right fa-2x color--primary"></i>
					</p>
				</div>
			</li>
			<li class="item">
				<div class="item_icon_wrapper">
					<img class="item_icon" src="{$RESOURCES}img/icons/investment.svg"
						alt="Planta con símbolo de dinero" />
				</div>
				<div>
					<h4 class="subtitle_small mb-d4">Inversión</h4>
					<p class="text text--justify color--secondary">
						Conoce la inversión que debes hacer pare ser parte de nuestros afiliados y acceder a todos
						nuestros beneficios. </p>
					<p class="link_more">
						<a class="link link_primary mr-d4" href="inversion">Ver Más
						</a>
						<i class="fas fa-angle-double-right fa-2x color--primary"></i>
					</p>
				</div>
			</li>
		</ul>
	</section>
	<div class="join_us_cta">
		<a class="join_us_cta_link" href="afiliacion">
			</a>
	</div>
	<section class="join_us_bylaws">
		<div class="wrapper wrap_quaternary">
			<header>
				<h3 class="subtitle color--light text--center mb-2">Conoce Nuestros Estatutos</h3>
				<p class="text_small color--light text--center">Cooperativa Regional para la Integración y el Desarrollo
					de Hospitales e Instituciones de Salud Pública del Oriente Colombiano - COHORIENTE</p>
			</header>
			<a class="btn btn--light mt-2" href="resources/pdf/estatutos.pdf" download="estatutos_cohoriente">Estatutos</a>
		</div>
	</section>
	<section>
		<header class="wrapper wrap_subtitle wrap--container">
			<h3 class="subtitle color--primary">Nuestros Asociados</h3>
		</header>
		<ul class="list">
			<li class="item">
				<p class="mr-2">
					<img class="wd-11 ht-7d5" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div>
					<h4 class="text text--bold">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="text_small text--justify color--secondary">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="item">
				<p class="mr-2">
					<img class="wd-11 ht-7d5" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div>
					<h4 class="text text--bold">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="text_small text--justify color--secondary">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
			<li class="item">
				<p class="mr-2">
					<img class="wd-11 ht-7d5" src="{$RESOURCES}img/gallery/example_photo.png"
					alt="Ícono de una lista de chequeo" />
				</p>
				<div>
					<h4 class="text text--bold">ESE Hospital Manuel Elkin Patarroyo</h4>
					<p class="text_small text--justify color--secondary">
						Santa Rosa, Sur de Bolívar
					</p>
				</div>
			</li>
		</ul>
	</section>
</main>
{/block}