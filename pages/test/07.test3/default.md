---
title: test3
media_order: canvas_echosystem.png
private: true
date: '19:20 19-03-2018'
taxonomy:
    category:
        - test
twig_first: true
visible: true
theme: medium
creator: erreur32
hero_classes: ''
hero_image: ''
blog_url: /blog
show_sidebar: '1'
show_breadcrumbs: '1'
show_pagination: '1'
external_links:
    title: false
    no_follow: false
textformatter: false
sitemap:
    ignore: true
---

[ui-callout]
[ui-callout-item title="Outlines" position="15%, 20%, se"]
This administrative panel lists displays the current theme's outlines, giving you quick access 
to edit, rename, duplicate, and delete them.
[/ui-callout-item]
[ui-callout-item title="Menu Editor" position="60%, 85%, nw"]
This administrative [color=blue]panel gives you the ability[/color] to enhance the platform's 
menu by altering styling, rearranging links, and creating menu items that sit outside of the 
CMS's integrated Menu Manager.
[/ui-callout-item]
![](canvas_echosystem.png)
[/ui-callout]

<pre>[assets=inlineCss] h4 {color: blue !important;} [/assets]</pre>
<h4><br />h4 color blue</h4>
<pre><br /><strong>Preformatted ON</strong></pre>
<hr />
<p>[assets=inlineCss] h4 {color: green !important;} [/assets]</p>
<h4>h4 color test green</h4>
<p><br /><strong>Preformatted Off</strong></p>
<hr />
<p><br />test affichage code :</p>
<p><br /><br /><br /><code>[assets=inlineCss] h4 {color: blue !important;} [/assets]</code><br /><code>[assets=inlineCss] h4 {color: blue !important;} [/assets]</code><br /><code>[assets=inlineCss] h4 {color: blue !important;} [/assets]</code><br /><br /><br /><br /></p>
<hr />
<h1 id="mcetoc_1c91dbtpc0">TEST BBCODE</h1>
<p>shortcodes&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<span style="background-color: #339966; color: #ffffff;"> ON&nbsp; </span></p>
<p>shortcodes-ui &nbsp;&nbsp;&nbsp;<span style="background-color: #339966; color: #ffffff;"> ON&nbsp; </span>&nbsp;</p>
<div class="4u 12u$(mobile)">&nbsp;</div>
<div class="4u 12u$(mobile)">[i][b]!Caution![/b][/i] This plugin [b]RAW[/b] output from file. Please check Broken HTML tags and Security risk before upload.&nbsp;<header>
<blockquote>
<h3 id="mcetoc_1c8uqjsie6">echosystem.fr</h3>
</blockquote>
</header>
<blockquote>[url=https://erreur32.echosystem.fr/][img]../../Screenshot/?url=echosystem.info/index.php?r=dashboard/dashboard&amp;clipw=1000&amp;cliph=750&amp;cache=0[/img][/url]</blockquote>
</div>
<header>
<h3 id="mcetoc_1c8uqjsiea">Avatar</h3>
</header>
<pre class="4u$ 12u$(mobile)">[url=https://erreur32.echosystem.fr/][img]https://upfile.echosystem.fr/plugins/imageviewer/site/direct.php?s=wf&amp;/erreur.png[/img][/url]</pre>
<p>&nbsp;</p>
<p>#################</p>
<p>&nbsp;File source</p>
<h1 id="mcetoc_1c9081miu0"><span style="background-color: #339966; color: #ffffff; font-size: 40pt;">&nbsp;ON&nbsp; </span></h1>
<p>The plugin is to be called from a page Markdown source file (eg. <code>item.md</code>).</p>
<h3 id="mcetoc_1c9089p481"><a id="user-content-synopsis" class="anchor" href="https://github.com/anza/grav-plugin-filesource/blob/master/README.md#synopsis" aria-hidden="true"></a>SYNOPSIS</h3>
<pre><code>[plugin:filesource](*filename*)
</code></pre>
<h3 id="mcetoc_1c9089p482"><a id="user-content-options" class="anchor" href="https://github.com/anza/grav-plugin-filesource/blob/master/README.md#options" aria-hidden="true"></a>OPTIONS</h3>
<p><em>filename</em> is the name of the file to be embedded into the page. <em>filename</em> must reside in the same directory as the page source file.</p>
<h3 id="mcetoc_1c9089p483"><a id="user-content-notes" class="anchor" href="https://github.com/anza/grav-plugin-filesource/blob/master/README.md#notes" aria-hidden="true"></a>NOTES</h3>
<p><strong>filesource</strong> can be used to embed <em>any</em> file to a page as text and it <em>won't</em> check the file content type or encoding. Embedding binary or other non-text files may have unexpected results.</p>
<hr />
<h1 id="mcetoc_1c907pai00">File Content</h1>
<h1 id="mcetoc_1c9081miu0"><span style="background-color: #339966; color: #ffffff; font-size: 40pt;">&nbsp;ON&nbsp; <br /></span></h1>
<p>&nbsp;</p>
<p>This plugin provides both a Twig <strong>filter</strong> and <strong>function</strong>. To use them simply use the following syntax:</p>
<pre><code>{{ filecontent('sample.txt') }}

or

{{ 'sample.txt'|filecontent }}

or 

{{ filecontent('/user/custom/sample.txt') }}<br /><br /><br /><br /></code></pre>
<hr />
<pre><code>
</code></pre>
<h1 id="mcetoc_1c8vnu3vq0">Mini Code <small>v1.1.0&nbsp; <br /></small></h1>
<h1 id="mcetoc_1c9081miu0"><span style="background-color: #339966; color: #ffffff; font-size: 40pt;">&nbsp;ON&nbsp; </span></h1>
<p><code>Minicode</code> is [url=https://getgrav.org/]Grav[/url] plugin.</p>
<div class="gpm-item-info">
<pre>This plugin add Twig filter <code>{ { | minicode } }</code>. The filter is output tiny html (or other text) inside a document from text file.</pre>
And the filter can use on Templates too. You can output codes of site global. (ex: Sidebars, Ads, New product information...)
<h2 id="mcetoc_1c8vookmg1">Installation</h2>
Installing <code>Minicode</code> plugin can only manual install now. [url=https://github.com/gracix/grav-plugin-minicode/archive/master.zip]Download[/url] this plugin and extracting all plugin files to
<pre><code>user/plugins/minicode
</code></pre>
<h2 id="mcetoc_1c8vookmg2">Usage</h2>
<pre><code>{{ 'filename.txt' |  minicode  }}
</code></pre>
<ol>
<ol>
<ol>
<ol>
<li>Create directory user/minicodes if nothing. (This name is default. You can change directory name in plugin's config)</li>
</ol>
</ol>
</ol>
</ol>
<ol>
<ol>
<ol>
<ol>
<li>Write a tiny html (or other text) to file. (ex: minicode1.html)</li>
</ol>
</ol>
</ol>
</ol>
<ol>
<ol>
<ol>
<ol>
<li>The file put into user/minicodes directory. (ex: user/minicodes/minicode1.html)</li>
</ol>
</ol>
</ol>
</ol>
<ol>
<ol>
<ol>
<ol>
<li>Write twig tag in page content or theme file. (ex: <code>{{ 'minicode1.html' | minicode }}</code>)</li>
</ol>
</ol>
</ol>
</ol>
<ol>
<ol>
<ol>
<ol>
<li>Preview the site.</li>
</ol>
</ol>
</ol>
</ol>
<h2 id="mcetoc_1c8vookmg3">Security</h2>
[i][b]!Caution![/b][/i] This plugin [b]RAW[/b] output from file. Please check Broken HTML tags and Security risk before upload.</div>
<div class="gpm-item-info">&nbsp;</div>
<h2 id="mcetoc_1c91nu36e1">######################</h2>
<p>&nbsp;</p>
<pre>&lt;<span style="color: #bf4f24;">p</span>&gt;&lt;<span style="color: #bf4f24;">em</span>&gt;&minus;&lt;<span style="color: #bf4f24;">sup</span>&gt;b&lt;/<span style="color: #bf4f24;">sup</span>&gt;&frasl;&lt;<span style="color: #bf4f24;">sub</span>&gt;R&lt;/<span style="color: #bf4f24;">sub</span>&gt; &theta;' cos&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt; &theta; &minus; m x'' cos &theta; &minus; m R &theta;'' cos&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;&theta; + m R &theta;' &lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;sin &theta; cos &theta; &minus; m g sin &theta; &minus; &lt;<span style="color: #bf4f24;">sup</span>&gt;b&lt;/<span style="color: #bf4f24;">sup</span>&gt;&frasl;&lt;<span style="color: #bf4f24;">sub</span>&gt;R&lt;/<span style="color: #bf4f24;">sub</span>&gt; &theta;' sin&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt; &theta; = m R &theta;'' sin&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;&theta; + m R &theta;' &lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;sin &theta; cos &theta;&lt;/<span style="color: #bf4f24;">em</span>&gt;&lt;/<span style="color: #bf4f24;">p</span>&gt;
				</pre>
<pre>&lt;<span style="color: #bf4f24;">p</span>&gt;&lt;<span style="color: #bf4f24;">em</span>&gt;&amp;minus;&lt;<span style="color: #bf4f24;">sup</span>&gt;b&lt;/<span style="color: #bf4f24;">sup</span>&gt;&amp;frasl;&lt;<span style="color: #bf4f24;">sub</span>&gt;R&lt;/<span style="color: #bf4f24;">sub</span>&gt; &amp;theta;' cos&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt; &amp;theta; &amp;minus; m x'' cos &amp;theta; &amp;minus; m R &amp;theta;'' cos&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;&amp;theta; + m R &amp;theta;' &lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;sin &amp;theta; cos &amp;theta; &amp;minus; m g sin &amp;theta; &amp;minus; &lt;<span style="color: #bf4f24;">sup</span>&gt;b&lt;/<span style="color: #bf4f24;">sup</span>&gt;&amp;frasl;&lt;<span style="color: #bf4f24;">sub</span>&gt;R&lt;/<span style="color: #bf4f24;">sub</span>&gt; &amp;theta;' sin&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt; &amp;theta; = m R &amp;theta;'' sin&lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;&amp;theta; + m R &amp;theta;' &lt;<span style="color: #bf4f24;">sup</span>&gt;2&lt;/<span style="color: #bf4f24;">sup</span>&gt;sin &amp;theta; cos &amp;theta;&lt;<span style="color: #bf4f24;">br</span> /&gt;&lt;/<span style="color: #bf4f24;">em</span>&gt;&lt;/<span style="color: #bf4f24;">p</span>&gt;</pre>