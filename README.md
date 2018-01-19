# webagenda-viewer
Agenda Web - Visualiser les calendriers iCAL/CalDAV (Zimbra) d'utilisateurs LDAP/AD

![Capture d'écran](/images/snapshot.png)

## Quoi de plus que d'autres outils de ce type ?
En fait rien ! En effet, webagenda-viewer est simplement un outil de consultation d'agenda qui se veut simplifier à l'extrême.

Il a été conçu pour permettre de visualiser rapidement les rendez-vous des utilisateurs en entreprise.

## Installation
* Déposer tous les fichiers sur votre serveur web
* Éventuellement mettre votre propre logo dans le répertoire '/images'
* Adapter le fichier 'inc/config.inc' (titre, logo, paramètres d'accès aux serveurs LDAP et de messagerie/calendrier)

NOTA : Pour pouvoir lire les agendas de plusieurs utilisateurs, il vous sera certainement nécessaire d'utiliser/de créer un compte de
messagerie ayant au moins des permissions d'accès en lecture seule aux agendas considérés.


