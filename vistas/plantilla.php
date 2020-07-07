<!DOCTYPE html>
<html lang="en">
<?php
session_start();

$url = Rutas::ctrRutas();

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Unidad Oftalmologica de Caracas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Unidad Oftalmologica de Caracas">
  <meta name="author" content="">
  <META name="KeyWords" content="asociación, venezolana, avance, oftalmología, cirugía, capacitación, eventos, entrenamiento,  vanguardia, medicina, visión, caracas, venezuela, optica">
  <link rel="shortcut icon" href="<?php echo $url; ?>img/favicon.ico"/>
  

  <!-- css -->
  <link href="<?php echo $url; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo $url; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo $url; ?>css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo $url; ?>css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $url; ?>css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo $url; ?>css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo $url; ?>css/animate.css" rel="stylesheet" />
  <link href="<?php echo $url; ?>css/style.css" rel="stylesheet">




  <link href="<?php echo $url; ?>css/jquery.bsPhotoGallery-min.css" rel="stylesheet">

  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/datatables/jquery.dataTables.min.css">
  <link href="<?php echo $url; ?>plugins/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
  <link href="<?php echo $url; ?>plugins/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo $url; ?>bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo $url; ?>color/blue.css" rel="stylesheet">

  <!-- =======================================================
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script src="<?php echo $url; ?>plugins/node_modules/sweetalert2/dist/sweetalert2.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/node_modules/sweetalert2/dist/sweetalert2.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >

  <div id="wrapper">
    <?php


    $rutas = array();
    $ruta = null;
    echo '<input type="hidden" value="'.$url.'" id="rutaOculta">';


      if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);

        $valor =  $rutas[0];
        include "modulos/header2.php";
        if($rutas[0] == "especialistas" || $rutas[0] == "sms" || $rutas[0] == "soporteUoca" || $rutas[0] == "suscriptores"){
          include "modulos/".$rutas[0].".php";
        }else{
          include "modulos/error404.php";
        }


      }else{
        include "modulos/header.php";
        include "modulos/principal.php";

      }

    include "modulos/footer.php"
    ?>
  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




  <!-- Core JavaScript Files -->
  <script src="<?php echo $url; ?>js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="<?php echo $url; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.easing.min.js"></script>
  <script src="<?php echo $url; ?>js/wow.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.scrollTo.js"></script>
  <script src="<?php echo $url; ?>js/jquery.appear.js"></script>
  <script src="<?php echo $url; ?>js/stellar.js"></script>
  <script src="<?php echo $url; ?>plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?php echo $url; ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo $url; ?>js/nivo-lightbox.min.js"></script>
  <script src="<?php echo $url; ?>js/custom.js"></script>
  <script src="<?php echo $url; ?>js/jquery.bsPhotoGallery-min.js"></script>

  <!-- DATATABLES -->
  <script src="<?php echo $url; ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/buttons.html5.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/buttons.colVis.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/jszip.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/pdfmake.min.js"></script>
  <script src="<?php echo $url; ?>plugins/datatables/vfs_fonts.js"></script>


  <script src="<?php echo $url; ?>js/especialistas.js"></script>
  <script src="<?php echo $url; ?>js/suscriptores.js"></script>
  <script src="<?php echo $url; ?>js/sms.js"></script>
  <script src="<?php echo $url; ?>js/plantilla.js"></script>
  <script>
    $(document).ready(function(){
      $('ul.first').bsPhotoGallery({
        "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
        "hasModal" : true,
        "shortText" : false
      });
    });
  </script>

  <script>

    $(document).ready(function() {

      //$('#modalMensaje').modal('show');

        //$('#modalMensajePromocion').modal('show');

      //$('#modalMensajeNavidad').modal('show');

      //$('#modalMensajeTelefono').modal('show');
    });
  </script>

    <script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-25554959-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>


  <script type="text/javascript">var cbuser = {name: '', email: '', message: ''}, access_token = 'RpflneSKayIdCbvLJAV8', cburl = '//www.jorgedelgadillo.com/soporteUoca/';document.write('<script type="text/javascript" src="' + cburl + 'assets/cmodule-chat/js/chatbull-init.js"></' + 'script>');</script>

</body>

</html>
