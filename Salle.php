<?php
// Récupère TOUTES les salles depuis la BDD
require_once 'config/database.php';

$stmt   = $pdo->query('SELECT * FROM salle');
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

$css_file = 'css/Salle.css';
require_once 'config/header.php';
?>

<main>
    <section class="hero_body">
        <div class="container3">
            <div class="first_bar">
                <h1>Nos espaces</h1>
                <p class="desc">Découvrez nos salles les plus utilisées</p>
            </div>

            <div class="grid-grille">
                <?php foreach ($salles as $salle) : ?>
                <div class="card">
                    <div class="image-container">
                        <img src="Img/<?= htmlspecialchars($salle['image']) ?>"
                             alt="<?= htmlspecialchars($salle['nom']) ?>">
                    </div>
                    <div class="contenu">
                        <h4><?= htmlspecialchars($salle['nom']) ?></h4>
                        <p class="desc-texte">
                            <?= htmlspecialchars(substr($salle['description'], 0, 80)) ?>...
                        </p>
                        <div class="infos-ligne">
                            <p class="info-item">👤 <?= (int)$salle['capacite'] ?> pers.</p>
                            <p class="info-prix"><strong>€</strong> <?= number_format($salle['prix'], 0) ?>€ / h</p>
                        </div>
                        <div class="actions">
                            <a href="DetailSalle.php?id=<?= (int)$salle['id_salle'] ?>" class="btn-voir">Voir la salle ⩥</a>
                            <a href="Reservation.php?id=<?= (int)$salle['id_salle'] ?>" class="btn-reserver">Réserver</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
</main>

<?php require_once 'config/footer.php'; ?>