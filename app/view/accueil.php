<?php require_once 'layouts/head.php'; ?>
<?php require_once 'layouts/header.php'; ?>

<body>
    <main>
        <section id="banner">
            <!-- Section d'en tête à la page -->
            <h1 id="title">Games Center</h1>



        </section>








        <section id="games">


            <h2 id="TOP">Notre TOP 4 !</h2>
            <p class="text-center">Le top des jeux choisis par la communautée</p>

            <div class="wrap" id="gamesScroll">
                <div class="box">
                    <div class="box-top box-inner">
                        <img class="box-image" src="../../public/images/kratos.jpg" alt="image du jeu">
                        <div class="title-flex">
                            <h3 class="box-title"> Nom du jeu</h3>
                        </div>
                        <p class="description">Whipped steamed roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
                    </div>
                    <a href="?action=gamepage" class="button">Voir plus</a>
                </div>
                <div class="box">
                    <div class="box-top">
                        <img class="box-image" src="../../public/images/stray.webp" alt="Image du jeu">
                        <div class="title-flex">
                            <h3 class="box-title">Nom du jeu</h3>
                        </div>
                        <p class="description"> roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
                    </div>
                    <a href="?action=gamepage" class="button">Voir plus</a>
                </div>
                <div class="box">
                    <div class="box-top box-inner">
                        <img class="box-image" src="../../public/images/resident-evil-4.webp" alt="Image du jeu">
                        <div class="title-flex">
                            <h3 class="box-title">Nom du jeu</h3>
                        </div>
                        <p class="description">Whipped steamed roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
                    </div>
                    <a href="?action=gamepage" class="button">Voir plus</a>
                </div>
                <div class="box">
                    <div class="box-top box-inner">
                        <img class="box-image" src="../../public/images/hogwarts-legacy.webp" alt="Image du jeu">
                        <div class="title-flex">
                            <h3 class="box-title">Nom du jeu</h3>
                        </div>
                        <p class="description">Whipped steamed roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
                    </div>
                    <a href="?action=gamepage" class="button">Voir plus</a>
                </div>
            </div>


        </section>


        <section id="aboutUs">
            <div class="container-fluid bg-dark text-white" id="about">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 text-right p-5">
                        <h2 class="aboutText">Découvrez notre large collection de jeux</h2>
                        <p class="text-white-50 aboutText">Nous sommes fiers de vous présenter notre large collection de jeux, conçue pour satisfaire les goûts de chacun. Que vous soyez fan de jeux de stratégie, de jeux de réflexion, de jeux d'action, ou même de jeux multijoueurs, vous trouverez forcément votre bonheur parmi nos titres.

                            Notre collection est constamment mise à jour avec de nouveaux jeux, pour vous offrir une expérience toujours plus riche et variée.
                        </p>
                        <a href="?action=gamelist" class="btn mt-4 mb-5 aboutButton">Voir tous les jeux</a>
                    </div>
                    <div id="aboutImage" class="col-md-4 offset-md-1 order-md-2 mb-4 mb-md-0 text-center">
                        <img src="../../public/images/DeadIsland2.jpg" alt="image de dead island 2" class="w-100 rounded-lg">
                        <!-- Remplacez cette image par votre propre image -->
                    </div>
                </div>
            </div>
        </section>


        <div id="container-break">
            <!-- Break dans la page avec image de fond -->
        </div>


        <div class="container-fluid" id="recent-comments">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center pb-5 pt-5 comment-title">Commentaires récents</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="media comment-body-2">
                        <img src="../../public/images/piece-gif.gif" class="mr-3 rounded-circle" alt="Avatar" width="64" height="64">
                        <div class="media-body comment-body-timing">
                            <h5 class="mt-0">Nom du jeu 1</h5>
                            <p>Pseudo</p>
                            <p>Commentaire 1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media comment-body-2">
                        <img src="../../public/images/piece-gif.gif" class="mr-3 rounded-circle" alt="Avatar" width="64" height="64">
                        <div class="media-body comment-body-timing">
                            <h5 class="mt-0">Nom du jeu 2</h5>
                            <p>Pseudo</p>
                            <p>Commentaire 2</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="media comment-body-1">
                        <img src="../../public/images/piece-gif.gif" class="mr-3 rounded-circle" alt="Avatar" width="64" height="64">
                        <div class="media-body comment-body-timing">
                            <h5 class="mt-0">Nom du jeu 3</h5>
                            <p>Pseudo</p>
                            <p>Commentaire 3</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media comment-body-1">
                        <img src="../../public/images/piece-gif.gif" class="mr-3 rounded-circle" alt="Avatar" width="64" height="64">
                        <div class="media-body comment-body-timing">
                            <h5 class="mt-0">Nom du jeu 4</h5>
                            <p>Pseudo</p>
                            <p>Commentaire 4</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>



    </main>











    <?php require_once 'layouts/footer.php'; ?>

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="public/js/scrollreveal.js"></script>
    <script src="public/js/navigation.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>