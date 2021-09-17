{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-60p">¿Tienes un Pedido para Nosotros?</h3>
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
			<form action="/file-upload" class="dropzone form_drop mb-2 d-flex wrap--center" id="my-dropzone">
				<p class="d-flex wrap_quaternary wrap--center dz-message my-0">
					<img class="wd-6" src="{$RESOURCES}img/icons/pdf.png" alt="" />
					<span class="text_small text--italic mt-1">Arrastrar archivo o buscar en el equipo</span>
				</p>
			</form>
			<button class="order_submit btn btn--primary" type="submit">Enviar</button>
		</div>
		<!-- Dialog -->
		{include
		id="order_dialog"
		file="../shared/confirmation_dialog.tpl"
		icon="fa-syringe"
		title="Solicitar Pedido"
		question="¿Estas seguro que deseas crear esta solicitud de pedido?"
		sucess_message="Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará."
		}
	</section>
</main>
<script src="{$RESOURCES}js/order_form.js"></script>
{/block}