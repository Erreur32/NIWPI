---
title: test2
media_order: 2248137.png
private: true
date: '15:32 18-03-2018'
taxonomy:
    category:
        - test
    tag:
        - test
process:
    markdown: true
    twig: true
twig_first: true
never_cache_twig: false
cache_enable: true
visible: true
theme: afterburner2
creator: erreur32
hero_classes: parallax
blog_url: /test2
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '0'
    url_taxonomy_filters: '0'
textformatter: '0'
items:
    '@taxonomy.category': test
---

<h1 id="mcetoc_1c8spic800">Mes Fucking tests</h1>
<p><span style="font-size: 40pt; background-color: #339966; color: #ffffff;">&nbsp;Process Twig First:&nbsp; ON&nbsp; <br /></span></p>
<p>&nbsp;</p>
<p><span style="font-size: 40pt; background-color: #339966; color: #ffffff;">&nbsp;Page: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Default&nbsp; <br /></span></p>
<p>&nbsp;&lt;!-- test --&gt;</p>
<p>&nbsp;#### INSERT page ( minicode)&nbsp;<span style="background-color: #339966; color: #ffffff;"> ON&nbsp; </span></p>
<p>&nbsp;test.txt =</p>
<p>{{ 'test.txt' | minicode }}</p>
<p>test.html =</p>
<p>{{ 'test.html' | minicode }}</p>
<code> page title</code>
<h1 id="mcetoc_1c9adjt580">{{ page.title }}</h1>
<ul>{% for item in view.collection %}
<li>{{ item.title }}</li>
{% endfor %}</ul>

<br /> &lt;<span class="pl-ent">link</span> <span class="pl-e">rel</span>=<span class="pl-s"><span class="pl-pds">"</span>stylesheet<span class="pl-pds">"</span></span> <span class="pl-e">type</span>=<span class="pl-s"><span class="pl-pds">"</span>text/css<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>https://unpkg.com/pell/dist/pell.min.css<span class="pl-pds">"</span></span>&gt;
  &lt;<span class="pl-ent">style</span>&gt;
<span class="pl-s1">    <span class="pl-c">/* override styles here */</span></span>
<span class="pl-s1">    <span class="pl-e">.pell-content</span> {</span>
<span class="pl-s1">      <span class="pl-c1">background-color</span>: <span class="pl-c1">pink</span>;</span>
<span class="pl-s1">    }</span>
  <span class="pl-s1">&lt;</span>/<span class="pl-ent">style</span>&gt;
  &lt;<span class="pl-ent">script</span> <span class="pl-e">src</span>=<span class="pl-s"><span class="pl-pds">"</span>https://unpkg.com/pell<span class="pl-pds">"</span></span>&gt;<span class="pl-s1">&lt;</span>/<span class="pl-ent">script</span>&gt;<br />
  
####  page time reading
<p>{{ page.content|readingtime }}</p>

<p>[TOC]</p>
<p><span style="background-color: #ff0000; color: #ffffff;">SHORTCODe desactiv&eacute; !!!</span></p>
<h2 id="mcetoc_1c94jdvve0">{% set twig_text = "[size= 50] bbcode 50 [/size]" %} {{ twig_text|shortcodes }}</h2>
<pre>{% set twig_text = "[size= 10]SHORTCODE desactiv&eacute; !!![/size]" %} {{ twig_text|shortcodes }}</pre>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<p><img src="test2/2248137.png" alt="" width="92" height="92" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<h2 id="mcetoc_1c94jk1921">Minitoc</h2>
<p>[MINITOC]</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<div id="author">{{ shortcode.section.author }}</div>
<div id="article">TEST
<div class="right000">{{ shortcode.section.quote }}</div>
<div class="right000">&nbsp;</div>
</div>

{% set twig_text = "This is [size=30]BBCODE bigger text[/size] and this is [color=green]green text[/color]" %} {{ twig_text|shortcodes }}
<pre>&nbsp;{% set twig_text = "This is [size=30]bigger text[/size] and this is [color=green]green text[/color]" %} {{ twig_text|shortcodes }} </pre>

 ### text cool
 
shortcodeMeta.shortcode.section.autho {{ shortcode.section.quote }}
<img src="test2/2248137.png?cropResize=100,100&amp;classes=left" width="165" height="165" />

[section name="author"] <img src="test2/2248137.png?cropResize=100,100&amp;classes=left" width="65" height="65" /> ### Johnny Appleseed Johnny Appleseed was an American pioneer nurseryman who introduced apple trees to large parts of Pennsylvania, Ontario, Ohio, Indiana, and Illinois, as well as the northern counties of present-day West Virginia. He became an American legend while still alive, due to his kind, generous ways, his leadership in conservation, and the symbolic importance he attributed to apples. [/section] [section name="quote"] &gt; Some are born great, some achieve greatness, and some have greatness thrust upon them. Read more at http://www.brainyquote.com/quotes/topics/topic_great.html#tdqt3strtEYBCH43.99 &gt; &lt;cite&gt;William Shakespeare&lt;/cite&gt; Regular **Markdown** content that will be output as `page.content` [/section]
 
[section name="author"]![](2248137.png?cropResize=100,100&amp;classes=left) 
 ### Johnny Appleseed
Johnny Appleseed was an American pioneer nurseryman who introduced apple trees to large parts of Pennsylvania, Ontario, Ohio, Indiana, and Illinois, as well as the northern counties of present-day West Virginia. He became an American legend while still alive, due to his kind, generous ways, his leadership in conservation, and the symbolic importance he attributed to apples.
[/section]
[section name="quote"]
  Some are born great, some achieve greatness, and some have greatness thrust upon them.
  Read more at http://www.brainyquote.com/quotes/topics/topic_great.html#tdqt3strtEYBCH43.99
  cite&gt;William Shakespeare&lt;/cite&gt;

Regular **Markdown** content that will be output as `page.content`
[/section]
 
<div id="article">
<pre><code>[section name="author"]</code></pre>
<p><code>
 du codedw  </code></p>
</div>

<br><br> bla bla 
<h3 id="mcetoc_1c94m91f40">NOTICE<code><br /></code></h3>
<p><code></code></p>
<p>[notice=warning] Danger Will Robinson! Danger, Will Robinson! [/notice]</p>
<p>&nbsp;</p>
<div class="e-content">
<p><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><a href="../../echosystem-actu"><span style="color: #00ff00;"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span></span><span style="background-color: #000000; color: #00ff00;"><span style="background-color: #808080;"><span style="background-color: #000000; color: #ffffff;"> Echo'System' </span></span></span></a>&nbsp;&nbsp; <a href="../../rss-secu"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="color: #ff9900;"><span style="background-color: #ff0000;"><span style="background-color: #bf1717;"> Security <span style="color: #ffff00;">&amp;</span> </span><span style="background-color: #bf1717; color: #ffffff;">News </span></span></span></a>&nbsp;&nbsp; <a href="../../rss-geek"><span style="background-color: #000000;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #ffffff; color: #000000;"><span style="background-color: #aabf0b;"><strong><span style="color: #000000;"><span style="background-color: #000000; color: #a7ad36;"> G33K info&nbsp;</span></span></strong></span></span></a>&nbsp; <a href="../../rss-scripts"><span style="background-color: #000000; color: #99cc00;"><sub><img src="../../../_img/colored_RSS.png" width="22" height="22" /></sub></span><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;">&nbsp;<span style="color: #00ff00;"> Scripts &lt;/&gt;&nbsp; </span></span></span></a></span></span></span></span></span><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><a href="../../rss-scripts"><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;"><span style="color: #00ff00;"><br /></span></span></span></a></span></span></span></span></span></p>
<p><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><a href="../../rss-scripts"><span style="background-color: #000000; color: #99cc00;"><img src="../../../_img/colored_RSS.png" width="22" height="22" /></span><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;">&nbsp;<span style="color: #ff0000;"> HACK</span> <span style="color: #ff0000;">&lt;/&gt;</span>&nbsp; </span></span></a></span></span></span></span></span></p>
<p><span style="font-family: andale\ mono, monospace;"><span style="font-size: 14pt;"><span style="font-size: 15pt;"><span style="color: #ffffff;"><span style="color: #00ccff;"><span style="color: #00ff00;"><span style="background-color: #000000;"><sub><a href="../../rss-scripts"><span style="background-color: #000000; color: #99cc00;"><img src="../../../_img/colored_RSS.png" width="22" height="22" /></span><span style="background-color: #000000; color: #339966;"><span style="color: #99cc00;">&nbsp; HACK &lt;/&gt;&nbsp; </span></span></a></sub></span></span></span></span></span></span></span></p>
 
<pre>This is some [u]bb style underline[/u] and not much else [center]This is centered[/center] This is [size=30]bigger text[/size] and this is [color=blue]blue text[/color]</pre>
 
<h5 id="mcetoc_1c8va45f80"><span style="background-color: #ffff99;">If you need to change any value,</span></h5>
<p><span style="background-color: #ffff99;">then the best process is to copy the [url=https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/shortcode-assets.yaml]shortcode-assets.yaml[/url] file into your <code>users/config/plugins/</code> folder (create it if it doesn't exist), and then modify there.</span></p>
<p><span style="background-color: #ffff99;">This will override the default settings. Once the plugin is installed you can use the following syntax in your page content to add various asset types [<code>css</code>, <code>inlineCss</code>, <code>js</code>, <code>inlineJs</code>]:</span></p>
 
<h1 id="mcetoc_1c8v8u4uo1">Advanced</h1>
<p>The Shortcode Assets plugin supports all the available options That the [url=https://learn.getgrav.org/themes/asset-manager#options]Grav Asset Manager supports[/url]. You can specify <code>priority</code>, <code>pipeline</code> and <code>media</code> for [b]CSS files[/b], and <code>priority</code>, <code>pipeline</code>, <code>loading</code>, and <code>group</code> for [b]JS files[/b]. For example:</p>
<pre><code>[assets=css priority=100 pipeline=false]test1.css[/assets]

[assets=js loading="async defer" group="bottom"]test1.js[/assets]<br />
</code></pre>
<pre>[quote] Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in <code>user/config/plugins</code>) will remain intact. [/quote]</pre>
<p>&nbsp;&nbsp;&nbsp;</p>
<p><strong>Posted By:&nbsp; </strong>{{ page.header.creator }}</p>
<p><strong>Posted By:</strong>&nbsp; {{ home_url }}/authors/query{{ config.system.param_sep }}{{ ownerUtils.getUser(page.header.creator).username }} {{ ownerUtils.getUser(page.header.creator).fullname }}</p>
<h1 id="mcetoc_1c8vcgn2a2">Usage<code> filecontent</code></h1>
<pre>&nbsp;This plugin provides both a Twig [b]filter[/b] and [b]function[/b]. To use them simply use the following syntax:</pre>
<h3 id="mcetoc_1c8tmca6i0">filename</h3>
<p>The plugin is to be called from a page <strong>Markdown source file</strong> (eg. <code>item.md</code>).</p>
<h3 id="mcetoc_1c8tk3sau1">filesource</h3>
<pre id="mcetoc_1c94kiq640">#Exemple     [ plugin:filesource ](*32test.md*)<br /><br /></pre>
<p><strong>R&eacute;sultat:</strong></p>
<p>[plugin:filesource](test.md)</p>
<pre>[plugin:filesource](test.md)</pre>
<p>&nbsp;</p>
<p>[plugin:filesource](test.txt)</p>
<pre><code>[plugin:filesource](test.txt)<br /><br /></code></pre>
<h3 id="mcetoc_1c8tk3sau3">NOTES</h3>
<pre>[b]filesource[/b] can be used to embed [i]any[/i] file to a page as text and it [i]won't[/i]</pre>
<p>check the file content type or encoding. Embedding binary or other non-text files may have unexpected results.</p>
 