<section class="contact">
    <div class="wrapper wrap_quaternary">
        <div class="find_us">
            <header class="wrapper wrap_subtitle">
                <h4 class="find_us_subtitle subtitle color--light">Encuéntranos</h4>
            </header>
            <div class="find_us_info wrapper wrap_primary">
                <img class="wd-1d7 mr-1d3" src="{$RESOURCES}img/icons/location_new.svg" alt="Ícono de Ubicación" />
                <p class="text_small color--light">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
                    Anillo Vial, Parque Industrial Zimura - Bodega
                    8, Girón, Santander.</p>
            </div>
            <div class="find_us_info wrapper wrap_primary">
                <img class="wd-2 mr-1d3" src="{$RESOURCES}img/icons/call_new.svg" alt="Ícono de Teléfono" />
                <p class="text_small color--light">(57) 315 378 5627</p>
            </div>
            <div class="find_us_info wrapper wrap_primary">
                <img class="wd-2 mr-1d3" src="{$RESOURCES}img/icons/email_new.svg"
                    alt="Ícono de Correo Electrónico" />
                <p class="text_small color--light">contacto@cohoriente.co</p>
            </div>
        </div>
        <form class="form d-flex wrap_quaternary pd-1d5">
            <h4 class="contact_subtitle subtitle">Escríbenos</h4>
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
                <label class="form_label text text--secondary" for="phone">Mensaje</label>
                <textarea class="input input_primary" id="message" placeholder="Ingresa tu mensaje"></textarea>
            </p>
            <button class="contact_submit btn btn--primary" type="submit">Contactar</button>
        </form>
    </div>
    <dialog id="contact_dialog" class="dialog wd-80p">
        <div class="dialog_wrapper wrapper wrap_quaternary">
            <p class="contact_close_dialog dialog_close">
                <i class="fas fa-times-circle fa-2x color--secondary430"></i>
            </p>
            <div class="dialog_icon">
                <i class="fas fa-paper-plane fa-5x color--light"></i>
            </div>
            <h3 class="subtitle_small color--primary my-2">
                Enviar Mensaje
            </h3>
            <hr class="wd-100p" />
            <p class="subtitle_small text--center text--normal color--secondary mt-2">
                Gracias por tu mensaje, en breve responderemos tu inquietud.
            </p>
        </div>
    </dialog>
</section>
<script src="{$RESOURCES}js/contact.js"></script>
