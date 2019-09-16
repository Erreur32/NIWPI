---
title: php7.3
private: false
date: '01:13 24-08-2019'
page_container: container
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
summary:
    enabled: '1'
feed:
    limit: 10
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
---

# phpsize

 -  phpsize  installlation with dewv package php.  php7.x-dev

```bash
sudo apt-get install php7.3-dev
```
> Need mcrypt for that!

# mcrypt


**To install this extension on PHP 7.3, run the following commands as your server’s root user:**

## Verify php and pecl version
```bash
php -v
pecl version
```

If your php isn’t 7.3 then use /usr/bin/php7.3 instead php command.

 -   FIX:

```bash
ln -s  /usr/bin/php7.3  /usr/bin/php
```

## **Install mcrypt extension**

### Mcrypt PECL extenstion

```bash
sudo apt-get -y install gcc make autoconf libc-dev pkg-config
sudo apt-get -y install libmcrypt-dev
sudo pecl install mcrypt-1.0.1
```


> When you are shown the prompt
> 
> libmcrypt prefix? ** [autodetect] ** :
> Press** [Enter] ** to autodetect.
> 


```

Build process completed successfully
Installing '/usr/lib/php/20180731/mcrypt.so'
install ok: channel://pecl.php.net/mcrypt-1.0.2
configuration option "php_ini" is not set to php.ini location
You should add "extension=mcrypt.so" to php.ini

```

Add to cli and apache2 php.ini configuration.
```bash
sudo bash -c "echo extension=/usr/lib/php/20180731/mcrypt.so > /etc/php/7.3/cli/conf.d/mcrypt.ini"
sudo bash -c "echo extension=/usr/lib/php/20180731/mcrypt.so > /etc/php/7.3/apache2/conf.d/mcrypt.ini"

#restart apache service 
service apache2 restart 
# or
/etc/init.d/apache2 restart
```

Verify that the extension was installed, run command:

```bash
php -i | grep "mcrypt"
 
/etc/php/7.3/cli/conf.d/mcrypt.ini
Registered Stream Filters => zlib.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, convert.iconv.*, mcrypt.*, mdecrypt.*
mcrypt
mcrypt support => enabled
mcrypt_filter support => enabled
mcrypt.algorithms_dir => no value => no value
mcrypt.modes_dir => no value => no value
```

#   php7.3 list
 
 ```bash 
 # php -v
PHP 7.3.8-1+0~20190807.43+debian9~1.gbp7731bf (cli) (built: Aug  7 2019 19:46:25) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.8, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.3.8-1+0~20190807.43+debian9~1.gbp7731bf, Copyright (c) 1999-2018, by Zend Technologies
```

 ```
 php7.3  
 php7.3-cli    
 php7.3-curl         
 php7.3-gd        
 php7.3-interbase    
 php7.3-intl          
 php7.3-json         
 php7.3-mysql        
 php7.3-pgsql        
 php7.3-sqlite3    
 php7.3-xml
 php7.3-bcmath   
 php7.3-common 
 php7.3-dev       
 php7.3-gmp       
 php7.3-interbase-dbgsym
 php7.3-intl-dbgsym  
 php7.3-mbstring     
 php7.3-opcache     
 php7.3-readline    
 php7.3-tidy        
 php7.3-zip
 
 ```
 
```apt install php7.3     php7.3-cli   php7.3-curl      php7.3-gd        php7.3-interbase         php7.3-intl              php7.3-json              php7.3-mysql             php7.3-pgsql             php7.3-sqlite3           php7.3-xml   php7.3-bcmath            php7.3-common            php7.3-dev               php7.3-gmp               php7.3-interbase-dbgsym  php7.3-intl-dbgsym       php7.3-mbstring          php7.3-opcache           php7.3-readline          php7.3-tidy              php7.3-zip```


inspired by https://lukasmestan.com/install-mcrypt-extension-in-php7-2/
