{extends file="../templates/head.tpl"}
{block name="body"}
<main class="classifieds_page">
	<section id="all_classifieds">
		<header class="classified_banner wrapper wrap_quaternary wrap--center">
			<h2 class="subtitle color--light">Te Estamos Buscando</h2>
			<p class="text_small color--light">¿Crees tener lo necesario para formar parte de nuestro equipo?</p>
		</header>
		<div class="d-flex">
			<div id="classified_jobs" class="classified_tab">
				<p class="text text--bold">Talento</p>
			</div>
			<div id="classified_supplies" class="classified_tab">
				<p class="text text--bold">Insumos</p>
			</div>
		</div>
		<div class="classified_content wrapper wrap_quaternary">
			<!-- This content is dynamic and is loaded through JS -->
		</div>
	</section>
	<section id="classified_description" class="wrapper wrap_quaternary bg--light">
			<!-- This content is dynamic and is loaded through JS -->
	</section>
</main>
<script src="{$RESOURCES}js/classifieds.js"></script>
{/block}