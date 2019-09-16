---
title: gtop
media_order: demo.gif
private: false
date: '10:59 06-04-2018'
taxonomy:
    category:
        - blog
    tag:
        - tools
        - monitoring
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
feed:
    limit: 10
creator: erreur32
---

![screen record](![](demo.gif))

**GTOP** System monitoring dashboard for terminal. 

 ![](gtop%5B1%5D.svg) 


### Requirements

* Linux / OSX / Windows (partial support)
* Node.js >= v4

### Installation

```
$ npm install gtop -g
```

### Usage

You can sort the process table by pressing

* `p`: Process Id
* `c`: CPU usage
* `m`: Memory usage

### Troubleshooting

If you see question marks or other different characters, try to run it with these environment variables:

```
$ LANG=en_US.utf8 TERM=xterm-256color gtop
```

## License

Released under the MIT license.

Link Project: [https://github.com/aksakalli/gtop/](https://github.com/aksakalli/gtop/)