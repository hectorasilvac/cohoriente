{extends file="../templates/head.tpl"}
{block name="body"}
    <header class="main_header">
        <div class="container">
            <img class="logo" src="{RESOURCES}img/full_logo.svg" alt="" />
            <div id="icon_menu">
                <i id="hamburger" class="burger fas fa-bars fa-3x"></i>
            </div>
            <nav id="nav_menu" class="nav_menu">
                <ul class="list" style="border-top: solid #F6F5FA .1rem; border-bottom: solid #F6F5FA .1rem;">
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Inicio</a></li>
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Servicios</a></li>
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Nosotros</a></li>
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Asóciate</a></li>
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Clasificados</a></li>
                    <li class="text text--bold text--csecondary" style="padding: 1.5rem; text-align: center;"><a href="#" style="text-decoration: none; color: inherit">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="carousel">
        <div class="container">
            <h3>Estamos en proceso de Certificación ISO 9000</h3>
            <img src="" alt="" />
        </div>
    </section>
    <section class="order">
        <div class="container">
            <h3 >¿Tienes un pedido para nosotros?</h3>
            <a href="#">Solicítalo Aquí</a>
        </div>
    </section>
    <section class="location">
        <div class="location_container container">
            <h3 class="location_subtitle subtitle">¿Dónde estamos?</h3>
            <p class="location_desc text">Nos encontramos ubicados en varios departamentos del oriente Colombiano tales como: Arauca, César, Norte de
                Santander y Santander con nuestra oficina principal en la Calle 33 #31-143 Local 08 Rivera Plaza,
                Bucaramanga, Santander.</p>
            <img src="" alt="" />
        </div>
    </section>
    <section class="services">
        <div class="services_container container">
            <h3 class="services_subtitle subtitle">Nuestros Servicios</h3>
            <p class="services_desc text">En COHORIENTE tenemos una amplia gama de servicios pensados en la
                satisfacción de todos nuestros clientes y afiliados.</p>
            <ul class="list">
                <li class="list_item">
                    <img class="services_icon" src="{$RESOURCES}img/health_icon.png" alt="Ícono de Vara de Esculapio">
                    <div class="services_card">
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
                    <img class="services_icon" src="{$RESOURCES}img/study_icon.png" alt="Ícono de un computador">
                    <div class="services_card">
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
                    <img class="services_icon" src="{$RESOURCES}img/molecule_icon.png" alt="Ícono de átomos">
                    <div class="services_card">
                        <h4 class="heading mb-3">Acompañamiento en Tecnología Biomédica</h4>
                        <p class="text text--smal text--csecondary">Contamos con un amplio portafolio de soporte técnico para
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
        <div class="container container--primary">
            <div class="wrapper wrapper--tertiary">
                <h3 class="subtitle subtitle--light">Nombre Apellido</h3>
                <p class="employee_badge">Emplead@ del Mes</p>
            </div>
            <p>Texto</p>
            <img src="{$RESOURCES}img/employee_img.png" alt="" />
        </div>
    </section>
    <section class="team">
        <div class="container container--primary">
            <h3 class="subtitle subtitle--primary subtitle--light">Nuestro Equipo</h3>
            <p class="text text--light mb-2">Contamos con personal altamente capacitado dando su mejor esfuerzo y poniendo sus conocimientos a disposición
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
                    <img style="width: 15rem" src="{$RESOURCES}img/partner_carousel/hospital_manuela_beltran.png" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 15rem" src="{$RESOURCES}img/partner_carousel/hospital_san_camilo.svg" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 20rem" src="{$RESOURCES}img/partner_carousel/hospital_garcia_rovira.png" />
                </div>
                <div class="carousel-cell">
                    <img style="width: 15rem" src="{$RESOURCES}img/partner_carousel/hospital_piedecuesta.png" />
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
        <div class="contact_container container">
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
            <form class="contact_form wrapper">
                <h4 class="form_subtitle subtitle">Escríbenos</h4>
                <p class="form_input wrapper">
                    <input class="input" type="text" id="fullname"
                        placeholder="Nombre Completo" />
                </p>
                <p class="form_input wrapper">
                    <input class="input" type="tel" id="phone" placeholder="Teléfono" />
                </p>
                <p class="form_input wrapper">
                    <input class="input" type="email" id="email"
                        placeholder="Correo Electrónico" />
                </p>
                <p class="form_input wrapper">
                    <textarea class="input" id="message" placeholder="Mensaje"></textarea>
                </p>
                <button class="button" type="submit">Contactar</button>
            </form>
        </div>
    </section>
{/block}