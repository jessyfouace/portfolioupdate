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
require("config.php");
$title = "Portfolio JF - Pannel Admin";

$projetManager = new ProjetManager($db);
$messageManager = new MessageManager($db);
$adminManager = new AdminManager($db);

if (isset($_SESSION['mail'])) {
    $checkIfAccountExist = $adminManager->getAdminByMail($_SESSION['mail']);
    if ($checkIfAccountExist) {
        if (password_verify($_SESSION['password'], $checkIfAccountExist->getPassword())) {
        } else {
            header('location: accueil');
            session_destroy();
        }
    } else {
        header('location: accueil');
        session_destroy();
    }
} else {
    header('location: accueil');
    session_destroy();
}

if(isset($_GET['addProjet'])){
    
} else if (isset($_GET['editProjet'])) {
    
} else if (isset($_GET['viewMessage'])) {
    $allMessages = $messageManager->getMessages();
} else if (isset($_GET['viewDetailMessage'])) {
    $messageById = $messageManager->getMessageById($_GET['viewDetailMessage']);
}

if(isset($_POST['idMessage'])) {
    $messageManager->deleteMessageById($_POST['idMessage']);
    header('location: pannel?viewMessage=true');
}

require '../views/pannelVue.php';