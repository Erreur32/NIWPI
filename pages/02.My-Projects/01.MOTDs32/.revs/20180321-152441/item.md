---
title: MOTDs32
private: false
date: '23:42 16-03-2018'
taxonomy:
    category:
        - bash
        - blog
    tag:
        - Bash
        - blog
        - MOTDs32
        - MOTD
        - stat
    page:
        - blog
textformatter: false
dateformat: 'H:i d-m-Y'
process:
    twig: true
    markdown: false
twig_first: true
never_cache_twig: false
creator: erreur32
blog_url: /articles
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
content:
    items: '- ''@self.children'''
    order:
        by: date
        dir: desc
    limit: '10'
    pagination: '1'
    url_taxonomy_filters: '1'
    shortcode-core: '1'
    active: true
smartypants:
    merged: {  }
---

<h2 id="mcetoc_1c8pttrkm0">The MODstat for BASH 2017</h2>
<p><a href="%20https:/git.echosystem.fr/Erreur32/MOTDs32">&nbsp;https://git.echosystem.fr/Erreur32/MOTDs32</a></p>
<p>&nbsp;</p>
<div class="mce-toc">
<h2>Table of Contents</h2>
<ul>
<li><a href="#mcetoc_1c8pttrkm0">The new MODstat for BASH 2017</a></li>
<li><a href="#mcetoc_1c8puqga00">&nbsp;Ca sert &agrave; quoi ?</a></li>
<li><a href="#mcetoc_1c8pueaq00">Installation:</a></li>
<li><a href="#mcetoc_1c8putbr40">Exemple:</a></li>
</ul>
</div>
<p>&nbsp;</p>
<p>Ce projet <a href="https://git.echosystem.fr/Erreur32/MOTDs32.git">MOTDs32</a> est un <strong>fork</strong>&nbsp; de l'excelent <a href="https://bitbucket.org/hetii/motdstat">MODstat</a>,</p>
<p>J'avais mis en place un syst&egrave;me compl&eacute;mentaire &agrave; <a href="https://bitbucket.org/hetii/motdstat">MODstat</a>, mais cela fesait doublon lors de la connexion SSH.</p>
<p>&nbsp;</p>
<p>Le dernier push (<em>2015</em>) de MODstat ne me plait pas du tout, l'ajout d' une banner trop rigolote (<span style="text-decoration: line-through;">laissant apparaitre un &acirc;ne...</span>) et Fortune (<span style="text-decoration: line-through;"> proverbe</span> ) m'a d&eacute;cid&eacute; de&nbsp; <a href="%20https:/git.echosystem.fr/Erreur32/MOTDs32">Forker</a>&nbsp; MOTDstat !</p>
<p>&nbsp;</p>
<pre><code>(2017) New project MOTDs32 by  🅴🆁🆁🅴🆄🆁32

 
https://git.echosystem.fr/Erreur32/MOTDs32

,--.   ,--. ,-----. ,--------.,------.         ,----.  ,---.
|   `.'   |'  .-.  ''--.  .--'|  .-.  \  ,---. '.-.  |'.-.  \
|  |'.'|  ||  | |  |   |  |   |  |  \  :(  .-'   .' &lt;  .-' .'
|  |   |  |'  '-'  '   |  |   |  '--'  /.-'  `)/'-'  |/   '-.
`--'   `--' `-----'    `--'   `-------' `----' `----' '-----'

	   |  +	Ｓｔａｔｓ３２   |
	   
	   
System requirements
===================
     o Unix/Linux operating system with bash</code></pre>
<pre>&nbsp;</pre>
<h2 id="mcetoc_1c8puqga00">&nbsp;Ca sert &agrave; quoi ?</h2>
<p>Si tu aimes&nbsp; avoir des jolies stats (&agrave; jours) &agrave; chaque connexion dans votre terminal, comme ceci :</p>
<p>&nbsp;</p>
<p><br />&nbsp;<img src="https://blog.echosystem.fr/img/db/motds32.png" alt="motds32" width="737" height="791" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h2 id="mcetoc_1c8pueaq00">Installation:</h2>
<pre><br />~$ git clone https://git.echosystem.fr/Erreur32/MOTDs32.git<br />~$ cd MOTDs32<br />~$ /install.sh<br />&nbsp;<br /><br /><em>Voil&agrave; , Termin&eacute; !!</em></pre>
<p><img src="https://asciinema.org/a/155050.png" alt="asciinema" width="794" height="399" /></p>
<p>&nbsp;</p>
<p>vous pouvez customiser des options dans le fichier de config :</p>
<blockquote>
<p>&nbsp;~$ nano /etc/motdstat/motdstat.conf<br /><br /></p>
</blockquote>
<h2 id="mcetoc_1c8putbr40">Exemple:</h2>
<p><a href="https://git.echosystem.fr/Erreur32/MOTDs32#sample-motd32-report">https://git.echosystem.fr/Erreur32/MOTDs32#sample-motd32-report</a></p>
<p>&nbsp;</p>
<hr />
<p>It's a MODstat fork<br />A lot of customisation has been done with ./install</p>
<p>Enjoy !</p>
<p><br />by 🅴🆁🆁🅴🆄🆁32</p>
<p>Hosted on</p>
<p>🅴🅲🅷🔵🆂🆈🆂🆃🅴🅼</p>