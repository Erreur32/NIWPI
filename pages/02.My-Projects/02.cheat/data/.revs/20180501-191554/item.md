---
title: data
private: true
body_classes: 'header-image fullwidth'
twig_first: false
routable: true
cache_enable: false
visible: false
debugger: true
blog_url: /blog
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
creator: erreur32
content:
    items: '- ''@self.children'''
    order:
        by: name
        dir: desc
    limit: '5'
    pagination: '1'
    url_taxonomy_filters: '1'
onpage_menu: true
directorylisting:
    level: 5
    exclude_main: true
    exclude_modular: false
    builtin_css: true
    builtin_js: true
page-inject:
    active: true
    processed_content: false
---

<p>list</p>
<p>&nbsp;</p>
<hr />
<p>{{ directorylisting }}</p>
<hr />
<p>&nbsp;</p>
<p>{% set settings = { 'exclude_main': true, 'exclude_modular': false, 'include_additional': [ '/test_list' ] } %}</p>
<p>{{ directorylisting(settings) }}<br />&nbsp;</p>
<hr />
<p>[plugin:filesource](pub.txt)</p>
<p>&nbsp;</p>
<p>[plugin:page-inject](/_img/pub.html)</p>
<p>[plugin:page-inject](/_img/pub.txt)</p>
<p>[plugin:content-inject](/_img/pub.txt)</p>
