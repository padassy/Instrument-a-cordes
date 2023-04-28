<?php
if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "addInstrument":
            $category = fetchCategory($dbConnect);
            #var_dump($category);
            include_once "../privateView/addInstrument.php";
        break;

        case "addMusician":
            $category = fetchCategory($dbConnect);
            $dataInstrumentAdminAdd = fetchInstrumentAdminAdd($dbConnect);
            #var_dump($category);
            $allMusician = allMusician($dbConnect);
            //var_dump($dataAllInstrument);
            foreach($allMusician as $item){
                /*if (is_array($instruments[])){
                    $instrument= explode($instruments,'||');
                }*/
                $musicians[] = new modelInstrument($item);
            }
            include_once "../privateView/addMusician.php";
        break;

        case "addPicture":
            $category = fetchCategory($dbConnect);

            $dataInstrumentAdminAdd = fetchInstrumentAdminAdd($dbConnect);

            $allPicture = allPicture($dbConnect);
            //var_dump($dataAllInstrument);
            foreach($allPicture as $item){
                /*if (is_array($instruments[])){
                    $instrument= explode($instruments,'||');
                }*/
                $pictures[] = new modelInstrument($item);
            }
            #var_dump($category);
            #var_dump($dataInstrumentAdminAdd);
            include_once "../privateView/addPicture.php";
        break;

        case "addSound":
            $category = fetchCategory($dbConnect);

            $dataInstrumentAdminAdd = fetchInstrumentAdminAdd($dbConnect);
            $allSound = allSound($dbConnect);
            //var_dump($dataAllInstrument);
            foreach($allSound as $item){
                /*if (is_array($instruments[])){
                    $instrument= explode($instruments,'||');
                }*/
                $sounds[] = new modelInstrument($item);
            }
            #var_dump($category);
            include_once "../privateView/addSound.php";
        break;
    }
            
 


    }else if(isset($_GET['disconnect'])){
        disconnect();
        header("Location: ./");
        exit();
    
    }else if (isset($_GET['idInstrumentDelete'])){
        $idInstrumentDelete = (int) $_GET['idInstrumentDelete'];

        deleteInstrument($dbConnect,$idInstrumentDelete);

    }
    else if (isset($_GET['idSoundDelete'])){
        $idSoundDelete = (int) $_GET['idSoundDelete'];

        deleteSound($dbConnect,$idSoundDelete);

    }
    else if (isset($_GET['idPictureDelete'])){
        $idPictureDelete = (int) $_GET['idPictureDelete'];

        deletePicture($dbConnect,$idPictureDelete);

    }
    else if (isset($_GET['idMusicianDelete'])){
        $idMusicianDelete = (int) $_GET['idMusicianDelete'];

        deleteMusician($dbConnect,$idMusicianDelete);

    }

   






    else{
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


 if(isset($_POST['addInstrument'])){
        echo "addInstrument";
        if (!empty($_POST['titre'])&&!empty($_POST['intro'])&&!empty($_POST['description'])&&!empty($_POST['history'])&&!empty($_POST['technics'])&&!empty($_POST['btn-check-2-outlined'])){

            try{

                $lastInsert = addInstrument($dbConnect,$_POST['titre'],$_POST['intro'],$_POST['description'],$_POST['history'],$_POST['technics'],$_POST['btn-check-2-outlined']);

                addInstrumentHasCategory($dbConnect, $lastInsert,$_POST['category']);

            }catch(Exception $e){
                $e = throw new Exception("Un problème est survenu lors de l'ajout de l'instrument veuillez réessayer");
            }
            #echo "ajout instrument";

            
        
            #echo "ajout table many to many";
            #var_dump($_POST);

            if(!empty($_POST['titleImage'])&&!empty($_POST['descriptionImage'])&&!empty($_FILES['addPicture'])&&!empty($lastInsert)){
        

                if ($_FILES['addPicture']['error']===0){
        
                    try{
                            
                        addPicture($dbConnect, $_POST['titleImage'],$_POST['descriptionImage'],$_FILES['addPicture'],$lastInsert);
        
                    }catch(Exception $e){
                        $e = throw new Exception ("Un problème est survenu lors de l ajout de l'image, veuillez réessayer");
                    }
        
                }else{
                    $e = throw new Exception ('Veuillez insérer une image plus petite');
                }



            }
             if(!empty($_POST['lastnameMusician'])&&!empty($_POST['firstnameMusician'])&&!empty($lastInsert)){

                #echo "musicien";
                    try{
                        addMusician($dbConnect, $_POST['firstnameMusician'],$_POST['lastnameMusician'],$_POST['bioMusician'],$lastInsert);
    
                    }catch(Exception $e){
                        #echo "ajout musicien";
                        $e = throw new Exception("Un problème est survenu lors de l ajout de l'artiste, veuillez réessayer");
                    }



            }
              if(!empty($_POST['titleSound'])&&!empty($_FILES['addSound'])&&!empty($lastInsert)){
                #echo "addSound";
        

                if ($_FILES['addSound']['error']===0){
        
                    try{
                        #echo "addSound before function ";
                        addSound($dbConnect, $_POST['titleSound'],$_POST['descriptionSound'],$_FILES['addSound'],$lastInsert);
        
                    }catch(Exception $e){
                        $e = throw new Exception ("Un problème est survenu lors de l'ajout de l audio , veuillez réessayer");
                    }
        
                }else{
                    $e = throw new Exception ('Veuillez insérer un audio plus petit');
                }
            }        
        
        #echo "fin";
        
        }else{
            $e = throw new Exception('Veuillez remplir tous les champs nécessaires, merci');
        }



    }



   if(isset($_POST['addMusician'])){
    if(!empty($_POST['lastnameMusician'])&&!empty($_POST['firstnameMusician'])&&!empty($_POST['idInstrument'])){

        #echo "musicien";
        try{
            addMusician($dbConnect, $_POST['firstnameMusician'],$_POST['lastnameMusician'],$_POST['bioMusician'],$_POST['idInstrument']);

        }catch(Exception $e){
        #echo "ajout musicien";
            $e = throw new Exception ("Un problème est survenu lors de l ajout de l'artiste, veuillez réessayer");
        }

    }else{
        $e = throw new Exception('Veuillez remplir tous les champs nécessaires, merci');
    }




}

if(isset($_POST['addPicture'])){
    
    if(!empty($_POST['titleImage'])&&!empty($_POST['descriptionImage'])&&!empty($_FILES)&&!empty($_POST['idInstrument'])){
        

        if ($_FILES['addPicture']['error']===0){

            try{
                    
                addPicture($dbConnect, $_POST['titleImage'],$_POST['descriptionImage'],$_FILES,$_POST['idInstrument']);

            }catch(Exception $e){
                $e = throw new Exception ("Un problème est survenu lors de l ajout de l'image, veuillez réessayer");
            }

        }else{
            $e = throw new Exception ('Veuillez insérer une image plus petite');
        }

    }else{
        $e = throw new Exception('Veuillez remplir tous les champs nécessaires, merci');
    }


}


 if(isset($_POST['addSound'])){
    #echo"addSound else if";
    
    if(!empty($_POST['titleSound'])&&!empty($_FILES)&&!empty($_POST['idInstrument'])){
        

        if ($_FILES['addSound']['error']===0){

            try{
                    
                addSound($dbConnect, $_POST['titleSound'],$_POST['descriptionSound'],$_FILES,$_POST['idInstrument']);

            }catch(Exception $e){
                $e = throw new Exception ("Un problème est survenu lors de l'ajout de l audio , veuillez réessayer");
            }

        }else{
            $e = throw new Exception ('Veuillez insérer un audio plus petit');
        }

    }else{
        $e = throw new Exception('Veuillez remplir tous les champs nécessaires, merci');
    }

} 













