<?php
/* Smarty version 3.1.39, created on 2021-09-15 22:37:18
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\pages\affiliation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6142597ee83495_26359096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004bb71eeaf6b0eac9ef6fbe65c6fb78cf954983' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\pages\\affiliation.tpl',
      1 => 1631738238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6142597ee83495_26359096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16938222196142597ee82728_39421117', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_16938222196142597ee82728_39421117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16938222196142597ee82728_39421117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
	<section>
		<header class="d-flex wrap--center mt-2">
			<h3 class="subtitle color--primary text--center wd-50p">¿Quieres Ser Uno de Nosotros?</h3>
		</header>
        <form class="form wrapper wrap_quaternary">
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text-secondary" for="fullname">Nombre completo</label>
                <input class="input input_primary" type="text" id="fullname" placeholder="Ingresa tu nombre completo" />
            </p>
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Teléfono</label>
                <input class="input input_primary" type="tel" id="phone" placeholder="Teléfono" />
            </p>
            <p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Correo electrónico</label>
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa tu correo electrónico" />
            </p>
			<p class="form_entry wrapper wrap_quaternary">
                <label class="form_label text text--secondary" for="phone">Nombre de la Entidad que Representas</label>
                <input class="input input_primary" type="email" id="email" placeholder="Ingresa el nombre de la entidad que representas" />
            </p>
			<p class="text color--primary mb-1">Adjunta los documentos requeridos aquí.</p>
            <button class="btn btn--primary" type="submit">Enviar</button>
        </form>
	</section>
</main>
<?php
}
}
/* {/block "body"} */
}
