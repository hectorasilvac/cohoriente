{extends file="./layout.tpl"}
{block name="footer"}
    <footer class="main-footer primary-bg">
        <div class="container container--primary">
            <div class="wrapper mb-2">
                <div class="wrapper wrapper--primary mb-1">
                    <img class="icon icon--light" src="{$RESOURCES}img/icons/location-outline.svg" />
                    <p class="text text--light ml-d5">Kilómetro 4-700 vía Acceso El Corcel Vereda Río Frío,
                        Anillo Vial, Parque Industrial Zimura - Bodega
                        8, Girón, Santander.</p>
                </div>
                <div>
                    <div class="wrapper wrapper--center mb-1">
                        <img class="icon icon--light" src="{$RESOURCES}img/icons/call-outline.svg" />
                        <p class="text text--light ml-d5">(57) 315 378 5627</p>
                    </div>
                    <div class="wrapper wrapper--center">
                        <img class="icon icon--light" src="{$RESOURCES}img/icons/mail-outline.svg" />
                        <p class="text text--light ml-d5">contacto@cohoriente.co</p>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper--secondary">
                <div>
                    <i class="fab fa-linkedin fa-5x icon--light mr-1"></i>
                    <i class="fab fa-facebook-square fa-5x icon--light"></i>
                </div>
                <div>
                    <img class="footer_logo" src="{$RESOURCES}img/full_logo_white.svg" alt="" />
                </div>
            </div>
        </div>
    </footer>
{/block}