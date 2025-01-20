<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Thomas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Lato, sans-serif;
            margin: 0;
            padding: 1rem;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #111222;
        }

        .navbar {
            position: fixed; /* Rend la barre de navigation fixe */
            top: 0; /* Place la barre en haut de la page */
            left: 0;
            width: 100%; /* S'assure qu'elle occupe toute la largeur */
            z-index: 1000; /* Place la barre au-dessus des autres éléments */
            background-color: #fff; /* Couleur de fond pour éviter qu'elle soit transparente */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optionnel : ajout d'une ombre pour la démarquer */
        }

        img {
            width: 100%;
            display: block;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            transition: transform 1000ms;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 0.5rem;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            max-width: 100%;
            width: 70rem;
            
        }

        figure {
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        figure::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200%;
            height: 200%;
            background: rgba(0, 0, 0, 0.5);
            transform-origin: center;
            opacity: 0;
            transform: scale(2);
            transition: opacity 300ms;
        }

        figcaption {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            place-items: center;
            text-align: center;
            padding: 1rem;
            color: white;
            font-size: 1.2rem;
            z-index: 1;
            opacity: 0;
            transition: opacity 600ms, transform 600ms;
        }

        a:is(:hover, :focus) figure::after {
            opacity: 1;
        }

        a:is(:hover, :focus) figcaption {
            opacity: 1;
            transition: opacity 600ms;
        }

        @media (prefers-reduced-motion: no-preference) {
            figcaption {
                transform: translate3d(0, 2rem, 0);
            }
            
            figure::after {
                border-radius: 50%;
                opacity: 1;
                transform: scale(0);
                transition: transform 900ms;
            }
            
            a:is(:hover, :focus) figure::after {
                transform: scale(2.5);
            }

            a:is(:hover, :focus) figcaption {
                opacity: 1;
                transform: translate3d(0, 0, 0);
                transition: opacity 600ms 400ms, transform 600ms 400ms;
            }

            a:is(:hover, :focus) img {
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">THOMAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="image.php">Portfolio</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skill.php">Compétence</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul>
        <li>
            <a href="Twitter.jpg">
                <figure>
                    <img src="Twitter.jpg">
                    <figcaption>Affiche Twitter @CGW</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="facebook.jpg">
                <figure>
                    <img src="facebook.jpg">
                    <figcaption>Affiche Facebook @CGW</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="insta.jpg">
                <figure>
                    <img src="insta.jpg">
                    <figcaption>Affiche Instagram @CGW</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="Logo.png">
                <figure>
                    <img src='Logo.png' alt='Person hiking on a trail through mountains while taking a photo with phone'>
                    <figcaption>Logo @CGW</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="eg.jpg">
                <figure>
                    <img src='eg.jpg' alt='Street scene with person walking and others on motorbikes, all wearing masks'>
                    <figcaption>Créations graphiques @CGW</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="a.jpg">
                <figure>
                    <img src='a.jpg' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                    <figcaption>Affiche Corsica Games Week</figcaption>
                </figure>
            </a>
        </li>
    </ul>
</body>
</html>
