---
title: Home
media_order: 'echosystem.png,avatar-9152.gif,piracy.jpg,trans-clipboard.png,echosystem.ban.petit.png,favicon.png,rss.jpg'
published: true
private: false
date: '01:50 17-03-2018'
taxonomy:
    category:
        - home
sitemap:
    changefreq: hourly
    priority: 0.3
body_classes: header-animated
dateformat: 'd-m-Y H:i'
process:
    markdown: true
    twig: true
twig_first: true
never_cache_twig: false
cache_enable: true
visible: true
debugger: false
routes:
    aliases:
        - index.php
creator: erreur32
external_links:
    process: '0'
    no_follow: '0'
textformatter: false
blog_url: /articles
show_sidebar: '0'
show_breadcrumbs: '0'
show_pagination: '0'
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '0'
    url_taxonomy_filters: '0'
summary:
    enabled: '0'
hide_hypothesis: '0'
feed:
    limit: 5
    description: 'RSS echosystem'
shortcode-core:
    active: true
tntsearch:
    template: tntsearch/default
---

<style>
.content1  {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 35px;
  line-height: 40px;
  font-family: 'Monospace';
  color: #E3F2FD;
  height: 160px;
  overflow: hidden;
}
.display {
  font-weight: 300;
  overflow: hidden;
  height: 40px;
  padding: 0 42px;
}
.display:before {
  content: '<';
  left: 0;
  line-height: 40px;
}
.display:after {
  content: ' /> _';
  position: absolute;
  right: -34px;
  line-height: 40px;
}
.display:after, .display:before {
  position: absolute;
  top: 0;
  color: #18FFFF;
  font-size: 44px;
  animation: 2s linear 0s normal none infinite opacity;
}
p1 {
  display: inline;
  float: left;
  margin: 0;
}
ol1 {
  margin-top: 0;
  padding-left: 120px;
  text-align: left;
  list-style: none;
  animation: 6s linear 0s normal none infinite change;
}
ol li {
  line-height: 40px;
  margin: 0;
}
ol {
  margin-top: 0;
  padding-left: 120px;
  text-align: left;
  list-style: none;
  animation: 6s linear 0s normal none infinite change;
}
ol li {
  line-height: 40px;
  margin: 0;
}
@keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes change {
  0%, 18%, 100% {
    transform: translateY(0);
  }
  25%, 43% {
    transform: translateY(-25%);
  }
  50%, 69% {
    transform: translateY(-50%);
  }
  75%, 95% {
    transform: translateY(-75%);
  }
}
 
::-moz-selection { background: yellow; }
::selection { background: yellow; }
.prevent-touch-callout {
  -webkit-touch-callout: none;
}
.force-select-all {
  -webkit-user-select: all;
  user-select: all;
}

/*  -----------------------/   AREA   /----------------------- */   
.area {
   height: 100%;
    width: 100%;
    overflow: hidden;
}
textarea {
   height: 100%;
    width: 100%;
    overflow: hidden;
}
 
/*  -----------------------/   Slideshow container   /----------------------   */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}
/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}
/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* Add a background color to the active dot/circle */
.active1, .dot:hover {
  background-color: #717171;
}
/* Add an italic font style to all quotes */
q {font-style: italic;}
/* Add a blue color to the author */
.author {color: cornflowerblue;}
 
</style>
<div>
<div class="content1">
<div class="display">
<p1>Hello</p1>
<ol>
<li>World,</li>
 <li>G33kers</li>
<li>Developers </li>
<li>Everbody!</li>
</ol>
</div>
</div>
<center><a class="image featured" href="#"><img src="https://echosystem.fr/i/echosystem.png" alt="echosystem image logo" /></a></center>
</div>
<pre>&nbsp;</pre>
<h2 id="mcetoc_1c8q15oem0" style="text-align: center;"><span style="font-family: impact, sans-serif;">ECHO'SYSTEM'</span></h2>
<p> Happy c0ding <em>  &amp;  Stay protected.</em></p>
 > Retrouvez les derni&egrave;res ninfos sur la s&eacute;curit&eacute; web dev et Sysadmin via [RSS](https://rss.echosystem.fr/i/?a=rss&get=c_15),
 > <br>
 > Plusieurs <a title="EchoSystem Services Web" href="../../services">Services Web</a> et des <a title="Docs" href="../../docs">docs</a> sont disponibles dont un <a title="git echosystem" href="https://git.echosystem.fr">GIT</a>, des <a title="Pastonbin" href="https://pastebin.echosystem.fr/all">Scripts</a>, des <a title="Snippets" href="https://snippet.echosystem.fr/">Snippets</a>.
 ><br>
 >Ainsi que mes <a title="EchoSystem Projects" href="https://echosystem.fr/my-projects">projects actuels</a>.<br>
 > <em>Et oui c'est encore un site d'un <span style="text-decoration: line-through;">Gros</span>  <span style="text-decoration: line-through;">Barbu</span> qui joue avec son ...**Unix**.</em>

! Rejoignez la procédure contre les GAFAM: [https://gafam.laquadrature.net/](https://gafam.laquadrature.net/)

<br /><br />
[ui-tabs position="top-left" active="0" theme="lite"]
[ui-tab title="RSS Echosystem"]   <center><br/>
   <p>Toutes les dernières info/activités/articles de <strong>Echo'System'</strong></p>
  <a href="https://rss.echosystem.fr/i/?a=rss&get=c_6"><span style="font-family: andale\ mono, monospace;"><span style="font-size: 15pt;"><span style="background-color: #000000; color: #00ff00;"><sub><img src="../../_img/colored_RSS.png" width="22" height="22" /></sub><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></span></span></span></a> </center>

[/ui-tab]
[ui-tab title="RSS Secu"]    <center><br/>
    <p>Toutes les dernières info / news  sur la Sécurité Web :</p>
<a href="https://rss.echosystem.fr/i/?a=rss&get=c_15"><span style="background-color: #ff0000;"><sub><img src="../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="color: #ff9900;"><span style="background-color: #ff0000;"><span style="background-color: #bf1717;"><span style="color: #ffffff;">&nbsp; Security</span> <span style="color: #ffff00;">&amp;</span> </span><span style="background-color: #bf1717; color: #ffffff;">News  &nbsp;</span></span></span></a></center>
[/ui-tab]
[ui-tab title="RSS G33K"]    <center><br/>
    <p>Dernières news 100% G33k</p>
<a href="https://rss.echosystem.fr/i/?a=rss&get=c_9"><span style="background-color: #000000;"><sub><img src="../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #ffffff; color: #000000;"><span style="background-color: #aabf0b;"><strong><span style="color: #000000;"><span style="background-color: #000000; color: #a7ad36;">&nbsp;   G33K info&nbsp;</span></span></strong></span></span></a>    </center>
[/ui-tab]
[ui-tab title="RSS Code/Scripts"]    <center><br/>
    <p>Dernières news sur les bons scripts</p>
<a href="https://rss.echosystem.fr/i/?a=rss&get=c_19"><span style="background-color: #000000; color: #99cc00;"><sub><img src="../../_img/colored_RSS.png" width="22" height="22" /></sub></span> <span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;">&nbsp;<span style="color: #00ff00;"> &nbsp; Tools & Scripts &lt;/&gt;&nbsp;</span></span></span></a> </center>
[/ui-tab]
[/ui-tabs]

<br /><br />

<!-- <p style="text-align: center;"><img src="https://echosystem.fr/i/Nm.png" alt="echosystem logo" /></p> -->

<div class="slideshow-container">
<div class="mySlides">
<p><em>Il y a 10 sortes de personnes, ceux qui comprennent le binaire et les autres...</em></p>
<p><textarea style="border: none; background-color: #272B30; color: #7AA300;" readonly="readonly">01010111011001010110110001100011011011110110110101100101001000000111010001101111001000000100110101111001001000000101001101101001011101000110010100100000001000010010000000111010001010010010000000001101000010100000110100001010010000010110111001101111011101000110100001100101011100100010000001000010011011000110111101100111001000000110000101100010011011110111010101110100001000000100100101010100001000000010110100100000010100110110010101100011011101010111001001101001011101000111100100001101000010100000110100001010000011010000101001010000011011110111011101100101011100100110010101100100001000000100001001111001001000000100010101110010011100100110010101110101011100100011001100110010</textarea></p>
<p class="author">- <a href="../../Erreur32">Erreur32</a></p>
</div>

<div class="mySlides">
  <q>L’œil ne voit que ce que l’esprit est prêt à comprendre.</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Henri Matisse</p>
</div>

<div class="mySlides">
  <q>We all have two lives, the second begins when we realize we only have one</q>
  <p class="author">- Dalai Lama</p>
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
 showSlides(slideIndex += n);
}

function currentSlide(n) {
 showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
   dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active1";
}
</script>
<p style="text-align: center;">&nbsp;</p>


<div id="widgetIframe"><iframe width="100%" height="350" src="https://echosystem.fr/PiwM/index.php?module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=getSimpleLastVisitCount&idSite=1&period=day&date=today&disableLink=1&widget=1" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>

<p style="text-align: center;"><a href="https://echosystem.fr/erreur32">  🅴🆁🆁🅴🆄🆁32  </a></p>
<img style="display: block; margin-left: auto; margin-right: auto;" src="home/favicon.png" alt="" width="32" height="32" /><center>🆓🅴🅲🅷🅾️🆂🆈🆂🆃🅴🅼</center></div>
<center></center>
</div>
