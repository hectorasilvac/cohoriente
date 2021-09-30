{extends file="./header.tpl"}
{block name="footer"}
<footer class="footer">
	<div class="footer_container container">
		<div class="footer_details wrap_column">
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/location_new.webp" alt="Ubicación" />
					<p class="footer_text text_small">
						Calle 33 #31-143 local 08 Riviera Plaza
						<br>
						<strong>Bucaramanga / Santander</strong>
					</p>
				</div>
			</div>
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/call_new.webp" alt="Teléfono"/>
					<p class="footer_text text_small">(57) 315 378 5627</p>
				</div>
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/email_new.webp" alt="Correo electrónico"/>
					<p class="footer_text text_small">contacto@cohoriente.co</p>
				</div>
			</div>
		</div>
		<div class="copyright wrap_row_between">
			<div class="copyright_row">
				<i class="copyright_icon fab fa-linkedin fa-4x"></i>
				<i class="copyright_icon fab fa-facebook-square fa-4x"></i>
			</div>
			<div>
				<img class="copyright_logo" src="{$RESOURCES}img/compressed/full_logo_white.webp" alt="Logo de Cohoriente" />
			</div>
		</div>
	</div>
</footer>
{/block}