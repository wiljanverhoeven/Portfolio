<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/common.css" >
        <link rel="stylesheet" href="../css/contact.css" >
        <?php include '../dbconnect.php'; ?>
        
    </head>
    <body>
        
        <header >
           <a class="nav" href="../">HOME</a>
           <script type="text/javascript">
                var onloadCallback = function() {
                grecaptcha.render('html_element', {
                    'sitekey' : 'your_site_key'
                });
            };
    </script>
        </header>
        <script type="text/javascript" src="../js/stars.js"></script>
        <main>
        
            <div class="container">
                <div class="mail">
                    <form action="send_email.php" method="POST">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required><br><br>

                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="subject">Subject:</label><br>
                        <input type="text" id="subject" name="subject" required><br><br>

                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" rows="4" required></textarea><br><br>

                        <input type="submit" value="Send">
                    </form>
                    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer></script>             
             </div>
            </div>
            

        </main>

        <footer>

        </footer>

    </body>
</html>