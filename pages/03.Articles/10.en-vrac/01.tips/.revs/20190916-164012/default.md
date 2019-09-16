---
title: Tips
private: false
date: '18:51 08-07-2018'
hero_classes: ''
hero_image: ''
blog_url: /blog
show_sidebar: '1'
show_breadcrumbs: '1'
show_pagination: '1'
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
---

!!! Tips1
# Update key Kali linux 
[TOC]
--> Fix error :  
>   The repository 'http://http.kali.org/kali kali-rolling InRelease' is not signed. 

```bash
wget -q -O - archive.kali.org/archive-key.asc | apt-key add
```
===

!!! Tips2
# Formating code 
## with clang-format

_Usage_
```
$ clang-format file > formattedfile
```
_Or:_
```
$ clang-format -i file
```

```
$ apt-get install clang-format
```

1.  Horribly formatted code

cat myfile
```
#include <iostream>
  using namespace std;
    int main() {
         cout << "Oh";
      cout << "clang format rulez!";       
             }
```

2. Magical command

```
$ clang-format -i myfile
```

3. Well formatted code

cat myfile
```
#include <iostream>
using namespace std;
int main() {
  cout << "Oh";
  cout << "clang format rulez!";
}
```

-----

Download the "NppAutoIndent" plugin.  In Notepad++:

    Plugins → Plugin manager → Available → NppAutoIndent

The "NppAutoIndent" plugin has 'smart' indentation for C-style languages, such as C/C++, PHP, and Java.  It's the first release, so don't expect it to be flawless, and of course it might not be completely to your preferences.  There is NO support for HTML/XML and such, maybe later, tag matching is much more difficult to implement.  To use it, select your code and:

    TextFX → TextFX Edit → Reindent C++ code

If you cannot see TextFX in your menu, you can install its plugin from SourceForge.

----
 1
down vote

Here are most of plugins to format your code.

    JStool (JSmin):
    UniversalIndentGUI ( Enable text auto update' in plugin manager-> UniversalIndentGUI
    Shortkey = CTRL+ALT+SHIFT+J )

    TextFX : ( Shortkey = CTRL+ALT+SHIFT+B or TextFX > TextFX Html Tidy > Tidy: reindent XML) TextFX has the benefit of wrapping long lines, which XML Tools does not do, but doesn't indent those new lines correctly.

    XML Tools : (customized plugin for XML; Shortkey = CTRL+ALT+SHIFT+B or XML Tools > Pretty print [Text indent])
    XML Tools complements TextFX by indenting the newly wrapped lines nicely.

## NETDATA fix

Sometimes Netdata are broken, try this command to fix, maybe help ;)

```bash
bash -x <(curl -Ss https://raw.githubusercontent.com/netdata/netdata-demo-site/master/install-required-packages.sh) --non-interactive --dont-wait netdata
```