<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/common.css" >
        <link rel="stylesheet" href="../css/portfolio.css" >
        <?php include '../dbconnect.php'; ?> 
    </head>
    <body>
        
        <header >
           <a class="home" href="../">HOME</a>

        </header>
        <script type="text/javascript" src="../js/stars.js"></script>
        <main>
        <div class="filters"></div>
            <div class="container">
                <h1 class="title">Projecten</h1>
                <div class="projects-list">

                <?php 
                    // Prepare and execute the query outside of the loop
                    $stmt = $pdo->prepare("SELECT * FROM projecten");
                    $stmt->execute();
                    $projecten = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results into an associative array

                    // Loop through each project fetched
                    foreach ($projecten as $project) {
                ?>
                    <div class="project">
                        <img class="projectimg" src="<?php echo "../images/", $project['imagesrc']; ?>" alt="project">
                        <h3><?php echo ${"project"}["projectname"]; ?></h3>
                        <p><?php echo ${"project"}["desc"]; ?></p>
                    </div>
                <?php
                    }
                ?>
                </div>
              
                    
                
            </div>

        </main>

        <footer>

        </footer>

    </body>
</html>