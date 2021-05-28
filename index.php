<?php
    if (isset($_COOKIE['erreurAuth'])){
        $erreurAuth = filter_input(INPUT_COOKIE, "erreurAuth", FILTER_SANITIZE_SPECIAL_CHARS);
        setcookie("erreurAuth", "", time()-3600*60*24, "/", "lachance.techinfo420.ca", true, true);
    }

?>
<!DOCTYPE HTML>
<!--
    Stellar by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Authentification</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header">
                        <h1>Connexion</h1>
                    </header>

                <!-- Main -->
                    <div>

                        <!-- Content -->
                            <section id="content" class="image main" img src="images/pic04.jpg" alt="" />
                                <form name="auth" action="./auth.redirect.php" method="post">
                            <?php
                                if (isset($erreurAuth)){
                                    echo '<p style="background-color: red;">'.$erreurAuth.'</p>';
                                }
                            ?>          
                                    <input type="text" name="nom" placeholder="Nom d'usager">
                                    <input type="password" name="mdp" placeholder="Mot de passe">
                                    <input type="submit" class="button primary" value="Go" onclick="auth.submit()">
                                </form>
                            </section>

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <section>

                        </section>
                        <section>

                        </section>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>