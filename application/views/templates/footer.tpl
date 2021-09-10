{extends file="./header.tpl"}
{block name="footer"}
<footer class="main_footer">
	<div class="main_footer_container container">
		<div class="info_location wrapper">
			<div class="info_location_item wrapper">
				<img class="info_location_icon icon" src="{$RESOURCES}img/icons/location-outline.svg" />
				<p class="info_location_text text">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
					Anillo Vial, Parque Industrial Zimura - Bodega
					8, Girón, Santander.</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="{$RESOURCES}img/icons/call-outline.svg" />
				<p class="info_location_text text">(57) 315 378 5627</p>
			</div>
			<div class="info_location_center wrapper">
				<img class="info_location_icon icon" src="{$RESOURCES}img/icons/mail-outline.svg" />
				<p class="info_location_text text">contacto@cohoriente.co</p>
			</div>
		</div>
		<div class="copyright wrapper">
			<div>
				<i class="fab fa-linkedin fa-5x icon_media icon_light"></i>
				<i class="fab fa-facebook-square fa-5x icon_light"></i>
			</div>
			<div>
				<img class="footer_logo" src="{$RESOURCES}img/full_logo_white.svg" alt="" />
			</div>
		</div>
	</div>
</footer>
{/block}