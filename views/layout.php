<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/public/images/favicon.png" />
    <title>Best Western Community</title>

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/media-queries.css">
    <link rel="stylesheet" href="/public/css/tpl/home.css">
    <link rel="stylesheet" href="/public/css/tpl/hostels.css">
    <link rel="stylesheet" href="/public/css/tpl/messages.css">
    <link rel="stylesheet" href="/public/css/tpl/planning.css">

    <link rel="stylesheet" href="/public/css/fullcalendar.css">
    <link rel="stylesheet" href="/public/css/mail.css">

    <?php if(!isset($_SESSION['login_user'])){ ?>
        <link rel="stylesheet" href="/public/css/login.css">
    <?php } ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Quicksand' type='text/css'>

    <script src="/public/js/jquery-2.1.3.min.js"></script>
    <script src="/public/js/script.js"></script>
</head>

<body>
    <?php if(isset($_SESSION['login_user'])){ ?>
        <header id="header">
            <div class="header-brand"></div>
            <div class="user-informations">
                <p class="name"><?php echo $_SESSION['login_user']['firstname'] ?> <?php echo $_SESSION['login_user']['lastname'] ?></p>
                <p class="statut"><?php echo $_SESSION['login_user']['fonction'] ?></p>
                <a href="/user/logout" class="logout btn btn-default">Déconnexion</a>
                <div class="hostel">
                    <p class="hostel-name">Hôtel Marais Bastille</p>
                    <p class="hostel-adress">36 Bd Richard Lenoir <br /> 75011 Paris</p>
                </div>
            </div>

            <nav id="main-nav">
                <ul>
                    <li><a href="/index" title="Accueil"><i class="fa fa-home"></i> Accueil</a></li>
                    <li><a href="/mail" title="Messagerie"><i class="fa fa-envelope"></i> Messagerie</a></li>
                    <li><a href="/planning" title="Planning"><i class="fa fa-calendar"></i> Planning</a></li>
                    <li><a href="/hostels" title="Hôtels"><i class="fa fa-bed"></i> Hôtels</a></li>
                </ul>
            </nav>

            <nav id="responsive-main-nav">
                <ul>
                    <li><a href="/index" title="Accueil"><i class="fa fa-home"></i></a></li>
                    <li><a href="/mail" title="Messagerie"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="/planning" title="Planning"><i class="fa fa-calendar"></i></a></li>
                    <li><a href="/hostels" title="Planning"><i class="fa fa-bed"></i></a></li>
                </ul>
            </nav>
        </header>

    <div class="content">
        <div class="content-inner container-fluid">
            <div class="row">
                <form method="search" id="search" class="col-md-9">
                    <input type="search" placeholder="Recherche" name="the_search">
                </form>
                <div id="languages">
                    <a href="/index" title="Version française"><span id="french" class="language col-md-1">FR</span></a>
                    <a href="/index?lang=en" title="Version anglaise"><span id="english" class="language col-md-1">EN</span></a>
                </div>
            </div>
            <div class="row">
        		<?php include $this->view;?>
            </div>
        </div>
    <?php } else { ?>
        <div id="contenu">
            <div class="container-fluid">
                <?php include $this->view;?>
            </div>
        </div>
    <?php } ?>

     <script type="text/javascript">
        var userLang = navigator.language || navigator.userLanguage; 

        if(userLang == "fr") {
            document.getElementById("french").style.background = "#003d7e";
            document.getElementById("french").style.border = "1px solid #003d7e";
            document.getElementById("french").style.color = "#fff";
        }
    </script>
    
    
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/moment.min.js"></script><!-- calendar use -->
    <script src="/public/js/fullcalendar.js"></script><!-- calendar use -->

  </body>
</html>