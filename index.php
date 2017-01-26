<?php

// views (v from mvc)

require('config/config.php');

if (empty($_GET['action']))
  $action = 'home';
else {
  $action = $_GET['action']; // action qui contient le nom de la page à laquelle on veux accéder
}

if(isset($routes[$action])) // on sait déjà qu'une page existe
{
  require('controllers/'.$routes[$action].'_controller.php');
  call_user_func($action.'_action'); // prends en paramètre le nom d'une fonction et l'appelle
}
else
{
  die('Illegal route');
}






/*if($action === 'home')
  require('views/home.html');  // génère une erreur, empêche la page de charger si y a qqch qui n'arrive pas à charger
else if ($action === 'about')
  require('views/about.html');
else if ($action === 'contact')
  require('views/contact.html');
else
  die('Unknown page');*/
?>
