<?php
$css_file = 'css/Reservation.css';
require_once 'config/header.php';
?>

<main>
    <div class="page" style="text-align: center; padding: 4rem 1rem;">
        <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
        <h1 class="page-title">Réservation confirmée !</h1>
        <p class="page-subtitle" style="margin-bottom: 2rem;">
            Votre réservation a bien été enregistrée.<br>
        </p>
        <a href="index.php" class="btn-confirm" style="display: inline-block; text-decoration: none;">
            Retour à l'accueil
        </a>
    </div>
</main>

<?php require_once 'config/footer.php'; ?>
