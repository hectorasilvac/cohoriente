{extends file="../templates/head.tpl"}
{block name="body"}
<main class="h-fill bg-gray-100">
	<section>
		{include file="../shared/classifieds_header.tpl" selected_tab=$selected_tab path_classifieds=$path_classifieds path_supplies=$path_supplies}
		<div class="wrap-xl h-xl-fit">
			<nav class="d-none d-xl-flex flex-column me-12 h-fit-force">
				{include file="../shared/classifieds_nav.tpl" selected_tab=$selected_tab path_classifieds=$path_classifieds path_supplies=$path_supplies}
			</nav>
		<div class="d-flex flex-column p-2d5 row-gap-2 w-xl-fill">
			<p class="empty_classified fs-1d6 text-light rounded-d4 p-2 text-center p-xl-4d3 fs-xl-2d5">
				Actualmente no hay una oferta de insumos, te invitamos a revisar más adelante
			</p>
		</div>
		</div>
	</section>
</main>
{/block}