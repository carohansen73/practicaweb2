<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-29 20:27:30
  from 'C:\xampp\htdocs\practica\templates\form_ciudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9b17a2718b30_55484647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '724695dee930de1ee3eda3f737333c64f8e79c4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practica\\templates\\form_ciudad.tpl',
      1 => 1603998735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9b17a2718b30_55484647 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="postciudad" method="POST" class="my-4">
    <div class=" mx-auto">
        <div class="col-9 ">
            <div class="form-group w-50">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group w-50">
            <label>zonaRiesgo</label>
            <textarea name="zonariesgo" class="form-control" rows="3"></textarea>
        </div>
        
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

 <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-primary">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

       
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'ciudad');
$_smarty_tpl->tpl_vars['ciudad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->value) {
$_smarty_tpl->tpl_vars['ciudad']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id;?>
 <?php echo $_smarty_tpl->tpl_vars['ciudad']->value->nombre_ciudad;?>
 <?php echo $_smarty_tpl->tpl_vars['ciudad']->value->zona_riesgo;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </ul>
        
        <?php }
}
