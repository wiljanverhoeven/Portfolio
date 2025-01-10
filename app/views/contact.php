<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/contact.css">
</head>

<body>

    <header>
        <button id="brightness-toggle">TOGGLE DIM</button>
        <br>
        <a class="nav" href="/">HOME</a>
    </header>
    <script type="text/javascript" src="../../js/stars.js"></script>

    <main>
        <div class="container">
            <div class="mail">
                <form action="" method="POST"> <!-- Contact form -->
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" required><br><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="4" required></textarea><br><br>

                    <input type="submit" value="Send">
                    <?php if (!empty($messageSent)): ?>
                        <p><?php echo htmlspecialchars($messageSent); ?></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </main>

    <footer></footer>

    <script type="text/javascript">
        // Code for dimming the screen
        window.onload = function () {
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
