<header class="container-fluid">

    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" id="navLogo" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../app/view/accueil.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../app/view/jeux.php">Liste des jeux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Les plus populaires</a>
            </li>

            <?php if ($_SESSION == true) : ?>
                <?= '<li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexion.php">Connexion</a>
            </li>'; ?>

            <?php endif; ?>

            <?php if ($_SESSION == true) : ?>


                <?=
                '<li class="nav-item">
                <a id="my-account" href="../../app/view/myprofile.php"><i class="fa-regular fa-user"></i></a>
                </li>'; ?>

            <?php endif; ?>

        </ul>
    </div>
</nav> -->

    <nav class="navbar navbar-expand-lg fixed-top">
        <a id="nav-title" class="navbar-brand nav-logo" href="../../app/view/accueil.php"><img src="../../public/images/gamescenternav-removebg-preview.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span id="burger" class="navbar-toggler-icon text-white mb-4">
                <svg width="64px" height="64px" viewBox="-4.48 -4.48 36.96 36.96" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(1.1199999999999992,1.1199999999999992), scale(0.92)"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#9e85f9" stroke-width="0.16799999999999998"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M4 7C4 6.44771 4.44772 6 5 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H5C4.44772 8 4 7.55229 4 7Z" fill="#000000"></path>
                        <path d="M4 13.9998C4 13.4475 4.44772 12.9997 5 12.9997L16 13C16.5523 13 17 13.4477 17 14C17 14.5523 16.5523 15 16 15L5 14.9998C4.44772 14.9998 4 14.552 4 13.9998Z" fill="#000000"></path>
                        <path d="M5 19.9998C4.44772 19.9998 4 20.4475 4 20.9998C4 21.552 4.44772 21.9997 5 21.9997H22C22.5523 21.9997 23 21.552 23 20.9998C23 20.4475 22.5523 19.9998 22 19.9998H5Z" fill="#000000"></path>
                    </g>
                </svg>

            </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active link">
                    <a class="nav-link" href="?action=accueil">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item link">
                    <a class="nav-link" href="?action=gamelist">Liste des jeux</a>
                </li>
                <li class="nav-item link">
                    <a class="nav-link" href="?action=popular">Les plus populaires</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="loginNav" href="?action=connexion"> Connexion</a>
                </li>
                <li class="nav-item ml-2 mr-3">
                    <a class="nav-link" id="signupNav" href="?action=inscription"> Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=compte"><i class="fa-regular fa-user"></i> Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>

</header>