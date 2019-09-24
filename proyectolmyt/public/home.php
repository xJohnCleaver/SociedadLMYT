<?php

session_start();

if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true ){
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $rango=$_SESSION["rango"];
}else{
  echo '<script type="text/javascript">
  window.location.assign("index4.html");
  </script>';
  exit;
}
$now = time();
if($now > $_SESSION['expire']) {
  header('Location: index4.html');
  exit;
  session_destroy();
  session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Herox</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap-exten">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">



<!--start loader-->
<div class="loader">
    <div class="cssload-loader">
        <div class="cssload-inner cssload-one"></div>
        <div class="cssload-inner cssload-two"></div>
        <div class="cssload-inner cssload-three"></div>
    </div>
</div>
<!--loader end-->

<!--header start-->
<header>
      
    <nav class="navbar navbar-top-default navbar-bottom navbar-expand-lg nav-line">
            
        <div class="container">
            <a href="javascript:void(0)" title="Logo" class="logo scroll"><img src="images/logo-black-dook.png" class="logo-dark" alt="logo">
                <img src="images/logo-white-dook.png" alt="logo" class="logo-light default">
            </a>
            
            <div class="collapse navbar-collapse" id="Herox">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#feature">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#work">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">Empezar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#client">Clientes</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">contacto</a>
                    </li>
                    
                </ul>
            </div>
            <div class="header-social pl-3 d-none d-lg-inline-block">
                <a href="javascript:void(0)" class="facebook-text-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a>
                <a href="javascript:void(0)" class="twitter-text-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a>
                <a href="javascript:void(0)" class="instagram-text-hvr"><i class="ti ti-instagram" aria-hidden="true"></i></a>
            </div>


            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </div>
        
    </nav>
    
    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
                
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#feature">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#work">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">Empezar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#client">Clientes</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">contacto</a>
                    </li>
                    
                </ul>
            </nav>
           
            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy;  <?php echo date('Y') ?>
                    DOOK. Hecho con amor por DOOKITO</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
    
</header>
<!--header end-->

<!--slider start-->


<section id="home" class="p-0">
        
    <h2 class="d-none" aria-hidden="true">slider</h2>
    <div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="Herox-one"
         data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_12_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>    <!-- SLIDE  -->
                <li data-index="rs-63" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"
                    data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="01" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/18034.jpg" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->


                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                         data-fontsize="['60','60','50','30']"
                         data-lineheight="['90','90','50','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 8; white-space: nowrap; letter-spacing: 2px !important; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        Making Your <div class="d-inline-block main-color font-weight-600 main-color slider-text">Vision</div>
                        Come True
                    </div>

                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                         data-fontsize="['30','30','22','22']"
                         data-lineheight="['30','30','25','20']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 200;letter-spacing:1px">
                        Perfect For Startup
                    </div>

                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        <a href="javascript:void(0)" class="btn btn-large btn-pink mr-2">Learn More</a>
                        <a href="javascript:void(0)" class="btn btn-large btn-gray">Get Started</a>
                    </div>
                    <!-- Barra de navegación superior -->
                    <nav class="navbar navbar-light justify-content-between">
                      <a class="navbar-brand text-center" href="home.php">
                      <div class="form-inline">
                        <?php if($_SESSION["rango"]=="admin" or $_SESSION["rango"]=="cliente"){ ?>
                        <a href="users.php"><i class="ft-users icon_nav" id="icon_users" title="Usuarios" data-toggle="modal" data-target="#myModal"></i></a>
                        <?php } ?>
                        <font size=3><b> <span class="mr-1">Hola,
                          <span class="user-name text-bold-700">
                            <?php $nombres=$_SESSION['nombres']; $apellidos=$_SESSION['apellidos'];
                              echo $nombres ;
                              echo " " ;
                              echo $apellidos;  
                            ?>   
                          </span>
                        </span></b></font>
                        <a href="logout.php">Cerrar Sesión</a>
                      </div>
                    </nav>
                </li>


                <!-- SLIDE  -->
                <li data-index="rs-69" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"
                    data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="02" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/17.jpg" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                         data-fontsize="['60','60','50','30']"
                         data-lineheight="['90','90','50','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 8; white-space: nowrap; letter-spacing: 2px !important; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        Making Your <div class="d-inline-block main-color font-weight-600 main-color slider-text">Vision</div>
                        Come True
                    </div>

                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                         data-fontsize="['30','30','22','22']"
                         data-lineheight="['30','30','25','20']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 200;letter-spacing:1px">
                        Perfect For Startup
                    </div>

                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        <a href="javascript:void(0)" class="btn btn-large btn-pink mr-2">Learn More</a>
                        <a href="javascript:void(0)" class="btn btn-large btn-gray">Get Started</a>
                    </div>
                    <!-- Barra de navegación superior -->
                    <nav class="navbar navbar-light justify-content-between">
                      <a class="navbar-brand text-center" href="home.php">
                      <div class="form-inline">
                        <?php if($_SESSION["rango"]=="admin" or $_SESSION["rango"]=="cliente"){ ?>
                        <a href="users.php"><i class="ft-users icon_nav" id="icon_users" title="Usuarios" data-toggle="modal" data-target="#myModal"></i></a>
                        <?php } ?>
                        <font size=3><b> <span class="mr-1">Hola,
                          <span class="user-name text-bold-700">
                            <?php $nombres=$_SESSION['nombres']; $apellidos=$_SESSION['apellidos'];
                              echo $nombres ;
                              echo " " ;
                              echo $apellidos;  
                            ?>   
                          </span>
                        </span></b></font>
                        <a href="logout.php">Cerrar Sesión</a>
                      </div>
                    </nav>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-68" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"
                    data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="03" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/slider-slide1.jpg" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                         data-fontsize="['60','60','50','30']"
                         data-lineheight="['90','90','50','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 8; white-space: nowrap; letter-spacing: 2px !important; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        Making Your <div class="d-inline-block main-color font-weight-600 main-color slider-text">Vision</div>
                        Come True
                    </div>

                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                         data-fontsize="['30','30','22','22']"
                         data-lineheight="['30','30','25','20']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 200;letter-spacing:1px">
                        Perfect For Startup
                    </div>

                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        <a href="javascript:void(0)" class="btn btn-large btn-pink mr-2">Learn More</a>
                        <a href="javascript:void(0)" class="btn btn-large btn-gray">Get Started</a>
                    </div>
                    <!-- Barra de navegación superior -->
                    <nav class="navbar navbar-light justify-content-between">
                      <a class="navbar-brand text-center" href="home.php">
                      <div class="form-inline">
                        <?php if($_SESSION["rango"]=="admin" or $_SESSION["rango"]=="cliente"){ ?>
                        <a href="users.php"><i class="ft-users icon_nav" id="icon_users" title="Usuarios" data-toggle="modal" data-target="#myModal"></i></a>
                        <?php } ?>
                        <font size=3><b> <span class="mr-1">Hola,
                          <span class="user-name text-bold-700">
                            <?php $nombres=$_SESSION['nombres']; $apellidos=$_SESSION['apellidos'];
                              echo $nombres ;
                              echo " " ;
                              echo $apellidos;  
                            ?>   
                          </span>
                        </span></b></font>
                        <a href="logout.php">Cerrar Sesión</a>
                      </div>
                    </nav>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-67" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"
                    data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="04" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/slider-slide3.jpg" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- layer nr. 1 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']"
                         data-fontsize="['60','60','50','30']"
                         data-lineheight="['90','90','50','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 8; white-space: nowrap; letter-spacing: 2px !important; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        Making Your <div class="d-inline-block main-color font-weight-600 main-color slider-text">Vision</div>
                        Come True
                    </div>

                    <!-- layer nr. 2 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100 text-white"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','30']"
                         data-fontsize="['30','30','22','22']"
                         data-lineheight="['30','30','25','20']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 200;letter-spacing:1px">
                        Perfect For Startup
                    </div>

                    <!-- layer nr. 3 -->
                    <div class="tp-caption z-index-5"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                         data-fontsize="['18','18','18','18']"
                         data-lineheight="['18','18','18','18']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index: 7; white-space: nowrap; font-family:'Exo', sans-serif !important; font-weight: 100;">
                        <a href="javascript:void(0)" class="btn btn-large btn-pink mr-2">Learn More</a>
                        <a href="javascript:void(0)" class="btn btn-large btn-gray">Get Started</a>
                    </div>
                    <!-- Barra de navegación superior -->
                    <nav class="navbar navbar-light justify-content-between">
                      <a class="navbar-brand text-center" href="home.php">
                      <div class="form-inline">
                        <?php if($_SESSION["rango"]=="admin" or $_SESSION["rango"]=="cliente"){ ?>
                        <a href="users.php"><i class="ft-users icon_nav" id="icon_users" title="Usuarios" data-toggle="modal" data-target="#myModal"></i></a>
                        <?php } ?>
                        <font size=3><b> <span class="mr-1">Hola,
                          <span class="user-name text-bold-700">
                            <?php $nombres=$_SESSION['nombres']; $apellidos=$_SESSION['apellidos'];
                              echo $nombres ;
                              echo " " ;
                              echo $apellidos;  
                            ?>   
                          </span>
                        </span></b></font>
                        <a href="logout.php">Cerrar Sesión</a>
                      </div>
                    </nav>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
        <div class="slider-social d-none d-lg-block">
            <a href="#." class="facebook-text-hvr"><i class="ti ti-facebook" aria-hidden="true"></i></a>
            <a href="#." class="twitter-text-hvr"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a>
            <a href="#." class="instagram-text-hvr"><i class="ti ti-instagram" aria-hidden="true"></i></a>
        </div>

    </div>
</section>
<!--slider end-->

 

<!-- our story -->
<section id="feature" class="our-story circle-top pb-0">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <div class="title pb-5">
                    <h2 class="font-weight-600 m-0">Mira Nuestro Video</h2>
                    <span class="hr-line mt-4 mb-4 ml-lg-0"></span>
                    <p class="mb-3 mb-lg-0"><b>Dook</b> es una plataforma digital que permite crear, editar, gestionar y
                        obtener documentos legales de manera sencilla.<br>
                        Olvida las largas esperas a través de nuestro<i> <b>sistema 24/7</b> </i> .
                         </br> Te invitamos a ser parte de <b>DOOK.</b> </br></br>

                        Cada uno de nuestros documentos estan generados para cuidar y hacer prevalecer tus derechos.

                    </br></br>
                    <a data-fancybox="" href="https://youtu.be/7e90gBu4pas" ><i class="ti ti-control-play"></i><b>Conocer más...</b></a>



                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-image">
                    <img src="images/awesome-feature.png" alt="image">
                    <a data-fancybox="" href="https://youtu.be/7e90gBu4pas" class="button-play"><i class="ti ti-control-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our story end-->

<!--feature start-->
<section class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-xs-5">
                <div class="feature-box text-center">
                    <i></i>
                    <p class="mt-3 mb-3">Elige Una De Nuestras Categorías.</p>
                    <h4 class="text-capitalize">Unveiled-Sticky Two
                        Level Navigation</h4>
                    <span class="hr-line mt-4 mb-4"></span>
                    <a href="#." class="mb-3 mb-lg-0">Leer Más</a>
                </div>
            </div>
            <div class="col-md-4 mb-xs-5">
                <div class="feature-box text-center">
                    <i></i>
                    <p class="mt-3 mb-3">Completa Los Datos.</p>
                    <h4 class="text-capitalize">A two level memu
                        approach for mobile</h4>
                    <span class="hr-line mt-4 mb-4"></span>
                    <a href="#." class="mb-3 mb-lg-0">Leer Más</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <i></i>
                    <p class="mt-3 mb-3">Consigna Tu Interés - DOOK </p>
                    <h4 class="text-capitalize">Developer’s ain’t slow
                        in mobile apps</h4>
                    <span class="hr-line mt-4 mb-4"></span>
                    <a href="#." class="mb-3 mb-lg-0">Leer Más</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature end-->

<!--team start-->
<section id="team" class="team-three bg-light text-center text-lg-left">
    <div class="container sm-container-full">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="d-none">hidden</h2>
                <div class="title text-center pb-5">
                    <h2 class="font-weight-600 m-0">EQUIPO</h2>
                    <span class="hr-line mt-4 mb-4"></span>
                    <p class="mb-4">Conocenos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-team-three owl-carousel owl-theme">
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/ROBERTO.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0)"><i class="ti ti-pinterest-alt"></i> </a> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="team-content">
                            <h3 class="mb-1">Roberto Aníbal Sepulveda Bravo</h3>
                            <p class="m-0">Departamento Programación y Analísis</p>
                        </div>
                    </div>
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/team-img5.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0)"><i class="ti ti-pinterest-alt"></i> </a> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="team-content">
                            <h3 class="mb-1">Andrei Riquelme Jimenez </h3>
                            <p class="m-0">Director Ejecutivo</p>
                        </div>
                    </div>
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/team-img6.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0)"><i class="ti ti-pinterest-alt"></i> </a> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="team-content">
                            <h3 class="mb-1">Benjamín Navarrete Osses</h3>
                            <p class="m-0">Departamento Programación y Analísis</p>
                        </div>
                    </div>
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/abogado01.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0)"><i class="ti ti-pinterest-alt"></i> </a> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="team-content">
                            <h3 class="mb-1">Abogado 01</h3>
                            <p class="m-0">Departamento Legal</p>
                        </div>
                    </div>
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/abogado02.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="javascript:void(0)"><i class="ti ti-pinterest-alt"></i> </a> </li>
                                </ul>
                            </div>
                        </div>

                        
                        <div class="team-content">
                            <h3 class="mb-1">Abogado 02</h3>
                            <p class="m-0">Departamento Legal</p>
                        </div>
                    </div>
                    <div class="team-box-three item">
                        <div class="image">
                            <img src="images/profile_convergente.jpg" alt="">
                            <div class="overlay center-block">
                                <ul class="social_icon">
                                    <li><a class="facebook-bg-hvr" href="https://www.facebook.com/Agencia-Convergente-189896028247364"><i class="ti ti-facebook"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="ti ti-twitter"></i> </a> </li>
                                    <li><a class="linkedin-bg-hvr" href="https://cl.linkedin.com/company/convergente-agencia-digital-de-publicidad"><i class="ti ti-linkedin"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="https://www.instagram.com/agencia_convergente/"><i class="ti ti-instagram"></i> </a> </li>
                                    <li><a class="youtube-bg-hvr" href="https://www.youtube.com/channel/UC4lKkUjkDifDxmXy5e_4yNQ"><i class="ti ti-youtube"></i> </a> </li>
                                    <li><a class="pinterest-bg-hvr" href="https://www.pinterest.cl/ConvergenteAgencia/"><i class="ti ti-pinterest-alt"></i> </a> </li>
                             
                               
                                    
                               
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="mb-1">Agencia Convergente</h3>
                            <p class="m-0">Departamento Diseño Grafico  & Web</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team end-->

<!-- start work -->
<section id="work" class="portfolio-three no-transition">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title text-center pb-5">
                    <h2 class="font-weight-600 m-0">Biblioteca <b>DOOK</b> </h2>
                    <span class="hr-line mt-4 mb-4"></span>
                    <p class="mb-4">Contamos con documentos legales de 7 categorías diferentes y proximamente muchas más.</p>

                    <!-- filter links -->
                    <div class="filtering col-sm-12 text-center pt-2">
                        <span data-filter="*" class="active">Todas</span>
                        <span data-filter=".arre">Arrendamiento</span>
                        <span data-filter=".web">CompraVenta</span>
                        <span data-filter=".brand">Convenio</span>
                        <span data-filter=".brand">Poderes</span>
                        <span data-filter=".brand">Prestación de Servicios</span>
                        <span data-filter=".brand">Promesas</span>
                        <span data-filter=".brand">Trabajo</span>




                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- gallery -->
        <div class="gallery text-center">

            <!-- gallery item -->
            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/CA_01.jpg" data-fancybox="images">
                        <img src="images/CA_01.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato Arrendamiento De Bodega</h4>
                                <p align="center">Contrato que permite el arriendo de hasta 5 bodegas de un mismo inmueble.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            
            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/CA_02.jpg" data-fancybox="images">
                        <img src="images/CA_02.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato Arrendamiento De Casa Amoblada</h4>
                                <p align="center">Contrato que permite el arriendo de una casa amoblada con la posibilidad de incluir
                                    inventario.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/CA_03.jpg" data-fancybox="images">
                        <img src="images/CA_03.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato  De Arrendamiento De Casa Sin Muebles</h4>
                                <p></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 items arre">
                    <div class="item-img">
                        <a href="images/CA_04.jpg" data-fancybox="images">
                            <img src="images/CA_04.jpg" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info">
                                    <span class="plus mb-3"></span>
                                    <h4 class="mb-1">Contrato De Arrendamiento De Casa Para Uso Vacacional</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>




            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/CA_05.jpg" data-fancybox="images">
                        <img src="images/CA_05.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Departamento Amoblado</h4>
                                <p></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/c_arriendo.jpg" data-fancybox="images">
                        <img src="images/c_arriendo.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Departamento Sin Muebles</h4>
                                <p></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/c_arriendo.jpg" data-fancybox="images">
                        <img src="images/c_arriendo.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Departamento Para Uso Vacacional</h4>
                                <p>13 documentos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/c_arriendo.jpg" data-fancybox="images">
                        <img src="images/c_arriendo.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Estacionamiento</h4>
                                <p>13 documentos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/c_arriendo.jpg" data-fancybox="images">
                        <img src="images/c_arriendo.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Oficina</h4>
                                <p>13 documentos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/CA_10.jpg" data-fancybox="images">
                        <img src="images/CA_10.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Automóvil</h4>
                                <p>13 documentos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 items arre">
                <div class="item-img">
                    <a href="images/c_arriendo.jpg" data-fancybox="images">
                        <img src="images/c_arriendo.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Contrato De Arrendamiento De Bienes Muebles</h4>
                                <p>13 documentos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>





            <!-- gallery item -->
            <div class="col-md-8 items graphic">
                <div class="item-img">
                    <a href="images/portfolio-three-img6.jpg" data-fancybox="images">
                        <img src="images/portfolio-three-img6.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Recent Work</h4>
                                <p>See Our Amazing Work</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-4 items graphic">
                <div class="item-img">
                    <a href="images/portfolio-three-img7.jpg" data-fancybox="images">
                        <img src="images/portfolio-three-img7.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Recent Work</h4>
                                <p>See Our Amazing Work</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-4 items graphic">
                <div class="item-img">
                    <a href="images/portfolio-three-img8.jpg" data-fancybox="images">
                        <img src="images/portfolio-three-img8.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Recent Work</h4>
                                <p>See Our Amazing Work</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-4 items graphic">
                <div class="item-img">
                    <a href="images/portfolio-three-img9.jpg" data-fancybox="images">
                        <img src="images/portfolio-three-img9.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Recent Work</h4>
                                <p>See Our Amazing Work</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-4 items graphic">
                <div class="item-img">
                    <a href="images/portfolio-three-img10.jpg" data-fancybox="images">
                        <img src="images/portfolio-three-img10.jpg" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info">
                                <span class="plus mb-3"></span>
                                <h4 class="mb-1">Recent Work</h4>
                                <p>See Our Amazing Work</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>

        <div class="clear-fix"></div>


    </div>

    </div>
</section>
<!-- end work -->

<!--parallax start-->
<section class="parallax bg-2 text-center text-center text-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pt-4 pb-4">
                <p class="mb-3">Unleash your creative potential with Herox</p>
                <h2 class="parallax-text text-capitalize mb-4 font-weight-light">Looking For Exclusive Digital Services?</h2>
                <a href="javascript:void(0)" class="btn btn-large btn-pink">Get Quote</a>
            </div>
        </div>
    </div>
</section>
<!--parallax end-->

<!--price-->
<section id="price" class="price text-center">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="title text-center pb-5">
                    <h2 class="font-weight-600 m-0">PRICE</h2>
                    <span class="hr-line mt-4 mb-4"></span>
                    <p class="mb-4">Frameworks to provide a robust synopsis.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="price-item">
                    <h2 class="font-weight-bold poppins-font mb-2">$19</h2>
                    <h5 class="mb-3 poppins-font font-weight-bold">Standard</h5>
                    <ul class="p-0 price-list list-unstyled">
                        <li>4 Template Design</li>
                        <li>5 Hosting</li>
                        <li>10 Email Address</li>
                        <li>15 Free Images</li>
                        <li>2 Print Template</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-large btn-transparent-gray mt-4">Getting Now</a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="price-item center">
                    <div class="price-offer"><h6 class="">Best Choice</h6></div>
                    <h2 class="font-weight-bold poppins-font mb-3">$19</h2>
                    <h5 class="mb-4 poppins-font font-weight-bold">Standard</h5>
                    <ul class="p-0 price-list list-unstyled">
                        <li>4 Template Design</li>
                        <li>5 Hosting</li>
                        <li>10 Email Address</li>
                        <li>15 Free Images</li>
                        <li>2 Print Template</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-large btn-transparent-white mt-5">Getting Now</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-item">
                    <h2 class="font-weight-bold poppins-font mb-2">$19</h2>
                    <h5 class="mb-3 poppins-font font-weight-bold">Standard</h5>
                    <ul class="p-0 price-list list-unstyled">
                        <li>4 Template Design</li>
                        <li>5 Hosting</li>
                        <li>10 Email Address</li>
                        <li>15 Free Images</li>
                        <li>2 Print Template</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-large btn-transparent-gray mt-4">Getting Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--price end-->

<!--testimonial start-->
<section class="testimonial-white bg-l bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title text-center">
                    <h2 class="font-weight-600 m-0">Testimonials</h2>
                    <span class="hr-line mt-4 mb-4"></span>
                    <p>Frameworks to provide a robust synopsis.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="owl-testimonial owl-carousel owl-theme">
                    <div class="testimonial-item item text-center">
                        <span class="testimonial-quote"><i class="ti ti-quote-right" aria-hidden="true"></i></span>
                        <div class="testimonial-text mb-3"><p>Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p></div>
                        <div class="testimonial-photo"><img alt="" src="images/testimonial-1.jpg"></div>
                        <h5 class="text-capitalize mt-3 mb-0">Jhony Deev</h5>
                        <p class="text-small mb-0">Executive Manager</p>
                    </div>
                    <div class="testimonial-item item text-center">
                        <span class="testimonial-quote"><i class="ti ti-quote-right" aria-hidden="true"></i></span>
                        <div class="testimonial-text mb-3"><p>Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p></div>
                        <div class="testimonial-photo"><img alt="" src="images/testimonial-2.jpg"></div>
                        <h5 class="text-capitalize mt-3 mb-0">Teena Walkin</h5>
                        <p class="text-small mb-0">Executive Manager</p>
                    </div>
                    <div class="testimonial-item item text-center">
                        <span class="testimonial-quote"><i class="ti ti-quote-right" aria-hidden="true"></i></span>
                        <div class="testimonial-text mb-3"><p>Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p></div>
                        <div class="testimonial-photo"><img alt="" src="images/testimonial-3.jpg"></div>
                        <h5 class="text-capitalize mt-3 mb-0">Teena Walkin</h5>
                        <p class="text-small mb-0">Executive Manager</p>
                    </div>
                    <div class="testimonial-item item text-center">
                        <span class="testimonial-quote"><i class="ti ti-quote-right" aria-hidden="true"></i></span>
                        <div class="testimonial-text mb-3"><p>Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p></div>
                        <div class="testimonial-photo"><img alt="" src="images/testimonial-3.jpg"></div>
                        <h5 class="text-capitalize mt-3 mb-0">Teena Walkin</h5>
                        <p class="text-small mb-0">Executive Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial end-->

<!-- our client -->
<section id="client" class="our-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 p-0">
                <h2 class="d-none">hidden</h2>
                <div class="owl-carousel partners-slider">
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="images/client-one.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/client-two.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="images/client-one.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/client-two.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="images/client-one.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/client-two.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="images/client-one.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/client-two.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our client end -->

<!--blog-->
<section id="blog" class="blog-list bg-light text-center text-md-left">
    <h2 class="d-none" aria-hidden="true">slider</h2>
    <div class="container">
        <div class="row">
            <!-- blog-item one -->
            <div class="col-lg-3 col-md-6 mb-3 mb-xs-5">
                <div class="image">
                    <img alt="image" src="images/blog-img-1.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-xs-5">
                <div class="blog-box">
                    <h4 class="text-capitalize mb-4">360° arial view</h4>
                    <p class="mb-3 mb-xs-4">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <a class="btn btn-large btn-pink mb-xs-4" href="blog-left.html"> Read More</a>
                </div>
            </div>
            <!-- blog-item two -->
            <div class="col-lg-3 col-md-6 mb-xs-5">
                <div class="image">
                    <img alt="image" src="images/blog-img-2.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-box">
                    <h4 class="text-capitalize mb-4">360° arial view</h4>
                    <p class="mb-3 mb-xs-4">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <a class="btn btn-large btn-pink" href="blog-left.html"> Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog end-->

<!-- Contact US -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title text-center pb-5">
                    <h2 class="font-weight-600 m-0">CONTACT</h2>
                    <span class="hr-line mt-4 mb-4"></span>
                    <p class="mb-4">Frameworks to provide a robust synopsis.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-xs-5">
                <form class="getin_form" onsubmit="return false;">
                    <div class="row">

                        <div class="col-sm-12" id="result"></div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name : " required id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name : " required id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email : " required id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" placeholder="Phone : " id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group mb-4">
                                <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-large btn-pink w-100" id="submit_btn">submit request</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 pl-4">
                <p class="mb-lg-5 mb-4 mt-2">West is not just about graphic design; it's more than that. We offer integral communication services, and we're responsible for our process and results. We thank each client and their projects.</p>
                <div class="row">
                    <div class="col-md-6 col-sm-6 our-address mb-4">
                        <h6 class="mb-3 font-weight-600">Our Address</h6>
                        <p class="mb-2">123 Stree New York City , United States Of America. </p>
                        <a class="pickus" href="#." data-text="Get Directions">Get Directions</a>
                    </div>
                    <div class="col-md-6 col-sm-6 our-address mb-4">
                        <h6 class="mb-3 font-weight-600">Our Phone</h6>
                        <p class="mb-2">Phone No. 63165370895 <br>Mobile No. 631653708</p>
                        <a class="pickus" href="#." data-text="Call Us">Call Us</a>
                    </div>
                    <div class="col-md-6 col-sm-6 our-address mb-4">
                        <h6 class="mb-3 font-weight-600">Our Email</h6>
                        <p class="mb-2">Main Email : admin@website.com <span class="block">Inquiries : email@website.com</span> </p>
                        <a class="pickus" href="#." data-text="Send a Message">Send a Message</a>
                    </div>
                    <div class="col-md-6 col-sm-6 our-address">
                        <h6 class="mb-3 font-weight-600">Our Support</h6>
                        <p class="mb-2">Main Support : info@website.com <span>Sales : support@website</span> </p>
                        <a class="pickus" href="#." data-text="Open a Ticket">Open a Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact US Ends-->

<!-- Map -->
<section class="p-0 bg-light text-center">
    <h2 class="d-none">hidden</h2>
    <!--Location Map here-->
    <div id="map" class="map-container"></div>

    <!--Bottom Logo-->
    <div class="logo-icon">
        <img src="images/logo-white-dook.png" alt="image">
    </div>
</section>
<!-- Map End -->

<!-- Footer -->
<footer class="footer-padding bg-dark font-weight-600">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-md-3 mb-xs-4">
                <h4 class="text-white font-weight-500">ADDRESS</h4>
                <span class="hr-line mt-4 mb-4 ml-md-0"></span>
                <p class="mb-4">123 STREET, LINCOLN AVE<br>
                    NEWYORK 53651, USA</p>
                <p class="mb-4">TEL: <a href="javascript:void(0)"> 1 202 323 1234</a><br>
                    FAX: <a href="javascript:void(0)">1 202 323 1234</a></p>
                <p>EMAIL:<a href="javascript:void(0)"> INFO@Herox.COM</a></p>
            </div>

            <div class="col-md-3 mb-xs-4">
                <h4 class="text-white font-weight-500">COMPANY</h4>
                <span class="hr-line mt-4 mb-4 ml-md-0"></span>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0)">About</a></li>
                    <li><a href="javascript:void(0)">Leadership</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                    <li><a href="javascript:void(0)">Careers</a></li>
                    <li><a href="javascript:void(0)">Partner Network</a></li>
                    <li><a href="javascript:void(0)">Referral Program</a></li>
                    <li><a href="javascript:void(0)">Events</a></li>
                    <li><a href="javascript:void(0)">Legal Security</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-xs-4">
                <h4 class="text-white font-weight-500">PRODUCT</h4>
                <span class="hr-line mt-4 mb-4 ml-md-0"></span>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0)">Download</a></li>
                    <li><a href="javascript:void(0)">Windows</a></li>
                    <li><a href="javascript:void(0)">Mac</a></li>
                    <li><a href="javascript:void(0)">Linux</a></li>
                    <li><a href="javascript:void(0)">iPhone</a></li>
                    <li><a href="javascript:void(0)">Android</a></li>
                    <li><a href="javascript:void(0)">Chrome</a></li>
                    <li><a href="javascript:void(0)">GPS & Location</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4 class="text-white font-weight-500">SUPPORT</h4>
                <span class="hr-line mt-4 mb-4 ml-md-0"></span>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0)">Affiliates</a></li>
                    <li><a href="javascript:void(0)">Demo</a></li>
                    <li><a href="javascript:void(0)">Help Center</a></li>
                    <li><a href="javascript:void(0)">FAQ</a></li>
                    <li><a href="javascript:void(0)">Testimonials</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                    <li><a href="javascript:void(0)">Press</a></li>
                    <li><a href="javascript:void(0)">Email Us</a></li>
                </ul>
            </div>

            <div class="col-sm-12 mt-lg-5 mt-2 text-center">
                <p class="mb-4 mt-3">© 2018 Herox LLC. All rights reserved. Proudly made in <a href="javascript:void(0)">Themes Industry</a></p>
                <div class="footer-social">
                    <a href="javascript:void(0)"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="ti ti-facebook" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="ti ti-pinterest-alt" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="ti ti-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti ti-angle-up"></i></a>
<!-- end scroll to top  -->


<!-- Optional JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- cube portfolio gallery -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<!-- owl carousel slider -->
<script src="js/owl.carousel.min.js"></script>
<!-- parallax Background -->
<script src="js/parallaxie.min.js"></script>
<!-- fancybox popup -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
<script src="js/map.js"></script>
<!-- custom script -->
<script src="js/script.js"></script>


</body>
</html>
