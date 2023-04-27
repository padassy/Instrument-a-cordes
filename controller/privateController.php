<?php
if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "add":
            $category = fetchCategory($dbConnect);
            #var_dump($category);
            require_once "../privateView/add.php";
        break;
    }
            
 


    }else if(isset($_GET['disconnect'])){
        disconnect();
        header("Location: ./");
        exit();
    }else{
        $assetInstruAll = fetchAllInstrument($dbConnect);
        //var_dump($dataAllInstrument);
        foreach($assetInstruAll as $item){
            /*if (is_array($instruments[])){
                $instrument= explode($instruments,'||');
            }*/
            $instruments[] = new modelInstrument($item);
        }

         include "../privateView/privateView.php";

 }  

if(isset($_GET['disconnect'])){
    disconnect();
    header("Location: ./");
    exit();
}











