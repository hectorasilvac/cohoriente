{extends file="./header.tpl"}
{block name="footer"}
<footer class="footer">
	<div class="footer_container container h-fit-force">
		<address class="footer_details wrap_column">
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/location_new.svg" alt="Ubicación" />
					<p class="footer_text text_small">
						Kilometro 4-700 Via Acceso El Corcel<br>
						Vereda Río Frío, Anillo Vial <br>
						Parque Industrial Zimura / Bodega 8
					</p>
				</div>
			</div>
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/call_new.svg" alt="Teléfono"/>
					<p class="footer_text text_small">(607) 618 5096</p>
				</div>
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/email_new.svg" alt="Correo electrónico"/>
					<p class="footer_text text_small">contacto@cohoriente.co</p>
				</div>
			</div>
		</address>
		<div class="copyright wrap_row_between">
			<div class="copyright_row">
				<i class="copyright_icon fab fa-linkedin fa-4x"></i>
				<i class="copyright_icon fab fa-facebook-square fa-4x"></i>
			</div>
			<div>
				<img class="copyright_logo" src="{$RESOURCES}img/compressed/logo_basic_white.svg" alt="Logo de Cohoriente" />
			</div>
		</div>
	</div>
</footer>
{/block}