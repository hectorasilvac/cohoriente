{extends file="./layout.tpl"}
{block name="header"}
<header class="header">
	<div class="header_wrapper wrapper">
		<a href="/">
			<img class="header_logo" src="{RESOURCES}img/full_logo.svg" alt="Cohoriente" />
		</a>
		<div class="hamburger">
			<i class="hamburger_icon fas fa-bars fa-3x"></i>
		</div>
		<nav class="menu">
			<ul class="menu_list">
				<li class="menu_item">
					<a class="menu_link link" href="/">
						<i class="menu_icon fas fa-home"></i>
						Inicio
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="servicios">
						<i class="menu_icon fas fa-hand-holding-heart"></i>
						Servicios
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="nosotros">
						<i class="menu_icon fas fa-city"></i>
						Nosotros
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="asociarte">
						<i class="menu_icon fas fa-users"></i>
						Asociarte
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="clasificados">
						<i class="menu_icon fas fa-thumbtack"></i>
						Clasificados
					</a>
				</li>
				<li class="menu_item">
					<a class="menu_link link" href="contacto">
						<i class="menu_icon fas fa-phone-alt"></i>
						Contacto
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="overlay"></div>
{/block}