{extends file="./layout.tpl"}
{block name="header"}
<header class="main_header">
	<div class="main_header_container container">
		<img class="logo" src="{RESOURCES}img/full_logo.svg" alt="" />
		<div id="icon_menu">
			<i id="hamburger" class="burger fas fa-bars fa-3x"></i>
		</div>
		<nav id="nav_menu" class="nav_menu">
			<ul class="list" style="border-top: solid #F6F5FA .1rem; border-bottom: solid #F6F5FA .1rem;">
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Inicio</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Servicios</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Nosotros</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Asóciate</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Clasificados</a></li>
				<li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#"
						style="text-decoration: none; color: inherit">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>
{/block}