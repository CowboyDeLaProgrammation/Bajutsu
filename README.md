# Site Bajutsu - Arthur Lehmannm, Aleksandr Lukin
C'est un site php dockerisé sur le theme du tir a l'arc sur le cheval

## Auteurs

- [Arthur Lehmann](https://github.com/Arthur-L09)
- [Aleksandr Lukin](https://github.com/CowboyDeLaProgrammation)

## Technologies utilisés

 - HTML
 - CSS
 - PHP
 - Apache2
 - Docker
 - MySQL

## Pourquoi ce théme

Nous avons choisi le bajutsu car on ne savait pas quelle theme prendre et car Monsieur Henauer n'a pas voulu qu'on fasse un jeu comme projet, donc on a decidé de prendre le tir a l'arc le cheval parce que c'est un hobby de Pascal Henaueur et c'est le seul theme qu'il nous pas imposé parmis les autres hobbys comme le sabre laser et le yoseikan.

## Lien journal de bord

https://docs.google.com/document/d/1s8fsU33Rxh9mZVZmETQgGtIbpSe4sQdGVMhhjNod--o/edit?usp=sharing

## Description / Fonctionnalités

Tout le monde a accés au site, les personnes non connectés peuvent consulter toutes les pages sauf les interactions comme : rejoindre un événement, pour cela faut créer un compte avec un pseudo, mot de passe et un mail.  

**Page d'accueil** :

Sur la page d'accueil on peut se renseigner sur le Bajutsu, donc decouvrir ce sport avec une description, les photos et son histoire.
Grâce a la barre de navigation en haut du site disponible sur tout le pages, on peut se diriger vers les autres pages comme : Les événement disponibles, Les événements archivés qui ont deja eu lieu, Contact et inscription/connexion/deconnexion au compte.

**Page événements / Page archives** :

Ici on peut voir tout les événements qui auront lieu bientot sous une liste roulante avec de filtres si on a envie. Sur chaque ligne on voit le titre du cours, le lieu, date et un bouton pour voir plus d'informations qui nous menera a une autre page. Sur cette page on voit tout les détails du evenement en plus comme : la date précise de debut et de fin, une description et le prix, ainsi qu'un bouton pour participer et une liste des utilisateurs qui participent a ce evenement, biensur comme c'était dit avant, il faut etre connecté pour rejoindre des cours, si l'utilisateur n'est pas authentifié, il sera ammené vers la page de connexion tout ca sera la meme chose pour les événements archivés. Le bouton "Participer" devient "Quitter" pour que l'utilisateur puisse partir du cours si il a changé d'avis, donc il disparaitra du menu des membres.

**Page contacts** :

Cette page contient l'adresse, telephone des responsables du bajutsu et un formulaire avec un email et un message a remplir pour envoyer.


**Systeme de compte** :

Par défaut on n'est pas connecté lors du premier visite du site, en haut du site, dans la navigation il y'a un lien "connexion"
Pour se connecter on a besoin de donner notre pseudo et le mot de passe, si la personne n'a pas de compte, elle peut cliquer sur le texte bleu en bas du formulaire : "je n'ai pas de compte" qui menera a une autre page où on doit remplir le nom, l'email et deux fois le mot de passe, quand le compte est crée on doit se connecter et ensuite on aura acces aux autres fonctionnalités du site
## Installation

Pour proprement ouvrir ce projet, nous avons besoin d'avoir un environnement docker et visual studio code.
Si vous n'avez pas docker desktop, veuillez l'installer ici : https://docs.docker.com/desktop/setup/install/windows-install/

Une fois que docker est installé, ouvrez l'appli et minimisez la pour qu'elle tourne au fond. Ouvrez le dossier du projet avec votre visual studio et appuyer en haut du programme sur : Terminal > New Terminal pour ouvrir la console.

Tapez cette commande pour lancer le projet, puis attendez pendant un petit moment jusqu'a tout le texte affiché arrete de derouler et que les 3 containeurs du site soient crée (Network bajutsu_default : Created, Container bajutsu-db-1 : Started, Container bajutsu-web-1 Started )

```bash
docker compose up -d --build 
```

Maintenant ouvrez votre navigateur et tapez ce lien afin de pouvoir accéder au site :
```bash
http://localhost:9000/
```
Et voila maintenant faites ce que vous voulez sur le site.

Lorsque vous avez terminé, executez cette commande pour supprimer et eteindre le site :
```bash
docker compose down -v
```
    
