{extends file="../templates/head.tpl"}
{block name="body"}
<main class="h-fill bg-gray-100 bg-xl-light">
	<section>
		{include file="../shared/classifieds_header.tpl" selected_tab=$selected_tab path_classifieds=$path_classifieds path_supplies=$path_supplies}
		<div class="wrap-xl">
			<nav class="d-none d-xl-flex flex-column me-12">
				{include file="../shared/classifieds_nav.tpl" selected_tab=$selected_tab path_classifieds=$path_classifieds path_supplies=$path_supplies}
			</nav>
			<div class="d-flex flex-column p-2d5 row-gap-2 p-xl-0">
			{if isset($jobs)}
			{foreach from=$jobs item=job}
			<article class="card_container shadow-xl-none">
				<div class="card_content bg-xl-none">
					<header class="mb-1d4">
						<h3 class="fs-1d8 text-primary mb-d4 text-justify">
							<a class="text-decoration-none color-inherit fs-xl-3d5" href="{$path_classifieds}/{$job['id']}">{$job['name']}</a>
						</h3>
						<p class="fs-1d4 fw-bold fs-xl-2d5 text-gray-700">{$job['company_name']}</p>
					</header>
					<p class="fs-1d3 text-justify text-gray-650 fs-xl-2d5">
						{$job['brief']}
					</p>
				</div>
				<footer class="card_footer bg-primary d-xl-none">
					<a class="fs-1d6 text-light text-decoration-none d-block" href="{$path_classifieds}/{$job['id']}">Aplicar</a>
				</footer>
			</article>
			{/foreach}
			{elseif isset($empty_jobs)}
			<p class="empty_classified fs-1d6 text-light rounded-d4 p-2 text-center">{$empty_jobs}</p>
			{/if}
		</div>
		</div>
	</section>
</main>
{/block}