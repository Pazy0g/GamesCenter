<!doctype html>
<html lang="fr">

<head>
    <title>GamesCenter - Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>

<body>
    <div class="entering-form">
        <div class=" containerform login-form">
            <div class="imgContainer"></div>
            <div class="login-upper-text">
                <i class="fa-sharp fa-regular fa-user"></i>
                <h2>Connexion</h2>
            </div>
            <form action="../controller/login.inc.php" method="post">
                <div class="form-group" id="formdiv">
                    <label for="pseudo" class="loginLabel">Pseudo</label>
                    <input type="text" name="uid" class="form-control loginInputs" id="inputUid" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <label for="password" class="loginLabel">Mot de passe</label>
                    <input type="password" name="pwd" class="form-control loginInputs" id="inputPwd" placeholder="Mot de passe">
                    <a href="#" id="forgotPwd">Mot de passe oublier ?</a>
                </div>

                <button type="submit" id="loginSubmit" class="btn btn-primary">Valider</button>
            </form>
            <p id="login-back"><a href="accueil.php">Revenir à l'accueil</a></p>

            <div class="inscription-back">
                <p id="sub-back">Pas de compte ?
                    <a href="inscription.php">s'inscrire</a>
                </p>
            </div>
        </div>



    </div>
    <script src="../../public/js/functions.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>