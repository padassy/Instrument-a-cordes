<?php

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "contact":
            include_once "../publicView/contactView.php";
            break;
        case "article":
            include_once "../publicView/articleView.php";
           # $countInstrument = rowCountInstrument($dbConnect);
            $dataAllInstrument = fetchAllInstrument($dbConnect);
            var_dump($dataAllInstrument);
            
            
            
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
} 
elseif (isset($_GET['idInstrument']) && ctype_digit($_GET['idInstrument'])){

    $idInstrument = (int) $_GET['idInstrument'];
    $dataDetailInstrument = fetchDetailInstrument($dbConnect,$idInstrument);
    var_dump($dataDetailInstrument);





} elseif (isset($_GET['idcategory']) && ctype_digit($_GET['idcategory'])) {
    $idcategory = (int) $_GET['idcategory'];
    $fetchCategory = fetchCategory($dbConnect, $idcategory);
    $dataCategory = dataCategory($fetchCategory);
    // var_dump($datasLinkByCateg);
    include_once "../publicView/liensView.php";




} else {
    $dataInstrumentHome = fetchInstrumentHome($dbConnect);
    var_dump($dataInstrumentHome);
    include_once "../publicView/homepageView.php";
}
