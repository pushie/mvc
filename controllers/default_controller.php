<?php
// dans le mvc : toujours codifier, même type de nom/nomenclature
// fonction : nom-de-l'action_action
function home_action()
{
    // $user = getUserById($_SESSION['user_id']);
    // $username = $user['username'];
    $username = 'Pushie';
    require('views/home.html');
}

function about_action()
{
    require('views/about.html');
}

function contact_action()
{
    require('views/contact.html');
}

 ?>
