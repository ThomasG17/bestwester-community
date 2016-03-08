<?php

//Chargement de la class Routing
$router = new Routing();

//Route Sans Paramètre
//Index
$router->get('/', 'Index@index');
$router->get('/index', 'Index@index');
//Ajout d'utilisateur
$router->get('/Exampleuser/ajout', 'User@index');
$router->get('/Exampleuser/test', 'User@test');

//Si l'url existe on prend l'url, sinon on mets "/"
$url = (isset($_GET['url'])) ? $_GET['url'] : '/';

//Traitement de l'url
$router->parse($url);
