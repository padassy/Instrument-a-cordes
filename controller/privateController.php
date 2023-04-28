<?php
if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "add":
            $category = fetchCategory($dbConnect);
            #var_dump($category);
            include_once "../privateView/add.php";
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

         include_once "../privateView/privateView.php";

 }  

if(isset($_GET['disconnect'])){
    disconnect();
    header("Location: ./");
    exit();
}

if(isset($_POST['addInstrument'])){
        echo "addInstrument";
        if (!empty($_POST['titre'])&&!empty($_POST['intro'])&&!empty($_POST['description'])&&!empty($_POST['history'])&&!empty($_POST['technics'])&&!empty($_POST['btn-check-2-outlined'])){

            try{

            $lastInsert = addInstrument($dbConnect,$_POST['titre'],$_POST['intro'],$_POST['description'],$_POST['history'],$_POST['technics'],$_POST['btn-check-2-outlined']);

            addInstrumentHasCategory($dbConnect, $lastInsert,$_POST['category']);

            }catch(Exception $e){
                $e = "Un problème est survenu lors de l'ajout de l'instrument veuillez réessayer";
            }
            #echo "ajout instrument";

            
        
            #echo "ajout table many to many";
            var_dump($_POST);

            if(!empty($_POST['lastnameMusician'])&&!empty($_POST['firstnameMusician'])&&!empty($lastInsert)){

            #echo "musicien";
            try{
            addMusician($dbConnect, $_POST['firstnameMusician'],$_POST['lastnameMusician'],$_POST['bioMusician'],$lastInsert);

            }catch(Exception $e){
            #echo "ajout musicien";
            $e = "Un problème est survenu lors de l ajout de l'artiste, veuillez réessayer";
            }
        }
        
        #echo "fin";
        
    }
};











