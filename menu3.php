<?php
session_start();
date_default_timezone_set("Argentina/Buenos_Aires");
// require ("configuraciones/aut_verifica_inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>San Felipe.</title>
    
</head>

<body>
<!-- < ***************************************************** inicio *****************************************************************"> -->
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Menu</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">San Felipe</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/control/bk2.php">Backup Seguridad</a></li>
          <li><a href="/varios/forsemana.php">Consultad Liquidacion</a></li>
          <li><a href="/varios/cierre.php">Facturar</a></li>
          <li><a href="/varios/4mailbarra.php">Generar PDF</a></li>
          <li><a href="/varios/sendeando.php">Envio Por Mail</a></li>
          <li class="divider"></li>
          <li><a href="/control/ctrconcep.php">Novedades</a></li>
          <li><a href="/control/ctrconcep2.php">Nov. x Concepto</a></li>
          <li><a href="/varios/consua2.php?xVar='deuda'">Informes Varios</a></li>
          <li><a href="/listados/saldos.php">Saldos y Movimientos</a></li>
          <li><a href="/listados/ajuste.php">Recalculo de Saldos</a></li>
          <li><a href="/varios/4listpdf.php">Impresion Liquidacion</a></li>
          <li class="divider"></li>
          <li><a href="/varios/contado.php">Facturacion Saldos Iniciales</a></li>
          <li><a href="/control/anuladoc.php">Anula Documentos</a></li>
        </ul>
      </li>
    </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>


<!-- < ***************************************************** fin *****************************************************************"> -->
<!-- <div class="container container-fluid bg-success"> -->
<div class="jumbotron">
	<div class="row justify-content-md-center">
		<h3><a href="www.colegiosanfelipe.edu.ar">San Felipe. Control de Becas. Sistemas Administrativos  </a></h3>
		<nav class="navbar navbar-default" role="navigation">
	</div>
   <!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
   <div class="row">
   <div class="navbar navbar-expand-lg navbar-light bg-light">
	    <a class="navbar-brand" href="#">San Felipe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
   </div>
   </div>
 
   <!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
         <li class="active" ><a href="menu2.php">Inicio</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Responsables <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="/socios/consua.php?soc='SI'">Consultas</a></li>
               <li><a href="/socios/consua.php?baja=¿SI'">Baja</a></li>
               <li><a href="/listados/lisfactu0.php">Facturacion del Dia</a></li>
               <li><a href="#"></a></li>          
               <li class="divider"></li>
               <li><a href="/varios/prueba1.php">pruebas php</a></li>
               <li class="divider"></li>
               <li><a href="/altasoc/altasoc.php">Altas Responsables</a></li>
            </ul>
         </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Alumnos <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <!-- <li><a href="#">Consultas</a></li>
               <li><a href="#">Modificacion</a></li>
               <li class="divider"></li>
               <li><a href="#">Bajas</a></li>
               <li class="divider"></li> -->
               <li><a href="/altasoc/altafam2.php">Altas</a></li>
               <li><a href="/varios/pasanio.php">Pasa Año</a></li>

            </ul>
         </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Controles<b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="/control/bk2.php">Backup Seguridad</a></li>
               <li><a href="/varios/forsemana.php">Consultad Liquidacion</a></li>
               <li><a href="/varios/cierre.php">Facturar</a></li>
               <li><a href="/varios/4mailbarra.php">Generar PDF</a></li>
               <li><a href="/varios/sendeando.php">Envio Por Mail</a></li>
               <li class="divider"></li>
               <li><a href="/control/ctrconcep.php">Novedades</a></li>
               <li><a href="/control/ctrconcep2.php">Nov. x Concepto</a></li>
               <li><a href="/varios/consua2.php?xVar='deuda'">Informes Varios</a></li>
               <li><a href="/listados/saldos.php">Saldos y Movimientos</a></li>
               <li><a href="/listados/ajuste.php">Recalculo de Saldos</a></li>
               <li><a href="/varios/4listpdf.php">Impresion Liquidacion</a></li>
               <li class="divider"></li>
               <li><a href="/varios/contado.php">Facturacion Saldos Iniciales</a></li>
               <li><a href="/control/anuladoc.php">Anula Documentos</a></li>
<!--               <li><a href="/varios/pruebamail.php">Prueba de envio de mail</a></li> -->
               <li><a href="/control/restorenew.php">Restauracion Backup </a></li>
            </ul>
         </li>
      </ul> 
      <!--
      <form class="navbar-form navbar-left" role="search">
         <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar Responsable">
         </div>
         <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      -->
      <ul class="nav navbar-nav navbar-right">
         <!-- <li><a href="#">Enlace #3</a></li> -->
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tablas <b class="caret"></b> </a>
            <ul class="dropdown-menu">
               <li><a href="tablas/conceptos/index.php">Conceptos</a></li>
               <li><a href="#">en Construc.</a></li>
               <li><a href="varios/ajustesvarios.php">Ajustes De Saldo</a></li>
               <li class="divider"></li>
               <li><a href="tablas/index.php">Nueva Tabla</a></li>
            </ul>
         </li>
      </ul>
   </div>
   </nav>
</div>
<?php include './inc/footer.php' ; ?>
<!-- <p>Esta es una aplicacion de GDP, by Terco Group <a href="http://www.athomesystem.com.ar/">Desarrollo by gdp</a>, derechos patentados</p> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
