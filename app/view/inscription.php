<?php require_once 'layouts/head.php'; ?>

<body>
    <div class="entering-form">
        <div class=" containerform login-form signup-form">
            <div class="imgContainer">

            </div>
            <div class="login-upper-text">
                <i class="fa-sharp fa-regular fa-user"></i>
                <h2>Inscription</h2>
            </div>
            <form action="../../../GamesCenter/app/controller/userController.php" method="post">
                <div class="form-group" id="formdiv-signup">
                    <label for="pseudo" class="SignupLabel">Pseudo</label>
                    <input type="text" name="uid" class="form-control signupInputs" id="SignupInputUid" placeholder="Pseudo">

                </div>
                <div class="form-group">
                    <label for="email" class="SignupLabel">Email</label>
                    <input type="email" name="email" class="form-control signupInputs" id="SignupInputEmail" placeholder="votre email">
                </div>
                <div id="respPwd" class="form-group">
                    <label for="password" class="SignupLabel">Mot de passe</label>
                    <input type="password" name="pwd" class="form-control loginInputs" id="SignupInputPwd" placeholder="Mot de passe">
                </div>
                <div class="form-check">
                    <label id="RGPDLABEL" class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="" id="rgpd" value="rgpd">
                        Vous devez accepter la RGPD pour vous inscrire
                    </label>
                </div>
                <button type="submit" id="SignupSubmit" name="submit" class="btn btn-primary">Valider</button>

                <p id="Signup-back"><a href="?action=accueil">Revenir à l'accueil</a></p>

                <div class="inscription-back">
                    <p id="con-back">Déjà inscrit ?
                        <a href="?action=connexion">se connecter</a>
                    </p>
                </div>
            </form>
        </div>

        <script src="public/js/SignupValidator.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>