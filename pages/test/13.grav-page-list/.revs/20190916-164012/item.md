---
title: grav-page-list
private: true
date: '23:38 15-04-2018'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
continue_link: true
sitemap:
    ignore: true
---

[https://learn.getgrav.org/content/collections](https://learn.getgrav.org/content/collections)

Safe-Email Address: [safe-email autolink="true" icon="envelope-o"]user@domain.com[/safe-email] 


<pre><code>
Summary of collection options
String 	Result
'@root' 	Get the root children
'@root.children' 	Get the root children (alternative)
'@root.descendants' 	Get the root and recurse through ALL children
	
'@self.parent' 	Get the parent of the current page
'@self.siblings' 	A collection of all other pages on this level
'@self.modular' 	Get only the modular children
'@self.children' 	Get the non-modular children
'@self.descendants' 	Recurse through all the non-modular children
	
'@page': '/fruit' 	Get all the children of page /fruit
'@page.children': '/fruit' 	Alternative to above
'@page.self': '/fruit' 	Get a collection with only the page /fruit
'@page.page': '/fruit' 	Alternative to above
'@page.descendants': '/fruit' 	Get and recurse through all the children of page /fruit
'@page.modular': '/fruit' 	Get a collection of all modular subpages of /fruit
	
'@taxonomy.tag': photography 	taxonomy with tag=photography
'@taxonomy': {tag: birds, category: blog} 	taxonomy with tag=birds && category=blog

This document outlines the use of @page, @taxonomy.category etc, but a more YAML-safe alternative format is page@, taxonomy@.category. All the @ commands can be written in either prefix or postfix format.

We will cover these more in detail.
Root Collections
@root - Top level children

This can be used to retrieve the top/root level published non-modular children of a site. Particular useful for getting the items that make up the primary navigation for example:

content:
    items: '@root'

an alias is also valid:

content:
    items: '@root.children'

@root - Top level children + all descendants

This will effectively get every page in your site as it recursively navigates through all the children from the root page down, and builds a collection of all the published non-modular children of a site.

content:
    items: '@root.descendants'

Self Collections
@self.children - Children of the current page

This is used to list the published non-modular children of the current page:

content:
    items: '@self.children'

@self.descendants - Non-modular children + all descendants of the current page

</code></pre>