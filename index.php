<?php
// Connexion BDD + récupération des 3 premières salles pour l'accueil
require_once 'config/database.php';

$stmt  = $pdo->query('SELECT * FROM salle LIMIT 3');
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// CSS de cette page
$css_file = 'css/style.css';
require_once 'config/header.php';
?>

<main>
    <section class="hero_1">
        <div class="container2">
            <div class="father">
                <div class="jesaispas1">
                    <div class="titre_presentation">
                        <h1>Votre espace de travail <span class="blue">idéal</span></h1>
                        <p>Signy Salles propose des espaces de coworking et des salles de réunion,<br> disponibles à la réservation en quelques clics.</p>
                    </div>
                    <div class="voir_reserve">
                        <a href="Salle.php" class="voir1">Voir nos salles</a>
                        <a href="reservation.php" class="voir2">Réserver maintenant</a>
                    </div>
                </div>

                <div class="presentation">
                    <div class="just">
                        <h5>Wifi haut debit</h5>
                        <p>Connexion fibre dans toutes les salles</p>
                    </div>
                    <div class="just">
                        <h5>Flexible</h5>
                        <p>Créneaux 2 heures, reservation instantanée</p>
                    </div>
                    <div class="just">
                        <h5>Capacité adapté</h5>
                        <p>Capacité de 2 à 25 personnes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero_body">
        <div class="container3">
            <h1 style="text-align: center;">Nos espaces</h1>
            <div class="first_bar">
                <p class="desc">Découvrez nos salles les plus utilisées</p>
                <a href="Salle.php" class="jsp">Voir toutes nos salles ⩥</a>
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