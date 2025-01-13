<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/overmij.css">
</head>

<body>
    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="/portfolio/home">HOME</a>
    </header>
    <script type="text/javascript" src="./js/stars.js"></script>

    <main>
        <div class="container">
            <div class="left">
                <div class="information">
                    <h1><?= htmlspecialchars($personalInfo['name']); ?></h1>
                    <h3><?= htmlspecialchars($personalInfo['bio']); ?></h3>
                    <div class="download">
                        <a href="<?= htmlspecialchars($personalInfo['cvLink']); ?>" download>Download CV</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <img class="picture" src="./<?= htmlspecialchars($personalInfo['profileImage']); ?>" alt="Profile Picture">
            </div>
        </div>
    </main>

    <footer></footer>

    <script type="text/javascript" src="./js/dim.js"></script>
    
</body>

</html>
