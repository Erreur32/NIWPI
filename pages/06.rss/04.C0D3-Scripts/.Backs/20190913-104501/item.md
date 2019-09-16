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

 
{% for name, feed in twig_feeds if name == 'Geek' %}
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>

<img src="/colored_RSS.png" alt="" width="22" height="22" /> 
<span style="font-family: andale\ mono, monospace; font-size: 11pt; color: #ff6600;"><em>{{ item.date.date | date("d/m/Y H:i:s") }}</em></span>
<h4 id="mcetoc_1c9as0kq40"><span style="background-color: #c9c11c; color: #000000;"><a style="background-color: #c9c11c; color: #000000;" href="{{ item.url }}">{{ item.title }}</a></span></h4>


{% endfor %}
{% endfor %}