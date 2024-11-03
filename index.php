<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/homepage.css">
    <?php include 'dbconnect.php'; ?>
</head>

<body>
    <header>
        <script type="text/javascript" src="js/stars.js"></script>
        <button id="brightness-toggle">TOGGLE DIM</button>
    </header>

    <main>
        <div class="container">
            <div class="left">
                <ul class="menu">
                    
                    <li><a href="views/portfolio.php" class="selection">PORTFOLIO</a></li>
                    <li><a href="views/overmij.php" class="selection">OVER MIJ</a></li>
                    <li><a href="views/contact.php" class="selection">CONTACT</a></li>
                </ul>
            </div>
            <div class="right">
                <img class="mars" src="images/3d-render-mars-planet-360-rotation-on-galaxy-space-star-field-3d-illustration-isolated-transparent-alpha-png.webp">
                <div class="tester">
                    <img class="moon" src="images/moon.png" alt="moon">
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