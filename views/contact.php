<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/contact.css">
    <?php include '../dbconnect.php'; ?>
    <?php

    $messageSent = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);


        $to = "wiljanverhoeven@xs4all.nl";
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // make email
        $fullMessage = "Name: $name\n";
        $fullMessage .= "Email: $email\n\n";
        $fullMessage .= "Message:\n$message";


        // Send amail
        if (mail($to, $subject, $fullMessage, $headers)) {
            $messageSent = "Email sent.";
        } else {
            $messageSent = "Could not send email";
        }
    } else {
        echo "Invalid request.";
    }

    ?>

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
            <div class="mail">
                <form action="" method="POST">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" required><br><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="4" required></textarea><br><br>

                    <input type="submit" value="Send">
                    <?php
                if ($messageSent != "") {
                    echo "<p>$messageSent</p>";
                }
                ?>
                </form>
                
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