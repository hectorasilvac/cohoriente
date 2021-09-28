{extends file="../templates/head.tpl"}
{block name="body"}
<main class="h-fill bg-gray-100">
	<section>
		{include file="../shared/classifieds_header.tpl" selected_tab=$selected_tab}
		<div class="wrap-xl">
			<nav class="d-none d-xl-flex flex-column me-12">
				{if $selected_tab eq 'jobs'}
				<a class="tab_desk tab_desk_selected" href="/empleos">Talento</a>
				<a class="tab_desk" href="/suministros">Insumos</a>
				{else}
				<a class="tab_desk" href="/empleos">Talento</a>
				<a class="tab_desk tab_desk_selected" href="/suministros">Insumos</a>
				{/if}
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