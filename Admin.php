<?php
    //Set username and password
    $username = 'devonh';
    $password = 'devon';

    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW']) != $password) {
        //If the username/password are incorrect send back authentication errors
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="Guitar Wars"');
        exit('<h2>Guitar Wars</h2>Sorry, you must enter a valid user name and password to access this page');
    }

    session_start();
    require_once ('Connect.php');

    if (@$_POST['Remove']) {
        foreach ($_POST['Delete'] as $DeleteID) {
            $Query = $dbh->prepare("DELETE FROM Songs WHERE SongID = :DeleteID;");

            $Query->execute(
                array(
                    'DeleteID' => $DeleteID
                )
            );
        }

        echo "Customer(s) were removerd successfully";
    }
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
                        <a class="mdl-navigation__link" href="Register.php">Register</a>
                        <a class="mdl-navigation__link" href="SignIn.php">Sign In</a>
                        <a class="mdl-navigation__link" href="Profile.php">Profile</a>
                        <a class="mdl-navigation__link" href="Upload.php">Upload</a>
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
                    <h1 class="main_header">Welcome to the Admin Page</h1>
                    <h4>Select all of the songs you would like to delete</h4>

                    <?php
                        $Query = $dbh->prepare("SELECT * FROM Songs");
                        $Query->execute();
                        $Songs = $Query->fetchAll();
                    ?>

                    <center>
                        <form method="post" name="Remove">
                            <?php
                                foreach ($Songs as $row) {
                                    echo '<input type="checkbox" value"' . $row['SongID'] . '" name="Delete[]" />';
                                    echo $row['Title'];
                                    echo "  " . $row['Artist'];
                                    echo "  " . $row['Genre'];
                                    echo "  " . $row['UserID'];
                                    echo "<br>";
                                }
                            ?>
                            <input type="submit" name="Remove" />
                        </form>
                    </center>

                    <footer class="mdl-mini-footer" style="position: fixed; bottom: 0; width: 100%;">
                        <div class="mdl-mini-footer__left-section">
                            <div class="mdl-logo">EDM Tube</div>
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
