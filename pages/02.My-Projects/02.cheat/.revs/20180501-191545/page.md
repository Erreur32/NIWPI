---
title: Cheat
private: false
date: '00:29 22-03-2018'
taxonomy:
    category:
        - blog
    tag:
        - Erreur32
        - echosystem
        - cheat
process:
    markdown: true
    twig: false
twig_first: false
theme: learn2
creator: erreur32
---

<div class="ui attached table segment">
<div class="file-view markdown has-emoji">
<p><span style="font-family: andale\ mono, monospace;">Original project <a href="https://github.com/chrisallenlane/cheat" rel="nofollow">https://github.com/chrisallenlane/cheat</a></span></p>
<hr />
<p><a href="https://github.com/Erreur32/cheat" rel="nofollow">Fork Version</a></p>

[notice=note]
<p>Features add by Erreur32:</p>
<ul>
<li>Add color seach and prompt</li>
<li>Add Subdir creation and search</li>
<li>Add remove sheet file (-r) with confirmation</li>
<li>Add color help text</li>
</ul>
[/notice]

<p>repo <a href="https://github.com/Erreur32/cheat.git" rel="nofollow">https://github.com/Erreur32/cheat.git</a></p>
<p>Mirror repo <a href="https://git.echosystem.fr/Erreur32/cheat.git" rel="nofollow">https://git.echosystem.fr/Erreur32/cheat.git</a></p>
<hr />
[MINITOC]

<h2 id="mcetoc_1c95eacg20">Installing Cheat</h2>
<h3 id="mcetoc_1c95eacg21"> Manually</h3>

<p>First, install the dependencies:</p>
<pre><code class="language-sh hljs bash">$ [sudo] pip install docopt pygments appdirs
</code></pre>
<p>Then clone this repository:</p>
<pre><code class="language-sh hljs bash">$ git <span class="hljs-built_in">clone</span> https://github.com/Erreur32/cheat.git
</code></pre>
<p>Lastly, <code>cd</code> into the cloned directory, then run:</p>
<pre><code class="language-sh hljs bash">$ [sudo] python setup.py install
</code></pre>

<h3> Autocomplete  </h3>
 
[notice] The best way is to create a .bash_function file under your user profile (eg: /user/.bash_function )  [/notice] 
 
Copy  in your bashrc :
<pre><code class="language-sh hljs bash"><span class="hljs-keyword">function</span> _cheat_autocomplete {
    sheets=$(cheat <span class="hljs-_">-l</span> | cut <span class="hljs-_">-d</span><span class="hljs-string">' '</span> <span class="hljs-_">-f</span>1)
    COMPREPLY=()
    <span class="hljs-keyword">if</span> [ <span class="hljs-variable">$COMP_CWORD</span> = 1 ]; <span class="hljs-keyword">then</span>
	COMPREPLY=(`compgen -W <span class="hljs-string">"<span class="hljs-variable">$sheets</span>"</span> -- <span class="hljs-variable">$2</span>`)
    <span class="hljs-keyword">fi</span>
}

complete -F _cheat_autocomplete cheat
</code></pre>


<h1 id="mcetoc_1c95eacg22">What is cheat ?</h1>

<p><code>cheat</code> allows you to create and view interactive cheatsheets on the command-line. It was designed to help remind *nix system administrators of options for commands that they use frequently, but not frequently enough to remember.</p>



<h3 id="mcetoc_1c95eacg23">Example</h3>


<pre><code class="language-sh hljs bash">$  cheat tar
</code></pre>
 
<p>You will be presented with a cheatsheet resembling:</p>
<pre><code class="language-sh hljs bash"><span class="hljs-comment"># To extract an uncompressed archive: </span>
tar -xvf <span class="hljs-string">'/path/to/foo.tar'</span>

<span class="hljs-comment"># To extract a .gz archive:</span>
tar -xzvf <span class="hljs-string">'/path/to/foo.tgz'</span>

<span class="hljs-comment"># To create a .gz archive:</span>
tar -czvf <span class="hljs-string">'/path/to/foo.tgz'</span> <span class="hljs-string">'/path/to/foo/'</span>

<span class="hljs-comment"># To extract a .bz2 archive:</span>
tar -xjvf <span class="hljs-string">'/path/to/foo.tgz'</span>

<span class="hljs-comment"># To create a .bz2 archive:</span>
tar -cjvf <span class="hljs-string">'/path/to/foo.tgz'</span> <span class="hljs-string">'/path/to/foo/'</span>
</code></pre>
<p>To see what cheatsheets are available, run <code>cheat -l</code>.</p>
<p>Note that, while <code>cheat</code> was designed primarily for *nix system administrators, it is agnostic as to what content it stores. If you would like to use <code>cheat</code> to store notes on your favorite cookie recipes, feel free.</p>
<div id="modifying-cheatsheets" class="anchor-wrap">
<h2 id="mcetoc_1c95eacg24">Modifying Cheatsheets</h2>
</div>
<p>The value of <code>cheat</code> is that it allows you to create your own cheatsheets - the defaults are meant to serve only as a starting point, and can and should be modified.</p>
<p>Cheatsheets are stored in the <code>~/.cheat/</code> directory, and are named on a per-keyphrase basis. In other words, the content for the <code>tar</code> cheatsheet lives in the <code>~/.cheat/tar</code> file.</p>
<p>Provided that you have a <code>CHEAT_EDITOR</code>, <code>VISUAL</code>, or <code>EDITOR</code> environment variable set, you may edit cheatsheets with:</p>
<pre><code class="language-sh hljs bash">cheat <span class="hljs-_">-e</span> foo
</code></pre>
<p>If the <code>foo</code> cheatsheet already exists, it will be opened for editing. Otherwise, it will be created automatically.</p>
<p>After you've customized your cheatsheets, I urge you to track <code>~/.cheat/</code> along with your <a href="http://dotfiles.github.io/" rel="nofollow">dotfiles</a>.</p>
<div id="configuring" class="anchor-wrap">
<h2 id="mcetoc_1c95eacg25">Configuring</h2>
</div>
<div id="setting-a-default_cheat_dir" class="anchor-wrap">
<h3 id="mcetoc_1c95eacg26">Setting a DEFAULT_CHEAT_DIR</h3>
</div>
<p>Personal cheatsheets are saved in the <code>~/.cheat</code> directory by default, but you can specify a different default by exporting a <code>DEFAULT_CHEAT_DIR</code> environment variable:</p>
<pre><code class="language-sh hljs bash"><span class="hljs-built_in">export</span> DEFAULT_CHEAT_DIR=<span class="hljs-string">'/path/to/my/cheats'</span>
</code></pre>
<div id="setting-a-cheatpath" class="anchor-wrap">
<h3 id="mcetoc_1c95eacg27">Setting a CHEATPATH</h3>
</div>
<p>You can additionally instruct <code>cheat</code> to look for cheatsheets in other directories by exporting a <code>CHEATPATH</code> environment variable:</p>
<pre><code class="language-sh hljs bash"><span class="hljs-built_in">export</span> CHEATPATH=<span class="hljs-string">'/path/to/my/cheats'</span>
</code></pre>
<p>You may, of course, append multiple directories to your <code>CHEATPATH</code>:</p>
<pre><code class="language-sh hljs bash"><span class="hljs-built_in">export</span> CHEATPATH=<span class="hljs-string">"<span class="hljs-variable">$CHEATPATH</span>:/path/to/more/cheats"</span>
</code></pre>
<p>You may view which directories are on your <code>CHEATPATH</code> with <code>cheat -d</code>.</p>
<div id="enabling-syntax-highlighting" class="anchor-wrap">
<h3 id="mcetoc_1c95eacg28">Enabling Syntax Highlighting</h3>
</div>
<p><code>cheat</code> can optionally apply syntax highlighting to your cheatsheets. To enable syntax highlighting, export a <code>CHEATCOLORS</code> environment variable:</p>
<pre><code class="language-sh hljs bash"><span class="hljs-built_in">export</span> CHEATCOLORS=<span class="hljs-literal">true</span>
</code></pre>
<div id="specifying-a-syntax-highlighter" class="anchor-wrap">
<h3>Specifying a Syntax Highlighter</h3>
</div>
<p>You may manually specify which syntax highlighter to use for each cheatsheet by wrapping the sheet's contents in a <a href="https://help.github.com/articles/creating-and-highlighting-code-blocks/" rel="nofollow">Github-Flavored Markdown code-fence</a>.</p>
<p>Example:</p>
<pre>```sql # Mon code kitu
-- to select a user by ID
SELECT *
FROM Users
WHERE id = 100
```
</pre>

<pre><code># Mon code kitu
-- to select a user by ID
SELECT *
FROM Users
WHERE id = 100
</code></pre>

<p>If no syntax highlighter is specified, the <code>bash</code> highlighter will be used by default.</p>
<div id="see-also" class="anchor-wrap">
<h2 id="mcetoc_1c95eacg29">See Also:</h2>
</div>
<ul>
<li><a href="https://github.com/chrisallenlane/cheat/wiki/Enabling-Command-line-Autocompletion" rel="nofollow">Enabling Command-line Autocompletion</a></li>
<li><a href="https://github.com/chrisallenlane/cheat/wiki/Related-Projects" rel="nofollow">Related Projects</a></li>
</ul>
</div>
</div>

<center>
<div class="row">
<div class="4u 12u$(mobile)">
<img src="https://echosystem.fr/_img/1skull-50.png" alt="" width="42" height="41" />
<br><a href="https://echosystem.fr/my-projects">My Projects</a>
</div>
</div>
<p><br> 🆓🅴🅲🅷🅾️🆂🆈🆂🆃🅴🅼</p>
</center>
