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
}


if(isset($_POST["firstname"],$_POST["lastname"],$_POST["message"])&&filter_var($_POST['mail']),FILTER_VALIDATE_EMAIL){
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
 

    catch (Exception $e) {
     $e = throw new Exception ("Un problème est survenu  !");

    }

}else if(!filter_var($_POST['mail']),FILTER_VALIDATE_EMAIL) {
   $e = throw new Exception ("Veuillez rentrer un mail valide !") ; 
}

