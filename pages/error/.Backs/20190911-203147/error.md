---
title: '404 Page not found - error'
media_order: direct.php.png
private: false
date: '10:02 02-10-2018'
taxonomy:
    category:
        - error
    tag:
        - error
process:
    markdown: true
    twig: true
twig_first: true
routable: true
template: error
robots: 'noindex,nofollow'
http_response_code: 404
---

{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="error/favicon.png" />

<center>
<h2>Wrong url, the page may have been moved! </h2>
<h3>Mauvaise URL, la page a peu être été déplacée. </h3>

 
<img src="error/direct.php.png" alt="404 - Page Not Found - Error" border="0">


 
<div class="center">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>

    <p>
        {% if query %}
            {% set count = search_results ? search_results.count : 0 %}
            {% if count == 1 %}
                {{ "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR"|t(query|e)|raw }}
            {% else %}
                {{ "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL"|t(query|e, count)|raw }}
            {% endif %}
        {% endif %}
    </p>

    
{% if config.plugins.tagcloud.enabled %}
<aside class="widget widget_meta">
<h4 class="widget-title">{{'Popular Search'|t}}</h4>
{% include 'partials/tagcloud.html.twig' %}
</aside>
{% endif %}

 </center>
 
 