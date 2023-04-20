<h1>Private</h1>
<?php
if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "contact":
            
            include_once "../publicView/contactView.php";
            break;
        case "article":
            $assetInstruAll = fetchAllInstrument($dbConnect);
            //var_dump($dataAllInstrument);
            foreach($assetInstruAll as $item){
               
                $instruments[] = new modelInstrument($item);
            }
            //var_dump($instruments);
            include "../publicView/articleView.php";
            break;
        case "admin":
            include_once "../publicView/adminView.php";
            break;
        case "private":

            $dataInstrumentHome = fetchInstrumentHome($dbConnect);

            include_once "../publicView/privateView.php";
            break;
        
            default:
            include_once "../view/404.php";
    }
       
    

      
    
    }elseif (isset($_GET['idcategory'])&& ctype_digit($_GET['idCategory'])){
        
        $fetchCategory = fetchCategory($dbConnect);
        

        foreach($fetchCategory as $item){

            $instruments[] = new modelInstrument($item);      
         }

         include_once "../publicView/articleView.php";

    }else if(isset($_GET['disconnect'])){
        disconnect();
        header("Location: ./");
        exit();
    }else{

    include "../privateView/privateView.php";

 }

 