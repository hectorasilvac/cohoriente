<?php
/* Smarty version 3.1.39, created on 2021-09-07 22:39:35
  from 'C:\Users\USUARIO.INNOVACION2\Desktop\Cohoriente\application\views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6137ce079b7aa1_25178115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffca5bbc308f64eab0eef7ac483421e511e4d388' => 
    array (
      0 => 'C:\\Users\\USUARIO.INNOVACION2\\Desktop\\Cohoriente\\application\\views\\pages\\home.tpl',
      1 => 1631047175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6137ce079b7aa1_25178115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13805893386137ce079b37e7_42072451', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/head.tpl");
}
/* {block "body"} */
class Block_13805893386137ce079b37e7_42072451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13805893386137ce079b37e7_42072451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="main_header">
        <div class="container">
            <img class="logo" src="<?php echo RESOURCES;?>
img/full_logo.svg" alt="" />
            <div class="menu">
                <i class="burger fas fa-bars fa-3x"></i>
            </div>
        </div>
    </header>
    <section class="carousel primary-bg">
        <div class="container">
            <h3>Estamos en proceso de Certificación ISO 9000</h3>
            <img src="" alt="" />
        </div>
    </section>
    <section class="order">
        <div class="container">
            <h3>¿Tienes un pedido para nosotros?</h3>
            <a href="#">Solicítalo Aquí</a>
        </div>
    </section>
    <section class="location">
        <div class="container">
            <h3>¿Dónde estamos?</h3>
            <p>Nos encontramos ubicados en varios departamentos del oriente Colombiano tales como: Arauca, César, Norte de
                Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
                Bucaramanga, Santander.</p>
            <img src="" alt="" />
        </div>
    </section>
    <section class="services">
        <div class="container container--primary">
            <h3 class="subtitle subtitle--primary">Nuestros Servicios</h3>
            <p class="text text--csecondary mb-2">En COHORIENTE tenemos una amplia gama de servicios pensados en la
                satisfacción de todos
                nuestros
                clientes y
                afiliados.</p>
            <ul class="list">
                <li class="list_item">
                    <img class="service_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/health_icon.png" alt="Ícono de Vara de Esculapio">
                    <div class="ml-1">
                        <h4 class="heading mb-3">Oferta de Abastecimiento</h4>
                        <p class="text text--smal text--csecondary">Contamos con un amplio portafolio de productos
                            farmacéuticos de laboratorio
                            EPPS, tecnología
                            biomédica</p>
                        <p class="list_item_link">
                            <a class="link" href="">Ver más</a>
                        </p>

                    </div>
                </li>
                <li class="list_item">
                    <img class="service_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/study_icon.png" alt="Ícono de un computador">
                    <div class="ml-1">
                        <h4 class="heading mb-3">Formación y Crecimiento</h4>
                        <p class="text text--smal text--csecondary">Contamos con un amplio portafolio de formación para
                            capacitación y
                            entretenimiento</p>
                        <p class="list_item_link">
                            <a class="link" href="">Ver más</a>
                        </p>
                    </div>
                </li>
                <li class="list_item">
                    <img class="service_icon" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/molecule_icon.png" alt="Ícono de átomos">
                    <div class="ml-1">
                        <h4 class="heading mb-3">Acompañamiento en Tecnología Biomédica</h4>
                        <p class="text text--smal text--csecondary">Contamos con un amplio portafolio se soporte técnico para
                            soluciones en
                            equipos médicos</p>
                        <p class="list_item_link">
                            <a class="link" href="">Ver más</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="employee primary-bg">
        <div class="container">
            <div>
                <h3 class="subtitle subtitle--light">Nombre Apellido</h3>
                <p>Emplead@ del Mes</p>
            </div>
            <p>Texto</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/employee_img.png" alt="" />
        </div>
    </section>
    <section class="team">
        <div class="container">
            <h3>Nuestro Equipo</h3>
            <p>Contamos con personal altamente capacitado dando su mejor esfuerzo y poniendo sus conocimientos a disposición
                de COHORIENTE para dar a todos nuestros clientes y afialiados la mejor experiencia al momento de solciitar
                nuestros servicios.</p>
            <img src="" alt="" />
        </div>
    </section>
    <section class="partner">
        <div class="container container--primary">
            <h3 class="subtitle subtitle--primary-wide">Nuestros Asociados</h3>
            <div class="partner_carousel">
                <div class="carousel-cell">
                    <img style="width: 15rem" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_manuela_beltran.png" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 15rem" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_san_camilo.svg" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 20rem" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_garcia_rovira.png" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 15rem" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/partner_carousel/hospital_piedecuesta.png" />
                </div>
            </div>
        </div>
    </section>
    <section class="supplier">
        <div class="container">
            <h3>¿Quieres ser un proveedor?</h3>
            <a href="#">Solicítalo Aquí</a>
        </div>
    </section>
    <section class="map">
        <p><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.5078642176596!2d-73.11347199707903!3d7.126778786633991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e681567310b020f%3A0x130ed28f17ba26f0!2sRivera%20Plaza!5e0!3m2!1ses-419!2sco!4v1631031744708!5m2!1ses-419!2sco"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    </section>
    <section class="contact">
        <div class="container container--primary">
            <div>
                <h4>Encuéntranos</h4>
                <div>
                    <img src="" alt="" />
                    <p>Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío, Anillo Vial, Parque Industrial Zimura - Bodega
                        8, Girón, Santander.</p>
                </div>
                <div>
                    <img src="" alt="" />
                    <p>(57) 315 378 5627</p>
                </div>
                <div>
                    <img src="" alt="" />
                    <p>contacto@cohoriente.co</p>
                </div>
            </div>
            <form class="wrapper">
                <h4 class="subtitle subtitle--small subtitle--csecondary">Escríbenos</h4>
                <p class="wrapper wrapper--column">
                    <label class="text text--csecondary" for="fullname">Nombre Completo</label>
                    <input class="input input--primary" type="text" id="fullname"
                        placeholder="Escribe tu nombre completo" />
                </p>
                <p class="wrapper wrapper--column">
                    <label for="phone" class="text text--csecondary">Teléfono</label>
                    <input class="input input--primary" type="tel" id="phone" placeholder="Escribe tu número telefónico" />
                </p>
                <p class="wrapper wrapper--column">
                    <label for="email" class="text text--csecondary">Correo Electrónico</label>
                    <input class="input input--primary" type="email" id="email"
                        placeholder="Escribe tu correo electrónico" />
                </p>
                <p class="wrapper wrapper--column">
                    <label for="message" class="text text--csecondary">Mensaje</label>
                    <textarea class="input input--primary" id="message" placeholder="Escribe un mensaje"></textarea>
                </p>
                <button class="button button--primary" type="submit">Contactar</button>
            </form>
        </div>
    </section>
<?php
}
}
/* {/block "body"} */
}
