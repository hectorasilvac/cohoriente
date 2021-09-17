{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center">¿Quieres ser un Proveedor?</h3>
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
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa tu correo electrónico" />
            </p>
			<p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Nombre de la Entidad que Representas</label>
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa el nombre de la entidad que representas" />
            </p>
			<p class="text color--primary mb-2">
                En breve nos comunicaremos contigo.
            </p>
            <button class="supplier_submit btn btn--primary" type="submit">Enviar</button>
        </form>
        <!-- Dialog -->
        {include
            id="supplier_dialog"
            file="../shared/confirmation_dialog.tpl"
            icon="fa-truck-moving"
            title="Solicitar ser Proveedor"
            question="¿Estas seguro que deseas crear esta solicitud de ser proveedor?"
            sucess_message="Gracias por crear la solicitud para ser uno de nuestros proveedores, en breve uno de nuestros asesores te contactará."
        }
	</section>
</main>
<script src="{$RESOURCES}js/supplier_form.js"></script>

{/block}