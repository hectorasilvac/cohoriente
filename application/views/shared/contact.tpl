<section class="contact">
	<div class="wrap flex-column justify-content-between flex-xl-row py-xl-6">
		<div class="find_us">
			<header class="find_us_header wrap_row_center">
				<h4 class="find_us_subtitle subtitle">Encuéntranos</h4>
			</header>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/location_new.svg" alt="Ícono de Ubicación" />
				<p class="find_us_text text_small">
					Kilometro 4-700 Via Acceso El Corcel<br>
					Vereda Río Frío, Anillo Vial <br>
					Parque Industrial Zimura / Bodega 8
                </p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/call_new.svg" alt="Ícono de Teléfono" />
				<p class="find_us_text text_small">(607) 618 5096</p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/email_new.svg" alt="Ícono de Correo Electrónico" />
				<p class="find_us_text text_small">contacto@cohoriente.co</p>
			</div>
		</div>
		<form id="contact_us" class="bg-light p-1d5 rounded-d4 wrap_column w-xl-50p p-xl-6 h-fit">
			<h4 class="contact_us_subtitle text_large">Escríbenos</h4>
			<div class="contact_us_row wrap_row">
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="fullname">Nombre completo</label>
					<input class="contact_us_input input" type="text" id="fullname"
						placeholder="Ingresa tu nombre completo" name="fullname"/>
				</p>
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="phone">Teléfono</label>
					<input class="contact_us_input input" type="tel" id="phone" placeholder="Teléfono"
					name="phone" />
				</p>
			</div>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="email">Correo electrónico</label>
				<input class="contact_us_input input" type="email" id="email"
					placeholder="Ingresa tu correo electrónico" name="email" />
			</p>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="message">Mensaje</label>
				<textarea class="contact_us_input input" id="message" placeholder="Ingresa tu mensaje" name="message"></textarea>
			</p>
			<button class="form_submit btn btn-primary fs-xl-3 mt-xl-3 p-xl-1d6" type="submit">Contactar</button>
		</form>
	</div>
	<!-- Dialog: Action Confirmation -->
	<dialog id="form_dialog" class="dialog w-80p w-xl-20p">
		<div class="dialog_conf dialog_wrap dialog_primary d-flex flex-column">
			<p class="dialog_close">
				<i class="fas fa-times-circle fa-2x text-gray-600"></i>
			</p>
			<div class="wrap_icon bg-primary p-5 flex-center mt-5">
				<i class="fas fa-paper-plane fa-5x text-light"></i>
			</div>
			<h3 class="fs-1d8 text-primary my-2">
				Enviar Mensaje
			</h3>
			<hr class="wd-100p m-0" />
			<p class="fs-1d8 text-secondary text-center p-2">
				¿Estas seguro que deseas enviar este mensaje? </p>
		</div>
		<div class="dialog_btns d-flex flex-nowrap">
			<a class="dialog_confirm btn btn-primary">Si</a>
			<a class="dialog_cancel btn btn-primary">No</a>
		</div>
		<!-- Dialog: Success message -->
		<div class="dialog_msg dialog_wrap d-none-force">
			<p class="dialog_close">
				<i class="fas fa-times-circle fa-2x text-gray-600"></i>
			</p>
			<p class="dialog_response fs-1d8 text-center text-secondary px-2d5 py-6d5 d-none">
			</p>
			<p class="dialog_loading text-center p-2d5">
				<img class="w-15" src="{$RESOURCES}img/compressed/loading.webp" alt="Cargando.." />
				<span class="fs-1d8 d-block text-center text-secondary">Por favor espere un momento...</span>
			</p>
		</div>
	</dialog>
</section>
<script src="{$RESOURCES}js/contact.js"></script>
