<dialog id="{$id}" class="dialog wd-80p">
    <div class="dialog_wrapper dialog--primary wrapper wrap_quaternary">
        <p class="dialog_close">
            <i class="fas fa-times-circle fa-2x color--secondary430"></i>
        </p>
        <div class="dialog_icon">
            <i class="fas {$icon|default:'fa-question'} fa-5x color--light"></i>
        </div>
        <h3 class="subtitle_small color--primary my-2">
            {$title|default:'Título'}
        </h3>
        <hr class="wd-100p" />
        <p class="subtitle_small text--center text--normal color--secondary mt-2">
            {$question|default:'Pregunta'}
        </p>
    </div>
    <div class="wrapper wrap_primary pd-0">
        <a class="dialog_confirm btn btn--primary">Si</a>
        <a class="dialog_cancel btn btn--primary">No</a>
    </div>
    <!-- Dialog: Success message -->
    <div class="dialog_wrapper wrapper d-none">
        <p class="dialog_close">
            <i class="fas fa-times-circle fa-2x color--secondary430"></i>
        </p>
        <p class="subtitle_small text--normal text--center color--secondary mt-2">
            {$sucess_message|default:'Mensaje'}  
        </p>
    </div>
</dialog>