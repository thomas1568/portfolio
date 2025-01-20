<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Skill Bar</title>

    <style>
        *,
        ::before,
        ::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            background: #111222;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .skills {
            width: 600px;
            min-width: 300px;
            max-width: 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .skills-header {
            font-family: "Poppins", sans-serif;
            font-size: 30px;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .skills-container {
            max-width: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 10px;
            padding: 20px;
            margin: 0;
            box-sizing: border-box;
        }

        .skill-container {
            width: 100%;
            margin: 10px 0;
            padding: 10px 0;
            position: relative;
        }

        .skill-container p {
            margin: 5px;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
        }

        .bar {
            width: 100%;
            background: #475472;
            display: block;
            height: 20px;
            border: none;
            border-radius: 100vw;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 8, 0.25, 1);
        }

        .bar span {
            height: 20px;
            float: left;
            background: #5271ff;
            border: none;
            border-radius: 100vw;
        }

        .html.animate,
        .css.animate {
            width: 50%;
            animation: html_css 3s;
        }

        .javascript.animate {
            width: 80%;
            animation: javascript 3s;
        }

        .react.animate {
            width: 30%;
            animation: react 3s;
        }

        .node.animate {
            width: 50%;
            animation: node 3s;
        }

        @keyframes html_css {
            0% {
                width: 0%;
            }

            100% {
                width: 50%;
            }
        }

        @keyframes javascript {
            0% {
                width: 0%;
            }

            100% {
                width: 80%;
            }
        }

        @keyframes react {
            0% {
                width: 0%;
            }

            100% {
                width: 30%;
            }
        }

        @keyframes node {
            0% {
                width: 0%;
            }

            100% {
                width: 50%;
            }
        }

        .percentage {
            position: absolute;
            top: 12px;
            width: 25px;
            height: 20px;
            background: #5271ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            border-radius: 2px;
            z-index: 10;
            transition: all 0.3s ease-in-out;
        }

        .percentage::after {
            content: "";
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 10px;
            height: 10px;
            background: #5271ff;
            z-index: -1;
        }

        .html-percentage.animate,
        .css-percentage.animate {
            left: 50%;
            animation: html_css_percentage 3s;
        }

        .javascript-percentage.animate {
            left: 80%;
            animation: javascript_percentage 3s;
        }

        .react-percentage.animate {
            left: 30%;
            animation: react_percentage 3s;
        }

        .node-percentage.animate {
            left: 50%;
            animation: node_percentage 3s;
        }

        @keyframes html_css_percentage {
            0% {
                left: 0;
            }

            100% {
                left: 50%;
            }
        }

        @keyframes javascript_percentage {
            0% {
                left: 0;
            }

            100% {
                left: 80%;
            }
        }

        @keyframes react_percentage {
            0% {
                left: 0;
            }

            100% {
                left: 30%;
            }
        }

        @keyframes node_percentage {
            0% {
                left: 0;
            }

            100% {
                left: 50%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">THOMAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="image.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skill.php">Compétences</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="skills" id="skills">
        <h3 class="skills-header">Mes Compétences</h3>
        <div class="skills-container">
            <div class="skill-container">
                <p>HTML</p>
                <div class="percentage html-percentage">50%</div>
                <div class="bar">
                    <span class="html"></span>
                </div>
            </div>
            <div class="skill-container">
                <p>CSS</p>
                <div class="percentage css-percentage">50%</div>
                <div class="bar">
                    <span class="css"></span>
                </div>
            </div>
            <div class="skill-container">
                <p>Illustrator</p>
                <div class="percentage javascript-percentage">80%</div>
                <div class="bar">
                    <span class="javascript"></span>
                </div>
            </div>
            <div class="skill-container">
                <p>Photoshop</p>
                <div class="percentage react-percentage">30%</div>
                <div class="bar">
                    <span class="react"></span>
                </div>
            </div>
            <div class="skill-container">
                <p>Davinci</p>
                <div class="percentage node-percentage">50%</div>
                <div class="bar">
                    <span class="node"></span>
                </div>
            </div>
        </div>
    </section>

    <script>
        const observer = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                spans.forEach((span, index) => {

                    const percentage = percentages[index];

                    if (entry.isIntersecting) {

                        span.classList.add('animate');

                        percentage.classList.add('animate');

                    } else {

                        span.classList.remove('animate');

                        percentage.classList.remove('animate');

                    }

                });

            });

        });

        const skillContainer = document.querySelector('.skills-container');

        const spans = document.querySelectorAll('.bar span');

        const percentages = document.querySelectorAll('.percentage');

        observer.observe(skillContainer);

        function updatePercentagePositions() {

            const barWidth = document.querySelector('.bar').clientWidth;

            percentages.forEach(percentage => {

                const widthPercentage = parseFloat(percentage.textContent) / 100;

                // Correction de la ligne de positionnement
                percentage.style.left = (barWidth * widthPercentage - 12.5) + 'px';

            });

        }
    </script>
</body>

</html>
