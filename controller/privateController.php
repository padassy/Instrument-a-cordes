<h1>Private</h1>

<?php
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "disconnect":
            disconnect();
            header("Location: ./");
            break;

        }
    }
    else{
        include_once "../publicView/adminView.php";
    }
