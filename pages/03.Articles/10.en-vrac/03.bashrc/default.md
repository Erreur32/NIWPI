---
title: Bashrc
private: false
date: '00:21 24-08-2019'
page_container: container-fluid
hero_classes: ''
hero_image: ''
show_sidebar: '0'
content:
    items: '- ''@self.modular'''
    limit: '5'
    order:
        by: folder
        dir: asc
    pagination: '1'
    url_taxonomy_filters: '1'
feed:
    limit: '10'
    description: ''
---

# TIPS bashrc

My alias for  **.bash_alias**

!!!! Update package and distrib + clean all

```bash
## Update package and distrib + clean all 

alias up="apt update && apt list --upgradable && apt upgrade && apt dist-upgrade && apt full-upgrade && apt-get autoclean && apt-get clean && apt-get autoremove && cleanBoot && youtube-dl -U && npm outdated"

```



```bash

alias wgetdl="wget -k -U 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36' $1"
alias wgetc="wget -c"
alias wget="wget --no-check-certificate"
# wget ‐‐page-requisites ‐‐span-hosts ‐‐convert-links ‐‐adjust-extension
# wget ‐‐refer=http://google.com ‐‐user-agent=”Mozilla/5.0 Firefox/4.0.1″

## find top 10 big file:
 
alias findsimpledir="du -sh ./* "
alias finddirtop="du -Sh | sort -rh | head -5"
alias finddirtophome="du -a /home | sort -n -r | head -n 5"
alias findintopfile="du -k * | sort -nr | cut -f2 | xargs -d '\n' du -sh"
alias findintop="du -hs * | sort -hr"
alias findt10='find /var/log/ -type f -exec du -s {} \; | sort -n | tail -n 10'
alias findt20='find /var/log/ -type f -exec du -s {} \; | sort -n | tail -n $HeadVarX'
alias findbigfiletop20='find /var/log/ -type f -exec du -s {} \; | sort -n | tail -n $HeadVarX'
alias find_file="find . -name "
alias find_text="find .  -type f | xargs grep "
alias find_text_php="find . -iname '*.php' -type f | xargs grep"
alias gitReset="git reset --hard HEAD && git checkout master && git pull"
alias gitC="git clone $1"
alias gitstate='git fetch --prune ; git fetch --tags ; clear && git branch -vv && git status'
alias gitlog='git log --date-order --all --graph --format="%C(green)%h%Creset %C(yellow)%an%Creset %C(blue bold)%ar%Creset %C(red bold)%d%Creset%s"'
alias gitlog2='git log --date-order --all --graph --name-status --format="%C(green)%H%Creset %C(yellow)%an%Creset %C(blue bold)%ar%Creset %C(red bold)%d%Creset%s"'
alias portopen="netstat -ant | sed -e '/^tcp/ !d' -e 's/^[^ ]* *[^ ]* *[^ ]* *.*[\.:]\([0-9]*\) .*$/\1/' | sort -g | uniq"
alias port="netstat -tulanp | grep $1"
alias ports="netstat -tulanp"
alias ports2='netstat -lnpute'
alias Serviceall='service --status-all'

alias ytdl='youtube-dl -t --extract-audio --audio-format mp3 -k --force-ipv4 $1'
alias ytdlmp32="youtube-dl --extract-audio --audio-format mp3 --audio-quality 0 $1  --force-ipv4"
alias ytdlmp3='youtube-dl  -o "%(title)s.%(ext)s" --extract-audio --audio-format mp3 -k --force-ipv4 $1'
alias ytdlvid='youtube-dl -4  -o "%(title)s.%(ext)s"  $1'

alias nanoW='nano -\$cwS'
## get top process eating cpu ##
alias pscpu='ps auxf | sort -nr -k 3'
alias pscpu10='ps auxf | sort -nr -k 3 | head -n $HeadVarX'
alias rss="newsbeuter"
alias check-code-bash-dir="find . -name '*.sh' -exec bash -n {} \;"
alias check-code-html="htmlhint $1"
alias iptablesL="iptables -n -L -v --line-numbers"

```