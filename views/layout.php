<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">

    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/media-queries.css">
    <link rel="stylesheet" href="/public/css/tpl/home.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat' type='text/css'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Quicksand' type='text/css'>

    <title>Best Western Community</title>
</head>

<body>
    <header id="header">
        <h1 class="header-brand"></h1>
        <div class="user-informations">
            <p class="name">Nom prénom</p>
            <p class="statut">Fonction</p>
            <div class="hostel">
                <p class="hostel-name">Hôtel Marais Bastille</p>
                <p class="hostel-adress">36 Bd Richard Lenoir <br /> 75011 Paris</p>
            </div>
        </div>

        <nav id="main-nav">
            <ul>
                <li><a href="javascript:void(0);" title="Accueil"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="javascript:void(0);" title="Messagerie"><i class="fa fa-envelope"></i> Messagerie</a></li>
                <li><a href="javascript:void(0);" title="Planning"><i class="fa fa-calendar"></i> Planning</a></li>
                <li><a href="javascript:void(0);" title="Hôtels"><i class="fa fa-bed"></i> Hôtels</a></li>
            </ul>
        </nav>

        <nav id="responsive-main-nav">
            <ul>
                <li><a href="javascript:void(0);" title="Accueil"><i class="fa fa-home"></i></a></li>
                <li><a href="javascript:void(0);" title="Messagerie"><i class="fa fa-envelope"></i></a></li>
                <li><a href="javascript:void(0);" title="Planning"><i class="fa fa-calendar"></i></a></li>
                <li><a href="javascript:void(0);" title="Planning"><i class="fa fa-bed"></i></a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="search" id="search">
                    <input type="search" placeholder="Recherche" name="the_search">
                </form>
            </div>
    		<?php include $this->view;?>
        </div>
    </div>
    
    <script src="/public/js/jquery-2.1.3.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>

  </body>
</html>