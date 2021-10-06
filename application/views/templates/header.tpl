{extends file="./layout.tpl"}
{block name="header"}
<header class="header">
	<div class="wrap py-2 px-2d5 justify-content-between align-items-center h-fit-force">
		<a href="/">
			<img class="w-15 w-xl-22d6" src="{RESOURCES}img/compressed/logo_ns.svg" alt="Cohoriente" />
		</a>
		<div class="hamburger d-xl-none">
			<i class="hamburger_icon fas fa-bars fa-3x"></i>
		</div>
		<nav class="menu">
			<ul class="menu_list">
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'home'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/">
							{/if}
							<i class="me-1 d-xl-none fas fa-home"></i>
							Inicio
						</a>
				</li>
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'services'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/servicios">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/servicios">
							{/if}
							<i class="me-1 d-xl-none fas fa-hand-holding-heart"></i>
							Servicios
						</a>
				</li>
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'about_us'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/nosotros">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/nosotros">
							{/if}
						<i class="me-1 d-xl-none fas fa-city"></i>
						Nosotros
					</a>
				</li>
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'partner'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/asociarte">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/asociarte">
							{/if}
						<i class="me-1 d-xl-none fas fa-users"></i>
						Asociarte
					</a>
				</li>
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'classifieds'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/clasificados">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/clasificados">
							{/if}
						<i class="me-1 d-xl-none fas fa-thumbtack"></i>
						Clasificados
					</a>
				</li>
				<li class="menu_item p-1">
					{if constant('SELECTED_NAV') eq 'contact'}
					<a class="menu_link link d-block active fs-1d6 fs-xl-2" href="/contacto">
						{else}
						<a class="menu_link link d-block fs-1d6 fs-xl-2" href="/contacto">
							{/if}
						<i class="me-1 d-xl-none fas fa-phone-alt"></i>
						Contacto
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="overlay"></div>
{/block}