---
title: 'backup perso'
private: false
date: '16:48 17-08-2018'
sitemap:
    ignore: true
---

http://sebsauvage.net/wiki/doku.php?id=disque_externe

 
Backup sur disque externe


Ce que j'ai à sauvegarder:

    Mon site web perso (sebsauvage.net)
    Tous les fichiers sur ma machine personnelle (fichiers, photos…)

Contraintes:

    Je ne veux plus dépendre de services en ligne (trop chers, pas fiables, trop lents, mauvaise protection de la vie privée)
    Je veux garder un historique de mes fichiers (je veux pouvoir récupérer un fichier effacé ou la version antérieure d'un fichier)
    Sécurité (je ne veux pas qu'on puisse me voler mes données).
    Je veux avoir 3 copies de mes données (redondance) situées physiquement à des endroits différents (pour prévenir d'un éventuel désastre local (incendie, etc.))

Outils

J'utilise pour cela:

    Matériel: Deux disques durs externes (de capacité égale ou supérieure à mon ordinateur perso)
    Logiciels : ssh, rsync, VeraCrypt, BorgBackup.

Voici comment j'effectue mes backups:

Voici l'utilité de chaque outils:

    VeraCrypt: Système partitions chiffrées très solide. Réduit à presque zéro le risque de vol de données même si l'ordinateur ou un disque dur est volé/perdu.
    rsync : Me sert à deux choses:
        Borg n'étant pas très bon pour aller chercher des fichiers distants, j'utilise rsync pour rapatrier localement une copie de sebsauvage.net (que j'historise ensuite avec borg).
        rsync est très efficace pour synchroniser deux répertoires locaux à l'identique (copie du disque externe A vers le B).
    borg : Ce logiciel de backup me permet:
        De gagner beaucoup de place pour la sauvegarde (compression + dé-duplication)
        D'historiser mes fichiers : Je peux accéder à l'ancienne version d'un fichier, ou même à un fichier que j'aurais effacé il y a plusieurs mois.
        Pour plus d'informations sur Borg, voir cette page.
        Le petit plus: Si vous sauvegardez plusieurs machines sur le même disque, Borg détectera les fichiers identiques (déduplication ⇒ énorme gain de place !)

Bien sûr cela implique une certaine discipline:

    Fréquence : J'effectue ces sauvegardes au minimum une fois par semaine. Je perd ainsi au plus 7 jours de données. La manipulation n'est pas très contraignante: Une fois les partitions VeraCrypt montées, je laisse tourner le script en tâche de fond.
    Lieux : Vous remarquerez que le disque externe A fait la navette entre chez moi et mon lieu de travail. Il voyage toujours avec moi (Quand je sors de mon appartement, le disque A sort avec moi). En procédant ainsi, en cas d'incendie chez moi, ou à mon travail, ou encore un accident de voiture, j'ai encore une à deux copies des données à tout moment.

J'ai configuré Borg pour qu'il purge automatiquement les anciens backups en conservant au maximum:

    1 backup par jour sur les 7 derniers jours.
    1 backup par semaine sur les 4 dernières semaines.
    1 backup par mois sur les 6 derniers mois.

J'ai donc beaucoup de backups récents, et quelques backups plus anciens. Cela me permet de récupérer plusieurs versions d'un fichier que j'aurais modifié récemment, mais aussi de récupérer un fichier que j'aurais effacé il y a plusieurs mois.
Préparation des disques
Partitionnement

Je créé 2 partitions de 1 To sur mon disque externe de 2 To.

    Partition partage : Partition primaire de type FAT32 (1 To)
    Partition Backup : Partition primaire de type ext4 (1 To) contenant un volume VeraCrypt sous forme de fichier (*.vc)

Raisons:

    La partition de backup étant destinée à moi seul et n'étant accédée que depuis Linux, ext4 est le meilleur choix. Cela évitera également que si je prête mon disque les utilisateurs Windows touchent par erreur ma partition backup (puisque Windows ne gère pas ext4 et ne l'affichera même pas).
    La partition de partage reste en FAT32 afin de pouvoir échanger des fichiers avec d'autres systèmes.

Ajustements sur la partition ext4

    Après formattage en ext4, j'ai fait quelques ajustements à cette partition:
        Suppression de la zone réservée: Par défaut, Linux réserve 5% des disques au système (Utile sur un disque système cas de remplissage abusif du disque par les utilisateurs: Le système peut continuer à fonctionner). Sur une partition de 1 To, ça fait 50 Go de réservés pour rien. On peut donc supprimer cette réservation de 5 %:
            Supprimer la réservation:

            sudo tune2fs -m 0 /dev/sda1

            Vérifier:

            sudo tune2fs -l /dev/sda1 | grep 'Reserved block count'

            (Sources: 1 2)
        Désactivation du journaling : Le journaling d'ext4 n'est pas forcément pertinent sur un disque de backup. On peut le désactiver aussi:
            Démontez le disque (si c'est /dev/sda1):

            sudo umount /dev/sda1

            Vérifiez-le:

            sudo fsck /dev/sda1

            Désactiver le journaling:

            sudo tune2fs -O ^has_journal /dev/sda1

            Après remontage, vous pouvez vérifier que le journaling est désactivé: Vous ne devez plus voir has_journal sur la sortie de la commande suivante:

            sudo tune2fs -l /dev/sda1 | grep features

            (Sources : 1 2)
            À noter que la désactivation du journaling est particulièrement intéressante pour réduire les écritures sur les mémoire flash (clés USB, SSD, etc.)
            Note: tune2fs n'est pas une erreur. La majorité des outils conçus à la base pour ext2 fonctionnent en ext4.

Mise en place du volume de sauvegarde

Une fois le disque partitionné:

    Je copie les packages VeraCrypt, rsync et borgbackup dessus (Pensez à sudo apt download …)
    Je créé un volume VeraCrypt sur la place restante sous forme de fichier conteneur (*.vc), formatté en ext4 également, et je désactive également la réservation des 5%.

En cas de problème (par exemple si le système ne démarre plus), je peux booter sur la clé USB, installer VeraCrypt+Borg (à partir des .deb stockés sur le disque dur) et accéder à mon backup chiffré.
Backups
Backup de sebsauvage.net

Mon backup est initié localement (de ma machine perso). BorgBackup est un fantastique outils de backup, mais il est trop lent à récupérer des fichiers distants (on doit passer par sshfs, et c'est trop lent).

Je fais donc:

    un rsync qui copie mon site vers /backup/site/ (pour rapatrier rapidement les fichiers)
    un borgbackup de /backup/site/ vers backup/site-borg/ (pour historiser les modifications)

Je perd un peu de place (j'ai deux copies locales de mon site web), mais c'est plus rapide et je peux historiser les modifs de mon site.

rsync --progress --delete -az user@sebsauvage.net:/home/www/ /backup/site/
borg create -v --stats --progress /backup/site-borg/::{now} /backup/site/

Note:

    J'ai bien entendu préalablement créé un repo borg avec la commande

    borg init --encryption=none /backup/site-borg/

    Borg peut aussi chiffrer les backups, mais j'ai désactivé le chiffrement (–encryption=none) car je travaille déjà dans une partition chiffrée.
    Le {now} permet d'horodater automatiquement les backups.

Backup machine perso vers disque dur A

J'ai créé une partition chiffrée VeraCrypt sur le disque externe USB. Après avoir monté la partition, j'ai créé un repo borg:

sudo borg init --encryption=none /media/veracrypt2/backup.borg

Ensuite je lance les sauvegardes:

sudo nice -n 19 ionice -c 3 borg create -v --stats --progress --exclude-from="/media/veracrypt2/excludes-backup-asus.txt" /media/veracrypt2/backup.borg::asus-{now} /

Notes:

    Je suis bourrin, je sauvegarde tout (/)
    J'utilise nice/ionice pour minimiser l'impact (priorité CPU et disque minimale).
    J'exclue certains répertoires et fichiers du backup:

    excludes-backup.txt

        /proc
        /sys
        /dev
        /media
        /mnt
        /cdrom
        /tmp
        /run
        /var/tmp
        /var/run
        /home/*/.thumbnails
        /home/*/.cache/chromium
        /home/*/.cache/mozilla
        /home/*/.cache/wine
        /home/*/.steam/steam/steamapps
        /home/*/.steam/steam/config/htmlcache
        /home/*/.local/share/Trash
        /home/*/.mozilla/firefox/*.default/Cache
        /home/*/.gvfs
        *.!qB

Miroir disque dur A vers disque dur B

Je monte les deux partitions chiffrées et je fais un bête rsync entre les deux. Il ne me transfère que les fichiers de backup Borg ajoutés/modifiés.

rsync --progress -avr --delete /media/veracrypt1/* /media/veracrypt2

Pérennité

VeraCrypt et Borg sont des logiciels fiables, stables depuis de nombreuses années, largement répandus dans les distributions. Il y a donc peu de chance qu'ils m'empêchent de relire mes données.

Les auteurs de VeraCrypt et Borg semblent accorder de l'importance à la compatibilité descendante (les nouvelles versions des logiciels lisent les fichiers dans les anciens formats). (J'ai pu vérifier cela sur plusieurs changements de version.)

Du point de vue matériel: Des études de Google et BlackBaze (deux gros hébergeurs) montrent que 80% des disques durs vivent au minimum 4 ans quand ils sont allumés 24h/24. Je peux donc tabler sur une espérance de vie raisonnable de mes disques durs (d'autant qu'ils ne sont mis en route qu'une fois par semaine). En cas de défaillance d'un disque, j'ai encore 2 copies, ce qui me laisse le temps de racheter un disque dur externe (on trouve des 2 To USB3 à 65,80€, livrés en moins d'une semaine).
Accès aux sauvegardes

L'accès aux backups est aisé:

    Je monte la partition VeraCrypt (double-clic, mot de passe)
    Je monte le backup Borg (1 ligne de commande).
    Chacun des backups passés apparaît alors comme un sous-répertoire avec la date, avec toute l’arborescence de mes fichiers dans chaque sous-répertoire.

Je peux donc facilement récupérer un fichier que j'aurais effacé il y a quelques mois.
disque_externe.txt · Dernière modification: 2018/08/16 16:32 par sebsauvage
Outils de la page

    Afficher le texte source
    Anciennes révisions
    Liens de retour
    Haut de page

Sauf mention contraire, le contenu de ce wiki est placé sous les termes de la licence suivante : CC Attribution-Noncommercial 4.0 International
CC Attribution-Noncommercial 4.0 International Donate Powered by PHP Valid HTML5 Valid CSS Driven by DokuWiki
