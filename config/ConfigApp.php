<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('formulario', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/formulario');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'home' => 'LoginController#Home',
      'usuario'=> 'UsuarioController#Home',
      'viajes'=> 'ViajesController#listarViajes',
      'agendarViaje'=>'ViajesController#agregarViaje',
      'viajesFuturos' => 'ViajesController#viajesFuturos',
      'notificarViaje' => 'ViajesController#notificarViaje',
      'reservaHotel' => 'HotelesController#reservarHotel',
      'reservaMedianteEmail' => 'HotelesController#reservarPorEmail',
      'verInfo' => 'HotelesController#verInfo',
      'homeNotificacion'=> 'UsuarioController#HomeNotificacion',
      'verInfoViaje' => 'ViajesController#informacionViaje',
      'listaViajesAltaAgendaViajes' => 'ViajesController#listaViajesAltaAgendaViajes',
      'listaViajesAgregaReservaHotel' => 'ViajesController#listaViajesAgregaReservaHotel',
      'infoViaje2' => 'ViajesController#infoViaje2',
      'agendarViajeViaEmail' => 'ViajesController#agendarViajeViaEmail',
      'altaPorReservaHotelEmail' => 'ViajesController#altaPorReservaHotelEmail',
      'altaPorReservaVueloEmail' => 'ViajesController#altaPorReservaVueloEmail',
      'verInfoViaje2' => 'ViajesController#verInfoViaje2',
      'reservaHotel2' => 'HotelesController#reservarHotel2',




      // 'ciudadano'=> 'CiudadanoController#Home',
      // 'formulario'=>'CiudadanoController#mostrarFormulario',
      // //Esto es para ver el mapa del jefe, pero no pude probar si anda
      // 'mapajefe'=> 'JefeController#VerMapaJefe',
      // 'AgregarDenuncia'=> 'CiudadanoController#InsertarDenuncia'
    ];

    }
 ?>
