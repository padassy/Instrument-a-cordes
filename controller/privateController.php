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

if(isset($_POST['addInstrument'])){
            
            $lastInsert = addInstrument($dbConnect,$_POST['titre'],$_POST['intro'],$_POST['description'],$_POST['history'],$_POST['technics'],$_POST['btn-check-2-outlined']);
            echo "ajout instrument";
            addInstrumentHasCategory($dbConnect, $lastInsert,$_POST['category']);
            echo "ajout table many to many";
            if(!empty($_POST['firstnameMusician'])&&!empty($_POST['lastnameMusician'])){
                echo "musicien";
                addMusician($dbConnect, $_POST['firstnameMusician'],$_POST['lastnameMusician'],$_POST['bioMusician'],$lastInsert);
                echo "ajout musicien";
            }
        
    
};











