---
title: monitorix
media_order: monitorix.jpg
private: false
date: '15:24 06-04-2018'
creator: erreur32
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

![](monitorix.jpg)
<br>
#### Installation Monitorix

**Via the repository**

    # apt-get update
    # apt-get install monitorix
             

**Manually**
<p>downloading first the package and taking care for dependencies, and finally installing it.</p>

    # apt-get update
    # apt-get install rrdtool perl libwww-perl libmailtools-perl libmime-lite-perl \
    librrds-perl libdbi-perl libxml-simple-perl libhttp-server-simple-perl \ 
    libconfig-general-perl libio-socket-ssl-perl
    # dpkg -i monitorix*.deb
    # apt-get -f install
    	 

#### Configuring Monitorix
Monitorix ships with a default configuration file which works out-of-the-box. Moreover, the service is automatically started on package installation.

To fine-tune your installation, take a look at the /etc/monitorix/monitorix.conf file (and optionally the documentation) to adjust some things (like network interfaces, filesystems, disks, etc.).

<div class="notices red">IMPORTANT NOTICE:
<br> The Debian package also comes with an extra configuration file in /etc/monitorix/conf.d/00-debian.conf that includes some options specially adapted for Debian systems. 
<br> This file will be loaded right after the main configuration file, hence some options in the main configuration will be overwritten by this extra file.
</div>

When you are done, restart Monitorix to let your changes take effect:

    service monitorix restart
      
Link official : [http://www.monitorix.org](http://www.monitorix.org)


Enjoy!