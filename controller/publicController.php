<?php
$temps = microtime(true);
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "contact":
            include_once "../publicView/contactView.php";
            break;
        case "article":
            $assetInstruAll = fetchAllInstrument($dbConnect);
            //var_dump($dataAllInstrument);
            foreach($assetInstruAll as $item){
                /*if (is_array($instruments[])){
                    $instrument= explode($instruments,'||');
                }*/
                $instruments[] = new modelInstrument($item);
            }
            var_dump($instruments);
            include "../publicView/articleView.php";
            
            
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
    $detailInstrument = new modelInstrument($dataDetailInstrument);
    var_dump($detailInstrument);



} elseif (isset($_GET['idcategory']) && ctype_digit($_GET['idcategory'])) {
    $idcategory = (int) $_GET['idcategory'];
    $fetchCategory = fetchCategory($dbConnect, $idcategory);
    $dataCategory = dataCategory($fetchCategory);
    // var_dump($datasLinkByCateg);
    include_once "../publicView/liensView.php";




} else {
    $dataInstrumentHome = fetchInstrumentHome($dbConnect);
    //var_dump($dataInstrumentHome);
    include_once "../publicView/homepageView.php";
}
   
if(isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
   
    $userLogin = $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];

  
    $userLogin = filter_var($userLogin, FILTER_SANITIZE_EMAIL);  
    $userPassword = password_hash($userPassword, PASSWORD_DEFAULT);  


    $userConnect = connectAdmin($dbConnect,$userLogin,$userPassword);
    if (is_string($userConnect)) {
        $erreur = $userConnect;
    }
  
   // redirection si connexion ok
    if ($userConnect===true) {
        // redirection sur index.php
        header("Location:./");
    }
}





if(isset($_POST["firstname"],$_POST["lastname"],$_POST["message"])&&filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
    $firstname = htmlspecialchars(strip_tags(trim($_POST['firstname'])),ENT_QUOTES);
    $lastname = htmlspecialchars(strip_tags(trim($_POST['lastname'])),ENT_QUOTES);
    $mail =htmlspecialchars(strip_tags(trim($_POST['mail'])),ENT_QUOTES);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);
   try{

   //pour l'utilisateur
   $mail =(new Email())
   ->from(MAIL_FROM)
   ->to($mail)
   ->subject('Votre message a bien été posté !')
   ->text('Votre message a bien été posté !\r\n '."\r\n". 'X-Mailer:PHP/'.phpversion())
   ->html('<p>Votre message a bien  été posté !<br><br> </p>'); 
   $mailer->send($mail);    

    
   //pour admin 
   $mail =(new Email())
   ->from(MAIL_FROM)
   ->to(MAIL_ADMIN)
   ->subject('Un nouveau message est arrivé sur votre site !')
   ->text('Un nouveau message est arrivé sur votre site !\r\n '."\r\n". 'Poste par :'.$mail)
   ->html('<p>Un nouveau message est arrivé sur votre site  !<br><br>'. 'Poste par : '.$mail.'</p>'); 
   $mailer->send($mail);    

     $e ="Merci pour votre commentaire" ; 
 

   }catch (Exception $e) {
     $e = throw new Exception ("Un problème est survenu  !");

    }

}else if(isset($_POST['mail'])&&!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
   $e = throw new Exception ("Veuillez rentrer un mail valide !") ; 
}
$tempsEnd = microtime(true);

echo $tempsEnd-$temps;