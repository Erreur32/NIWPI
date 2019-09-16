---
title: 'EchoSystem Actu'
media_order: colored_RSS.png
published: true
private: false
date: '10:54 13-09-2019'
taxonomy:
    category:
        - echosystem
        - rss
    tag:
        - echosystem
        - rss
external_links:
    no_follow: false
dateformat: 'm/d/Y h:i a'
process:
    markdown: true
    twig: true
twig_first: true
never_cache_twig: true
cache_enable: false
visible: true
debugger: false
feed:
    limit: 10
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: '1'
creator: erreur32
blog_url: /rss
show_sidebar: false
show_breadcrumbs: true
show_pagination: false
textformatter: false
---

Lien du Flux:&nbsp;&nbsp; [https://rss.echosystem.fr/i/?a=rss&get=c_6](https://rss.echosystem.fr/i/?a=rss&get=c_6)


<a class="button" href="{{ base_url }}.atom"><i class="fa fa-rss-square"></i> Atom 1.0</a>
<a class="button" href="{{ base_url }}.rss"><i class="fa fa-rss-square"></i> RSS</a>


{% for name, feed in twig_feeds if name == 'echosystem all' %}

<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>
<h3 id="mcetoc_1c9as0kq40"><a href="{{ item.url }}"><img src="../../../_img/colored_RSS.png" width="22" height="22" />&nbsp; </a><a href="{{ item.url }}"> {{ item.title }}</a></h3>
<p><span style="color: #ffcc00; font-family: helvetica, arial, sans-serif;"><span style="font-size: 11pt; background-color: #000000;"><em>{{ item.date.date | date("d/m/Y H:i:s") }}</em></span></span></p>

<p>{% endfor %}{% endfor %}</p>
 <!--{{ item.content }}-->