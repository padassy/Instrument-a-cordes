
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>

        <nav>
            <?php
            require_once "../publicView/src/menu.php";
            ?>
        </nav>

    </header>

    <div class="pageContact">

        <h1>Contactez-nous</h1>
            <p>Une envie de nous envoyer un message ?</p>
            <p>Une question à nous poser ?</p>
            <p>Un problème rencontré lors de votre visite ?</p>
            <p>Veuillez utiliser ce formulaire pour prendre contact avec nous !</p>
            <p>Je me ferai un plaisir de vous répondre dans les plus brefs délais .</p>
              <form action="" method="post" id="contactForm">
                <div class="boxLabelInputContact">
                    <label for="nom">nom</label>
                    <input type="text" id="nom" name="nom" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="email">e-mail</label>
                    <input type="email" id="email" name="email" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="message">message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div id="buttonContact">
                    <button type="submit">Envoyer mon message.</button>
                </div>
              </form>
    </div>
    <footer>
        <?php
        require_once "../publicView/src/footer.php"
        ?>
    </footer>
       
</body>
</html>
