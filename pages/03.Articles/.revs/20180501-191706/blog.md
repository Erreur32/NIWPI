---
title: Articles/Docs
media_order: logop.jpg
private: false
date: '01:02 17-03-2018'
taxonomy:
    category:
        - blog
    tag:
        - erreur32
        - list
        - articles
sitemap:
    changefreq: daily
twig_first: true
cache_enable: false
debugger: false
routes:
    aliases:
        - /blog
        - /articles
        - /posts
hero_classes: 'hero-medium text-light'
hero_image: logop.jpg
blog_url: /articles
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items:
        - '@self.children'
        - '@self.parent'
        -
            '@taxonomy.category': projects
        - '@self.descendants'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
creator: erreur32
header_image: '1'
header_image_height: '340'
summary:
    enabled: '0'
    size: '300'
external_links:
    process: '1'
    title: '0'
    no_follow: '1'
directorylisting:
    level: 5
    exclude_main: true
    exclude_modular: true
    builtin_css: true
    builtin_js: true
comments: false
---

<!-- <span style="font-family: andale\ mono, monospace; font-size: 15pt;"><a href="../../rss/echosystem-actu"><span style="color: #00ff00; background-color: #000000;"><sub><img src="../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></a>&nbsp;&nbsp;</span> -->

<h4>Random Article</h4>
 <a class="button" href="{{ base_url }}/random"><i class="fa fa-retweet"></i> I'm Feeling Lucky!</a>

{% if config.plugins.simplesearch.enabled %}
<div class="sidebar-content">
  <h4>Search !</h4>
  {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}




