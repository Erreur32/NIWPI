---
title: 'Git pull [FIX]'
private: false
date: '11:29 19-11-2018'
hero_classes: ''
hero_image: ''
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
---

# [FIX]  GIT pull

### ! Veuillez valider ou remiser vos modifications avant la fusion.

Si vous avez un conflit  avec la commande **GIT PULL** (_et non pas faire un merge ou push !_) et que vous avez l'erreur suivante:

```bash
-->  _ Veuillez valider ou remiser vos modifications avant la fusion._ 
```
 
[u] Exemple GIT erreur:[/u]
```
$ git pull

Mise à jour 35344ac..d2d6c92
error: Vos modifications locales aux fichiers suivants seraient écrasées par la fusion :
        config.php
        inc/js/photosphere/sphere.js
        inc/loc/default.ini
        inc/loc/francais.ini
        index.php
        src/classes/Account.php
...
 src/tests/TestUnit.php
Veuillez valider ou remiser vos modifications avant la fusion.
Abandon
```


## Corriger cette erreur avec la commande:
!!!!  **git reset --hard HEAD **

[u]Exemple:[/u]
```
$ git reset --hard HEAD
HEAD est maintenant à 35344ac Merge pull request #298 from saintger/mp4
$ git  pull

Mise à jour 35344ac..d2d6c92
Fast-forward
 config.php                    |   3 ++
 inc/js/photosphere/sphere.js  |   2 +-
 inc/loc/default.ini           |  50 +++++++++++++++++++++++++--
 inc/loc/francais.ini          |  71 ++++++++++++++++++++++++++++++++++----
 inc/loc/italian.ini           | 128 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 inc/spiffygif.gif             | Bin 0 -> 28617 bytes
 index.php                     |   7 ++++
 src/classes/Account.php       |   6 ++--
  src/tests/TestUnit.php        |   2 +-
 46 files changed, 1054 insertions(+), 475 deletions(-)
 create mode 100644 inc/loc/italian.ini
 create mode 100644 inc/spiffygif.gif
 create mode 100644 src/classes/Description.php
 create mode 100644 src/js/confirmation.js
```

[u]TIPS:[/u]

 - Mettre un  alias dans son .bash_aliases

```bash
alias gitReset="git reset --hard HEAD && git checkout master && git pull"

```

Enjoy ;)


by 🅴🆁🆁🅴🆄🆁32
