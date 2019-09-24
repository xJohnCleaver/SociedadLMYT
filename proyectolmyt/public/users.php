<?php
session_start();
//ADEMÁS DEL CONTROL DE SESIONES, AQUÍ DEBE IR UN IF QUE CONTROLE SI EL QUE ESTÁ ACCEDIENDO A ESTE ARCHIVO TIENE RANGO DIFERENTE DE "docente"
if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true ){
  $nombres = $_SESSION['nombres'];
  $apellidos = $_SESSION['apellidos'];
  $rango=$_SESSION["rango"];
}else{
  echo '<script type="text/javascript">
  window.location.assign("../index4.html");
  </script>';
  exit;
}
$now = time();
if($now > $_SESSION['expire']) {
  header('Location: ../index4.html');
  exit;
  session_destroy();
  session_unset();
}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="TOKIS">
  <meta name="author" content="TOKIS">
  <title>Tokis
  </title>
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-content-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/line-awesome/css/line-awesome.min.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" href="../css/nav_top.css?v=1.0.0">
  <link rel="stylesheet" href="../css/users.css">
  <!-- END Custom CSS-->
</head>
<body>
<!-- Barra de navegación superior -->
<nav class="navbar navbar-light justify-content-between">
  <div class="form-inline">
    <a href="home.php"><i class="la la-home icon_nav" id="icon_home" title="Ir al panel principal"></i></a>
    <span class="mr-2">Hola, 
      <span class="user-name text-bold-700"><?php echo $_SESSION['nombre1'] ; echo " " ; echo $_SESSION['apellido1'];   ?></span>
    </span>
    <a href="conn/logout.php">Cerrar Sesión</a>
  </div>
</nav>
<!-- <div class="cajaperfil">
  <div class="arrow-up"></div>
  <div class="perfil">
    <div class="perfElem" id="email"><strong>E-mail: </strong><span>poner@mail.aqui</span></div>
    <div class="perfElem" id="fechaNac"><strong>Nº contacto: </strong><span>poner num_contacto aquí</span></div>
  </div>
</div> -->

<!-- Cuerpo -->
<div class="container-fluid cuerpo">

  <div id="tablaPestanas" class="table-responsive">
  <table>
    <thead>
      <tr>
      <th scope="col"><div class="pestanita activa" data-target="tablaDatosPers">DATOS PERSONALES</div></th>
      <th scope="col"><div class="pestanita" data-target="tablaNotas">NOTAS</div></th>
      <th scope="col"><div class="pestanita paPipers" id="iPers" data-target="trIpers">INFORME PERSONAL</div></th>
      <th scope="col"><div class="pestanita" data-target="tablaPosNeg">POSITIVAS / NEGATIVAS</div></th>
      <th scope="col"><div class="pestanita paSanFor" id="sansForms" data-target="trSanFor">SANCIONES FORMATIVAS</div></th>
      </tr>
    </thead>
  </table>

  <table>
    <thead>
      <tr id="trIpers" style="display:none">
        <th scope="col"><div class="pIpers" id="fEtica" data-target="tablaFEtica">FORMACIÓN ÉTICA</div></th>
        <th scope="col"><div class="pIpers" data-target="tablaAAfirm">CRECIMIENTO Y AUTO AFIRMACIÓN PERSONAL</div></th>
        <th scope="col"><div class="pIpers" data-target="tablaPEntor">LA PERSONA Y SU ENTORNO</div></th>
        <th scope="col"><div class="pIpers" data-target="tablaPApods">INTEGRACIÓN DE PADRES Y APODERADOS</div></th>
      </tr>
    </thead>
  </table>
  <table>
    <thead>
      <tr id="trSanFor" style="display:none">
        <th scope="col"><div class="pSanFor" id="sForma" data-target="tablaSanciones">INFORMACIÓN SANCIONES FORMATIVAS</div></th>
        <th scope="col"><div class="pSanFor" data-target="tablaApSanFor">APLICAR SANCIONES FORMATIVAS</div></th>
      </tr>
    </thead>
  </table>
  </div>

  <div id="tablaDatosPers" class="table-responsive tablaNormal">
  <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" id="thNLista" class="thN">#</th>
          <th scope="col" id="thNombre1">Nombre</th>
          <th scope="col" id="thNombre2">Segundo Nombre</th>
          <th scope="col" id="thApelli1">Apellido Paterno</th>
          <th scope="col" id="thApelli2">Apellido Materno</th>
          <th scope="col" id="thRut">Rut</th>
          <th scope="col" id="thNMat">Número matrícula</th>
          <th scope="col" id="thCurso">Curso</th>
          <th scope="col" id="thEmail">E-mail</th>
          <th scope="col" id="thNCont">Nº contacto</th>
          <th scope="col" id="thEdad">Edad</th>
          <th scope="col" id="thReps">Nº repitencias</th>
          <th scope="col" id="thInf">Informe</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <div id="newAlumno">
      <button id="btnNewAlumno" class="btn btn-success" title="Añadir nuevo alumno" data-toggle='modal' data-target='#modalNewAlumno'>+</button>
    </div>
  </div>

  <div id="tablaNotas" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" class="thN">#</th>
          <th scope="col" class="thCurso">Curso</th>
          <th scope="col" class="thNombres">Nombres</th>
          <th scope="col" class="thApellidos">Apellidos</th>
          <th scope="col" id="thLengu">Lengua Castellana y Comunicación</th>
          <th scope="col" id="thMatem">Matemática</th>
          <th scope="col" id="thIngle">Idioma Extranjero Inglés</th>
          <th scope="col" id="thLindi">Lengua Indígena</th>
          <th scope="col" id="thHisto">Historia y Ciencias Sociales</th>
          <th scope="col" id="thBiolo">Biología</th>
          <th scope="col" id="thQuimi">Química</th>
          <th scope="col" id="thFisic">Fisica</th>
          <th scope="col" id="thTecno">Educación Tecnológica</th>
          <th scope="col" id="thArvis">Artes Visuales</th>
          <th scope="col" id="thArmus">Artes Musicales</th>
          <th scope="col" id="thEdfis">Educación Física</th>
          <th scope="col" id="thSicol">Filosofía y Psicología</th>
          <th scope="col" id="thOrien">Orientación</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <div id="tablaFEtica" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" class="thN">#</th>
          <th scope="col" class="thCurso">Curso</th>
          <th scope="col" class="thNombres">Nombres</th>
          <th scope="col" class="thApellidos">Apellidos</th>
          <th scope="col" id="thSoc1">Es perseverante en el cumplimiento de sus deberes escolares</th>
          <th scope="col" id="thSoc2">Es comprensivo y se interesa por los problemas ajenos</th>
          <th scope="col" id="thSoc3">Procura decir siempre la verdad</th>
          <th scope="col" id="thSoc4">Habitualmente es generoso y/o solidario</th>
          <th scope="col" id="thSoc5">Es respetuoso con sus compañeros y demás miembros de la comunidad</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  
  <div id="tablaAAfirm" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" class="thN">#</th>
          <th scope="col" class="thCurso">Curso</th>
          <th scope="col" class="thNombres">Nombres</th>
          <th scope="col" class="thApellidos">Apellidos</th>
          <th scope="col" id="thSoc6">Posee habitos de higiene y presentacion personal</th>
          <th scope="col" id="thSoc7">Demuestra confianza en si mismo</th>
          <th scope="col" id="thSoc8">Respeta y cumple las normas de disciplina</th>
          <th scope="col" id="thSoc9">Utiliza un vocabulario acorde a su condicion de estudiante</th>
          <th scope="col" id="thSoc10">Posee un pensamiento reflexico al criticar</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  
  <div id="tablaPEntor" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" class="thN">#</th>
          <th scope="col" class="thCurso">Curso</th>
          <th scope="col" class="thNombres">Nombres</th>
          <th scope="col" class="thApellidos">Apellidos</th>
          <th scope="col" id="thSoc11">Participa con agrado en actividades del curso y/o colegio</th>
          <th scope="col" id="thSoc12">Aprecia la importancia social, afecta y espiritual de la familia</th>
          <th scope="col" id="thSoc13">Participa con respeto en actividades grupales</th>
          <th scope="col" id="thSoc14">Expone ideas, no obstante acata la decision de la mayoria</th>
          <th scope="col" id="thSoc15">Respeta y cuida el material del colegio</th>
          <th scope="col" id="thSoc16">Cumple responsablemente con los requerimientos pedagógicos de sus profesores</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
 
  <div id="tablaPApods" class="table-responsive tablaNormal" style="display:none">
    <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th scope="col" class="thN">#</th>
          <th scope="col" class="thCurso">Curso</th>
          <th scope="col" class="thNombres">Nombres</th>
          <th scope="col" class="thApellidos">Apellidos</th>
          <th scope="col" id="thSoc17">Asiste puntualmente a reuniones y citaciones</th>
          <th scope="col" id="thSoc18">Apoya al trabajo del profesor</th>
          <th scope="col" id="thSoc19">Apoya a su pupilo con los materiales y utiles requeridos por el colegio</th>
          <th scope="col" id="thSoc20">Se preocupa de la presentación personal de su pupilo</th>
          <th scope="col" id="thSoc21">Respeta y cuida el material del colegio</th>
          <th scope="col" id="thSoc22">Cumple con los compromisos adquiridos en el colegio y centro general de padres</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <div id="tablaPosNeg" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
    <thead>
      <tr>
        <th scope="col" class="thN notanlarga1">#</th>
        <th scope="col" class="thCurso notanlarga2">Curso</th>
        <th scope="col" class="thNombres notanlarga3">Nombres</th>
        <th scope="col" class="thApellidos notanlarga3">Apellidos</th>
        <th scope="col" id="thRande">Lista de anotaciones positivas (<span style="color:rgb(117,186,95)">verdes</span>) y negativas (<span style="color:rgb(255,62,62)">rojas</span>)</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

  
<div id="tablaSanciones" class="container-fluid tablaNormal" style="display:none">
  <div id="contenedorVisu" class="container-fluid">
    <div class="contvisualizadores" id="v1">
      <h1><b>CONFLICTO</b></h1>
      <a  href="../docs/SANCIONES_CONFLICTO.pdf#toolbar=0" target="_blank"><img class="visualizadores" src="../imgs/Conflicto.jpg" alt="IMAGEN CONFLICTO" border="0"/></a> 
    </div>
    <div class="contvisualizadores" id="v2">
      <h1><b>VIOLENCIA</b></h1>
      <a  href="../docs/SANCIONES_CONFLICTO.pdf#toolbar=0" target="_blank"><img class="visualizadores" src="../imgs/violencia.gif" alt="IMAGEN VIOLENCIA" border="0"/></a> 
    </div>
    <div class="contvisualizadores" id="v3">
      <h1><b>AGRESIVIDAD</b></h1>
      <a  href="../docs/SANCIONES_CONFLICTO.pdf#toolbar=0" target="_blank"><img class="visualizadores" src="../imgs/agresividad.jpg" alt="IMAGEN AGRESIVIDAD" border="0"/></a> 
    </div>
    <div class="contvisualizadores" id="v4">
    <h1 style="font-size:22px;text-align:center;"><b>BULLYING O ACOSO ESCOLAR</b></h1>
      <a  href="../docs/SANCIONES_CONFLICTO.pdf#toolbar=0" target="_blank"><img class="visualizadores" src="../imgs/bullying.jpg" alt="IMAGEN BULLYING" border="0"/></a> 
    </div>
  </div>
  <div id="manual" class="container-fluid">
    <h1 style="text-align:center;"><b>Manual de Sanciones Formativas</b></h1>
  <embed id="v5" src="../docs/manual.pdf#toolbar=0" type="application/pdf"  />
  </div>
</div>


<div id="tablaApSanFor" class="table-responsive tablaNormal" style="display:none">
  <table class="table table-bordered table-sm table-hover">
    <thead>
      <tr>
        <th scope="col" class="thNomAps">Estudiante</th>
        <th scope="col" class="thNumConf">Conflicto</th>
        <th scope="col" class="thNumViol">Violencia</th>
        <th scope="col" class="thNumAgre">Agresividad</th>
        <th scope="col" class="thNumBull">Bullying</th>
        <th scope="col" class="thNomSan">Nombre Sanción</th>
        <th scope="col" class="thEstFin">Estado final</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>


</div>  <!-- Fin container fluid -->


<!-- Modals -->
<div class="modalSan modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title" id="myLargeModalLabel">Evaluación Sanción Formativa</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>

        </div>

        <div class="modal-body">

          <div class="container">
            <form >
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                  <h2>Indicador</h2>    
                  <small>nº único de formulario <small id="num_unico_form"></small></small>
                  <br />
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                  <h2>Calificación</h2>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                  a) La mediación fué de ayuda para la formación personal del estudiante
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    b) Nivel de participación del alumnado e la ejecución de la Mediación
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta2" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    c) Colabora en el desarrollo de la sanción
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                      
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta3" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    d) Contribuye en la formación educativa del alumno
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta4" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    e) La sanción promueve la resolución de conflictos
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta5" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    f) La reacción del alumno fué positiva en el transcurso de la sanción
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta6" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
               
            </div>
            <div class="row">

              <div class="col-8 border-right">
               
                <div class="left">
                    g) El alumno quedó a gusto con los resultados esperados al término de la sanción
                </div>
              
              </div> 
              
              <div class="col-4">
                <div class="right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="2">
                        <label class="form-check-label" for="inlineRadio1">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="3">
                        <label class="form-check-label" for="inlineRadio1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="5">
                        <label class="form-check-label" for="inlineRadio1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7"  value="6">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta7" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                </div>
              </div>
            </div>
            <input type="hidden" id="id_alu" name="id_alumno">
           </form>
          </div>

        </div>

      

        <div class="modal-footer">
          <div class="container text-center">
            <button type="button" class="btn btn-primary limpiaForm">Limpiar</button>
            <button type="button" method="post" class="btn btn-secondary validaForm">Validar</button>
          </div>
        </div>

      </div>

    </div>

</div>

<!-- Fin modal nuevo alumno -->
<div id="modalNewAlumno" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div id="newUser">
          <form id="form_add_alumno">
            <div class="row">
              <div class="form-group col-12 col-sm-12 col-md-4">
                <select class="form-control" name="curso" id="add_curso" required>
                  <option selected disabled>Especificar curso</option>
                </select>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-4">
                <input class="form-control" type="text" name="numatri" id="add_numatri" placeholder="Número de matrícula" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-4">
                <input class="form-control" type="text" name="rut" id="add_rut" placeholder="RUN" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="text" name="name1" id="add_name1" placeholder="Primer nombre" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="text" name="name2" id="add_name2" placeholder="Segundo nombre" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="text" name="apel1" id="add_apel1" placeholder="Primer apellido" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="text" name="apel2" id="add_apel2" placeholder="Segundo apellido" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="text" name="numcon" id="add_numcon" placeholder="Número de contacto" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="email" name="email" id="add_email" placeholder="E-mail de contacto" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="date" name="cumple" id="add_cumple" placeholder="Fecha cumpleaños" required>
              </div>
              <div class="form-group col-12 col-sm-12 col-md-3">
                <input class="form-control" type="number" name="numreps" id="add_numreps" placeholder="Número de repitencias" required>
              </div>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-success" id="btn_add_alumno">Añadir usuario</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin modal nuevo alumno -->

<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../app-assets/vendors/js/ui/headroom.min.js" type="text/javascript"></script>
<script  src="../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script  src="../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script  src="../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script  src="../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script>var yapue = false;</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetimef.js"></script>
<!-- END PAGE LEVEL JS-->
<!-- BEGIN CUSTOM JS-->
<script src="../js/users_events.js"></script>
<script src="../js/dynamics.js"></script>
<script src="../js/loads.js"></script>
<!-- END CUSTOM JS-->
</body>
</html>
