---
title: '1 injectephp'
media_order: 'canvas_erreur32.png,_canvas323_erreur32.png'
private: true
sitemap:
    ignore: true
content:
    items: '@self.modular'
    order:
        by: ''
        dir: ''
---

 [https://echosystem.fr/rssall/rss-light-10.php](https://echosystem.fr/rssall/rss-light-10.php)
 
 {% for name, feed in twig_feeds %}
### Feed name: {{ name }}
<small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small>
{% for item in feed.items %}
#### <a href="{{ item.url }}">{{ item.title }}</a>
<p>{{ item.content }}</p>
{% endfor %}
{% endfor %}

 [ui-polaroid angle="-3" margin="30px 50px 20px 0" position="right" title="Erreur32"][ui-callout]<img src="![](_canvas323_erreur32.png)">[/ui-callout][/ui-polaroid]

       { { feedus_rss() } }
 {{ feedus_rss() }}
 ![](canvas_erreur32.png)
      injectphp:https://echosystem.fr/rssall/rss-light-10.php
 

injectphp:https://echosystem.fr/rssall/rss-light-10.php

