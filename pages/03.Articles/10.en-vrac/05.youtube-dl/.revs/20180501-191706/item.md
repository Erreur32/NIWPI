---
title: youtube-dl
published: true
private: false
date: '23:39 18-03-2018'
taxonomy:
    category:
        - blog
    tag:
        - tips
        - youtube-dl
twig_first: false
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
creator: erreur32
textformatter: false
---

<h1 id="mcetoc_1c8tka4fc0"><em>Youtube-dl Fix</em></h1>
<h2 id="mcetoc_1c8tld7161"><em>Corriger l'erreur HTTP Error 429: </em></h2>
<pre id="mcetoc_1c8tlbg0e0"><em>Too Many Requests avec youtube-dl<br /><br /></em></pre>
<div class="notices yellow">
<p>HTTP Error 429</p>
<p>Too Many Requests avec youtube-dl.</p>
</div>
<div class="notices red">
<p>ERROR: Unable to download webpage: HTTP Error 429: Too Many Requests (caused by HTTPError());<br />please report this issue on https://yt-dl.org/bug .<br />Make sure you are using the latest version; type youtube-dl -U to update.<br />Be sure to call youtube-dl with the --verbose flag and include its complete output.</p>
</div>
<p id="mcetoc_1c8tle8p82">Il suffit simplement de de rajouter l'option <strong>--force-ipv4</strong> dans votre commande !</p>
<pre><code>$ youtube-dl  -o "%(title)s.%(ext)s" --force-ipv4 </code></pre>
<p>&nbsp;</p>
<p>Ensuite on rajoute un alias pour ce simplifi&eacute; la life, on rajoute dans&nbsp; <strong> .bashrc</strong> :</p>
<pre><code>$ alias ytdl='youtube-dl  -o "%(title)s.%(ext)s" --extract-audio --audio-format mp3 -k --force-ipv4 $1'
$ alias ytdlV='youtube-dl  -o "%(title)s.%(ext)s" --force-ipv4 $1'</code></pre>

<div class="notices blue">
<p>La premi&egrave;re ligne download et garde la vid&egrave;o et le mp3</p>
<p>La seconde ligne download et garde que la vid&eacute;o.</p>
</div>
<p>Plus qu'a taper dans le terminal&nbsp;:</p>
```bash
$ ytdlV https://www.youtube.com/watch?v=7Uexuyy_HL8
```

<p>&nbsp;</p>
<h3 id="mcetoc_1c8tkb2n01"> R&eacute;sultat:</h3>
```bash
[youtube] 7Uexuyy_HL8: Downloading webpage
[youtube] 7Uexuyy_HL8: Downloading video info webpage
[youtube] 7Uexuyy_HL8: Extracting video information<
[download] Destination: Stupeflip - The Antidote.f248.webm
[download] 100% of 1.50MiB in 00:00
[download] Destination: Stupeflip - The Antidote.f251.webm
[download] 100% of 3.24MiB in 00:00
[ffmpeg] Merging formats into "Stupeflip - The Antidote.webm"
Deleting original file Stupeflip - The Antidote.f248.webm (pass -k to keep)
Deleting original file Stupeflip - The Antidote.f251.webm (pass -k to keep)

```
<p>&nbsp;</p>
<p>Happy Download,</p>
<p>by 🅴🆁🆁🅴🆄🆁32</p>