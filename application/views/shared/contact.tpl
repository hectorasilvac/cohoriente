<section class="contact">
	<div class="wrap flex-column justify-content-between flex-xl-row py-xl-6 h-fit-force">
		<div class="find_us">
			<header class="find_us_header wrap_row_center">
				<h4 class="find_us_subtitle subtitle">Contacto</h4>
			</header>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/location_new.svg"
					alt="Ícono de Ubicación" />
				<p class="find_us_text text_small">
					Parque industrial Zimura<br>
					Bodega 18 - Anillo vial KM4 + 700 MT<br>
					Vía Palenque - Floridablanca<br>
					<strong>Girón / Santander</strong>
				</p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/call_new.svg" alt="Ícono de Teléfono" />
				<p class="find_us_text text_small">
					<a class="text-decoration-none" href="tel:(607) 618 5096">(607) 618 5096</a>
				</p>
			</div>
			<div class="find_us_info wrap_row_nowrap">
				<img class="find_us_icon" src="{$RESOURCES}img/compressed/icons/email_new.svg"
					alt="Ícono de Correo Electrónico" />
				<p class="find_us_text text_small">contacto@cohoriente.co</p>
			</div>
		</div>
		<form id="contact_us" class="bg-light p-1d5 rounded-d4 wrap_column w-xl-50p p-xl-6 h-fit">
			<h4 class="contact_us_subtitle text_large">Contáctenos</h4>
			<div class="contact_us_row wrap_row">
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="fullname">Nombre completo</label>
					<input class="contact_us_input input" type="text" id="fullname"
						placeholder="Ingresa tu nombre completo" name="fullname" />
				</p>
				<p class="contact_us_entry wrap_column">
					<label class="contact_us_label text" for="phone">Teléfono</label>
					<input class="contact_us_input input" type="tel" id="phone" placeholder="Teléfono" name="phone" />
				</p>
			</div>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="email">Correo electrónico</label>
				<input class="contact_us_input input" type="email" id="email"
					placeholder="Ingresa tu correo electrónico" name="email" />
			</p>
			<p class="contact_us_entry wrap_column">
				<label class="contact_us_label text" for="message">Mensaje</label>
				<textarea class="contact_us_input input" id="message" placeholder="Ingresa tu mensaje"
					name="message"></textarea>
			</p>
			<button class="form_submit btn btn-primary fs-xl-3 mt-xl-3 p-xl-1d6" type="submit">Contactar</button>
		</form>
		<!-- Modal -->
		<div class="modal fade" id="form_dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered w-80p mx-auto">
				<div class="modal-content bg-none border-0">
					<div class="modal-header border-bottom-0 bg-light h-3">
						<p class="dialog_close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fas fa-times-circle fa-2x text-gray-600" aria-hidden="true"></i>
						</p>
					</div>
					<div class="modal-body d-flex flex-column align-items-center bg-light">
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
					<div class="modal-footer border-top-0 p-0 d-flex flex-nowrap">
						<button type="button" class="dialog_confirm btn btn btn-primary m-0">Sí</button>
						<button type="button" class="dialog_cancel btn btn-primary m-0"
							data-bs-dismiss="modal">No</button>
					</div>
					<!-- Modal: Message -->
					<div class="dialog_msg dialog_wrap d-none-force">
						<div class="border-bottom-0 bg-light h-3">
							<p class="dialog_close" data-bs-dismiss="modal" aria-label="Close">
								<i class="fas fa-times-circle fa-2x text-gray-600" aria-hidden="true"></i>
							</p>
						</div>
						<p class="dialog_response fs-1d8 text-center text-secondary px-2d5 py-6d5 d-none">
						</p>
						<p class="dialog_loading text-center p-2d5">
							<picture>
								<source srcset="{$RESOURCES}img/compressed/loading.webp" type="image/webp">
								<img class="w-15" src="{$RESOURCES}img/loading.gif" alt="Cargando.." />
							</picture>
							<span class="fs-1d8 d-block text-center text-secondary">Por favor espere un
								momento...</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="{$RESOURCES}js/contact.js"></script>
