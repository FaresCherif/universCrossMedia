<?php
session_start();
require_once("include/functions.inc.php");
require_once("include/config.inc.php");
require_once("include/autoLoad.inc.php");
?>

<?php
$db = new MyPdo();
$universManager=new UniversManager($db);
$genreManager=new GenreManager($db);
$genreJeuVideoManager=new GenreJeuVideoManager($db);
$filmManager=new FilmManager($db);
$jeuVideoManager=new JeuVideoManager($db);
$utilisateurManager=new UtilisateurManager($db);
$avisManager=new AvisManager($db);
$filmGenreManager = new FilmGenreManager($db);
$partofuniversManager = new partofuniversManager($db);
$jeuvideo_genreManager=new jeuvideo_genreManager($db);
$lienuniversManager=new lienuniversManager($db);

?>

<!doctype html>
<html lang="fr">
    <head>
        <?php require_once("include/head.inc.php") ?>
    </head>
    <body>
        <header>
            <?php require_once("include/header.inc.php") ?>
        </header>

        <nav>
            <?php require_once("include/menu.inc.php"); ?>
        </nav>

        <main>
            <?php require_once("include/texte.inc.php"); ?>
        </main>

        <footer>
            <?php require_once("include/footer.inc.php"); ?>
        </footer>
    </body>
</html>
