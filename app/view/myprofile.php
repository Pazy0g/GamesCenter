<?php require_once "layouts/head.php"; ?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 order-md-1 mb-4">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png">
                    <span class="font-weight-bold">Pseudo</span>
                    <span class="text-black-50">mail@mail.com</span>
                    <div class="pt-3">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#changerAvatarModal">
                            Changer l'avatar
                        </button>
                    </div>


                </div>


            </div>

            <div id="wrapper"></div>
            <div class="col-md-9 order-md-1">
                <h1 class="mb-5">Mon compte utilisateur</h1>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <div class="card bg-dark">
                            <div class="card-body   ">
                                <p class="card-text text-white"><strong>Pseudo:</strong> Nom d'utilisateur</p>
                                <p class="card-text text-white"><strong>Email:</strong> utilisateur@mail.com</p>



                                <!-- Bouton pour ouvrir la modal -->
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#edit-profile-modal">
                                    Modifier le Profil
                                </button>
                                <button class="btn btn-danger profile-suppr mb-3" type="button">Supprimer mon compte</button>

                                <!-- Fenêtre modale pour modifier le profil -->

                                <div class="container pt-4">
                                    <h3 class="text-center text-white">Mes jeux préférés</h1>
                                        <table class="table table-striped text-white">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Jeu</th>
                                                    <th>Commentaires</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>The Legend of Zelda: Breath of the Wild</td>
                                                    <td>Ce jeu est incroyablement vaste et immersif.</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Super Mario Odyssey</td>
                                                    <td>J'aime les nouveaux ajouts à la formule Mario.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Animal Crossing: New Horizons</td>
                                                    <td>Ce jeu m'a aidé à garder le moral pendant le confinement.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>



                            <!-- Modal pour modifier l'avatar -->
                            <div class="modal fade" id="changerAvatarModal" tabindex="-1" role="dialog" aria-labelledby="changerAvatarModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="changerAvatarModalLabel">Modifier votre avatar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/changer_avatar" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <p>Choisissez votre nouvel avatar :</p>
                                                <div class="form-group text-center">

                                                    <input type="file" id="avatar" name="avatar" accept="image/*" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal pour modifier le profile -->
                            <div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile-modal-label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit-profile-modal-label">Modifier le profil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="username-input">Nom d'utilisateur</label>
                                                    <input type="text" class="form-control" id="username-input" placeholder="Entrez votre nom d'utilisateur">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email-input">Adresse e-mail</label>
                                                    <input type="email" class="form-control" id="email-input" aria-describedby="email-help" placeholder="Entrez votre adresse e-mail">
                                                    <small id="email-help" class="form-text text-muted">Nous ne partagerons jamais votre adresse e-mail avec qui que ce soit.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password-input">Mot de passe</label>
                                                    <input type="password" class="form-control" id="password-input" placeholder="Entrez votre mot de passe">
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
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