<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/project.css">
</head>

<body>

    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="/portfolio/home">HOME</a>
        <br>
        <a class="nav" href="/portfolio/portfoliopage">BACK</a>
    </header>
    <script type="text/javascript" src="./js/stars.js"></script>
    <main>
        <?php if ($project) { ?>
            <div class="project-details">
                <img src="<?php echo "./images/", $project['imagesrc']; ?>" alt="project">
                <div class="pd2">
                    <h1><?php echo htmlspecialchars($project['projectname']); ?></h1>
                    <h3><?php echo htmlspecialchars($project['datum']); ?></h3>
                    <h3><?php echo htmlspecialchars($project['desc']); ?></h3>
                </div>
            </div>
        <?php } else { ?>
            <p>Project not found.</p>
        <?php } ?>
    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="./js/dim.js"></script>

</body>

</html>
