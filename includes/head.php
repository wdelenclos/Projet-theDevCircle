<?php
session_start();
require_once ('bdd.php');
$sql = 'SELECT id,pseudo, nom, prenom, age, description, genre, mot, phrase
        FROM `user`
        WHERE pseudo = :pseudo';
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':pseudo',$_SESSION['pseudo']);
$stmt->execute();
$row = $stmt->fetchObject();
$_SESSION['id'] = $row->id;
$_SESSION['nom'] = $row->nom;
$_SESSION['prenom'] = $row->prenom;
$_SESSION['age'] = $row->age;
$_SESSION['genre'] = $row->genre;
$_SESSION['description'] = $row->description;
$_SESSION['mot'] = $row->mot;
$_SESSION['phrase'] = $row->phrase;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TheDevCircle | Rencontre des dev</title>
    <link rel="stylesheet" href="assets/reset.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,300,200,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600,200' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="js/indexAfter.js"></script>

    <?php
    if (!isset($_GET["p"])){
        $_GET["p"] = 'login';
    }
    if($_GET["p"] == 'login' || $_GET["p"] == 'newuser'){

        ?>
        <link rel="stylesheet" href="assets/styleLogin.css">
        <?php
    }
    if($_GET["p"] == 'accueil'){


        ?>
            <link rel="stylesheet" href="assets/stylePage.css">
            <script type="text/javascript" src="js/core.js"></script>
            <!-- Stats.js -->
            <script type="text/javascript" src="js/stats.js"></script>

            <!-- TweenMax.js -->
            <script type="text/javascript" src="js/Tween.js"></script>
            <script type="text/javascript">
                window.onload = function () {
                    var demo = new djankey.Dots();
                }
            </script>
            <?php
    }?>

                
                <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css">
                <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600,200' rel='stylesheet' type='text/css'>
</head>