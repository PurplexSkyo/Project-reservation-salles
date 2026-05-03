# répertoire du site de réservation de salle

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
    Cliquez sur ce lien :   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download  
    ( Cela vous redirige vers l'application Xampp )

    Une fois installé, double click sur le fichier puis progresser dans l'installation

    ### Préparation 
    
    Cliquer sur la barre de recherche windows et entrer << XAMPP >>  
    Vous deviez apercervoir << XAMPP Control Panel >>  
    Faites un clique droit dessus et cliquer sur  << Exécuter en tant qu'administrateur >>
    Cliquer sur << OUI >>

    Cliquer sur START de APACHE ET MYSQL dans la colonne << Actions >>


## Copier les dossiers dans de XAMPP
Aller dans le dossier suivant :

    C:\xampp\htdocs

Crée un fichier et nommé le comme vous le vouliez  
Copiez les fichiers et dossier du projet et copiez les dans le fichier que vous aviez crée  
Une fois ceci fais entrez ceci dans la barre web :

    http://localhost/nom-de-votre-dossier/index.php

## PHPmyadmin

Une fois sur phpmyadmin crée la base de donnée workspace_connect  
Une fois fais, crée la table workspace_connect  
Copier dans le fichier worskpact_connect.sql la table réservation  
Crée une nouvelle table et faite de même pour salles en ajoutant bien les insertion des données des salles.

#        J'espere que tout cela vous aura bien aidée


