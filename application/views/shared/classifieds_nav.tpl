{if isset($selected_tab) && $selected_tab eq 'jobs'}
<a class="tab_desk tab_desk_selected" href="/clasificados">Talento</a>
<a class="tab_desk" href="/clasificados/suministros">Insumos</a>
{else}
<a class="tab_desk" href="/clasificados">Talento</a>
<a class="tab_desk tab_desk_selected" href="/clasificados/suministros">Insumos</a>
{/if}