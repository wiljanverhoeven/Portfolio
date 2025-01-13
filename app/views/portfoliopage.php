<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/portfolio.css">
</head>

<body>
    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="/portfolio/home">HOME</a>
    </header>
    <script type="text/javascript" src="./js/stars.js"></script>

    <main>
        <form class="filter" method="GET" action="">
            <select class="filter-select" name="categorie" id="categorie">
                <option value="">Alle</option>
                <option value="PHP" <?= isset($_GET['categorie']) && $_GET['categorie'] == 'PHP' ? 'selected' : ''; ?>>PHP</option>
                <option value="JAVA" <?= isset($_GET['categorie']) && $_GET['categorie'] == 'JAVA' ? 'selected' : ''; ?>>JAVA</option>
            </select>
            <button class="filter-btn" type="submit">Filter</button>
        </form>

        <div class="container">
            <h1 class="title">Projecten</h1>
            <div class="projects-list">
                <?php foreach ($projects as $project): ?>
                    <div class="project">
                    <a href="/portfolio/project?id=<?= htmlspecialchars($project['idportfolios']); ?>" class="project-link">
                            <img class="projectimg" src="./images/<?= htmlspecialchars($project['imagesrc']); ?>" alt="project">
                            <h1><?= htmlspecialchars($project['projectname']); ?></h1>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer></footer>

    <script type="text/javascript" src="./js/dim.js"></script>
    
</body>

</html>
