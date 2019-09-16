---
title: test
published: true
private: true
process:
    markdown: false
    twig: false
twig_first: false
never_cache_twig: true
cache_enable: false
taxonomy:
    category:
        - test
sitemap:
    ignore: true
header_image: '0'
summary:
    enabled: '0'
feed:
    limit: 10
show_breadcrumbs: true
show_pagination: true
continue_link: false
creator: erreur32
---

  injectphp:https://echosystem.fr/rssall/rss-light-10.php
  
 { { directorylisting } }

####  page time reading
<p>{ { page.content|readingtime } }</p>

[notice=warning] Danger Will Robinson! Danger, Will Robinson! [/notice]
<hr>
[fa icon=fa-php /]
[fa icon=fa-code /]   [fa icon=fa-code /]
[fa icon=fa-quote-right /]   [fa icon=fa-check-circle /]     [fa icon=fa-terminal /]
[fa icon=fa-th-large /]   [fa icon=fa-check /]   [fa icon=fa-th /]    [fa icon=fa-th-list /]
[fa icon=fa-signal /]     [fa icon=fa-whmcs /]  [fa icon=fa-wifi /] [fa icon=fa-rss /]      [fa icon=fa-youtube /]        [fa icon=fa-question /]   
[fa icon=fa-window-restore /]       [fa icon=fa-quote-left /]  [fa icon=fa-windows /]     [fa icon=fa-linux /]   [fa icon=fa-code-branch /]       [fa icon=fa-check-circle /]
[fa icon=fa-crosshairs /]            [fa icon=fa-exclamation-triangle /]
[fa icon=fa-eye /]   
[fa icon=fa-external-link-alt /]  [fa icon=fa-file-alt /][fa icon=fa-file-code /]        [fa icon=fa-code /][fa icon=fa-angle-left /][fa icon=fa-angle-right /]

<hr>
{% set twig_text = "This is [size=30]BBCODE bigger text[/size] and this is [color=green]green text[/color]" %} {{ twig_text|shortcodes }}
<pre><code>{% set twig_text = "This is [size=30]bigger text[/size] and this is [color=green]green text[/color]" %} {{ twig_text|shortcodes }} </code></pre>
<hr>
 
<pre><code>fsdfsdfsdf</code></pre>
<p><code> du codedw  </code></p>

<hr>

 ### shortcodeMeta
 
<img src="https://echosystem.fr/_img/echosystem.png?cropResize=100,100&classes=left" width="165" height="165" />

[section name="author"]
![](https://echosystem.fr/_img/echosystem.png?cropResize=100,100&amp;classes=left) 
 ### Johnny Appleseed
Johnny Appleseed was an American pioneer nurseryman who introduced apple trees to large parts of Pennsylvania, Ontario, Ohio, Indiana, and Illinois, as well as the northern counties of present-day West Virginia. He became an American legend while still alive, due to his kind, generous ways, his leadership in conservation, and the symbolic importance he attributed to apples.
[/section]
[section name="quote"]
  Some are born great, some achieve greatness, and some have greatness thrust upon them.
  cite&gt;William Shakespeare&lt;/cite&gt;

Regular **Markdown** content that will be output as `page.content`
[/section]
 
<div id="article">
    <p><code> Author blabla </code></p>
</div>

 <hr>
 <div id="article">
<img src="https://echosystem.fr/_img/echosystem.png?cropResize=80,80&classes=left" width="165" height="165" /><br>
</div>

<div class="tile">
  <div class="tile-icon">
  <div class="example-tile-icon">
<i class="icon icon-file centered"></i>
  </div>
  </div>
  <div class="tile-content">
  <p class="tile-title">The Avengers</p>
  <p class="tile-subtitle text-gray">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
  </div>
  <div class="tile-action">
  <button class="btn btn-primary">Join</button>
  </div>
</div>


<div class="tile tile-centered">
  <div class="tile-icon">
    <div class="example-tile-icon">
      <i class="icon icon-file centered"></i>
    </div>
  </div>
  <div class="tile-content">
    <div class="tile-title">spectre-docs.pdf</div>
    <div class="tile-subtitle text-gray">14MB · Public · 1 Jan, 2017</div>
  </div>
  <div class="tile-action">
    <button class="btn btn-link">
      <i class="icon icon-more-vert"></i>
    </button>
  </div>
</div>
