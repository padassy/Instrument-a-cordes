<?php

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "contact":
            include "../publicView/contactView.php";
            break;
        case "article":
            include "../publicView/articleView.php";
            break;
        case "admin":
            include "../publicView/adminView.php";
            break;
        case "homePage":
            header("Location: ./");
            break;
        default:
            include "../view/404.php";
    }
} elseif (isset($_GET['idcategory']) && ctype_digit($_GET['idcategory'])) {
    $idcategory = (int) $_GET['idcategory'];
    $fetchCategory = fetchCategory($dbConnect, $idcategory);
    $dataCategory = dataCategory($fetchCategory);
    // var_dump($datasLinkByCateg);
    include "../view/liensView.php";
} else {
    include "../view/homepageView.php";
}
