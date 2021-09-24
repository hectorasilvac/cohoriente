<section class="contact">
	<div class="contact_container container">
		<div class="find_us">
			<header class="find_us_header wrap_row_center">
				<h4 class="find_us_subtitle subtitle">Encuéntranos</h4>
			</header>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/icons/location_new.svg" alt="Ícono de Ubicación" />
				<p class="find_us_text text_small">
                    Calle 33 #31-143 local 08 Riviera Plaza
                    <br>
                    <strong>Bucaramanga / Santander</strong>
                </p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/icons/call_new.svg" alt="Ícono de Teléfono" />
				<p class="find_us_text text_small">(57) 315 378 5627</p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/icons/email_new.svg" alt="Ícono de Correo Electrónico" />
				<p class="find_us_text text_small">contacto@cohoriente.co</p>
			</div>
		</div>
		<form class="contact_us wrap_column">
			<h4 class="contact_us_subtitle text_large">Escríbenos</h4>
			<div class="contact_us_row wrap_row">
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="fullname">Nombre completo</label>
					<input class="contact_us_input input" type="text" id="fullname"
						placeholder="Ingresa tu nombre completo" />
				</p>
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="phone">Teléfono</label>
					<input class="contact_us_input input" type="tel" id="phone" placeholder="Teléfono" />
				</p>
			</div>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="phone">Correo electrónico</label>
				<input class="contact_us_input input" type="email" id="email"
					placeholder="Ingresa tu correo electrónico" />
			</p>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="phone">Mensaje</label>
				<textarea class="contact_us_input input" id="message" placeholder="Ingresa tu mensaje"></textarea>
			</p>
			<button class="contact_us_submit button" type="submit">Contactar</button>
		</form>
	</div>
	<!-- Dialog -->
	<dialog id="contact_dialog" class="dialog wd-80p">
		<div class="dialog_wrapper wrapper wrap_quaternary">
			<p class="contact_close_dialog dialog_close">
				<i class="fas fa-times-circle fa-2x color--secondary430"></i>
			</p>
			<div class="dialog_icon">
				<i class="fas fa-paper-plane fa-5x color--light"></i>
			</div>
			<h3 class="subtitle_small color--primary my-2">
				Enviar Mensaje
			</h3>
			<hr class="wd-100p" />
			<p class="subtitle_small text--center text--normal color--secondary mt-2">
				Gracias por tu mensaje, en breve responderemos tu inquietud.
			</p>
		</div>
	</dialog>
</section>
<script src="{$RESOURCES}js/contact.js"></script>
