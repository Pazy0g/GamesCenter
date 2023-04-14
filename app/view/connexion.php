<?php require_once 'layouts/head.php'; ?>

<body>


    <div class="entering-form">
        <div class=" containerform login-form">
            <div class="imgContainer"></div>
            <div class="login-upper-text">
                <i class="fa-sharp fa-regular fa-user"></i>
                <h2>Connexion</h2>
            </div>
            <form action="?action=login" method="post">
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
            <p id="login-back"><a href="?action=accueil">Revenir à l'accueil</a></p>

            <div class="inscription-back">
                <p id="sub-back">Pas de compte ?
                    <a href="?action=inscription">s'inscrire</a>
                </p>
            </div>
        </div>



    </div>
    <script src="../../public/js/loginValidator.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>