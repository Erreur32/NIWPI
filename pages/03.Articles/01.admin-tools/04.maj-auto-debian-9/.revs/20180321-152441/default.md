---
title: 'maj auto Debian 9'
published: true
private: false
date: '20:08 19-03-2018'
twig_first: false
visible: true
creator: erreur32
textformatter: false
---

<h2 id="mcetoc_1c8vqo8cu0">Mise &agrave; jour auto</h2>
<h2 id="mcetoc_1c923cmp80">des paquets de s&eacute;curit&eacute; Debian 9.</h2>
<p>&nbsp;</p>
<p>Tout simplement en installant <strong>unattended-upgrades</strong> comme ceci:<strong><br /></strong></p>
<p>&nbsp;</p>
<pre><code>apt install unattended-upgrades<br /><br /></code></pre>
<p>This is a warning notification</p>
<p>Il faut param&eacute;trer le paquet avec cette commande:</p>
<pre><code>dpkg-reconfigure unattended-upgrades</code></pre>
<p>&nbsp;</p>
<p><u>Exemple:</u></p>
<blockquote>
<pre><code>  Il est important de mettre r&eacute;guli&egrave;rement son syst&egrave;me &agrave; jour pour maintenir un haut niveau de s&eacute;curit&eacute;. 
 Par d&eacute;faut, les mises &agrave; jour doivent &ecirc;tre appliqu&eacute;es manuellement &agrave; l'aide d'un outil de gestion de paquets.
 Autrement, vous pouvez choisir d'automatiser ce processus de t&eacute;l&eacute;chargement et d'installation des mises &agrave; jour de s&eacute;curit&eacute;.                                                                                                                                    
<br />
 Faut-il automatiquement t&eacute;l&eacute;charger et installer les mises &agrave; jour de la version stable&nbsp;? 
      Oui  </code></pre>
</blockquote>
<p>R&eacute;pondre . <strong>OUI </strong></p>
<blockquote>
<pre><code><br />
    Veuillez indiquer une valeur pour le motif de correspondance &laquo;&nbsp;Origin-Pattern&nbsp;&raquo; pour unattended-upgrades. 
   Un paquet sera mis &agrave; jour uniquement si ses m&eacute;tadonn&eacute;es correspondent &agrave; tous les mots cl&eacute;s indiqu&eacute;s ici.
   Motif &laquo;&nbsp;Origin-Pattern&nbsp;&raquo; auquel les paquets doivent correspondre pour &ecirc;tre mis &agrave; jour&nbsp;:                   
  
  │ "origin=Debian,codename=${distro_codename},label=Debian-Security";________________________________________ │

      Ok                            <br /><br /></code></pre>
</blockquote>
<p>Par d&eacute;faut on s&eacute;lection&nbsp;: <strong>OK</strong></p>
<p>&nbsp;&nbsp;</p>
<p>Finish.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Enjoy&nbsp;!</p>
<p>by 🅴🆁🆁🅴🆄🆁32</p>
<h1 id="mcetoc_1c8vq3bmk1">&nbsp;</h1>