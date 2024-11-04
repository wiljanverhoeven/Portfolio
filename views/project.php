<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/project.css">
    <?php include '../dbconnect.php'; ?>

</head>

<body>

    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="../">HOME</a>
        <br>
        <a class="nav" href="portfolio.php">BACK</a>
    </header>
    <script type="text/javascript" src="../js/stars.js"></script>
    <main>
        <?php
        $projectId = isset($_GET['idportfolios']) ? (int)$_GET['idportfolios'] : 0;

        // Prepare en execute query
        $stmt = $pdo->prepare("SELECT * FROM projecten WHERE idportfolios = :idportfolios");
        $stmt->bindParam(':idportfolios', $projectId, PDO::PARAM_INT);
        $stmt->execute();
        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        // displayed project
        if ($project) {
        ?>
            <div class="project-details">
                <img src="<?php echo "../images/", $project['imagesrc']; ?>" alt="project">
                <div class="pd2">
                    <h1><?php echo htmlspecialchars($project['projectname']); ?></h1>
                    <h3><?php echo htmlspecialchars($project['datum']); ?></h3>
                    <h3><?php echo htmlspecialchars($project['desc']); ?></h3>
                </div>
            </div>
        <?php
        } else {
            echo "<p>Project not found.</p>";
        }
        ?>
    </main>
    <footer>

    </footer>
    <script type="text/javascript">
        //code voor de dim knop
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