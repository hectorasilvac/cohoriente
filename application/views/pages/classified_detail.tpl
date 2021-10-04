{extends file="../templates/head.tpl"}
{block name="body"}
<main class="h-fill">
	<section class="wrap flex-column flex-xl-row">
		{if isset($detail)}
		<div class="classified_img_wrap d-none d-xl-flex me-5">
			<img class="w-auto" src="{$detail['company_logo']}" alt="">
		</div>
		{/if}
		<div>
			{if isset($detail)}
			<header class="d-flex mb-3">
				<img class="classified_img d-xl-none" src="{$detail['company_logo']}" alt="">
				<div>
					<h3 class="classified_name fs-1d8 text-primary fs-xl-3d5">{$detail['name']}</h3>
					<p class="fs-1d4 fw-bold fs-xl-2d5">{$detail['company_name']}</p>
				</div>
			</header>
			<p class="fs-1d3 lh-base mb-3 mb-xl-4 fs-xl-1d5">
				<strong>Tipo de contrato:</strong> {$detail['contract']}<br>
				<strong>Horario:</strong> {$detail['schedule']}<br>
				<strong>Salario:</strong> {$detail['salary']}
			</p>
			<div class="mb-2 mb-xl-4">
				<h4 class="mb-d4 mb-xl-1 fs-xl-2d5">¿A quién Buscamos?</h4>
				<p class="fs-1d3 lh-base text-justify fs-xl-2d5">
					{$detail['requirements']}
				</p>
			</div>
			<div class="mb-2 mb-xl-4">
				<h4 class="mb-d4 mb-xl-1 fs-xl-2d5">¿Qué ofrecemos?</h4>
				<p class="fs-1d3 lh-base text-justify fs-xl-2d5">
					{$detail['benefits']}
				</p>
			</div>
			<div id="my-dropzone" class="form_drop flex-center dropzone">
				<div class="flex-center flex-column dz-message my-0">

					<img class="wd-6" src="{$RESOURCES}img/compressed/icons/pdf.webp" alt="Adjuntar PDF" />
					<span class="fs-1d2 fst-italic mt-1 fs-xl-1d8 text-xl-gray-700">Arrastrar archivo o buscar en el
						equipo</span>
				</div>
			</div>
			<p class="dropzone_error error d-none">Debes adjuntar un archivo.</p>
			<footer class="d-flex flex-column mt-1 row-gap-1 flex-xl-row justify-content-xl-start column-gap-xl-1 mt-xl-3">
				<a class="form_submit d-block mx-auto btn btn-primary w-80p w-xl-10p mx-xl-0 fs-xl-2d5" href="#">Aplicar</a>
				<a class="form_back d-block mx-auto btn btn-secondary w-80p h-fit w-xl-10p mx-xl-0 fs-xl-2d5" href="#">Volver</a>
			</footer>
			{elseif isset($empty_detail)}
			<p class="empty_classified fs-1d6 text-light rounded-d4 p-2 text-center mb-1">{$empty_detail}</p>
			{/if}
		</div>
		<!-- Dialog: Action Confirmation -->
		<dialog id="form_dialog" class="dialog w-80p w-xl-20p">
			<div class="dialog_conf dialog_wrap dialog_primary d-flex flex-column">
				<p class="dialog_close">
					<i class="fas fa-times-circle fa-2x text-gray-600"></i>
				</p>
				<div class="wrap_icon bg-primary p-5 flex-center mt-5 wrap_icon_xl">
					<i class="fas fa-user-tie fa-5x text-light"></i>
				</div>
				<h3 class="fs-1d8 text-primary my-2">
					Oferta Laboral
				</h3>
				<hr class="wd-100p m-0" />
				<p class="fs-1d8 text-secondary text-center p-2">
					¿Estas seguro que deseas aplicar a esta oferta laboral?
				</p>
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
</main>
<script src="{$RESOURCES}js/classified_detail.js"></script>
{/block}