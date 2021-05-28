<?php 
/**
 * La configuration et le démarrage des sessions doit être fait avant le début 
 * de l'envoi de la réponse.
 */

require_once './auth.session.php';
    
    if (getSessionExiste()){
        $nom = $_SESSION['infoAuth'];

    } else {
        setcookie("erreurAuth", "Vous devez vous authentifier", 0, "/", "lachance.techinfo420.ca", true, true);
        header("Location: index.php");      
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
        <title>Utilisateur authentifié</title>
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
                        <h1>Gestionn-R</h1>
                        <p>Mon outil intégrée de gestion de présences</p>
                    </header>

                <!-- Main -->
                    <div id="main">

                        <!-- Content -->
                            <section id="content" class="main">

                                <div style="padding-bottom: 5%">
                                    <input type="button" class="button primary" value="Ajouter un lieu" onclick="afficherAjoutLieu()">
                                </div>

                                <form method="post" action="./ajoutLieu.redirect.php" id="ajoutLieu" style="display:none">
                                    <div class="col-12" style="padding-bottom: 5%">
                                        <input type="text" name="nomLieu" id="nomLieu" placeholder="Nom du lieu" />
                                    </div>
                                    <div class="col-6 col-12-xsmall" style="padding-bottom: 5%">
                                        <input type="text" name="numCivique" id="numCivique" placeholder="Numéro civique" />
                                    </div>
                                    <div class="col-6 col-12-xsmall" style="padding-bottom: 5%">
                                        <input type="text" name="nomRue" id="nomRue" placeholder="Rue" />
                                    </div>
                                    <div class="col-12" style="padding-bottom: 5%">
                                        <select name="province" id="province">
                                            <option value="">- Province -</option>
                                            <option value="Alberta">Alberta</option>
                                            <option value="Colombie-Britannique">Colombie-Britannique</option>
                                            <option value="Île-du-Prince-Édouard">Île-du-Prince-Édouard</option>
                                            <option value="Manitoba">Manitoba</option>
                                            <option value="Nouveau-Brunswick">Nouveau-Brunswick</option>
                                            <option value="Nouvelle-Écosse">Nouvelle-Écosse</option>
                                            <option value="Ontario">Ontario</option>
                                            <option value="Québec">Québec</option>
                                            <option value="Saskatchewan">Saskatchewan</option>
                                            <option value="Terre-Neuve et Labrador">Terre-Neuve et Labrador</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-12-xsmall" style="padding-bottom: 5%">
                                        <input type="text" name="nomVille" id="nomVille" placeholder="Ville" />
                                    </div>
                                    <p>Date et temps d'arrivé format (AAAA/MM/JJ/HH/MM)</p>
                                    <div class="col-6 col-12-xsmall">
                                        <input type="text" name="dateArr" id="dateArr" placeholder="Date" />
                                    </div>
                                    <p>Date et temps de départ (AAAA/MM/JJ/HH/MM)</p>
                                    <div class="col-6 col-12-xsmall">
                                        <input type="text" name="dateDep" id="dateDep" placeholder="Date" />
                                    </div>
                                    <button class="button large">Ajout</button>
                                </form>

                                <h3><b>Mes lieux :</b></h3>
                                <?php
                                    include_once './html/listeLieuxHTML.classe.php';
                                    $liste = new listeLieuxHTML();

                                    echo $liste->getListe($nom);   


                                 ?>

                            </section>

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <section>
                            <h2>Aliquam sed mauris</h2>
                            <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Learn More</a></li>
                            </ul>
                        </section>
                        <section>
                            <h2>Etiam feugiat</h2>
                            <dl class="alt">
                                <dt>Address</dt>
                                <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
                                <dt>Phone</dt>
                                <dd>(000) 000-0000 x 0000</dd>
                                <dt>Email</dt>
                                <dd><a href="#">information@untitled.tld</a></dd>
                            </dl>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
                            </ul>
                        </section>
                        <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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
            <script src="assets/js/ajoutLieu.js"></script>

    </body>
</html>
