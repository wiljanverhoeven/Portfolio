<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/overmij.css">
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

        <div class="container">
            <div class="left">
                <div class="information">
                    <h1>Wiljan Verhoeven</h1>
                    <h3>
                        ik ben Wiljan Verhoeven, ik ben 19 jaar out en studeer momenteel AD software development op de hogeschool Windesheim.
                        hiervoor heb ik al een diploma gehaald voor software developer op de ROC van Flevoland. Ik kan PHP, javascript en JAVA.
                    </h3>
                    <div class="download">
                        <a href="FileLink" download="../images/CV.pdf">Download CV</a>
                    </div>
                </div>

            </div>
            <div class="right">
                <img class="picture" src="../images/pfp.png">
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