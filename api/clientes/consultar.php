<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/actividadcomercial.php';
require_once '../../modelo/datosclientes.php';
require_once '../../modelo/direccion.php';
require_once '../../modelo/localidad.php';
require_once '../../modelo/provincia.php';

$resp = new ConsultarRespuesta();

$ac = new ActividadComercial();
$ac->Id = 1;
$ac->Descripcion = "Empleado";

$pr1 = new Provincia();
$pr1->Id = 1;
$pr1->Descripcion = "Santa Fe";

$loc1 = new Localidad();
$loc1->Id = 1;
$loc1->Descripcion = "Rosario";
$loc1->Provincia = $pr1;

$dir1 = new Direccion();
$dir1->Id = 1;
$dir1->Calle = "Laprida";
$dir1->NumeroCalle = "123";
$dir1->Localidad = $loc1;

$pr2 = new Provincia();
$pr2->Id = 2;
$pr2->Descripcion = "Buenos Aires";

$loc2 = new Localidad();
$loc2->Id = 2;
$loc2->Descripcion = "San Nicolas de los Arroyos";
$loc2->Provincia = $pr2;

$dir2 = new Direccion();
$dir2->Id = 2;
$dir2->Calle = "Buenos Aires";
$dir2->NumeroCalle = "1234";
$dir2->Localidad = $loc2;

$dc = new DatosCliente();
$dc->Id = $_GET['id'];
$dc->Cuit = "27361234560";
$dc->Nombre = "Juana";
$dc->Apellido = "Coslay";
$dc->NumeroDocumento = 36123456;
$dc->Genero = "Sin indicar";
$dc->FechaNacimiento = "2024-11-26";
$dc->ActividadComercial = $ac;
$dc->ListDirecciones[] = $dir1;
$dc->ListDirecciones[] = $dir2;

$resp->DatosCliente = $dc;

echo json_encode ($resp);