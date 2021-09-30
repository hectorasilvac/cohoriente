<header class="classifieds_header p-2d5 d-flex flex-center flex-column">
    <h2 class="fs-2d5 text-light fs-xl-5">Te Estamos Buscando</h2>
    <p class="fs-1d2 text-light fs-xl-3d5 fw-xl-bold">¿Crees tener lo necesario para formar parte de nuestro equipo?</p>
</header>
<nav>
    <ul class="d-flex d-xl-none">
        {if $selected_tab eq 'jobs'}
        <li class="w-50p text-center p-1d2 selected_tab">
        {else}
        <li class="w-50p text-center p-1d2 tab">
        {/if}
            <a class="fs-1d4 text-decoration-none fw-bold color-inherit d-block" href="{$path_classifieds}">Talento</a>
        </li>
        {if $selected_tab eq 'supplies'}
        <li class="w-50p text-center p-1d2 selected_tab">
        {else}
        <li class="w-50p text-center p-1d2 tab">
        {/if}
            <a class="fs-1d4 text-decoration-none fw-bold color-inherit d-block" href="{$path_supplies}">Insumos</a>
        </li>
    </ul>
</nav>