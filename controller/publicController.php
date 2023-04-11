 <?php
 
if (file_exists('articleView.php')) {
    include_once('articleView.php');
  } else {
    include('404View.php');
  }
  
  session_start();
  if (isset($_SESSION['admin'])) {

  } else {
    header('Location: login.php');
    exit();
  }

  
  if(isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
   
    $userLogin = $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];
  
    $userLogin = filter_var($userLogin, FILTER_SANITIZE_EMAIL);  
    $userPassword = password_hash($userPassword, PASSWORD_DEFAULT);  
}
  
 
function connectUser() {
     echo "User connected!";
}
$userConnect = "connectUser";
$userConnect();

if (is_string($userConnect)) {
  echo "La variable \$userConnect contient uniquement du texte.";
} else {
  echo "La variable \$userConnect ne contient pas uniquement du texte.";
}

// Vérification de la validité de la connexion
if(isset($_POST['userLogin']) && isset($_POST['userPassword'])){
 header("Location: accueil.php");
  exit(); 
} else {
   
  echo "La connexion a échoué.";
}
