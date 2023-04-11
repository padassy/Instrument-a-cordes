<?php

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "contact":
            include_once "../publicView/contactView.php";
            break;
        case "article":
            include_once "../publicView/articleView.php";
            break;
        case "admin":
            include_once "../publicView/adminView.php";
            break;
        case "homepage":
            $dataInstrumentHome = fetchInstrumentHome($dbConnect);
            include_once "../publicView/homepageView.php";
            break;
        default:
            include_once "../view/404.php";
    }
} elseif (isset($_GET['idcategory']) && ctype_digit($_GET['idcategory'])) {
    $idcategory = (int) $_GET['idcategory'];
    $fetchCategory = fetchCategory($dbConnect, $idcategory);
    $dataCategory = dataCategory($fetchCategory);
    // var_dump($datasLinkByCateg);
    include_once "../publicView/liensView.php";
} else {
    $dataInstrumentHome = fetchInstrumentHome($dbConnect);
    include_once "../publicView/homepageView.php";
     if(isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
   
    $userLogin = $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];
  
    $userLogin = filter_var($userLogin, FILTER_SANITIZE_EMAIL);  
    $userPassword = password_hash($userPassword, PASSWORD_DEFAULT);  
}
  
 

$userConnect = userConnect($dbConnect,$userLogin,$userPassword);

if (is_string($userConnect)) {
  echo "La variable \$userConnect contient uniquement du texte.";
} else {
  echo "La variable \$userConnect ne contient pas uniquement du texte.";
}

// Vérification de la validité de la connexion
if(isset($_POST['userLogin']) && isset($_POST['userPassword'])){
 header("Location: accueil.php");
  exit(); 
} else {
   
  echo "La connexion a échoué.";

}
