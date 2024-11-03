<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <?php include '../dbconnect.php'; ?>
</head>

<body>

    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="../">HOME</a>
    </header>
    <script type="text/javascript" src="../js/stars.js"></script>
    <main>
        <form class="filter" method="GET" action="">
            <select class="filter-select" name="categorie" id="categorie">
                <option value="">Alle</option>
                <option value="PHP">PHP</option>
                <option value="JAVA">JAVA</option>
            </select>
            <button class="filter-btn" type="submit">Filter</button>
        </form>

        <div class="container">
            <h1 class="title">Projecten</h1>
            <div class="projects-list">

                <?php
                // check voor filter
                $categorie = isset($_GET['categorie']) ? $_GET['categorie'] : '';

                // maakt query met filter
                if ($categorie) {
                    // prepared statement
                    $stmt = $pdo->prepare("SELECT * FROM projecten WHERE categorie = :categorie");
                    $stmt->bindParam(':categorie', $categorie);
                } else {
                    // maakt query
                    $stmt = $pdo->prepare("SELECT * FROM projecten");
                }

                $stmt->execute();
                $projecten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // displayed projecten
                foreach ($projecten as $project) {
                ?>

                    <div class="project">
                        <a href="project.php?idportfolios=<?php echo $project['idportfolios']; ?>" class="project-link">
                            <img class="projectimg" src="<?php echo "../images/", $project['imagesrc']; ?>" alt="project">
                            <h1><?php echo htmlspecialchars($project["projectname"]); ?></h1>
                        </a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>



        </div>

    </main>

    <footer>

    </footer>
    <script type="text/javascript">
        window.onload = function() {
            const body = document.body;

            if (localStorage.getItem('dimMode') === 'on') {
                body.style.filter = 'brightness(50%)';
            }

            document.getElementById('brightness-toggle').addEventListener('click', () => {
                if (body.style.filter === 'brightness(50%)') {

                    body.style.filter = 'none';
                    localStorage.setItem('dimMode', 'off');
                } else {

                    body.style.filter = 'brightness(50%)';
                    localStorage.setItem('dimMode', 'on');
                }
            });
        };
    </script>

</body>

</html>