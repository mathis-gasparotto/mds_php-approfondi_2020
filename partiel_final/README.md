# Top 100 --/

Vous devrez réaliser un site affichant le top 100 des jeux vidéos les mieux notés.
L'origanisation et la propreté du code sera évaluée.
Le design du site ne sera absolument pas noté, si vous avez le temps faites-vous plaisir, mais ne perdez pas de temps là-dessus ;)

## Data --/

Vous créerez une nouvelle base de donnée : top_db
Vous créerez 2 tables : users et games
Les données des jeux vous seront fournies sous la forme d'un tableau php.
Vous devrez d'abord réaliser le script qui les enregistre en base de données (Tous les champs des jeux dans le tableau php doivent être présents en base).
Les users possèdent un nom et un mot de passe.

## Objets --/

Les jeux et les users doivent être utilisés dans votre application sous forme d'objet.
Pensez à utiliser les constructeurs.

## Navigation

Le site comporte 5 pages :
- Login
- Logout
- Accueil
- Liste des jeux vidéos
- Détails d'un jeu video

Un menu de navigation doit être présent en haut des pages : Accueil, Liste des jeux, Détails d'un jeu.
Il contient les liens vers Accueil et la liste ainsi qu'un lien vers Logout pour se déconnecter.

## Page Accueil --/

Affichez les 5 premiers jeux de la liste.

## Page Login --/

Deux formulaires sont affichés : un pour se connecter, l'autre pour s'inscrire.
Le traitement des formulaires est effectué sur cette même page.

## Page Logout --/

La page de logout n'envoie aucun contenu à l'utilisateur, le serveur déconnecte l'utilisateur et le renvoie vers la page Login.

## Authentification --/

Si l'utilisateur n'est pas connecté, il est redirigé vers la page login (depuis toutes les pages).
Pour se connecter, l'utilisateur doit entrer son nom et son mot de passe dans le formulaire de login, ensuite vous devez vérifier si cette utilisateur éxiste en base de données et que le mot de passe correspond.
Si l'utilisateur éxiste et que le mot de passe est correcte, on stock une variable `connected` avec pour valeur `true` dans la session. Lorsque l'utilisateur n'est pas connecté, cette variable est supprimée de la session.

## Liste des jeux --/

Affichez la liste des jeux dans l'ordre avec leur nom, leur image et le score sur 100.
Chaque jeux doit avoir un lien vers la page de son détails (peu importe comment le lien est affiché).

## Détails d'un jeux --/ 

Afficher le nom, l'image, le score ainsi que le résumé.

## BONUS

Sur le détails d'un jeu, un user peut cliquer sur un lien pour ajouter ce jeux à sa liste (ou l'enlever s'il est déjà présent). Faire une nouvelle page pour afficher cette liste.
Pour mettre cette liste en base de données, stockez-la dans la table user, après l'avoir encodé en JSON avec json_encode(). Lorsque vous la récupérez, il faudra la décoder avec json_decode()
