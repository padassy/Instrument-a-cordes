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
            header("Location: ./");
            break;
        default:
            include_once "../view/404.php";
    }
} elseif (isset($_GET['idcategory']) && ctype_digit($_GET['idcategory'])) {
    $idcategory = (int) $_GET['idcategory'];
    $fetchCategory = fetchCategory($dbConnect, $idcategory);
    $dataCategory = dataCategory($fetchCategory);
    // var_dump($datasLinkByCateg);
    include_once "../view/liensView.php";
} else {
    include_once "../view/homepageView.php";
}
