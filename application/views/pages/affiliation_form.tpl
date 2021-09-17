{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-50p">¿Quieres Ser Uno de Nosotros?</h3>
		</header>
		<form class="form wrapper wrap_quaternary">
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text-secondary" for="fullname">Nombre completo</label>
				<input class="input input_primary" type="text" id="fullname" placeholder="Ingresa tu nombre completo" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Teléfono</label>
				<input class="input input_primary" type="tel" id="phone" placeholder="Teléfono" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Correo electrónico</label>
				<input class="input input_primary" type="email" id="email"
					placeholder="Ingresa tu correo electrónico" />
			</p>
			<p class="form_entry wrapper wrap_quaternary">
				<label class="form_label text text--secondary" for="phone">Nombre de la Entidad que Representas</label>
				<input class="input input_primary" type="email" id="email"
					placeholder="Ingresa el nombre de la entidad que representas" />
			</p>
			<p class="text color--primary mb-1">Adjunta los documentos requeridos aquí.</p>
			<button class="affiliation_submit btn btn--primary" type="submit">Enviar</button>
		</form>
        <!-- Dialog -->
        {include
            id="affiliation_dialog"
            file="../shared/confirmation_dialog.tpl"
            icon="fa-user-friends"
            title="Quiero ser un Asociado"
            question="¿Estas seguro que deseas crear esta solicitud para ser asociado?"
            sucess_message="Gracias por crear la solicitud para ser asociado, en breve uno de nuestros asesores te contactará."
        }
	</section>
</main>
<script src="{$RESOURCES}js/affiliation_form.js"></script>
{/block}