{include file="templates/header.tpl"}
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

        </div>
          </nav>
  </div>


<section>
  <div class="container">
    <div class="row cont">


    <div class="card icono2 mx-auto" style="width: 18rem;">
      <a class="nav-link active home" href="usuario">
      <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
            </a>
      <div class="card-body">

          <p class="card-text">Usuario</p>
              </div>
      </div>
  </div>
  </div>
</section>
{include file="templates/footer.tpl"}
