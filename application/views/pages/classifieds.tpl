{extends file="../templates/head.tpl"}
{block name="body"}
<main class="classifieds">
	<section class="offers">
		<header class="offers_header wrapper">
			<h2 class="offers_subtitle subtitle">Te Estamos Buscando</h2>
			<p class="offers_text text_small">¿Crees tener lo necesario para formar parte de nuestro equipo?</p>
		</header>
		<nav class="offers_tabs">
			<ul class="offers_menu">
				<li class="offers_jobs tab_active">
					<a class="offers_tab text" href="#">Talento</a>
				</li>
				<li class="offers_supplies">
					<a class="offers_tab text" href="#">Insumos</a>
				</li>
			</ul>
		</nav>
		<!-- Vacancies -->
		<section class="vacancies wrapper">
			<article class="ad">
				<div class="ad_wrapper">
					<header class="ad_header">
						<h3 class="ad_name subtitle_small">Auxiliar Logística</h3>
						<p class="ad_place text">Hospital Local de la Cuesta</p>
					</header>
					<p class="ad_desc text_small">Requerimos para nuestro equipo de trabajo AUXILIAR LOGÍSTICO. Debe ser
						bachiller. Con experiencia de 6 meses en adelante en el cargo.</p>
				</div>
				<footer class="ad_footer">
					<a class="ad_link text_regular" href="#">Aplicar</a>
				</footer>
			</article>
			<article class="ad">
				<div class="ad_wrapper">
					<header class="ad_header">
						<h3 class="ad_name subtitle_small">Auxiliar Logística</h3>
						<p class="ad_place text">Hospital Local de la Cuesta</p>
					</header>
					<p class="ad_desc text_small">Requerimos para nuestro equipo de trabajo AUXILIAR LOGÍSTICO. Debe ser
						bachiller. Con experiencia de 6 meses en adelante en el cargo.</p>
				</div>
				<footer class="ad_footer">
					<a class="ad_link text_regular" href="#">Aplicar</a>
				</footer>
			</article>
		</section>
		<!-- Supplies -->
		<section class="supplies wrapper d-none">
			<article class="ad">
				<div class="ad_wrapper">
					<header class="ad_header">
						<h3 class="ad_name subtitle_small">Silla para oficina (200)</h3>
						<p class="ad_place text">Hospital Local de la Cuesta</p>
					</header>
					<p class="ad_desc text_small">Requerimos 200 sillas de oficina ergonómicas, mecanismo basculante,
						ruedas nylon 50 mm, Base nylon, estructura inyectada polipropileno.</p>
				</div>
				<footer class="ad_footer">
					<a class="ad_quote ad_link text_regular" href="#">Enviar cotización</a>
				</footer>
			</article>
			<article class="ad">
				<div class="ad_wrapper">
					<header class="ad_header">
						<h3 class="ad_name subtitle_small">Silla para oficina (200)</h3>
						<p class="ad_place text">Hospital Local de la Cuesta</p>
					</header>
					<p class="ad_desc text_small">Requerimos 200 sillas de oficina ergonómicas, mecanismo basculante,
						ruedas nylon 50 mm, Base nylon, estructura inyectada polipropileno.</p>
				</div>
				<footer class="ad_footer">
					<a class="ad_link text_regular" href="#">Enviar cotización</a>
				</footer>
			</article>
		</section>
		<!-- Ad Detail -->
		<section clas="offers_detail">
			<article class="ad_detail d-none">
				<header class="ad_container">
					<img class="ad_img" src="{$RESOURCES}img/partner_carousel/hospital_piedecuesta.png" alt="">
					<div>
						<h3 class="ad_name subtitle_small">Auxiliar Logística</h3>
						<p class="ad_place text">Hospital Local de la Cuesta</p>
					</div>
				</header>
				<p class="ad_desc text_small">
					Tipo de contrato: Termino fijo<br>
					Horario: 8:00 am - 7:00 pm<br>
					Salario: A convenir
					<br>
					<br>
					Requerimos para nuestro equipo de trabajo AUXILIAR LOGÍSTICO. Debe ser bachiller. Con experiencia de
					6
					meses en adelante en el cargo. Disponibilidad para laborar turnos rotativos de día y de noche.
					Contar con MOTO.
				</p>
				<footer class="ad_bottom">
					<a class="ad_send ad_button btn" href="#">Enviar</a>
					<a class="ad_back ad_button btn" href="#">Volver</a>
				</footer>
			</article>
			<!-- Dialog: Vacancy Confirmation -->
			<dialog id="confirmation_dialog" class="ad_confirmation">
				<header class="confirmation_header">
					<p class="ad_close">
						<i class="fas fa-times-circle fa-2x color--secondary430"></i>
					</p>
				</header>
				<article class="confirmation_wrapper wrapper">
					<div class="confirmation_body">
						<p class="confirmation_icon">
							<i class="fas fa-user-tie fa-5x color--light"></i>
						</p>
						<h3 class="confirmation_name subtitle_small">
							Oferta laboral
						</h3>
						<hr class="wd-100p" />
						<p class="confirmation_desc subtitle_small">¿Estas seguro que deseas aplicar a esta oferta
							laboral?</p>
					</div>
				</article>
				<footer class="confirmation_footer wrapper">
					<a href="#" class="confirmation_confirm btn">Si</a>
					<a href="#" class="confirmation_cancel ad_close btn">No</a>
				</footer>
				<article class="confirmation_finish wrapper d-none">
					<p class="confirmation_desc subtitle_small">
						Gracias por aplicar a nuestra oferta laboral, si cumples con el perfil te estaremos contactando.
					</p>
				</article>
			</dialog>
			<!-- Dialog: Supplies Confirmation -->
			<dialog id="supplies_dialog" class="ad_confirmation">
				<header class="confirmation_header">
					<p class="ad_close">
						<i class="fas fa-times-circle fa-2x color--secondary430"></i>
					</p>
				</header>
				<article class="confirmation_wrapper wrapper">
					<div class="confirmation_body">
						<p class="confirmation_icon">
							<i class="fas fa-couch fa-5x color--light"></i>
						</p>
						<h3 class="confirmation_name subtitle_small">
							Solicitud de insumos
						</h3>
						<hr class="wd-100p" />
						<p class="confirmation_desc subtitle_small">¿Estas seguro que deseas
							aplicar a esta solicitud de insumos?</p>
					</div>
				</article>
				<footer class="confirmation_footer wrapper">
					<a href="#" class="confirmation_confirm btn">Si</a>
					<a href="#" class="confirmation_cancel ad_close btn">No</a>
				</footer>
				<article class="confirmation_finish wrapper d-none">
					<p class="confirmation_desc subtitle_small">
						Gracias por aplicar a nuestra oferta laboral, si cumples con el perfil te estaremos contactando.
					</p>
				</article>
			</dialog>
		</section>
	</section>
</main>
<script src="{$RESOURCES}js/classifieds.js"></script>
{/block}