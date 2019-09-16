---
title: 'Update Auto  Debian 9'
published: true
private: false
date: '20:08 19-03-2018'
taxonomy:
    category:
        - blog
    tag:
        - doc
        - secu
        - debian
twig_first: false
visible: true
creator: erreur32
textformatter: false
blog_url: /articles
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
tntsearch:
    template: tntsearch/item
---

<h4 id="mcetoc_1c8vqo8cu0">Mise &agrave; jour auto des paquets de s&eacute;curit&eacute; Debian 9.</h4>
<p>&nbsp;</p>
<div class="notices blue">
<p>Simplement en installant <strong>unattended-upgrades</strong> avec APT : </p>
$ apt install unattended-upgrades<br />
</div>
<pre><code>$ apt install unattended-upgrades</code></pre>
 <div class="notices yellow">
<p>ATTENTION !!    Il faut param&eacute;trer le paquet avec cette commande:</p>
  <strong>dpkg-reconfigure unattended-upgrades</strong><br />
   </div>
Tapez cette commande (root):
<pre><code>    $  dpkg-reconfigure unattended-upgrades</code></pre>

Vous devriez avoir un texte comme ceci apparaitre:
<pre><code>
Il est important de mettre r&eacute;guli&egrave;rement son syst&egrave;me &agrave; jour pour maintenir un haut niveau de s&eacute;curit&eacute;. 
Par d&eacute;faut,
les mises &agrave; jour doivent &ecirc;tre appliqu&eacute;es manuellement &agrave; l'aide d'un outil de gestion de paquets.
Autrement, vous pouvez choisir d'automatiser ce processus de t&eacute;l&eacute;
chargement et d'installation des mises &agrave; jour de s&eacute;curit&eacute;.                                                                                                                                    
<br />
 Faut-il automatiquement t&eacute;l&eacute;charger et installer les mises &agrave; jour de la version stable&nbsp;? 
       Oui   </code></pre>

<p>R&eacute;pondre . <strong>OUI </strong></p>

<pre><code><br />
    Veuillez indiquer une valeur pour le motif de correspondance &laquo;&nbsp;Origin-Pattern&nbsp;&raquo; pour unattended-upgrades. 
   Un paquet sera mis &agrave; jour uniquement si ses m&eacute;tadonn&eacute;es correspondent &agrave; tous les mots cl&eacute;s indiqu&eacute;s ici.
   Motif &laquo;&nbsp;Origin-Pattern&nbsp;&raquo; auquel les paquets doivent correspondre pour &ecirc;tre mis &agrave; jour&nbsp;:                   
  
  │ "origin=Debian,codename=${distro_codename},label=Debian-Security";________________________________________ │

       Ok                            <br /><br /></code></pre>



<p>Par d&eacute;faut on s&eacute;lection&nbsp;: <strong>OK</strong></p>

<p>&nbsp;</p>
<p>Enjoy&nbsp;!</p>
<p>by 🅴🆁🆁🅴🆄🆁32</p>
<h1 id="mcetoc_1c8vq3bmk1">&nbsp;</h1>