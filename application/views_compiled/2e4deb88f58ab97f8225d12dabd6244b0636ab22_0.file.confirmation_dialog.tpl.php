<?php
/* Smarty version 3.1.39, created on 2021-09-16 21:04:28
  from 'C:\Users\DELL\Desktop\Hector Silva\Cohoriente\application\views\shared\confirmation_dialog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143953cecfee3_11376542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4deb88f58ab97f8225d12dabd6244b0636ab22' => 
    array (
      0 => 'C:\\Users\\DELL\\Desktop\\Hector Silva\\Cohoriente\\application\\views\\shared\\confirmation_dialog.tpl',
      1 => 1631819068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143953cecfee3_11376542 (Smarty_Internal_Template $_smarty_tpl) {
?><dialog id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="dialog wd-80p">
    <div class="dialog_wrapper dialog--primary wrapper wrap_quaternary">
        <p class="dialog_close">
            <i class="fas fa-times-circle fa-2x color--secondary430"></i>
        </p>
        <div class="dialog_icon">
            <i class="fas <?php echo (($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'fa-question' : $tmp);?>
 fa-5x color--light"></i>
        </div>
        <h3 class="subtitle_small color--primary my-2">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Título' : $tmp);?>

        </h3>
        <hr class="wd-100p" />
        <p class="subtitle_small text--center text--normal color--secondary mt-2">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['question']->value)===null||$tmp==='' ? 'Pregunta' : $tmp);?>

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
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['sucess_message']->value)===null||$tmp==='' ? 'Mensaje' : $tmp);?>
  
        </p>
    </div>
</dialog><?php }
}
