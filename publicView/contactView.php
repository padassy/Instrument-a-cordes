
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icone/lecteur-de-musique.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>

        <nav>
            <?php
            require_once "../publicView/src/menu.php";
            require_once "../publicView/src/error.php";

            ?>
        </nav>

    </header>

    <div class="pageContact">
        <div id="boxIntroContact">

        

        <h1>Contactez-nous</h1>
            <p>Une envie de nous envoyer un message ?</p>
            <p>Une question à nous poser ?</p>
            <p>Un problème rencontré lors de votre visite ?</p>
            <p>Veuillez utiliser ce formulaire pour prendre contact avec nous !</p>
            <p>Je me ferai un plaisir de vous répondre dans les plus brefs délais .</p>
        </div>
              <form action="" method="post" id="contactForm">
                <div class="boxLabelInputContact">
                    <label for="firstname">Votre prénom :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="lastname">Votre nom :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="mail">Votre mail :</label>
                    <input type="mail" id="email" name="mail" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="message">Votre message :</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div id="buttonContact">
                    <button type="submit">Envoyer </button>
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
