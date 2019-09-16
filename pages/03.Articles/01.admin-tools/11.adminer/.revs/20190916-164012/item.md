---
title: 'Adminer | mysql tool'
private: false
feed:
    limit: 10
---

!!! # Adminer 

_Le remplacent de phpmyadmin !_ pour la gestion des base de données !

> Adminer (aciennement phpMinAdmin) est écrit en PHP. 
> 
> Gestion de multiples base de données.
> 
> Avec une seule page php installer sur votre server. 
> 
> Interface simple est léger.
> 
> Adminer est fonctionnel  pour :  MySQL, MariaDB, PostgreSQL, SQLite, MS SQL, Oracle, Firebird, SimpleDB, Elasticsearch and MongoDB.
>  
 
!!! Pourquoi  Adminer est meilleur que  phpMyAdmin?

Priorité de dévelopement de Adminer sont:
 - 1. Securité,
 - 2. Client expérience, 
 - 3. Performence, 
 - 4. Options, 
 - 5. Taille.

! ## Installation 
- Placez vous dans le **répertoire que vous avez choisi** pour placer la page php de Adminer. (anciennement votre phpmyadmin ;)

_Exemple:_

```bash
cd /var/www/mysql/
```
- Puis on télécharge le fichier Adminer via Wget.

```bash
wget https://github.com/vrana/adminer/releases/download/v4.7.2/adminer-4.7.2.php 

# on renome le fichier so on le souhaite
mv adminer-4.7.2.php adminer.php
```

-  Installation terminée   :)  

   allez vérifier sur votre page  https://monsite.fr/mysql/adminer.php .
   
   (pensez à proteger la page via un .htaccess ou autre)
 
Et  Voilà !
 
 
---------


!!!! ### Downloads
<ul>
<li><a href="https://github.com/vrana/adminer/releases/download/v4.7.2/adminer-4.7.2.php">Adminer 4.7.2</a> (.php, 472 kB), <a href="https://github.com/vrana/adminer/releases/download/v4.7.2/adminer-4.7.2-en.php">English only</a> (.php, 320 kB)</li>
<li><a href="https://github.com/vrana/adminer/releases/download/v4.7.2/adminer-4.7.2-mysql.php">Adminer 4.7.2 for MySQL</a> (.php, 350 kB), <a href="https://github.com/vrana/adminer/releases/download/v4.7.2/adminer-4.7.2-mysql-en.php">English only</a> (.php, 205 kB)</li>
 
<li><b>Latest stable version :</b><code>https://www.adminer.org/latest[-mysql][-en].php</code></li>
    
<li><a href="https://github.com/vrana/adminer/blob/master/changes.txt">Change log</a>, </li>
  <li>  <a href="https://php.vrana.cz/-adminer.php">blog</a></li>


<li><a href="https://github.com/vrana/adminer/releases/tag/v4.7.2">GitHub mirror</a></li>
<li><a href="https://github.com/vrana/adminer/releases/">Older versions</a></li>
</ul>


!!!  ### screenshots
 
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/auth.png" title="Login"><img alt="" src="https://www.adminer.org//static/screenshots/preview/auth.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/db.png" title="Database overview"><img alt="" src="https://www.adminer.org//static/screenshots/preview/db.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/table.png" title="Table overview"><img alt="" src="https://www.adminer.org//static/screenshots/preview/table.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/create.png" title="Alter table"><img alt="" src="https://www.adminer.org//static/screenshots/preview/create.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/select.png" title="Select data"><img alt="" src="https://www.adminer.org//static/screenshots/preview/select.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/edit.png" title="Edit data"><img alt="" src="https://www.adminer.org//static/screenshots/preview/edit.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/database.png" title="Server overview"><img alt="" src="https://www.adminer.org//static/screenshots/preview/database.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/schema.png" title="Database schema"><img alt="" src="https://www.adminer.org//static/screenshots/preview/schema.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/dump.png" title="Export"><img alt="" src="https://www.adminer.org//static/screenshots/preview/dump.png" width="100" height="100"></a>
<a rel="screenshot" href="https://www.adminer.org//static/screenshots/sql.png" title="SQL command"><img alt="" src="https://www.adminer.org//static/screenshots/preview/sql.png" width="100" height="100"></a>
 
 
 
 #### ! Alternative designs
 
<p class="extras">
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/hever/adminer.css" title="hever (Martin Hořínek)"><img alt="screenshot" src="https://www.adminer.org/static/designs/hever/preview.png" width="100" height="100"></a>  
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/nette/adminer.css" title="nette (David Grudl)"><img alt="screenshot" src="https://www.adminer.org/static/designs/nette/preview.png" width="100" height="100"></a>  
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/brade/adminer.css" title="brade (Brad Garrett)"><img alt="screenshot" src="https://www.adminer.org/static/designs/brade/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/ng9/adminer.css" title="ng9 (Lukáš Brandejs)"><img alt="screenshot" src="https://www.adminer.org/static/designs/ng9/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/pepa-linha/adminer.css" title="pepa-linha"><img alt="screenshot" src="https://www.adminer.org/static/designs/pepa-linha/preview.png" width="100" height="100"></a>  
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/lucas-sandery/adminer.css" title="lucas-sandery"><img alt="screenshot" src="https://www.adminer.org/static/designs/lucas-sandery/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/pappu687/adminer.css" title="pappu687"><img alt="screenshot" src="https://www.adminer.org/static/designs/pappu687/preview.png" width="100" height="100"></a>  
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/mvt/adminer.css" title="mvt"><img alt="screenshot" src="https://www.adminer.org/static/designs/mvt/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/rmsoft/adminer.css" title="rmsoft"><img alt="screenshot" src="https://www.adminer.org/static/designs/rmsoft/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/rmsoft_blue/adminer.css" title="rmsoft blue"><img alt="screenshot" src="https://www.adminer.org/static/designs/rmsoft_blue/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/pepa-linha/Adminer-Design-Dark/master/adminer.css" title="pepa-linha-dark"><img alt="screenshot" src="https://www.adminer.org/static/designs/pepa-linha-dark/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/mancave/adminer.css" title="mancave (MonolithForge)"><img alt="screenshot" src="https://www.adminer.org/static/designs/mancave/preview.png" width="100" height="100"></a>
  
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/galkaev/adminer.css" title="galkaev (Peter Galkaev)"><img alt="screenshot" src="https://www.adminer.org/static/designs/galkaev/preview.png" width="100" height="100"></a>
  
	<a rel="extras" href="https://raw.githubusercontent.com/arcs-/Adminer-Material-Theme/master/adminer.css" title="arcs-material (Patrick Stillhart - Material Design)"><img alt="screenshot" src="https://www.adminer.org/static/designs/arcs-material/preview.png" width="100" height="100"></a>
 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/price/adminer.css" title="price (James Price)"><img alt="screenshot" src="https://www.adminer.org/static/designs/price/preview.png" width="100" height="100"></a>
 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/flat/adminer.css" title="flat (Israel Viana)"><img alt="screenshot" src="https://www.adminer.org/static/designs/flat/preview.png" width="100" height="100"></a>
 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/haeckel/adminer.css" title="haeckel (Klemens Häckel)"><img alt="screenshot" src="https://www.adminer.org/static/designs/haeckel/preview.png" width="100" height="100"></a>
   
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/pokorny/adminer.css" title="pokorny (Miroslav Pokorný)"><img alt="screenshot" src="https://www.adminer.org/static/designs/pokorny/preview.png" width="100" height="100"></a>
 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/paranoiq/adminer.css" title="paranoiq (Vlasta Neubauer)"><img alt="screenshot" src="https://www.adminer.org/static/designs/paranoiq/preview.png" width="100" height="100"></a>
 
	<a rel="extras" href="ttps://raw.githubusercontent.com/vrana/adminer/master/designs/bueltge/adminer.css" title="bueltge (Frank Bültge)"><img alt="screenshot" src="https://www.adminer.org/static/designs/bueltge/preview.png" width="100" height="100"></a>
    
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/esterka/adminer.css" title="esterka (Petr Esterka)"><img alt="screenshot" src="https://www.adminer.org/static/designs/esterka/preview.png" width="100" height="100"></a> 
	<a rel="extras" href="https://raw.githubusercontent.com/vrana/adminer/master/designs/nicu/adminer.css" title="nicu (Iordachescu Nicu)"><img alt="screenshot" src="https://www.adminer.org/static/desig