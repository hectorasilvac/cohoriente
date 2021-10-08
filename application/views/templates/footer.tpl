{extends file="./header.tpl"}
{block name="footer"}
<footer class="footer">
	<div class="wrap justify-content-between h-fit-force">
		<address class="d-flex flex-column flex-xl-row align-items-xl-center">
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/location_new.svg" alt="Ubicación" />
					<p class="footer_text text_small">
						Parque industrial Zimura<br>
					Bodega 18 - Anillo vial KM4 + 700 MT<br>
					Vía Palenque - Floridablanca<br>
					<strong>Girón / Santander</strong>
					</p>
				</div>
			</div>
			<div class="footer_row">
				<div class="footer_info wrap_row_nowrap align-items-center">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/call_new.svg" alt="Teléfono"/>
					<p class="footer_text text_small">
						<a class="text-decoration-none" href="tel:(607) 618 5096">(607) 618 5096</a>
					</p>
				</div>
				<div class="footer_info wrap_row_nowrap align-items-center mb-0">
					<img class="footer_icon" src="{$RESOURCES}img/compressed/icons/email_new.svg" alt="Correo electrónico"/>
					<p class="footer_text text_small">contacto@cohoriente.co</p>
				</div>
			</div>
		</address>
		<div class="d-flex flex-column mt-xl-0 justify-content-between align-items-end">
			<div class="copyright_row">
				<i class="copyright_icon fab fa-linkedin fa-4x"></i>
				<i class="copyright_icon fab fa-facebook-square fa-4x"></i>
			</div>
			<div>
				<img class="w-100p mw-17" src="{$RESOURCES}img/compressed/logo_basic_white.svg" alt="Logo de Cohoriente" />
			</div>
		</div>
	</div>
</footer>
{/block}