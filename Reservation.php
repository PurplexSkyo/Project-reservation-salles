<?php
require_once 'config/database.php';

// =============================================
// TRAITEMENT DU FORMULAIRE (quand on clique "Confirmer")
// =============================================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. On récupère et nettoie chaque champ
    $nom          = trim($_POST['nom']);
    $prenom       = trim($_POST['prenom']);
    $email        = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $id_salle     = intval($_POST['id_salle']);
    $date_resa    = $_POST['date_resa'];
    $creneau      = trim($_POST['creneau']);
    $nb_personnes = intval($_POST['nb_personnes']);

    // 2. On vérifie que les champs obligatoires ne sont pas vides
    if ($nom && $prenom && $email && $id_salle && $date_resa && $creneau) {

        // 3. On insère en BDD avec une requête préparée (sécurité anti injection SQL)
        $sql  = 'INSERT INTO reservation (nom, prenom, email, id_salle, date_resa, creneau, nb_personnes)
                 VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $email, $id_salle, $date_resa, $creneau, $nb_personnes]);

        // 4. On redirige vers la page de confirmation
        header('Location: confirmation.php');
        exit;
    }
}

// =============================================
// On pré-sélectionne la salle si on vient de salle.php?id=1
// =============================================
$id_preselect = intval($_GET['id'] ?? 0);

// On récupère toutes les salles pour la liste déroulante
$stmt_salles = $pdo->query('SELECT id_salle, nom, capacite, prix FROM salle');
$salles      = $stmt_salles->fetchAll(PDO::FETCH_ASSOC);

$css_file = 'css/Reservation.css';
require_once 'config/header.php';
?>

<main>
    <div class="page">
        <a href="Salle.php" class="return">⇦ Retour aux Salles</a>
        <h1 class="page-title">Réserver une salle</h1>
        <p class="page-subtitle">Remplissez le formulaire pour réserver votre espace</p>

        <div class="card">
            <div class="card-header">
                <span class="card-header-title">Informations de réservation</span>
            </div>

            <!-- method POST envoie les données au même fichier (action="reservation.php") -->
            <form action="reservation.php" method="POST">

                <!-- Nom + Prénom -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                </div>

                <!-- Salle — liste générée dynamiquement depuis la BDD -->
                <div class="form-group">
                    <label for="id_salle">Salle *</label>
                    <div class="select-wrap">
                        <select id="id_salle" name="id_salle" required>
                            <option value="" disabled selected>Choisir une salle</option>
                            <?php foreach ($salles as $s) : ?>
                                <option value="<?= (int)$s['id_salle'] ?>"
                                    <?= ($id_preselect === (int)$s['id_salle']) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($s['nom']) ?>
                                    — <?= (int)$s['capacite'] ?> pers.
                                    — <?= number_format($s['prix'], 0) ?>€/h
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Date + Créneau -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="date_resa">Date *</label>
                        <input type="date" id="date_resa" name="date_resa"
                               min="<?= date('Y-m-d') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="creneau">Créneau *</label>
                        <div class="select-wrap">
                            <select id="creneau" name="creneau" required>
                                <option value="" disabled selected>Choisir un créneau</option>
                                <option value="09h00-11h05">09h00 -- 11h05</option>
                                <option value="11h15-13h05">11h15 -- 13h05</option>
                                <option value="13h15-15h05">13h15 -- 15h05</option>
                                <option value="15h15-17h05">15h15 -- 17h05</option>
                                <option value="17h15-19h05">17h15 -- 19h05</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Nombre de personnes -->
                <div class="form-group">
                    <label for="nb_personnes">Nombre de personnes *</label>
                    <div class="input-icon-wrap">
                        <input type="number" id="nb_personnes" name="nb_personnes"
                               placeholder="Ex: 5" min="1" max="50" required>
                    </div>
                </div>

                <button type="submit" class="btn-confirm">Confirmer la réservation</button>

            </form>
        </div>
    </div>
</main>

<?php require_once 'config/footer.php'; ?>