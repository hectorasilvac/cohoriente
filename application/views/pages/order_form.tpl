{extends file="../templates/head.tpl"}
{block name="body"}
<main>
		{include
		title="¿Tienes un Pedido para Nosotros?"
		file="../shared/request_form.tpl"
		icon="fa-syringe"
		dialog_title="Solicitar Pedido"
		dialog_question="¿Estas seguro que deseas crear esta solicitud de pedido?"
		}
</main>
<script src="{$RESOURCES}js/order_form.js"></script>
{/block}