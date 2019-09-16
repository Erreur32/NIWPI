---
title: 'Netdata [FIX]'
published: true
private: false
hero_classes: ''
hero_image: ''
feed:
    limit: '10'
    description: ''
---

## NETDATA   fix

Sometimes  Netdata are broken when you whant to update it.

  - try this command to fix, maybe help ;)
  
  It will download all missed dependance from netdata script.

```bash
bash -x <(curl -Ss https://raw.githubusercontent.com/netdata/netdata-demo-site/master/install-required-packages.sh) --non-interactive --dont-wait netdata
```

-----



Or use my script to try to update Netdata with Git .

[https://pastebin.echosystem.fr/pxfvy7iac](https://pastebin.echosystem.fr/pxfvy7iac)

```bash
#!/bin/bash
#
# Script Updater for netdata
#
#   - Depencies: Wring package (NPM)
#
#  By Erreur32 - 2018
#
#bash <(curl -Ss https://my-netdata.io/kickstart.sh)

apt-get install  build-essential g++ g++-6 libc6-dev libncurses5-dev libpcap-dev libpcap0.8-dev libstdc++-6-dev linux-libc-dev uuid zlib1g-dev -y
bash -x <(curl -Ss https://raw.githubusercontent.com/netdata/netdata-demo-site/master/install-required-packages.sh) --non-interactive --dont-wait netdata

service=netdata
releasehub=https://github.com/netdata/netdata/tags
#git clone https://github.com/firehol/netdata.git --depth=1 && cd netdata && echo -ne '\n' | ./netdata-installer.sh --install /opt
# /opt/netdata/netdata-installer.sh --install /opt

_RESET="$(tput sgr 0)"
                        BLACK="$(tput setaf 0)"
                        RED="$(tput setaf 1)"
                        GREEN="$(tput setaf 2)"
                        YELLOW="$(tput setaf 3)"
                        BLUE="$(tput setaf 4)"
                        PURPLE="$(tput setaf 5)"
                        CYAN="$(tput setaf 6)"
                        WHITE="$(tput setaf 7)"
                        BGBLACK="$(tput setab 0)"
                        BGRED="$(tput setab 1)"
                        BGGREEN="$(tput setab 2)"
                        BGYELLOW="$(tput setab 3)"
                        BGBLUE="$(tput setab 4)"
                        BGPURPLE="$(tput setab 5)"
                        BGCYAN="$(tput setab 6)"
                        BGWHITE="$(tput setab 7)"
                        BOLD="$(tput bold)"
                        DIM="$(tput dim)"
                        UNDERLINED="$(tput smul)"
                        BLINK="$(tput blink)"
                        INVERTED="$(tput rev)"
                        STANDOUT="$(tput smso)"
                        BELL="$(tput bel)"
                        CLEAR="$(tput clear)"


NOC=$(tput sgr0)
NC=$(tput sgr0)


## Check if wring is installed
if [ -f "/usr/bin/wring" ] ||  [ -f "/usr/local/bin/wring" ]
     then
      echo -e "\n\e[34m - Wring package \e[0m>> founded.\e[0m\n"
     else
      echo -e "\n\e[92m - Install Wring with NPM \e[0m\n"
      npm install --global wring  && echo "Success install  Wring" || echo "failure to install Wring"
      echo -e "\n\e[34m - .\e[0m\n"
     fi

# need to check in other way...   /usr/sbin/netdata -V | cut -c"9-" |  cut -c "1-6"
#/home/opt/netdata/usr/sbin/netdata
VersionInstalled="$(/usr/sbin/netdata -v | cut -c"9-" |  cut -c "1-7")"
#VersionAvailable="$(curl -s $releasehub |  wring text - '.muted-link' |sed -n 8p)"
VersionAvailable="$(curl -s https://github.com/netdata/netdata/tags |  wring text - '.commit-title' | head -n1)"
echo -e "$RED Checking $service version ... "
echo -e "$YELLOW Version installed = $VersionInstalled"
echo -e "$YELLOW Version Available = $VersionAvailable"
echo  ""

# go to the git downloaded directory
#cd /opt/netdata


if [ -z "$VersionInstalled" ]
then
   echo -e "$service is not installed - exit "
   exit
fi
if [[ "$VersionAvailable" = "$VersionInstalled" ]]
then
    echo -e "$service  is already up-to-date (version $VersionInstalled) ... Bye! "
    exit
fi

#echo -e "${GREEN} Start install New Updater from Netdata $NC"
#echo -e " $NC"
echo -e "$GREEN Start Updating Netdata...${YELLOW}"
#/bin/bash /opt/netdata-installer.sh  && echo -e "  Updating Netdata Successfully!" || echo "failure"

#Git_Pull(){
cd /opt/netdata && /usr/bin/git pull
#}
#/usr/bin/git pull

#/opt/netdata/netdata-installer.sh
yes "" | /opt/netdata/netdata-installer.sh --libs-are-really-here --install /opt  --libs-are-really-here

#-pidfile /opt/netdata/netdata.pid

echo -e " ${ORANGE}"; ps -A|grep netdata
echo ""
echo -e "${GREEN} Netdata Updated ✔ "
echo -e " $NC"



# download the latest version
#git pull
#git log | grep ^commit | head -n 1 | cut -d ' ' -f 2
#yes "" | ./netdata-installer.sh --install /opt

# && echo -ne '/n'

# rebuild it, install it, run it
#./netdata-installer.sh
```