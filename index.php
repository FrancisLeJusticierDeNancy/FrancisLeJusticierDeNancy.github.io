<?php
$partie = $_GET['partie'] ?? 'Accueil';
?>
<!DOCTYPE html>
<html lang="fr" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style personnalisé -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        header.p-3.bg-dark {
            background: linear-gradient(90deg, #343a40 0%, #495057 100%);
        }

        nav .nav-link {
            transition: color 0.3s, background-color 0.3s;
            border-radius: 5px;
        }

        nav .nav-link:hover {
            background-color: #ffc107;
            color: #212529 !important;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }

        .btn-outline-success:hover {
            background-color: #198754;
            color: white;
        }

        footer {
            background-color: #f1f3f5;
        }

        section.my-5 {
            background-color: #ffffff;
            border-left: 5px solid #0d6efd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-footer {
            background-color: #f8f9fa;
        }

        .text-muted {
            color: #6c757d !important;
        }
    </style>
</head>

<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php?partie=Accueil" class="nav-link px-2 text-white">Accueil</a>
            <a href="index.php?partie=Articles" class="nav-link px-2 text-white">Articles</a>
            <a href="index.php?partie=Contact" class="nav-link px-2 text-white">Contact</a>
        </nav>
    </div>
</header>

<?php if ($partie == 'Articles') { ?>
<main class="container">
    <header class="p-3 bg-dark text-white mb-4">
        <div class="container">
            <h1 class="text-center">Mes Articles</h1>
            <p class="text-center text-muted">Explorez les dernières publications</p>
        </div>
    </header>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Créer un site web avec PHP</h5>
                    <p class="card-text">Un guide pas-à-pas pour construire un site dynamique avec PHP.</p>
                    <a href="#" class="btn btn-outline-primary">Lire l'article</a>
                </div>
                <div class="card-footer text-muted">Publié le 15 mai 2025</div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Comprendre Bootstrap 5</h5>
                    <p class="card-text">Découvrez les outils puissants de Bootstrap pour créer des interfaces modernes.</p>
                    <a href="#" class="btn btn-outline-primary">Lire l'article</a>
                </div>
                <div class="card-footer text-muted">Publié le 10 mai 2025</div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Introduction à MySQL</h5>
                    <p class="card-text">Les bases de la gestion de données avec MySQL et PHP.</p>
                    <a href="#" class="btn btn-outline-primary">Lire l'article</a>
                </div>
                <div class="card-footer text-muted">Publié le 5 mai 2025</div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Les erreurs fréquentes en PHP</h5>
                    <p class="card-text">Évitez les pièges classiques rencontrés par les développeurs débutants.</p>
                    <a href="#" class="btn btn-outline-primary">Lire l'article</a>
                </div>
                <div class="card-footer text-muted">Publié le 2 mai 2025</div>
            </div>
        </div>
    </div>
</main>

<?php } elseif ($partie == 'Contact') { ?>
<main class="container">
    <header class="p-3 bg-dark text-white mb-4">
        <div class="container">
            <h1 class="text-center">Contactez-moi</h1>
        </div>
    </header>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <p class="mb-4 text-muted text-center">Vous avez une question, une proposition ou simplement envie de dire bonjour ? Remplissez ce formulaire.</p>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="votrenom@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Votre message..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
            </form>
        </div>
    </div>
</main>

<?php } else { ?>
<main class="container">
    <header class="p-3 bg-dark text-white mb-4">
        <div class="container">
            <h1 class="text-center">Bienvenue sur mon blog</h1>
        </div>
    </header>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h2 class="display-5 fw-bold">Bonjour et bienvenue !</h2>
            <p class="col-md-8 fs-4">Ce blog est dédié au partage de mes idées, projets et ressources autour du développement web, de la technologie, et de la création numérique.</p>
            <a href="index.php?partie=Articles" class="btn btn-primary btn-lg">Découvrir les articles</a>
        </div>
    </div>
    <div class="row text-center mb-5">
        <div class="col-lg-4">
            <h3>Articles</h3>
            <p>Des tutoriels, des astuces et des réflexions autour du code.</p>
            <a class="btn btn-outline-primary" href="index.php?partie=Articles">Lire &raquo;</a>
        </div>
        <div class="col-lg-4">
            <h3>À propos</h3>
            <p>Apprenez-en plus sur l’auteur de ce blog et son parcours.</p>
            <a class="btn btn-outline-secondary" href="#">À propos &raquo;</a>
        </div>
        <div class="col-lg-4">
            <h3>Contact</h3>
            <p>Vous avez une question ou une suggestion ? Écrivez-moi !</p>
            <a class="btn btn-outline-success" href="index.php?partie=Contact">Contact &raquo;</a>
        </div>
    </div>
    <section class="my-5">
        <h2 class="text-center mb-4">Présentation</h2>
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="images/profil.jpg" alt="Photo de profil" class="img-fluid rounded-circle shadow" width="200" height="200">
            </div>
            <div class="col-md-8">
                <h4>Nom : Toto</h4>
                <h5>Prénom : Exemple</h5>
                <p>Passionné de développement web, je partage ici mes connaissances, mes découvertes et mes projets.</p>
            </div>
        </div>
    </section>
</main>
<?php } ?>

<footer class="text-center py-4 mt-5 border-top">
    <p class="text-muted">&copy; 2025 Mon Blog</p>
</footer>
</body>
</html>
