<?php
// $css_file est défini dans chaque page AVANT d'inclure ce header
// Ex : $css_file = "css/style.css";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signy Salles</title>
    <link rel="stylesheet" href="<?= $css_file ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
 
<header class="header">
    <div class="container">
        <div class="logo_txt">
            <span class="title">Signy <span class="blue">Salles</span></span>
            <span class="desc">Site de reservation de salles bureautiques et jeux</span>
        </div>
        <nav class="nav-links">
            <a href="index.php">Accueil</a>
            <a href="salles.php">Salles</a>
            <a href="reservation.php">Reservation</a>
        </nav>
    </div>
</header>