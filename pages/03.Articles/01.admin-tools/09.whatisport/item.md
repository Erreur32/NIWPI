---
title: whatisport
published: true
private: false
date: '14:45 06-04-2018'
taxonomy:
    category:
        - blog
    tag:
        - tools
        - port
        - ssh
        - shell
routable: true
creator: erreur32
blog_url: /articles
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items: '@self.children'
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
---

 
 **Connaitre les ports et services associés dans son terminal. **

_Les données utilisées proviennent du site iana.org pour la récupération de la liste des ports._

**Installation avec  python-pip de whatportis:**

```bash
$ pip install whatportis
```

Pour connaître le numéro de port d'un service :
 
 ```bash
$  whatportis 443
+-------+------+----------+----------------------------+
| Name  | Port | Protocol | Description                |
+-------+------+----------+----------------------------+
| https | 443  |   tcp    | http protocol over TLS/SSL |
| https | 443  |   udp    | http protocol over TLS/SSL |
| https | 443  |   sctp   | HTTPS                      |
+-------+------+----------+----------------------------+

```


**Exemple avec --like**


 ```bash 
 $ whatportis munin --like
+-------+------+----------+--------------------------+
| Name  | Port | Protocol | Description              |
+-------+------+----------+--------------------------+
| munin | 4949 |   tcp    | Munin Graphing Framework |
| munin | 4949 |   udp    | Munin Graphing Framework |
+-------+------+----------+--------------------------+

 ```