{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="wrap flex-column p-xl-0">
		<div class="d-xl-flex">
			<div class="w-xl-100p me-xl-5">
				<header class="justify-content-center mb-4">
					<h3 class="fs-2d5 text-primary text-center fs-xl-6 w-xl-48 text-xl-start text-xl-secondary mt-xl-3">
						¿Quieres ser un Proveedor?
					</h3>
				</header>
				<form id="order_form" class="form" action="contacto/enviar" method="POST">
					<div class="d-flex flex-column flex-xl-row column-gap-xl-2">
					<p class="d-flex flex-column mb-2 w-xl-fill">
						<label class="form-label form-label-xl" for="fullname">
							Nombre completo
						</label>
						<input class="form-control form-control-xl" type="text" id="fullname" name="fullname"
							placeholder="Ingresa tu nombre completo" />
					</p>
					<p class="d-flex flex-column mb-2 w-xl-fill">
						<label class="form-label form-label-xl" for="phone">Teléfono</label>
						<input class="form-control form-control-xl" type="tel" id="phone" name="phone" placeholder="Teléfono" />
					</p>
				</div>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="email">Correo electrónico</label>
						<input class="form-control form-control-xl" type="email" id="email" name="email"
							placeholder="Ingresa tu correo electrónico" />
					</p>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="company">Nombre de la Entidad que
							Representas</label>
						<input class="form-control form-control-xl" type="text" id="company" name="company"
							placeholder="Ingresa el nombre de la entidad que representas" />
					</p>
				</form>
				<p class="fs-1d4 text-primary mb-2 fs-xl-2 mt-xl-3">
					En breve nos comunicaremos contigo.
				</p>
				<footer class="flex-center mt-2 justify-content-xl-start w-xl-26">
					<button class="order_submit btn btn-primary w-70p fs-xl-2d5" type="submit">Enviar</button>
				</footer>
			</div>
			<div class="d-none d-xl-block h-50p">
				<img class="wd-100p" src="{$RESOURCES}img/supplier_form_banner.png" alt="Enfermera escribiendo en una hoja" />
			</div>
		</div>
	</section>
	<script src="{$RESOURCES}js/request_form.js"></script>
</main>
<script src="{$RESOURCES}js/supplier_form.js"></script>
{/block}
<!-- {extends file="../templates/head.tpl"}
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

{/block} -->