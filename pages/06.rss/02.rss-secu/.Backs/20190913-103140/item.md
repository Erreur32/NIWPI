---
title: 'RSS Secu'
media_order: '1 psecu A.jpeg,colored_RSS.png'
published: true
private: false
date: '02:19 17-03-2018'
taxonomy:
    category:
        - rss
        - secu
    tag:
        - secu
        - rss
never_cache_twig: false
cache_enable: true
debugger: false
header_image: '0'
summary:
    enabled: '0'
feed:
    limit: 10
creator: erreur32
blog_url: /rss
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
textformatter: true
---

<style>

:root {
  --link-color: var(--blue-50);
  --link-hover-color: var(--blue-60);
  --link-active-color: var(--blue-70);
}

 
h1, h2, h3, h4, h5, h6 {
  line-height: 1.15em;
}

:any-link {
  color: var(--link-color);
  text-decoration: none;
}

:any-link:hover {
  color: var(--link-hover-color);
  text-decoration: underline;
}

:any-link:active {
  color: var(--link-active-color);
  text-decoration: underline;
}
html,
body {
  /*
   * revert some unwanted changes in "extension.css" disallowing text selection
   * and forcing use of the default cursor for all contexts
   */
  -moz-user-select: auto;
  -webkit-user-select: auto;
  user-select: auto;
  cursor: auto;
  display: unset;
}

body {
  padding: 4px;
}

body > :first-child {
  margin-block-start: 0;
}

p {
  margin-block-start: 0;
  margin-block-end: 0;
}

img {
  margin-block-start: 0;
  margin-block-end: 0;
  max-width: 100%;
}
 
 
:root {
  --blue-50-a30: rgba(10, 132, 255, 0.3);
  --default-background: var(--grey-10);
  --entry-background: var(--white-100);
  --primary-color: var(--grey-90);
  --secondary-color: var(--grey-50);
  --button-focus-shadow: 0 0 0 1px var(--blue-50) inset,
      0 0 0 1px var(--blue-50), 0 0 0 4px var(--blue-50-a30);
  --primary-button-color: var(--white-100);
  --primary-button-background-color: var(--blue-60);
  --primary-button-hover-background-color: var(--blue-70);
  --primary-button-active-background-color: var(--blue-80);
  --secondary-button-color: var(--primary-color);
  --secondary-button-background-color: var(--grey-90-a10);
  --secondary-button-hover-background-color: var(--grey-90-a20);
  --secondary-button-active-background-color: var(--grey-90-a30);
  --entry-content-border: 1px solid var(--grey-90-a10);
  --font-family-default: "Segoe UI", "San Fancisco", "Ubuntu", sans-serif;
  --font-display-20: 300 36px var(--font-family-default);
  --font-title-40: 300 28px var(--font-family-default);
  --font-title-30: 300 22px var(--font-family-default);
  --font-title-20: 500 17px var(--font-family-default);
  --font-title-10: 500 13px var(--font-family-default);
  --font-body-20: 400 15px var(--font-family-default);
  --font-body-10: 400 13px var(--font-family-default);
  --entry-shadow: 0 1px 4px var(--grey-90-a10);
  --entry-outline: var(--entry-shadow), 0 0 0 5px var(--grey-30);
}



@media (width > calc(80ch + 2 * 200px)) and (height > calc(200px * 3)) {
  /* minimum background image size is 200px */
  body {
    background-image: url('../images/feed.svg');
    background-size: calc((100vw - 80ch) / 2);
  }
}

@media (width > calc(80ch + 2 * 200px)) and (height > calc(200px * 3)) and
    (width > calc(80ch + 33vh)) {
  /*
   * the background image should not be higher than three times the viewport
   * height
   */
  body {
    background-image: url('../images/feed.svg');
    background-size: 33vh 33vh;
  }
}

#feed-subscription {
  width: 100%;
  max-width: 80ch;
  margin: 0 auto 32px auto;
  padding: 0 16px;
  white-space: nowrap;
}

#feed-subscription fieldset[name="main"] {
  display: flex;
  align-items: baseline;
  margin: 0;
  padding: 0;
  border: none;
}

#feed-subscription fieldset[name="main"] > * + * {
  margin-left: 8px;
}

#feed-reader-selection {
  -moz-appearance: none;
  appearance: none;
  border: none;
  border-radius: 2px;
  padding: 0 28px 0 8px;
  height: 32px;
  min-width: 20ch;
  color: var(--secondary-button-color);
  background-color: var(--secondary-button-background-color);
  background-image: url('../images/arrow.svg');
  background-repeat: no-repeat;
  background-position: center right 8px;
  background-size: 12px;
  flex-grow: 1;
  flex-shrink: 1;
  text-overflow: ellipsis;
}

#feed-reader-selection:not(:disabled):hover {
  background-color: var(--secondary-button-hover-background-color);
}

#feed-reader-selection:not(:disabled):active {
  background-color: var(--secondary-button-active-background-color);
}

#feed-reader-selection option:hover,
#feed-reader-selection option:active,
#feed-reader-selection option:focus {
  background-color: red;
}

#subscribe {
  color: var(--primary-button-color);
  background-color: var(--primary-button-background-color);
  border-radius: 2px;
  padding: 0 8px;
  height: 32px;
  min-width: 132px;
  text-align: center;
  border: none;
}

#subscribe:not(:disabled):hover {
  background-color: var(--primary-button-hover-background-color);
}

#feed-reader-selection:not(:disabled):focus,
#subscribe:not(:disabled):focus {
  box-shadow: var(--button-focus-shadow);
}

#subscribe:not(:disabled):active {
  background-color: var(--primary-button-active-background-color);
}

#feed-reader-selection:disabled,
#subscribe:disabled {
  opacity: .4;
}

#feed-header {
  width: 100%;
  max-width: 80ch;
  min-width: 40ch;
  padding: 16px;
  margin: 0 auto;
  border-top: 1px solid var(--grey-90-a10);
}

#feed-logo {
  float: right;
  max-width: 188px;
  max-height: 48px;
  margin: 0 0 8px 8px;
}

#feed-title {
  font: var(--font-title-40);
  margin: 0;
}

#feed-subtitle {
  font: var(--font-body-20);
  color: var(--secondary-color);
  margin: 6px 0 0 0;
}

#no-entries-hint {
  color: var(--secondary-color);
  font: var(--font-display-20);
  display: none;
}

#no-entries-hint:last-child {
  display: block;
}

#no-entries-hint,
.entry {
  clear: both;
  margin: 16px auto 0 auto;
  padding: 16px;
}

.entry {
  overflow: auto;
  max-width: 80ch;
  background: var(--entry-background);
  border-radius: 4px;
  box-shadow: var(--entry-shadow);
}

#feed-header + article .entry {
  margin-top: 16px;
}

.entry + .entry {
  margin-top: 8px;
}

.entry:hover {
  box-shadow: var(--entry-outline);
}

details.entry > summary {
  display: flex;
  align-items: center;
  list-style-type: none;
  padding: 0 8px;
}

details.entry > summary:focus {
  outline: none;
}

details.entry > summary::before {
  content: url('../images/arrow.svg');
  width: 16px;
  height: 16px;
  flex: 0 0 16px;
  transform: rotate(-90deg);
  transition: 100ms;
}

details.entry[open] > summary {
  margin: 0 0 8px 0;
}

details.entry[open] > summary::before {
  transform: rotate(0deg);
  transition: 100ms;
}

.entry-header {
  margin: 0 0 0 8px;
}

.entry-title {
  font: var(--font-title-20);
  margin: 0 0 4px 0;
}

.entry-date {
  color: var(--secondary-color);
  font: var(--font-body-10);
  margin: 0;
}

.entry-content {
  width: 100%;
  height: 16em;
  border: var(--entry-content-border);
}

.entry-files {
  font: var(--font-body-10);
  color: var(--secondary-color);
  padding: 0 8px;
}

.entry-files-title {
  font: var(--font-title-10);
  margin: 0 0 4px 0;
}

.entry-files-list {
  margin: 0;
  padding: 0 0 0 32px;
}


:root {
  --magenta-50: #ff1ad9;
  --magenta-60: #ed00b5;
  --magenta-70: #b5007f;
  --magenta-80: #7d004f;
  --magenta-90: #440027;

  --purple-30: #c069ff;
  --purple-40: #ad3bff;
  --purple-50: #9400ff;
  --purple-60: #8000d7;
  --purple-70: #6200a4;
  --purple-80: #440071;
  --purple-90: #25003e;

  --blue-40: #45a1ff;
  --blue-50: #0a84ff;
  --blue-50-a30: rgba(10, 132, 255, 0.3);
  --blue-60: #0060df;
  --blue-70: #003eaa;
  --blue-80: #002275;
  --blue-90: #000f40;

  --teal-50: #00feff;
  --teal-60: #00c8d7;
  --teal-70: #008ea4;
  --teal-80: #005a71;
  --teal-90: #002d3e;

  --green-50: #30e60b;
  --green-60: #12bc00;
  --green-70: #058b00;
  --green-80: #006504;
  --green-90: #003706;

  --yellow-50: #ffe900;
  --yellow-60: #d7b600;
  --yellow-70: #a47f00;
  --yellow-80: #715100;
  --yellow-90: #3e2800;

  --red-50: #ff0039;
  --red-60: #d70022;
  --red-70: #a4000f;
  --red-80: #5a0002;
  --red-90: #3e0200;

  --orange-50: #ff9400;
  --orange-60: #d76e00;
  --orange-70: #a44900;
  --orange-80: #712b00;
  --orange-90: #3e1300;

  --grey-10: #f9f9fa;
  --grey-10-a10: rgba(249, 249, 250, 0.1);
  --grey-10-a20: rgba(249, 249, 250, 0.2);
  --grey-10-a40: rgba(249, 249, 250, 0.4);
  --grey-10-a60: rgba(249, 249, 250, 0.6);
  --grey-10-a80: rgba(249, 249, 250, 0.8);
  --grey-20: #ededf0;
  --grey-30: #d7d7db;
  --grey-40: #b1b1b3;
  --grey-50: #737373;
  --grey-60: #4a4a4f;
  --grey-70: #38383d;
  --grey-80: #2a2a2e;
  --grey-90: #0c0c0d;
  --grey-90-a05: rgba(12, 12, 13, 0.05);
  --grey-90-a10: rgba(12, 12, 13, 0.1);
  --grey-90-a20: rgba(12, 12, 13, 0.2);
  --grey-90-a30: rgba(12, 12, 13, 0.3);
  --grey-90-a40: rgba(12, 12, 13, 0.4);
  --grey-90-a50: rgba(12, 12, 13, 0.5);
  --grey-90-a60: rgba(12, 12, 13, 0.6);
  --grey-90-a70: rgba(12, 12, 13, 0.7);
  --grey-90-a80: rgba(12, 12, 13, 0.8);
  --grey-90-a90: rgba(12, 12, 13, 0.9);

  --ink-70: #363959;
  --ink-80: #202340;
  --ink-90: #0f1126;

  --white-100: #ffffff;

}




h1, h2, h3, h4, h5, h6 {
  line-height: 1.15em;
}

:link {
  color: var(--blue-50);
  text-decoration: none;
}

:visited {
  color: var(--blue-50);
  text-decoration: none;
}

:link:hover,
:link:active,
:visited:hover,
:visited:active {
  text-decoration: underline;
}

:link:hover {
  color: var(--blue-60);
}

:link:active {
  color: var(--blue-70);
}

:visited:hover {
  color: var(--blue-60);
}

:visited:active {
  color: var(--blue-70);
}
</style>

{% for name, feed in twig_feeds if name == 'Secu-News' %}
<p><small>Retrieved title: <a href="{{ feed.source }}">{{ feed.title }}</a>, {{ feed.amount }} item(s)</small> {% for item in feed.items %}</p>

<a href="{{ item.url }}"> {{ item.title }} </a>

{{ item.date.date | date("d/m/Y H:i:s") }}

{% endfor %}{% endfor %}