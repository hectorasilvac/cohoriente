{extends file="./layout.tpl"}
{block name="header"}
<header class="main_header">
	<div class="main_header_wrapper wrapper wrap_primary wrap--between">
		<a href="/">
		<img class="wd-15" src="{RESOURCES}img/full_logo.svg" alt="Cohoriente" />
	</a>
		<div id="icon_menu">
			<i class="hamburger fas fa-bars fa-3x color--primary"></i>
		</div>
		<nav class="nav_menu">
			<ul class="nav_menu_list">
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="/">
						<i class="fas fa-home mr-1"></i>
						Inicio
					</a>
					</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="servicios">
						<i class="fas fa-hand-holding-heart mr-1"></i>
						Servicios
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="nosotros">
						<i class="fas fa-city mr-1"></i>
						Nosotros
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="asociarte">
						<i class="fas fa-users mr-1"></i>
						Asociarte
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="clasificados">
						<i class="fas fa-thumbtack mr-1"></i>
						Clasificados
					</a>
				</li>
				<li class="nav_menu_item color--secondary450">
					<a class="link d-block text_regular pd-2" href="contacto">
						<i class="fas fa-phone-alt mr-1"></i>
						Contacto
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="overlay"></div>
{/block}