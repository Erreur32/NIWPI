---
title: test4
published: true
private: true
date: '20:38 27-03-2018'
taxonomy:
    category:
        - test
twig_first: false
visible: true
creator: erreur32
blog_url: /test4
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '3'
    url_taxonomy_filters: '1'
sitemap:
    ignore: true
---

# test4



{% if config.plugins.feed.enabled %}
<div class="sidebar-content syndicate">
<h4>Syndicate</h4>
<a class="button" href="{{ feed_url }}.atom"><i class="fa fa-rss-square"></i> Atom 1.0</a>
<a class="button" href="{{ feed_url }}.rss"><i class="fa fa-rss-square"></i> RSS</a>
</div>
{% endif %}


 <aside class="widget widget_meta">
<h4 class="widget-title">{{'POPULAR TAGS'|t}}</h4>
 {% include 'partials/tagcloud.html.twig' %}
 </aside>


<h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
{% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}



<h4>Random Article</h4>
 <a class="button" href="{{ base_url }}/random"><i class="fa fa-retweet"></i> I'm Feeling Lucky!</a>

{% if config.plugins.simplesearch.enabled %}
<div class="sidebar-content">
  <h4>Search !</h4>
  {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}


