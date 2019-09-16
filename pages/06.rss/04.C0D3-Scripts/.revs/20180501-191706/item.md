---
title: 'RSS Geek'
media_order: colored_RSS.png
private: false
date: '12:50 24-03-2018'
cache_enable: false
debugger: false
theme: bones
creator: erreur32
content:
    items: '@self.modular'
    order:
        by: ''
        dir: ''
blog_url: /rss
show_sidebar: false
show_breadcrumbs: false
show_pagination: false
header_image: '0'
---

<p><a href="https://echosystem.fr/rss/echosystem-actu"><span style="font-family: andale\ mono, monospace; color: #00ff00; background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></a>    &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-secu"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #bf1717;"><span style="color: #ffffff;"> Security</span><span style="color: #ffff00;">&amp;</span> <span style="background-color: #bf1717; color: #ffffff;">News </span></span></a>    &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-geek"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style=" background-color: #000000; color: #a7ad36;"> G33K info&nbsp;</span></a>   &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-scripts"><span style="color: #ffffff; background-color: #000000; color: #99cc00;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub><span style="background-color: #000000; color: #99cc00;"> Scripts &lt;/&gt; </span></span></a>   &nbsp;&nbsp; 
<a href="https://echosystem.fr/rss/rss-hack"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="color: #99cc00;"><span style="background-color: #000000; color: #ff0000;">Tools HACK &nbsp;<span style="color: #99cc00;">[fa icon=fa-eye /]  </span> </span></span></a></p>
<p>&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p>{% for name, feed in twig_feeds if name == 'G33K' %}</p>
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>
<h3 id="mcetoc_1c9as0kq40"><a href="{{ item.url }}"><img src="echosystem-actu/colored_RSS.png" alt="" width="24" height="24" />&nbsp; </a><span style="background-color: #c9c11c; color: #000000;"><a style="background-color: #c9c11c; color: #000000;" href="{{ item.url }}"> {{ item.title }}</a></span></h3>
<p><strong><span style="font-family: andale\ mono, monospace; font-size: 11pt; color: #ff6600; background-color: #000000;"><em>{{ item.date.date | date("d/m/Y H:i:s") }}</em></span></strong></p>
<p>{{ item.content }}{% endfor %}{% endfor %}</p>