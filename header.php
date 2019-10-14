<?php
session_start();
require 'requirelanguage.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Holobox</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/logo-favicon.png">

    <meta property="og:url" content="https://holobox.app/"></meta>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="banner-principal">
      <nav id="nav" class="navbar navbar-default">

          <div class="container-fluid">
            <div class="navbar-header navbar-left">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">
                  <img src="img/logo-holobox.png" class="img-responsive"/>
              </a>

              <div class="dropdown closed">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><?php echo $cambiarIdioma; ?></span>
                </button>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenu">

                  <a href="changelanguage.php?language=es">
                  <button class="dropdown-item" type="button">
                    <img src="img/flag_esp.png" class="img-responsive">
                  </button>
                  </a>
                  <a href="changelanguage.php?language=en">
                  <button class="dropdown-item" type="button">
                    <img src="img/flag_eng.png" class="img-responsive">
                  </button>
                  </a>
                  <a href="changelanguage.php?language=fr">
                  <button class="dropdown-item" type="button">
                    <img src="img/flag_fr.png" class="img-responsive">
                  </button>
                  </a>

                  <!-- <?php if ($lang="es"){ ?>
                    <a href="changelanguage.php?language=en">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_eng.png" class="img-responsive">
                    </button>
                    </a>
                    <a href="changelanguage.php?language=fr">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_fr.png" class="img-responsive">
                    </button>
                    </a>
                  <?php }else if ($lang="en"){ ?>
                    <a href="changelanguage.php?language=es">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_esp.png" class="img-responsive">
                    </button>
                    <a href="changelanguage.php?language=fr">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_fr.png" class="img-responsive">
                    </button>
                    </a>
                  <?php }else if ($lang="fr"){ ?>
                    <a href="changelanguage.php?language=es">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_esp.png" class="img-responsive">
                    </button>
                    <a href="changelanguage.php?language=en">
                    <button class="dropdown-item" type="button">
                      <img src="img/flag_eng.png" class="img-responsive">
                    </button>
                    </a>
                  <?php } ?> -->
                  
                </div>
              </div>

            </div>

              

            <div class="collapse navbar-collapse pull-right" id="navbar">
              <div class="container-fluid">
                <div class="header-container">
                  <ul class="navbar-nav">
                    <li><a href="index.php#ventas" id="funciona-link"><?php echo $comofunciona; ?></a></li>
                    <li><a href="index.php#contacto" id="contacto-link"><?php echo $contacto; ?></a></li>
                  </ul>

                  <div class="icon-container" id="dropdown">
                      <a  href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/home-lab.png" class="img-responsive"></a>
                      <ul class="dropdown-menu">
                        <p><?php echo $mlab; ?></p>
                        <a href="#!"><?php echo $info; ?></a>
                      </ul>
                  </div>

                </div>

              </div>
            </div>
          </div>
      </nav>

      <section id="home-principal">
        <div class="container">
          <div class="row">
            <div class="home-container">
              <img src="img/holobox.png" class="img-responsive">
              <div class="home-text">
                <h1><?php echo $venderProducto; ?></h1>
                <p><span>Holobox</span><?php echo $catDigital; ?></p>
                <a href="index.php#contacto">
                  <button class="btn btn-default" type="button"  id="buttonInfo"><span><?php echo $info; ?></span></button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
