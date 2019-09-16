---
title: test-rss
private: true
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
sitemap:
    ignore: true
---

{% for name, feed in twig_feeds %}
  <h4>Feed name: {{ name }}</h4>
  <small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small>
 {% for item in feed.items %}
<h5>
<a href="{{ item.url }}">{{ item.title }}</a>
  </h5>
  <time>{{ item.date.date }}</time>
  <p>{{ item.content }}</p>
 {% endfor %}
{% endfor %}