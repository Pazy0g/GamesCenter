<?php require_once "layouts/head.php"; ?>
<?php require_once "layouts/header.php"; ?>

<body class="profile-body">



    <div class="profile-parent">
        <div class="profile-container">

            <div class="container text-center">

                <h1 class="mb-5">Profil utilisateur</h1>

                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Avatar" width="96px" height="96px" class="rounded-circle"> <br>
                <button class="btn btn-primary mt-3">Modifier l'avatar</button>

                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Pseudo:</strong></li>
                            <li class="list-group-item"><strong>Email:</strong> utilisateur123@gmail.com</li>
                            <li class="list-group-item"><strong>Jeux favoris:</strong> Call of Duty, Fortnite, FIFA</li>
                        </ul>
                        <br>
                        <button class="btn btn-success m-3" data-toggle="modal" data-target="#exampleModal">Modifier mon profil</button>
                        <button class="btn btn-danger m-3" data-toggle="modal" data-target="#confirm-delete">Supprimer mon profil</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier le profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="?action=edituserinfo">
                        <div class="form-group">
                            <label for="nom" class="col-form-label">pseudo:</label>
                            <input type="text" name="username" class="form-control" id="nom">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Mot de passe:</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
                <div class="modal-footer">


                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Voulez-vous vraiment supprimer votre compte?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    Cette action est irréversible. Êtes-vous sûr de vouloir supprimer votre compte?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <a href="?action=delete" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>