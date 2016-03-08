<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/web/css/bootstrap.min.css">
    <link href="/web/css/cover.css" rel="stylesheet">

    <link rel="stylesheet" href="/web/css/style.css">
    <title>Mon titre</title>
</head>

<body cz-shortcut-listen="true">


    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Facebook</h3>
              <nav>

                <ul class="nav masthead-nav">
                  <li class="active"><a href="/">Accueil</a></li>
                  <li><a href="/vote">Voter</a></li>
                  <li><a href="/play">S'inscrire</a></li>
                  <li><a href="#">Nous contacter</a></li>
                </ul>
              </nav>
            </div>
          </div>


		<?php include $this->view;?>
   	      

          <div class="mastfoot">
          </div>

        </div>

      </div>

    </div>
    
    <script src="/web/js/jquery-2.1.3.min.js"></script>
    <script src="/web/js/bootstrap.min.js"></script>
  

  </body>
</html>