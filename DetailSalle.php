<?php
require_once 'config/database.php';

// On récupère l'id dans l'URL (?id=1)
// intval() force un nombre entier pour la sécurité
$id = intval($_GET['id'] ?? 0);

// Si pas d'id valide, on renvoie vers la liste des salles
if ($id <= 0) {
    header('Location: salles.php');
    exit;
}

// On cherche uniquement cette salle en BDD
$stmt = $pdo->prepare('SELECT * FROM salle WHERE id_salle = ?');
$stmt->execute([$id]);
$salle = $stmt->fetch(PDO::FETCH_ASSOC);

// Si la salle n'existe pas, on renvoie vers la liste
if (!$salle) {
    header('Location: salles.php');
    exit;
}

// On découpe les équipements (stockés séparés par des virgules en BDD)
$equipements = explode(',', $salle['equipements']);

$css_file = 'css/DetailSalle.css';
require_once 'includes/header.php';
?>

<main>
    <section>
        <div class="container2">
            <div class="page">

                <!-- Image hero de la salle -->
                <div class="hero">
                    <img src="Img/<?= htmlspecialchars($salle['image']) ?>"
                         alt="<?= htmlspecialchars($salle['nom']) ?>"
                         onerror="this.parentElement.innerHTML='<div class=hero-placeholder><span>Photo de la salle</span></div>'">
                </div>

                <div class="content-row">

                    <!-- Colonne gauche : infos -->
                    <div class="left-col">
                        <h1><?= htmlspecialchars($salle['nom']) ?></h1>
                        <p class="description">
                            <?= htmlspecialchars($salle['description']) ?>
                        </p>

                        <div class="equipements-title">Équipements</div>
                        <div class="tags">
                            <?php foreach ($equipements as $eq) : ?>
                                <span class="tag"><?= htmlspecialchars(trim($eq)) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Carte de réservation -->
                    <div class="booking-card">
                        <div class="price-block">
                            <div class="price"><?= number_format($salle['prix'], 0) ?>&nbsp;€</div>
                            <div class="price-unit">par heure</div>
                        </div>

                        <ul class="amenities">
                            <li class="amenity">Jusqu'à <?= (int)$salle['capacite'] ?> personnes</li>
                            <li class="amenity">Wi-Fi haut débit inclus</li>
                            <li class="amenity">Écran de présentation</li>
                            <li class="amenity">Machine à café</li>
                        </ul>

                        <!-- Le bouton renvoie vers le formulaire avec l'id de la salle -->
                        <a href="reservation.php?id=<?= (int)$salle['id_salle'] ?>" class="btn-reserve">
                            Réserver cette salle
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>