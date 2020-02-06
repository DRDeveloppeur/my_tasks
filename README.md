# my_tasks

Vérifier si vous êtes à jours sur symfony cli avec la commande: symfony check:requirements

Copier le repertoire: git clone https://github.com/DRDeveloppeur/my_tasks.git

Modifier le fichier .env de la racine du projet ligne 28 (root:root => identifiant:motdepasse) avec votre identifiant et votre mot de passe pour se connecter à la base de donnée.

Tapez ces deux ligne de commande:
  - php bin/console doctrine:database:create
  - php bin/console doctrine:migrations:migrate
Afin de créer la base de donnée et ces tables.

Puis lancer le serveur avec: symfony server:start

Voilà, vous pouvez profiter du gestionnaire de tâches :).
