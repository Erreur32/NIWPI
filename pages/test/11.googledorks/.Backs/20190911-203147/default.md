---
title: googledorks
private: true
date: '09:43 13-04-2018'
process:
    twig: true
    markdown: false
creator: erreur32
sitemap:
    ignore: true
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