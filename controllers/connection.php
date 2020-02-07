<?php
function chargerClasse($classname)
{
    if (file_exists('../model/' . ucfirst($classname) . '.php')) {
    	require '../model/' . ucfirst($classname) . '.php';
    } elseif (file_exists('../entities/' . ucfirst($classname) . '.php')) {
    	require '../entities/' . ucfirst($classname) . '.php';
    } elseif (file_exists('../traits/' . ucfirst($classname) . '.php')) {
    	require '../traits/' . ucfirst($classname) . '.php';
    } else {
    	require '../interface/' . ucfirst($classname) . '.php';
    }
}

session_start();
spl_autoload_register('chargerClasse');
$db = Database::BDD();
$title = "Portfolio JF - Connection";

require("config.php");

$adminManager = new AdminManager($db);

if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
    $checkIfAccountExist = $adminManager->getAdminByMail($_SESSION['mail']);
    if ($checkIfAccountExist) {
        if (password_verify($_SESSION['password'], $checkIfAccountExist->getPassword())) {
            header('location: pannel');
        }
    }
} 

if (isset($_POST['mail']) && isset($_POST['password']))
{
    if (!empty($_POST['mail']) && !empty($_POST['password'])) {
        if (preg_match("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $_POST['mail'])) {
            $checkIfAccountExist = $adminManager->getAdminByMail($_POST['mail']);
            if ($checkIfAccountExist) {
                if (password_verify($_POST['password'], $checkIfAccountExist->getPassword())) {
                    $_SESSION['mail'] = $_POST['mail'];
                    $_SESSION['password'] = $_POST['password'];
                    header('location: pannel');
                }
            }
        }
    }
}

// $NAMEMANAGER = new NAMEMANAGER($db);

require '../views/connectionVue.php';