---
title: 'RSS hack'
private: false
date: '21:11 25-03-2018'
taxonomy:
    category:
        - rss
    tag:
        - rss
        - hack
    page:
        - rss
visible: false
creator: erreur32
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

<p>&nbsp;</p>
<div class="e-content">
<p><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><a href="https://echosystem.fr/rss/echosystem-actu"><span style="color: #00ff00;"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span></span><span style="background-color: #000000; color: #00ff00;"><span style="background-color: #808080;"><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></span></span></a>&nbsp;&nbsp; <a href="https://echosystem.fr/rss/rss-secu"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="color: #ff9900;"><span style="background-color: #ff0000;"><span style="background-color: #bf1717;"><span style="color: #ffffff;"> Security</span> <span style="color: #ffff00;">&amp;</span> </span><span style="background-color: #bf1717; color: #ffffff;">News </span></span></span></a>&nbsp;&nbsp; <a href="https://echosystem.fr/rss/rss-geek"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #ffffff; color: #000000;"><span style="background-color: #aabf0b;"><strong><span style="color: #000000;"><span style="background-color: #000000; color: #a7ad36;"> G33K info&nbsp;</span></span></strong></span></span></a> &nbsp; <a href="https://echosystem.fr/rss/rss-scripts"><span style="background-color: #000000; color: #99cc00;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;">&nbsp;<span style="color: #00ff00;"> Scripts &lt;/&gt; </span></span></span></a></span></span><span style="color: #ffffff;"><span style="color: #00ccff;"><span style="color: #339966;"><span style="color: #99cc00;"><span style="color: #00ff00;"> &nbsp;&nbsp; </span></span></span></span></span></span></span></span><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><a href="https://echosystem.fr/rss/rss-hack"><span style="background-color: #000000; color: #99cc00;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;"> <span style="color: #ff0000;">Tools HACK</span>&nbsp;[fa icon=fa-eye /] </span></span></a></span></span></span></span></span></p>
<p> > Flux:&nbsp;<a href="https://rss.echosystem.fr/i/?a=rss&get=c_23"> >> https://rss.echosystem.fr/i/?a=rss&amp;get=c_23 </a> </p>
 {% for name, feed in twig_feeds if name == 'Tools-Hack' %}
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>
<h3 id="mcetoc_1c9as0kq40"><a href="{{ item.url }}"><img src="../../../_img/colored_RSS.png" width="22" height="22" />&nbsp; </a><a href="{{ item.url }}"> {{ item.title }}</a></h3>
<p><strong><span style="font-family: andale\ mono, monospace; font-size: 11pt; color: #ff6600; background-color: #000000;"><em>{{ item.date.date | date("d/m/Y H:i:s") }}</em></span></strong></p>
<p>{{ item.content }}{% endfor %}{% endfor %}</p>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p><span style="background-color: #000000; color: #ffffff;">[fa icon=fa-code /] </span></p>
<p><strong>&nbsp;</strong></p>