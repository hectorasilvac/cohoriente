{extends file="./layout.tpl"}
{block name="header"}
<header class="main_header">
	<div class="main_header_wrapper wrapper wrap_primary wrap--between">
		<img class="wd-15" src="{RESOURCES}img/full_logo.svg" alt="" />
		<div id="icon_menu">
			<i id="hamburger" class="burger fas fa-bars fa-3x color--primary"></i>
		</div>
		<nav id="nav_menu" class="nav_menu">
			<ul class="nav_menu_list">
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Inicio</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Servicios</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Nosotros</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Asóciate</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Clasificados</a></li>
				<li class="nav_menu_item"><a class="nav_menu_link text_secondary" href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>
{/block}