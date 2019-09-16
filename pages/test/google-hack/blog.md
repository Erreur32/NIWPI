---
title: 'google hack'
published: true
private: true
date: '11:54 12-09-2018'
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: true
feed:
    limit: 10
---

Depuis le début des moteurs de recherche un problème s’est posé : celui du référencement d’informations confidentielles. C’est le principe de la technique du « Google Hacking » qui utilise certaines expressions de recherche pour retrouver des fichiers et détails qui n’auraient pas dus être indexés. Certaines recherches ont été plus ou moins filtrées par Google au fil des années, mais d’autres restent activent et permettent de retrouver des contenus intéressants ! Quelques exemples….

 
Accéder à des caméras IP

Avec le développement des caméras « IP » et leur connexion au réseau Internet, il est désormais possible de tomber sur certains flux vidéos plus ou moins privés. Voici les expressions à utiliser pour différents types de caméras :

    Axis : inurl:/view.shtml or inurl:view/index.shtml
    Canon : sample/LvAppl/
    MOBOTIX : control/userimage.html
    FlexWatch : /app/idxas.html
    JVC : intitle:”V.Networks [Motion Picture(Java)]”

 
Récupérer des listes d’adresses e-mails

Si vous vous êtes déjà demandé comment certaines sociétés récupères des millions d’adresses e-mails qu’elles revendent au plus offrant à des spammeurs, voici une des techniques qu’elles utilisent. Grâce à cette recherche n’importe qui peut accéder à une liste de fichiers Excel qui contiennent au total les coordonnées de milliers, voire millions d’individus.

    filetype:xls inurl:”email.xls”

 
Envie d’un film ou d’une musique ?

GeekOrama vous recommande de ne pas télécharger illégalement, mais il est bon de savoir que si vous stockez des films ou fichiers sur Internet, même si personne n’est censé avoir l’adresse, vous devenez coupable de piratage et diffusion de contenus protégés. Pour exemple, voici comment trouver des morceaux de Green Day par exemple

    -inurl:(htm|html|php) intitle:”index of” +”last modified” +”parent directory” +description +size +(wma|mp3) « green day »

Pour les films, utilisez quelque chose de ce genre :

    -inurl:(htm|html|php) intitle:”index of” +”last modified” +”parent directory” +description +size +(avi|mkv) « dvdrip fr »

 
Même des mots de passe !

Qui vous a raconté que vos mots de passe sont gardés précieusement ? On lit quasiment toutes les semaines dans la presse que telle ou telle compagnie s’est fait pirater des milliers de comptes. Les techniques des pirates sont souvent plus sophistiquées, mais pas toujours. Une simple recherche Google peut ouvrir la porte à beaucoup de chose :

    « Login: * » « password =* » filetype: xl

    filetype:dat « password.dat »

    filetype:sql (« values * MD5 » | « values * password » | « values * encrypt ») date:12

Le terme « date:12 » utilisé dans la dernière expression indique au moteur de recherche que vous ne souhaitez que les résultat de moins de 12 mois.
Une liste plus exhaustive de Google Hacks pour retrouver des mots de passe est diponible ici ou encore ici, mais les possibilités sont infinies.