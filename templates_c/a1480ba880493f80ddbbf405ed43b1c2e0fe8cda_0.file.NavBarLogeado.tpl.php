<?php
/* Smarty version 3.1.33, created on 2020-05-24 20:51:59
  from 'D:\xampp\htdocs\proyectos\metodologia\templates\NavBarLogeado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecac24f854845_75749173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1480ba880493f80ddbbf405ed43b1c2e0fe8cda' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyectos\\metodologia\\templates\\NavBarLogeado.tpl',
      1 => 1590346317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecac24f854845_75749173 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark  bg-primary ">
    <a class="" href="home"><img src="img/logo2.png" alt="" height="50px"></a>
    <a href="#"><img src="imagenes/logo.png" class="logo" alt="Logo"></a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline mt-2 mt-md-0 no-mobile" action="busqueda.html">
        <a href=" "><img class="notificacion" src="imagenes/campana.png" alt=""></a>
        <a class=" nav-link btn btn-primary nombre-usuario"  style="color: white;" href="#" disabled>#Pablo</a>
        <a class=" nav-link btn btn-primary"  style="color: white;" href="">Salir</a>
      </form>
    </div>
  </nav>
<?php }
}
