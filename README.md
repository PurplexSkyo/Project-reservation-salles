# Répertoire du site de réservation de salle

## Description
Ce projet est un site web permettant la réservation de salles.

## Caractéristiques
- Réservation en ligne
- Gestion des disponibilités
- Interface utilisateur intuitive

## Installation
```bash
git clone https://github.com/PurplexSkyo/Project-reservation-salles.git
cd Project-reservation-salles
```
- ## Avoir Xampp

    Ce projet necessite le programme XAMPP afin de fonctionnée sur le web.
    ### Qu'est ce que Xampp
    XAMPP est l'environnement de développement PHP le plus populaire. XAMPP est une distribution Apache entièrement gratuite et facile à installer contenant MySQL, PHP et Perl. Le paquetage open source XAMPP a été mis au point pour être incroyablement facile à installer et à utiliser.

    ### Téléchargement
    Cliquez sur ce lien pour télécharger l'installeur :  [Xampp Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download)  
    

   Une fois le fichier téléchargé, double-cliquez dessus et suivez les étapes d'installation.

    ### Préparation 
    
   -  Cliquer sur la barre de recherche windows et entrer << XAMPP >>  
    - Faites un clic droit sur XAMPP Control Panel et choisissez Exécuter en tant qu'administrateur. 
    - Cliquez sur OUI pour valider
    - Dans le panneau de contrôle, cliquez sur le bouton Start pour les modules Apache et MySQL.
 

## Copier les dossiers dans de XAMPP
- Aller dans le dossier suivant :

        C:\xampp\htdocs

- Créez un nouveau dossier et nommez-le comme vous le souhaitez (ex : salle_reserve ) 
- Copiez l'intégralité des fichiers et dossiers du projet dans ce nouveau dossier 
- Une fois terminé, ouvrez votre navigateur et entrez l'adresse suivante :
    
        http://localhost/nom-de-votre-dossier/index.php

## PHPmyadmin

- Accédez à l'interface PHPMyAdmin (généralement via http://localhost/phpmyadmin/).

- Créez une nouvelle base de données nommée workspace_connect

- Dans cette base,  créez les tables reservations et salles

- Utilisez le fichier Pour_workspact_connect.sql pour importer la structure de la table réservation

- Faites de même pour la salle en veillant bien a insérer les données correspondantes




