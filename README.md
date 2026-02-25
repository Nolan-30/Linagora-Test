# 🌐 Drupal Menu Integration - Test Task
Bienvenue dans le dépôt du projet d'intégration de menu dynamique pour Linagora ! 🚀
Ce projet consiste en la création d'un menu complexe et administrable via Drupal, basé sur des maquettes Figma précises.

## 📋 Objectifs du Projet
L'objectif était de transformer une maquette Figma en un composant frontend fonctionnel et connecté au CMS Drupal.

États du menu : Intégration de l'état par défaut et de l'état "au clic" avec panneau déroulant.

Connexion Drupal : Rendre tous les éléments modifiables via l'interface d'administration.

Responsive Desktop : Optimisation pour les écrans de 1024px à 1900px.

## ✨ Fonctionnalités Clés
🔧 Dynamic Content : Les titres, images, textes et liens du menu sont gérés par Drupal.

🖱️ Interactive UI : Menu déroulant fluide déclenché au clic avec retour visuel (couleur bleue).

🎨 Clean Design : Respect strict de la charte graphique (arrondis, couleurs, typographies).

🚀 Performance : Code CSS optimisé et gestion du cache avec Drush.

## 🛠️ Stack Technique
CMS : Drupal 10+ 💧

Environnement : DDEV 💻

Frontend : HTML5 / CSS3 / JavaScript (jQuery pour Drupal) 🎨

Outil de gestion : Drush ⚡

## 🚀 Installation et Lancement
Pour cloner et tester le projet localement :
git clone [TON_LIEN_DEPOT]
cd test

Démarrer l'environnement :
ddev start

Importer la configuration/base de données (si nécessaire)
ddev drush cim -y

Vider le cache :
ddev drush cr
