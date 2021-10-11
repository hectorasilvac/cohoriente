{extends file="../templates/head.tpl"}
{block name="body"}
<main>
	<section class="wrap flex-column py-xl-0 h-fit-force">
		<div class="d-xl-flex">
			<div class="w-xl-100p me-xl-5">
				<header class="justify-content-center mb-4">
					<h3 class="fs-2d5 text-primary text-center fs-xl-6 w-xl-48 text-xl-start text-xl-secondary mt-xl-3">
						¿Tienes un Pedido para Nosotros?
					</h3>
				</header>
				<form id="order_form" class="form" method="POST">
					<div class="d-flex flex-column flex-xl-row column-gap-xl-2">
						<p class="d-flex flex-column mb-2 w-xl-fill">
							<label class="form-label form-label-xl" for="fullname">
								Nombre completo
							</label>
							<input class="form-control form-control-xl" type="text" id="fullname" name="fullname"
								 />
						</p>
						<p class="d-flex flex-column mb-2 w-xl-fill">
							<label class="form-label form-label-xl" for="phone">Teléfono</label>
							<input class="form-control form-control-xl" type="tel" id="phone" name="phone"
								 />
						</p>
					</div>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="email">
							Correo electrónico
						</label>
						<input class="form-control form-control-xl" type="email" id="email" name="email"
							 />
					</p>
					<p class="d-flex flex-column mb-2">
						<label class="form-label form-label-xl" for="company">
							Nombre de la Entidad que Representa
						</label>
						<input class="form-control form-control-xl" type="text" id="company" name="company"
							 />
					</p>
				</form>
				<p class="fs-1d4 text-primary mb-2 fs-xl-2 mt-xl-3">
					Arrastre la cotización requerida aquí:
				</p>
				<div id="my-dropzone" class="form_drop flex-center dropzone">
					<div class="flex-center flex-column dz-message my-0">

						<img class="wd-6" src="{$RESOURCES}img/icons/excel.png" alt="Adjuntar PDF" />
						<span class="fs-1d2 fst-italic mt-1 fs-xl-1d8 text-xl-gray-700">
							Arrastrar archivo o buscar en el equipo
						</span>
					</div>
				</div>
				<p class="dropzone_error error d-none">
					Debes adjuntar un archivo.
				</p>
				<footer class="flex-center mt-2 justify-content-xl-start w-xl-26">
					<button class="form_submit btn btn-primary w-70p fs-xl-2d5 mb-xl-3" type="submit">Enviar</button>
				</footer>
			</div>
			<div class="d-none d-xl-flex">
				<img class="wd-100p" src="{$RESOURCES}img/compressed/request_order_bg.avif" alt="Enfermera" />
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="form_dialog" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered w-80p mx-auto">
				<div class="modal-content bg-none border-0">
					<div class="modal-header border-bottom-0 bg-light h-3">
						<p class="dialog_close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fas fa-times-circle fa-2x text-gray-600" aria-hidden="true"></i>
						</p>
					</div>
					<div class="modal-body d-flex flex-column align-items-center bg-light">
						<div class="wrap_icon bg-primary p-5 flex-center mt-5">
							<i class="fas fa-syringe fa-5x text-light"></i>
						</div>
						<h3 class="fs-1d8 text-primary my-2">
							Solicitar Pedido
						</h3>
						<hr class="wd-100p m-0" />
						<p class="fs-1d8 text-secondary text-center p-2">
							¿Está seguro que desea crear esta solicitud de pedido?
						</p>
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
	</section>
</main>
{/block}
{block name="scripts"}
<script type="text/javascript">
	var $path_send 																=	'{$path_send}';
</script>
<script src="{$RESOURCES}js/order_request.js"></script>
{/block}