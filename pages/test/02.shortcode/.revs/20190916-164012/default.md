---
title: shortcode
media_order: 11.png
private: true
date: '09:34 20-03-2018'
taxonomy:
    category:
        - test
cache_enable: false
visible: true
creator: erreur32
external_links:
    process: false
    title: false
    no_follow: false
sitemap:
    ignore: true
---

<h3 id="mcetoc_1c91fnqps0">Shortcode-ui</h3>
<p>[ui-browser address="https://getgrav.org"]<img src="shortcode/11.png" alt="" width="432" height="432" />[/ui-browser]<br /><br /><code></code></p>
<h4 id="mcetoc_1c91ft24s0">Available Shortcodes</h4>
<p>This plugin provides a variety of plugins, each with a specific purpose:</p>
<h4><a id="user-content-tabs" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-ui/blob/master/README.md#tabs" aria-hidden="true"></a>Tabs</h4>
<p>An example of the Tabs shortcode is as follows:</p>
<p>&nbsp;</p>
[ui-tabs position="top-left" active="0" theme="lite"] [ui-tab title="First Tab"] In tempor sed sapien eu porttitor. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. Quisque et enim vitae orci [placerat tincidunt](#) id ac eros. Fusce et gravida libero. Phasellus cursus odio ex, in **mattis lorem tincidunt** vel. Donec nibh odio, dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor. [/ui-tab] [ui-tab title="Second Tab"] In tempor sed sapien **eu porttitor**. Aliquam cursus facilisis ante. Etiam neque nunc, blandit vel lacus et, faucibus accumsan lacus. Proin posuere varius purus quis faucibus. [Quisque et enim](#) vitae orci placerat tincidunt id ac eros. Fusce et gravida libero. Phasellus cursus odio ex, in mattis lorem tincidunt vel. [Donec nibh odio](#), dapibus non ligula a, semper ornare massa. Nulla consectetur eu nunc sed ultrices. Integer at turpis dolor. [/ui-tab] [/ui-tabs]
<p>&nbsp;</p>
<hr />
[ui-accordion independent=true open=all]
[ui-accordion-item title="Section 1"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[ui-accordion-item title="Section 2"]
Short loin swine shankle flank picanha andouille burgdoggen landjaeger hamburger drumstick. Beef ham tail, tri-tip flank ham hock meatball picanha corned beef t-bone shank turkey ball tip shoulder. Flank corned beef chicken, meatloaf venison ball tip ham hock tail salami jowl short ribs pork belly drumstick. Meatball chicken hamburger beef filet mignon doner pork picanha pork chop fatback rump ham tri-tip ball tip landjaeger. Sausage leberkas shoulder tongue short loin shankle. Prosciutto tri-tip frankfurter shoulder drumstick capicola. Pork loin shank strip steak pork belly tongue cow.
[/ui-accordion-item]
[ui-accordion-item title="Section 3"]
Bacon ipsum dolor amet beef burgdoggen shoulder, meatball prosciutto kevin brisket chicken turkey. Kevin rump pancetta short loin capicola brisket landjaeger fatback picanha pork belly ribeye. Strip steak chuck turducken kevin t-bone ribeye cupim capicola alcatra rump. Venison pork chop biltong cupim pig rump meatloaf sausage pork. Strip steak kevin tongue brisket ball tip, venison turducken flank frankfurter corned beef pancetta fatback drumstick ham. Drumstick pastrami leberkas meatball flank tongue turkey ground round pork belly doner frankfurter porchetta jowl.
[/ui-accordion-item]
[/ui-accordion]
<hr />
<h1 id="mcetoc_1c91e3b420">Grav Shortcode Assets Plugin</h1>
<p><code>shortcode-assets</code> is a <a href="http://github.com/getgrav/grav">Grav</a> plugin that provides a convenient way to add CSS and JS assets directly from your pages.</p>
<h4 id="mcetoc_1c91e3b421"><a id="user-content-installation" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md#installation" aria-hidden="true"></a>Installation</h4>
<p>Installing the Shortcode Assets plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.</p>
<h4 id="mcetoc_1c91e3b422"><a id="user-content-gpm-installation-preferred" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md#gpm-installation-preferred" aria-hidden="true"></a>GPM Installation (Preferred)</h4>
<p>The simplest way to install this plugin is via the <a href="http://learn.getgrav.org/advanced/grav-gpm" rel="nofollow">Grav Package Manager (GPM)</a> through your system's Terminal (also called the command line). From the root of your Grav install type:</p>
<pre>bin/gpm install shortcode-assets
</pre>
<p>This will install the Shortcode Assets plugin into your <code>/user/plugins</code> directory within Grav. Its files can be found under <code>/your/site/grav/user/plugins/shortcode-assets</code>.</p>
<h1 id="mcetoc_1c91e3b423"><a id="user-content-config-defaults" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md#config-defaults" aria-hidden="true"></a>Config Defaults</h1>
<pre>enabled: true
</pre>
<p>If you need to change any value, then the best process is to copy the <a href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/shortcode-assets.yaml">shortcode-assets.yaml</a> file into your <code>users/config/plugins/</code> folder (create it if it doesn't exist), and then modify there. This will override the default settings.</p>
<h1 id="mcetoc_1c91e3b424"><a id="user-content-usage" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md#usage" aria-hidden="true"></a>Usage</h1>
<p>Once the plugin is installed you can use the following syntax in your page content to add various asset types [<code>css</code>, <code>inlineCss</code>, <code>js</code>, <code>inlineJs</code>]:</p>
<p><code></code>&lt;code&gt; <br />[assets=css] custom-style.css /blog/some-blog/post/style.css //cdnjs.cloudflare.com/ajax/libs/1140/2.0/1140.css http://somesite.com/js/cookies.min.css [/assets]</p>
<p>[assets=js] custom-script.js /blog/some-blog/post/script.js //cdnjs.cloudflare.com/ajax/libs/1140/2.0/1140.min.js http://somesite.com/js/cookies.min.js [/assets]</p>
<p>[assets=inlineCss] h1 {color: red !important;} [/assets]</p>
<p>[assets=inlineJs] function initialize() { var mapCanvas = document.getElementById('map_canvas'); var mapOptions = { center: new google.maps.LatLng(44.5403, -78.5463), zoom: 8, mapTypeId: google.maps.MapTypeId.ROADMAP } var map = new google.maps.Map(mapCanvas, mapOptions); } [/assets]</p>
<p>&lt;/code&gt;</p>
<blockquote>
<p>&nbsp;</p>
</blockquote>
<h2 id="mcetoc_1c91e3b425"><a id="user-content-advanced" class="anchor" href="https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md#advanced" aria-hidden="true"></a>Advanced</h2>
<p>The Shortcode Assets plugin supports all the available options That the <a href="https://learn.getgrav.org/themes/asset-manager#options" rel="nofollow">Grav Asset Manager supports</a>. You can specify <code>priority</code>, <code>pipeline</code> and <code>media</code> for <strong>CSS files</strong>, and <code>priority</code>, <code>pipeline</code>, <code>loading</code>, and <code>group</code> for <strong>JS files</strong>.</p>
<p>For example:</p>
<p>&lt;code&gt;</p>
<blockquote>
<pre><code>[assets=css priority=100 pipeline=false]custom-style.css[/assets]

[assets=js loading="async defer" group="bottom"]custom-script.js[/assets] 
</code></pre>
</blockquote>
<p>&lt;/code&gt;</p>
<p>Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in <code>user/config/plugins</code>) will remain intact.</p>