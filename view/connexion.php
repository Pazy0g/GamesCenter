<!doctype html>
<html lang="fr">

<head>
    <title><?php echo $title ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

    <div class=" containerform login-form">
        <div class="imgContainer">

        </div>
        <div class="login-upper-text">
            <i class="fa-sharp fa-regular fa-user"></i>
            <h2>Connexion</h2>
        </div>
        <form action="" method="post">
            <div class="form-group" id="formdiv">
                <label for="pseudo" class="loginLabel">Pseudo</label>
                <input type="text" name="uid" class="form-control" id="input" placeholder="pseudo">
            </div>
            <div class="form-group">
                <label for="password" class="loginLabel">Mot de passe</label>
                <input type="password" name="pwd" class="form-control" id="input" placeholder="Mot de passe">
            </div>
            <button type="submit" id="loginSubmit" class="btn btn-primary">Valider</button>
        </form>
        <p id="login-back"><a href="<?php echo $root . "/index.php" ?>">Revenir à l'accueil</a></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>