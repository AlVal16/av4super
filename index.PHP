<?php
$today=date('d/m/y');
$name="Alma";
$Apellido="Valer";
echo "<br><br>";
$Superheroe="SUPERGIRL";
echo "<br><br>";

$Nombre_heroina="Kara Zor-El";
$Luthors=array("Lena", "Lilian");
echo "<br><br>";

$Superamigos=array("Superman","Winn");
$Parejasuper=array("Nia", "Brainic");
$Friends=array("Samantha", "William");
$JefeDEO="HANK";
$Danvers=array("Alex", "Kara");
echo "<br><br>";
$Frase="es saber cuando aceptar ayuda";
$Mayara="Más fuertes juntos";
$Pag=array("Inicio","Información", "Personajes");
$sh=array("SUPERPODERES", "&HABILIDADES");
$Debilidades=array("Kryptonita","Sol Rojo", "Magia" );
$Habilidades=array("Aliento Gelido", "Curación acelerada", "Invunerabilidad", "Super Audición", "Superfuerza", "Supervelocidad", "Supervuelo","Vision rayos X", "Vision terminca");
$Util=array("Util", "Medio útil", "Inutil");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $Superheroe; ?>  </title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><?php echo $Superheroe; ?> </a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">INICIO</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">INFORMACION</a></li>
        <li><a href="#portfolio" class="page-scroll">PERSONAJES</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><?php echo $Superheroe; ?>  </h1>
            <p> <?php echo $Mayara; ?> </p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">INFORMACION </a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>RESUMEN</h2>
          <hr>
          <p>Kara Danvers tiene que revelar su verdadera identidad y sus superpoderes para evitar un terrible desastre.</p>
          <p> <b> Protagonistas: </b> Melissa Benoist,Mehcad Brooks,Chyler Leigh</p>
          <p> <b> Creado por: </b> Greg Berlanti,Andrew Kreisberg,Ali Adler </p>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>ACERCA DE </h2>
      <hr>
      <p>Supergirl (la chica de acero)</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title"> <?php echo $sh[0] ?> <?php echo $sh[1] ?> </h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $Habilidades[0] ?> </div>
            <div class="menu-item-price"> <?php echo $Util[0] ?> </div>
            <div class="menu-item-description"> Kara puede llegar a expulsar un aire tan frío capaz de apagar fuego y hacer hielo. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $Habilidades[1] ?> </div>
            <div class="menu-item-price"> <?php echo $Util[0] ?> </div>
            <div class="menu-item-description"> Kara es capaz de curarse mucho más rápido que un humano normal. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $Habilidades[2] ?> </div>
            <div class="menu-item-price"> <?php echo $Util[0] ?> </div>
            <div class="menu-item-description"> Kara es capaz de recibir más daño que un humano normal sin casi lastimarse. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $Habilidades[3] ?></div>
            <div class="menu-item-price"><?php echo $Util[0] ?> </div>
            <div class="menu-item-description"> Kara es capaz de escuchar sonidos a grandes distancias a 50.000 hz.</div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">DEBILIDADES</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $Debilidades[0] ?> </div>
            <div class="menu-item-price">  </div>
            <div class="menu-item-description">Cualquier radiación con cualquier tipo de Kryptonita la hace más débil o cambia sus estados de ánimo. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $Debilidades[1] ?> </div>
            <div class="menu-item-price">  </div>
            <div class="menu-item-description"> La radiación de un sol rojo también afecta a los Kryptonianos y hace que pierdan sus poderes. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $Debilidades[2] ?></div>
            <div class="menu-item-price">  </div>
            <div class="menu-item-description"> La magia seguramente también pueda hacer que los Kryptonianos pierdan sus poderes. </div>
          </div>
        </div>
      </div>
    </div>
  
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>PERSONAJES</h2>

      <h4> <?php echo "Parte de ser uno mismo es $Frase<br>"; ?></h4>
   
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">TODOS</a></li>
              <li><a href="#" data-filter=".breakfast">ALGUNOS</a></li>
              <li><a href="#" data-filter=".lunch">FAVORITOS</a></li>
   
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title=<?php echo $Nombre_heroina ?>  data-lightbox-gallery="gallery1">
              
              <div class="hover-text">
                <h4> <?php echo $Nombre_heroina ?> </h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title= <?php echo $Superamigos[1] ?>  data-lightbox-gallery="gallery1">
              <div class="hover-text">
                
                <h4> <?php echo $Superamigos[1] ?> </h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title=<?php echo $Danvers[0] ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
               
                
                <h4><?php echo $Danvers[0] ?></h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title=<?php echo $Parejasuper[0] ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
               
               
                <h4> <?php echo $Parejasuper[0] ?> </h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title= <?php echo $Parejasuper[1] ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
                
                <h4><?php echo $Parejasuper[1] ?></h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 .breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title=<?php echo $JefeDEO ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
                
                <h4><?php echo $JefeDEO ?></h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title=<?php echo $Luthors[0]; ?>  data-lightbox-gallery="gallery1">
              <div class="hover-text">
                
                <h4><?php echo $Luthors[0]; ?> </h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title=<?php echo $Luthors[1] ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
               
                <h4><?php echo $Luthors[1] ?></h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title=<?php echo $Friends[0] ?> data-lightbox-gallery="gallery1">
              <div class="hover-text">
               
                <h4><?php echo $Friends[0] ?> </h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
         


<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone: +1 123 456 1234</p>
        <p>Email: info@company.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights"> 
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; <?php echo $today; ?>  
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
