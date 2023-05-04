<?php
$category = fetchCategory($dbConnect);
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// création des variables pour l'envoi de mail
$transport = Transport::fromDsn(DNS_MAILER);
$mailer = new Mailer($transport);
$temps = microtime(true);
if(isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
    var_dump($_POST);
     $userLogin = htmlspecialchars(strip_tags(trim($_POST['userLogin'])),ENT_QUOTES);
     $userPassword = htmlspecialchars(strip_tags(trim($_POST['userPassword'])),ENT_QUOTES); 
 
 
     $userConnect = connectAdmin($dbConnect,$userLogin,$userPassword);
     if (is_string($userConnect)) {
         $erreur = $userConnect;
     }
   
    // redirection si connexion ok
     if ($userConnect===true) {
         // redirection sur index.php
         header("Location: ./");
     }
 }
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
            #var_dump($instruments);
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
    include_once "../publicView/detailArticleView.php";
  



} elseif (isset($_GET['idCategory']) && ctype_digit($_GET['idCategory'])) {
    $idCategory = (int) $_GET['idCategory'];
    $allCategory = recupCategoryById($dbConnect, $idCategory);
    foreach($allCategory as $item): 
        $categoryInstrument[] = new modelInstrument($item);  
    endforeach;
    #var_dump($categoryInstrument);
    include_once "../publicView/articleView.php";




} else {
    $dataInstrumentHome = fetchInstrumentHome($dbConnect);
    //var_dump($dataInstrumentHome);
    include_once "../publicView/homepageView.php";
}
   






if(isset($_POST["firstname"],$_POST["lastname"],$_POST["message"])&&filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
    $firstname = htmlspecialchars(strip_tags(trim($_POST['firstname'])),ENT_QUOTES);
    $lastname = htmlspecialchars(strip_tags(trim($_POST['lastname'])),ENT_QUOTES);
    $mailCustomer =trim($_POST['mail']);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);
    #var_dump($_POST);
   try{
   #echo "avant le try";
   //pour l'utilisateur
   $mail =(new Email())
   ->from(MAIL_FROM)
   ->to($mailCustomer)
   ->subject('Votre message a bien été posté !')
   ->text('Votre message a bien été posté !\r\n \r\n sur le site https://www.instruments-a-cordes.webdev-cf2m.be/')
   ->html('<p>Votre message a bien été posté !<br><br>sur le site  https://www.instruments-a-cordes.webdev-cf2m.be/</p>'); 
   #echo "avant le send";
   $mailer->send($mail);    

    
   //pour admin 
   $mail =(new Email())
   ->from(MAIL_FROM)
   ->to(MAIL_ADMIN)
   ->subject('Un nouveau message est arrivé sur votre site !')
   ->text('Un nouveau message est arrivé sur votre site !\r\n \r\n Posté par ' . $mailCustomer)
   ->html('<p>Un nouveau message est arrivé sur votre site !<br><br>Posté par ' . $mailCustomer . '</p>'); 
   $mailer->send($mail);    

     $e ="Merci pour votre commentaire"; 
 

   }catch (Exception $e) {
     $e = throw new Exception ("Un problème est survenu  !");

    }

}else if(isset($_POST['mail'])&&!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
   $e = throw new Exception ("Veuillez entrer un mail valide svp") ; 
}
$tempsEnd = microtime(true);

#echo $tempsEnd-$temps;