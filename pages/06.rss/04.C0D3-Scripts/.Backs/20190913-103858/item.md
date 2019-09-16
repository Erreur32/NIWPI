---
title: 'RSS Geek'
media_order: colored_RSS.png
private: false
date: '12:50 24-03-2018'
cache_enable: false
debugger: false
header_image: '0'
feed:
    limit: 10
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
---


 
<p>{% for name, feed in twig_feeds if name == 'Geek' %}</p>
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>
<h3 id="mcetoc_1c9as0kq40"><a href="{{ item.url }}"><img src="/colored_RSS.png" alt="" width="22" height="22" />&nbsp; </a><span style="background-color: #c9c11c; color: #000000;"><a style="background-color: #c9c11c; color: #000000;" href="{{ item.url }}"> {{ item.title }}</a></span></h3>
<p><strong><span style="font-family: andale\ mono, monospace; font-size: 11pt; color: #ff6600; background-color: #000000;"><em>{{ item.date.date | date("d/m/Y H:i:s") }}</em></span></strong></p>
<p>{{ item.content }}{% endfor %}{% endfor %}</p>