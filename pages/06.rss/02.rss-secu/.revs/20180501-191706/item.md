---
title: 'RSS Secu'
media_order: '1 psecu A.jpeg,colored_RSS.png'
published: true
private: false
date: '02:19 17-03-2018'
taxonomy:
    category:
        - rss
        - secu
    tag:
        - rss
        - secu
    page:
        - rss
        - secu
twig_first: false
never_cache_twig: false
cache_enable: true
debugger: false
creator: erreur32
blog_url: /rss
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
header_image: '0'
summary:
    enabled: '0'
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
textformatter: true
---

<p><a href="https://echosystem.fr/rss/echosystem-actu"><span style="font-family: andale\ mono, monospace; color: #00ff00; background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></a>    &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-secu"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #bf1717;"><span style="color: #ffffff;"> Security</span><span style="color: #ffff00;">&amp;</span> <span style="background-color: #bf1717; color: #ffffff;">News </span></span></a>    &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-geek"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style=" background-color: #000000; color: #a7ad36;"> G33K info&nbsp;</span></a>   &nbsp;&nbsp; 
 <a href="https://echosystem.fr/rss/rss-scripts"><span style="color: #ffffff; background-color: #000000; color: #99cc00;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub><span style="background-color: #000000; color: #99cc00;"> Scripts &lt;/&gt; </span></span></a>   &nbsp;&nbsp; 
<a href="https://echosystem.fr/rss/rss-hack"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="color: #99cc00;"><span style="background-color: #000000; color: #ff0000;">Tools HACK &nbsp;<span style="color: #99cc00;">[fa icon=fa-eye /]  </span> </span></span></a></p>
<p>&nbsp;</p>
{% for name, feed in twig_feeds if name == 'Secu-News' %}
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>
<h5>&nbsp;</h5>
<h3 id="mcetoc_1c9as0kq40"><a href="{{ item.url }}"><img src="echosystem-actu/colored_RSS.png" alt="" width="26" height="26" />&nbsp;&nbsp;</a><span style="color: #ff6600;"><a style="color: #ff6600;" href="{{ item.url }}"><span style="color: #000000;">{{ item.title }}</span></a></span></h3>
<p><span style="font-family: andale\ mono, monospace; font-size: 9pt; color: #ffffff; background-color: #ff0000;"><em>&nbsp;<strong>{{ item.date.date | date("d/m/Y H:i:s") }}</strong>&nbsp; <br /></em></span></p>
<br><blockquote>
 {{ item.content }}
</blockquote>
{% endfor %}{% endfor %}
<p>&nbsp;</p>
<p>&nbsp;</p>