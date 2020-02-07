<?php

function chargerClasse($classname)
{
    if (file_exists('../model/'. ucfirst($classname).'.php')) {
        require '../model/'. ucfirst($classname).'.php';
    } elseif (file_exists('../entities/'. ucfirst($classname).'.php')) {
        require '../entities/'. ucfirst($classname).'.php';
    } elseif (file_exists('../traits/'. ucfirst($classname).'.php')) {
        require '../traits/'. ucfirst($classname).'.php';
    } else {
        require '../interface/'. ucfirst($classname).'.php';
    }
}
session_start();
spl_autoload_register('chargerClasse');
$db = Database::BDD();
$title = 'Portfolio JF - Accueil';
require "config.php";

$messageManager = new MessageManager($db);

$messageError = '';
$colorError = '';

$firstname = "";
$lastname = "";
$mail = "";
$phone = "";
$messages = "";

require "../views/indexVue.php";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['message'])) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
        if (!empty($_POST['phone'])) {
            $phone = (int) $_POST['phone'];
        } else {
            $phone = 0000000000;
        }
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $mail = htmlspecialchars($_POST['mail']);
        $messages = htmlspecialchars(strip_tags($_POST['message']));
        $messages = nl2br($messages);

        $message = new Messages([
            'firstName' => $firstname,
            'lastName' => $lastname,
            'phone' => $phone,
            'mail' => $mail,
            'message' => $messages
        ]);

        $sendMessage = $messageManager->addMessage($message);

        if ($sendMessage) {
            $messageError = 'Message envoyé avec succès !';
            $colorError = 'text-success';
        } else {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $mail = htmlspecialchars($_POST['mail']);
            $messages = htmlspecialchars(strip_tags($_POST['message']));
            $messages = nl2br($messages);

            $messageError = 'Erreur: Vérifiez vos champs.';
            $colorError = 'text-danger';
        }
    } else {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        if (!empty($_POST['phone'])) {
            $phone = "0".(int)$_POST['phone'];
        } else {
            $phone = "";
        }
        $mail = htmlspecialchars($_POST['mail']);
        $messages = htmlspecialchars(strip_tags($_POST['message']));
        $messages = nl2br($messages);

        $messageError = 'Erreur: Vérifiez vos champs.';
        $colorError = 'text-danger';
    }
}