<?php
    if(isset($_SESSION['login_user'])){
        //header("location: index.php");
    }else{
        var_dump("Non");
    }
?>
<?php var_dump($_SESSION) ?>
<?php var_dump($_SESSION['login_user']) ?>
<?php var_dump($_SESSION['firstname']) ?>
<?php var_dump($_SESSION['lastname']) ?>
<?php var_dump($_SESSION['job']) ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link href="/public/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="/public/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

    <title>Best Western Community</title>
</head>

<body>
    <?php
    if(isset($_SESSION['login_user'])){ ?>
        <header id="header">
                <div class="header-brand"></div>
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
                        <li><a href="javascript:void(0);" title="Accueil">Accueil</a></li>
                        <li><a href="javascript:void(0);" title="Messagerie">Messagerie</a></li>
                        <li><a href="javascript:void(0);" title="Planning">Planning</a></li>
                        <li><a href="javascript:void(0);" title="Événements">Événements</a></li>
                    </ul>
                </nav>
        </header>
    <?php } ?>
    <div id="content">
        <div class="container-fluid">



    		<?php include $this->view;?>
        </div>

    </div>
    
    <script src="/public/js/jquery-2.1.3.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>

  </body>
</html>