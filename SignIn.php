<?php
    session_start();
    require_once ('Connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/material.min.css">
        <script src="CSS/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="CSS/Stylesheet.css">
    </head>

    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <a href="Index.php" style="text-decoration: none;">
                        <img src = "SiteImages/EDMTUBE.png" height="70px" width="110px"/>
                    </a>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="SignIn.php">Sign In</a>
                        <a class="mdl-navigation__link" href="Upload.php">Upload</a>
                        <a class="mdl-navigation__link" href="User.php">User Name</a>
                    </nav>
                </div>
            </header>

            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Genres</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="Electro.php">Electro</a>
                    <a class="mdl-navigation__link" href="Future.php">Future House</a>
                    <a class="mdl-navigation__link" href="Trap.php">Trap</a>
                    <a class="mdl-navigation__link" href="Dubstep.php">Dubstep</a>
                    <a class="mdl-navigation__link" href="Dance.php">Dance</a>
                    <a class="mdl-navigation__link" href="Rave.php">Rave</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <center>
                        <h1>Sign In</h1>

                        <form method="post" class="Form" name="SignIn">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="Email">
                                <label class="mdl-textfield__label" for="sample1">Email</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="Password">
                                <label class="mdl-textfield__label" for="sample1">Password</label>
                            </div>
                            <center>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="SignIn" value="1">Sign In</button>
                            </center>
                        </form>

                        <h6>Dont Have an account, Register Here.</h6>
                        <a href="Register.php">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="Register">Register</button>
                        </a>
                    </center>


                    <footer class="mdl-mini-footer" style="position: fixed; bottom: 0; width: 100%;">
                        <div class="mdl-mini-footer__left-section">
                            <div class="mdl-logo">Tech Master</div>
                            <ul class="mdl-mini-footer__link-list">
                                <li>
                                    <a href = "SignIn.php">Sign In</a>
                                </li>
                                <li>
                                    <a href = "Upload.php">Upload</a>
                                </li>
                                <li>
                                    <a href = "Admin.php">Admin Page</a>
                                </li>
                                <li>EDM Central&copy;</li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </main>
        </div>
    </body>
</html>
