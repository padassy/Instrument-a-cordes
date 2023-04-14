<h1>Private</h1>
<?php
if (isset($_GET['p']))

  

if(isset($_GET['disconnect'])){
    disconnect();
    header("Location: ./");
    exit();
}









/* code erreur*/
/*if(is_bool($recupPost)){
        # récupération du menu pour l'erreur 404
        $recupMenu = getAllCategoryMenu($connectPDO);
        // création de l'erreur pour la 404
        $error = "Cet article n'existe plus";
        // appel de la vue 404
        include_once "../view/publicView/404View.php";*/

 