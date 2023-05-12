<?php
session_start();
if (isset($_POST['link'])) {
    // Vérifier si la variable de session existe déjà
    if (!isset($_SESSION)) {
        $_SESSION['clicked_links'] = array();
    }

    // Ajouter le lien cliqué au tableau de la variable de session
    $_SESSION['clicked_links'] = $_POST['link'];
}
var_dump($_POST);