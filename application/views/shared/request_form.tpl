<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-60p">{$title|default:'Título'}</h3>
		</header>
		<div class="wrapper wrap_quaternary">
			<form id="order_form" class="form" action="contacto/enviar" method="POST">
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text-secondary" for="fullname">Nombre completo</label>
					<input class="input input_primary" type="text" id="fullname" name="fullname"
						placeholder="Ingresa tu nombre completo" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="phone">Teléfono</label>
					<input class="input input_primary" type="tel" id="phone" name="phone" placeholder="Teléfono" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="email">Correo electrónico</label>
					<input class="input input_primary" type="email" id="email" name="email"
						placeholder="Ingresa tu correo electrónico" />
				</p>
				<p class="form_entry wrapper wrap_quaternary">
					<label class="form_label text text--secondary" for="company">Nombre de la Entidad que
						Representas</label>
					<input class="input input_primary" type="text" id="company" name="company"
						placeholder="Ingresa el nombre de la entidad que representas" />
				</p>
			</form>
            <p class="text color--primary mb-2">
                Adjunta el documento de solicitud para enviarte una cotización
            </p>
			<div id="my-dropzone" class="form_drop d-flex wrap--center dropzone">
				<div class="d-flex wrap_quaternary wrap--center dz-message my-0">

					<img class="wd-6" src="{$RESOURCES}img/icons/pdf.png" alt="" />
					<span class="text_small text--italic mt-1">Arrastrar archivo o buscar en el equipo</span>
				</div>
			</div>
			<p class="dropzone_error error d-none">Debes adjuntar un archivo.</p>
			<button class="order_submit btn btn--primary mt-2" type="submit">Enviar</button>
		</div>
		<!-- Dialog: Action Confirmation -->
		<dialog id="order_dialog" class="dialog wd-80p">
			<div class="dialog_wrapper dialog--primary wrapper wrap_quaternary">
				<p class="dialog_close">
					<i class="fas fa-times-circle fa-2x color--secondary430"></i>
				</p>
				<div class="dialog_icon">
					<i class="fas {$icon|default:'fa-question'} fa-5x color--light"></i>
				</div>
				<h3 class="subtitle_small color--primary my-2">
					{$dialog_title|default:'Título'}
				</h3>
				<hr class="wd-100p" />
				<p class="subtitle_small text--center text--normal color--secondary mt-2">
					{$dialog_question|default:'Pregunta'}
				</p>
			</div>
			<div class="wrapper wrap_primary pd-0">
				<a class="dialog_confirm btn btn--primary">Si</a>
				<a class="dialog_cancel btn btn--primary">No</a>
			</div>
			<!-- Dialog: Success message -->
			<div class="dialog_wrapper wrapper d-none">
				<p class="dialog_close">
					<i class="fas fa-times-circle fa-2x color--secondary430"></i>
				</p>
				<p class="dialog_response subtitle_small text--normal text--center color--secondary mt-2">
				</p>
				<p class="dialog_loading text--center">
					<img class="wd-15" src="{$RESOURCES}img/loading.gif" alt="Cargando.." />
					<span class="d-block text_regular color--secondary">Por favor espere un momento...</span>
				</p>
			</div>
		</dialog>
	</section>
<script src="{$RESOURCES}js/request_form.js"></script>