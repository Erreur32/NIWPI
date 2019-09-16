---
title: googledorks
private: true
date: '09:43 13-04-2018'
process:
    twig: true
    markdown: false
creator: erreur32
---

googledorks https://www.exploit-db.com/google-hacking-database/
<br>
https://www.information-security.fr/decouverte-google-dorks/
<br>
https://null-byte.wonderhowto.com/how-to/use-google-hack-googledorks-0163566/
<br>
<pre>
 
> Google Hacking Database 
> 
> 2018-04-12 	inurl:"config.xml" "password" ext:xml -stackoverflow.com -github.com 	Files Containing Passwords
> 2018-04-12 	inurl:"/forgotpwd.jspx" 	Pages Containing Login Portals
> 2018-04-12 	inurl:"ssologin/" -github.com 	Pages Containing Login Portals
> 2018-04-12 	inurl:"cmd=auth?" -github -stackoverflow -gitlab 	Pages Containing Login Portals
> 2018-04-12 	inurl:"/initiatesso?providerid=" -github.com 	Pages Containing Login Portals
> 2018-04-12 	"Oracle peoplesoft sign in" inurl:"cmd=login?" -github -stackoverflow -gitlab 	Pages Containing Login Portals
> 2018-04-12 	inurl:"/Setup/Default.aspx" "mojoPortal" 	Files Containing Juicy Info
> 2018-04-12 	inurl:"/startSSO.ping?" -stackoverflow.com 	Pages Containing Login Portals
> 2018-04-12 	intitle:"Index Of" intext:".Trash" 	Sensitive Directories
> 2018-04-12 	inurl:"databases.yml" ext:yml password -github 	Files Containing Passwords
> 
> ----------------
> 
> https://www.exploit-db.com/google-hacking-database/9/
> 
> 2018-04-12 	inurl:"databases.yml" ext:yml password -... 	Symfony databases passwords. Bruno Schmid https://ch.linkedin.com/in/schmidbruno ...
> 2018-04-12 	inurl:"config.xml" "password" ... 	Several XML config files containing passwords and other interesting info Bruno Schmid ...
> 2018-04-10 	inurl:/host.txt + filetype:txt + "password&qu... 	inurl:/host.txt + filetype:txt + "password" File containing passwords ManhNho ...
> 2018-04-09 	intitle:"Index Of" intext:".vscode&... 	Description : Microsoft Visual Code Editor files containing passwords and config information....
> 2018-04-06 	site:pastebin.com "rcon_password" 	Finding rcon_ passwords to source engine based game servers on pastebin. This allows you to ex...
> 2018-04-06 	intitle:"index of /" inanchor:.kdbx 	This will find KeePass databse files in open web directories, to download and potentionally br...
> 2018-04-04 	CakePHP inurl:database.php intext:db_password 	Contains database username and password along with dbname. Thanks Kiran S ...
> 2018-03-27 	intext:password inurl:"/log/production" ... 	Rails web application Framework stores passwords and tokens in plain text i the log. Brun...
> 2018-03-07 	"database_password" filetype:yml "c... 	Database credentials for mostly CakePHP apps database_password" filetype:yml "conf...
> 2018-03-02 	"database_password" filetype:yml "c... 	*Google dork description: *database credentials for mostly symfony apps *Google Search:* &qu...
> 2018-03-02 	"MAIL_PASSWORD" filetype:env 	*Google* dork *description: *mail credentials ( db credentials) for mostly laravel websites ...
> 2018-01-12 	intitle:"Index Of" intext:sftp-config.js... 	Description : This dork returns list of FTP/SFTP passwords from sublime text. Dork : intit...
> 2018-01-03 	ext:config + " password=" + " 	Google Dork: Files Containing Passwords Huijun Chen ...
> 2018-01-01 	"password" + ext:conf "Modem Type ... 	Google Dork: Files Containing Passwords Huijun Chen ...
> 2017-12-21 	ext:inf SetupMgrTag AdminPassword 	Google Dork: Files Containing Passwords Finds admin password from windows install config files...
> 2017-12-11 	"enable secret" ext:cfg -git -cisco.com 	Finds files containing Cisco NAC hostnames and passwords in plaintext Dxtroyer P.S. Some ...
> 2017-10-30 	site:trello.com password 	This will bring public Trello boards often containing user names and passwords. You can guess t...
> 2017-10-30 	inurl:"gradle.properties" intext:"p... 	Google Dork: Files Containing Passwords Exploit Author: Huijun Chen ...
> 2017-10-17 	intext:connectionString & inurl:web & ext:... 	*Category:* Files containing passwords *Summary:* A Google dork that gives SQL connection ...
> 2017-10-11 	intitle:"Index Of" intext:.ftpconfig 	Description : FTP/SFTP credentials in .ftpconfig file from Atom text editor. Dork : intitle...
> 2017-08-03 	inurl:_vti_pvt/administrators.pwd 	Here is a Google Dork to retrieve *sensitive information Login/password for MS FrontPage share...
> 2017-07-31 	inurl:"sitemanager.xml" ext:xml -git 	Finds FileZilla site manager files, containing FTP usernames and passwords Dxtroyer...
> 2017-06-22 	intext:DB_PASSWORD || intext:"MySQL hostname&... 	Google Dork: intext:DB_PASSWORD || intext:"MySQL hostname" ext:txt Author: Tarkan Ca...
> 2017-06-20 	site:pastebin.com intext:"*@*.com:*" 	site:pastebin.com intext:"*@*.com:*" Finds pastebin.com dumped mail lists with passw...
> 2017-06-05 	"resources.db.params.password" ext:ini -... 	Finds lots of database usernames & passwords! Dxtroyer...
> 2017-05-29 	ext:reg " [HKEY_CURRENT_USER\Software\ORL\Win... 	Finds files with WinVNC passwords Dxtroyer...
> 2017-05-29 	"mysqli_connect" ext:inc 	Finds scripts containing MySQL usernames and passwords Dxtroyer...
> 2017-05-29 	"iSpy Keylogger" "Passwords Log&quo... 	Description: iSpy keylogger logs Dork: "iSpy Keylogger" "Passwords Log" ex...
> 2017-05-17 	" End Stealer " ext:txt 	Finds logs from "Black Stealer", an internet password stealer Dxtroyer...
> 2017-05-12 	"FileZilla" inurl:"recentservers.xm... 	Finds FileZilla recent server files with plain text usernames/passwords Dxtroyer...
> 2017-05-10 	"Stealer by W33DY" ext:txt 	Finds stealer logs with usernames, passwords and sites to input them! Dxtroyer...
> 2017-05-08 	inurl:"/zebra.conf" ext:conf -git 	Finds GNU Zebra login credentials Dxtroyer...
> 2017-05-03 	ext:fetchmailrc 	Finds .fetchmailrc files with eMail login info Dxtroyer...
> 2017-05-03 	"[main]" "enc_GroupPwd=" ext:t... 	Finds Cisco VPN client passwords (encrypted, but easily cracked!) Dxtroyer...
> 2017-05-02 	"-----BEGIN RSA PRIVATE KEY-----" ext:ke... 	Some hashes (passwords, certs, etc.) Dxtroyer...
> 2017-04-25 	filetype:bak inurl:php "mysql_connect" 	PHP backups that contain MySQL database passwords. filetype:bak inurl:php "mysql_co...
> 2017-04-13 	"# -FrontPage-" ext:pwd 	Finds MS Frontpage passwords! Dxtroyer...
> 2017-04-12 	"END_FILE" inurl:"/password.log&quo... 	Finds user-specific login info. Dxtroyer...
> 2017-04-12 	"INSERT INTO phpbb_users" ext:sql 	Finds files with usernames and hashed passwords! Dxtroyer...
> 2017-04-10 	inurl:"-wp13.txt" 	Finds config files for MySQL, ABSPATH, Wordpress, and more! Dxtroyer...
> 
</pre>
----------

https://picturepan2.github.io/spectre/experimentals.html#comparison

<br>


<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-primary"</span>&gt;primary color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-secondary"</span>&gt;secondary color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-gray"</span>&gt;gray color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-light"</span>&gt;light color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-success"</span>&gt;success color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-warning"</span>&gt;warning color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-error"</span>&gt;error color&lt;<span class="tag">/span</span>&gt;
</code></pre>

 <div class="docs-note">
 <p><a class="text-primary p-1" href="#colors">primary link</a></p>
<p><a class="text-secondary p-1" href="#colors">secondary link</a></p>
  <p><a class="text-gray p-1" href="#colors">gray link</a></p>
  <p><a class="text-light bg-dark p-1 rounded" href="#colors">light link</a></p>
 <p><a class="text-success p-1" href="#colors">success link</a></p>
 <p><a class="text-warning p-1" href="#colors">warning link</a></p>
 <p><a class="text-error p-1" href="#colors">error link</a></p>
</div>

<!-- colors -->
<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-primary"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;primary color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-secondary"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;secondary color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-gray"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;gray color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-light"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;light color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-success"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;success color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-warning"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;warning color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-error"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;error color&lt;<span class="tag">/a</span>&gt;
</code></pre>

 <h4 id="colors-background" class="s-subtitle">Background colors</h4>
 <div class="docs-note">
 <p><span class="bg-primary p-1 rounded">primary bg</span></p>
<p><span class="bg-secondary text-primary p-1 rounded">secondary bg</span></p>
<p><span class="bg-dark p-1 rounded">dark bg</span></p>
<p><span class="bg-gray p-1 rounded">gray bg</span></p>
 <p><span class="bg-success p-1 rounded">success bg</span></p>
 <p><span class="bg-warning p-1 rounded">warning bg</span></p>
  <p><span class="bg-error p-1 rounded">error bg</span></p>
</div>

<!-- colors -->
<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-primary"</span>&gt;primary bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-secondary"</span>&gt;secondary bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-dark"</span>&gt;dark bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-gray"</span>&gt;gray bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-success"</span>&gt;success bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-warning"</span>&gt;warning bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-error"</span>&gt;error bg&lt;<span class="tag">/div</span>&gt;
</code></pre>

</div>

<div class="container">
<div class="docs-ad docs-ad-sidebar">
<script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=picturepan2githubio" id="_carbonads_js"></script>
 </div>
 </div>

 <div id="cursors" class="container">
<h3 class="s-title"><a href="#cursors" class="anchor" aria-hidden="true">#</a>Cursor utilities</h3>
<div class="docs-note">
<p>Cursor utilities specify which mouse cursor to display when mouseover.</p>
</div>
<div class="columns">
<div class="column">
 <div class="bg-gray docs-block c-hand">c-hand</div>
</div>
 <div class="column">
  <div class="bg-gray docs-block c-move">c-move</div>
 </div>
   <div class="column">
  <div class="bg-gray docs-block c-zoom-in">c-zoom-in</div>
   </div>
  <div class="column">
 <div class="bg-gray docs-block c-zoom-out">c-zoom-out</div>
  </div>
   <div class="column">
   <div class="bg-gray docs-block c-not-allowed">c-not-allowed</div>
   </div>
   <div class="column">
   <div class="bg-gray docs-block c-auto">c-auto</div>
  </div>
  </div>

<!-- display utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- cursor: hand; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-hand"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: move; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-move"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: zoom-in; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-zoom-in"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: zoom-out; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-zoom-out"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: not-allowed; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-not-allowed"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: auto; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-auto"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

      </div>

      <div id="display" class="container">
        <h3 class="s-title"><a href="#display" class="anchor" aria-hidden="true">#</a>Display utilities</h3>
        <div class="docs-note">
          <p>Display utilities are used for display and hidden things.</p>
        </div>

<!-- display utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- display: block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-block"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline-block"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-flex"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline-flex"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: none; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-none"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-hide"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: visible; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-visible"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: hidden; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-invisible"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- hide text contents --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-hide"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- assistive text for screen reader --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-assistive"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

 </div>

      <div id="divider" class="container">
        <h3 class="s-title"><a href="#divider" class="anchor" aria-hidden="true">#</a>Divider</h3>
        <div class="docs-note">
          <p>A Divider is used for separating elements.</p>
        </div>
        <div class="columns">
          <div class="column">
            <div class="divider"></div>
          </div>
        </div>
        <div class="columns">
          <div class="column">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus.
            <div class="divider text-center" data-content="OR"></div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus.
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <form>
              <div class="form-group">
                <label class="form-label" for="input-example-1">Email</label>
                <input class="form-input" id="input-example-1" placeholder="Email" type="text">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-example-2">Password</label>
                <input class="form-input" id="input-example-2" placeholder="Password" type="password">
              </div>
              <div class="form-group">
                <label class="form-checkbox">
                  <input type="checkbox">
                  <i class="form-icon"></i> Remember me
                </label>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Sign in</button>
              </div>
            </form>
          </div>
          <div class="divider-vert" data-content="OR"></div>
          <div class="column">
            <form>
              <div class="form-group">
                <label class="form-label" for="input-example-3">Email</label>
                <input class="form-input" id="input-example-3" placeholder="Email" type="text">
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block">Sign up</button>
                <button class="btn btn-link btn-block">Learn more</button>
              </div>
            </form>
          </div>
        </div>

<!-- divider utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- divider element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- divider element with text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider text-center"</span> <span class="atn">data-content</span>=<span class="atv">"OR"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- vertical divider element with text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"columns"</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"column"</span>&gt;
    <span class="com">&lt;!-- column content --&gt;</span>
  &lt;<span class="tag">/div</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider-vert"</span> <span class="atn">data-content</span>=<span class="atv">"OR"</span>&gt;&lt;<span class="tag">/div</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"column"</span>&gt;
    <span class="com">&lt;!-- column content --&gt;</span>
  &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</code></pre>

 </div>

  <div id="loading" class="container">
   <h3 class="s-title"><a href="#loading" class="anchor" aria-hidden="true">#</a>Loading</h3>
<div class="docs-note">
 <p>Loading indicator is used for loading or updating. Also, you can add the <code>loading</code> class to buttons for loading status.</p>
  </div>
  <div class="columns">
<div class="column col-12 text-center">
  <div class="loading"></div>
  </div>
</div>
  <div class="docs-note">
<p>Add the <code>loading-lg</code> class for large size. </p>
 </div>
 <div class="columns">
 <div class="column col-12 text-center">
 <div class="loading loading-lg"></div>
 </div>
  </div>

<!-- loading -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- loading element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"loading"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"loading loading-lg"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

</div>

 <div id="position" class="container">
  <h3 class="s-title"><a href="#position" class="anchor" aria-hidden="true">#</a>Position utilities</h3>
 <div class="docs-note">
 <p>Position utilities are used for useful layout and position things, including clearfix, float, position and margin/padding utilities.</p>
</div>

<!-- position utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- clear float --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"clearfix"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- float: left and right --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"float-left"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"float-right"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- position: relative, absolute and fixed --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"relative"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"absolute"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"fixed"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- centered block --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"centered"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- m-1 {margin: 4px;} m-2 {margin: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"m-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"m-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- margin in 4 directions. mt-1 {margin-top: 4px;} mt-2 {margin-top: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mt-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mt-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- mx-1 {margin-left: 4px; margin-right: 4px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mx-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mx-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"my-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"my-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- p-1 {padding: 4px;} p-2 {padding: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"p-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"p-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- padding in 4 directions. pt-1 {padding-top: 4px;} pt-2 {padding-top: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"pt-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"pt-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- px-1 {padding-left: 4px; padding-right: 4px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"px-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"px-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"py-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"py-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

</div>

 <div id="shapes" class="container">
   <h3 class="s-title"><a href="#shapes" class="anchor" aria-hidden="true">#</a>Shape utilities</h3>
   <div class="docs-note">
   <p>Shape utilities are used for change element shapes.</p>
    </div>
        <div class="columns">
          <div class="column col-6 text-center">
   <div class="bg-primary text-light docs-shape rounded centered">
      rounded
     </div>
    </div>
  <div class="column col-6 text-center">
   <div class="bg-primary text-light docs-shape circle centered">
       circle
  </div>
 </div>
  </div>

<!-- shape utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- rounded element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"rounded"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- circle element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"circle"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

</div>

 <div id="text" class="container">
<h3 class="s-title"><a href="#text" class="anchor" aria-hidden="true">#</a>Text utilities</h3>
 <div class="docs-note">
 <p>Text utilities are used for text alignment, styles and overflow things.</p>
  </div>

<!-- text utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- left-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-left"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- center-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-center"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- right-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-right"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- justified text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-justify"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Lowercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-lowercase"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Uppercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-uppercase"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Capitalized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-capitalize"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Normal weight text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-normal"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Bold text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-bold"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Italicized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-italic"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Larger text (120%) --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-large"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Overflow behavior: display an ellipsis to represent clipped text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-ellipsis"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Overflow behavior: truncate the text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-clip"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Text may be broken at arbitrary points --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-break"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

