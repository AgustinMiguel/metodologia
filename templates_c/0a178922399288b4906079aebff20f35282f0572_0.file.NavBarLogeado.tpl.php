<?php
/* Smarty version 3.1.33, created on 2020-05-23 20:07:10
  from 'C:\xampp\htdocs\Proyectos\Metodologia\templates\NavBarLogeado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ec9664edae068_27014130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a178922399288b4906079aebff20f35282f0572' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Metodologia\\templates\\NavBarLogeado.tpl',
      1 => 1590257214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec9664edae068_27014130 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor_Navbar barra">

    <nav class="navbar navbar-expand-xl navbar-dark bg-primary  ">


      <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado izquierdo-->
      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav mr-auto no-margin">
          <!-- Dentro de cada "li" se crea un boton de la barra de navegacion -->
          <li class="nav-item active logonav">
          <img src="imagenes/logo.png" class="logo" alt="Logo">
          </li>
            </ul>

              <ul class="navbar-nav mr-auto">
          <li class="nav-item active  bd-navbar-nav">
            <a class="nav-link btn btn-primary" href="ciudadano">Ver viajes <span class="sr-only">(current)</span></a>
          <li class="nav-item active  bd-navbar-nav text-center">
            <a class=" nav-link btn btn-primar" >Contacto <span class="sr-only">(current)</span></a>
          </li>
  </ul>

        <div class=" nav-item active  bd-navbar-nav center ">
            <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Salir</a>
        </div>
        </div>
          </nav>
  </div>
<?php }
}
