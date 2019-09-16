---
title: typo
published: true
private: true
taxonomy:
    category:
        - test
sitemap:
    ignore: true
visible: true
creator: erreur32
---


! Details on the full capabiltiies of Spectre.css can be found in the [Official Spectre Documentation](https://picturepan2.github.io/spectre/elements.html)

The [Quark theme](https://github.com/getgrav/grav-theme-quark) is the new default theme for Grav built with [Spectre.css](https://picturepan2.github.io/spectre/) the lightweight, responsive and modern CSS framework. Spectre provides  basic styles for typography, elements, and a responsive layout system that utilizes best practices and consistent language design.

### Headings

# H1 Heading `40px`

## H2 Heading `32px`

### H3 Heading `28px`

#### H4 Heading `24px`

##### H5 Heading `20px`

###### H6 Heading `16px`

```html
# H1 Heading
# H1 Heading `40px`</small>`

<span class="h1">H1 Heading</span>
```

### Paragraphs

Lorem ipsum dolor sit amet, consectetur [adipiscing elit. Praesent risus leo, dictum in vehicula sit amet](#), feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.

Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.

### Markdown Semantic Text Elements

**Bold** `**Bold**`

_Italic_ `_Italic_`

~~Deleted~~ `~~Deleted~~`

`Inline Code` `` `Inline Code` ``

### HTML Semantic Text Elements

<abbr>I18N</abbr> `<abbr>`

<cite>Citation</cite> `<cite>`

<kbd>Ctrl + S</kbd> `<kbd>`

Text<sup>Superscripted</sup> `<sup>`

Text<sub>Subscxripted</sub> `<sub>`

<u>Underlined</u> `<u>`

<mark>Highlighted</mark> `<mark>`

<time>20:14</time> `<time>`

<var>x = y + 2</var> `<var>`

### Blockquote

> The advance of technology is based on making it fit in so that you don't really even notice it,
> so it's part of everyday life.
>
> <cite>- Bill Gates</cite>

```markdown
> The advance of technology is based on making it fit in so that you don't really even notice it,
> so it's part of everyday life.
>
> <cite>- Bill Gates</cite>
```

### Unordered List

* list item 1
* list item 2
    * list item 2.1
    * list item 2.2
    * list item 2.3
* list item 3

```markdown
* list item 1
* list item 2
    * list item 2.1
    * list item 2.2
    * list item 2.3
* list item 3
```

### Ordered List

1. list item 1
1. list item 2
    1. list item 2.1
    1. list item 2.2
    1. list item 2.3
1. list item 3

```markdown
1. list item 1
1. list item 2
    1. list item 2.1
    1. list item 2.2
    1. list item 2.3
1. list item 3
```

### Table

| Name                        | Genre                         | Release date         |
| :-------------------------- | :---------------------------: | -------------------: |
| The Shawshank Redemption    | Crime, Drama                  | 14 October 1994      |
| The Godfather               | Crime, Drama                  | 24 March 1972        |
| Schindler's List            | Biography, Drama, History     | 4 February 1994      |
| Se7en                       | Crime, Drama, Mystery         | 22 September 1995    |

```markdown
| Name                        | Genre                         | Release date         |
| :-------------------------- | :---------------------------: | -------------------: |
| The Shawshank Redemption    | Crime, Drama                  | 14 October 1994      |
| The Godfather               | Crime, Drama                  | 24 March 1972        |
| Schindler's List            | Biography, Drama, History     | 4 February 1994      |
| Se7en                       | Crime, Drama, Mystery         | 22 September 1995    |
```

### Notices

The notices styles are actually provided by the `markdown-notices` plugin but are useful enough to include here:

! This is a warning notification

!! This is a error notification

!!! This is a default notification

!!!! This is a success notification

```markdown
! This is a warning notification

!! This is a error notification

!!! This is a default notification

!!!! This is a success notification
```


<table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Genre</th>
              <th>Release date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>The Shawshank Redemption</td>
              <td>Crime, Drama</td>
              <td>14 October 1994</td>
            </tr>
            <tr>
              <td>The Godfather</td>
              <td>Crime, Drama</td>
              <td>24 March 1972</td>
            </tr>
            <tr>
              <td>Schindler's List</td>
              <td>Biography, Drama, History</td>
              <td>4 February 1994</td>
            </tr>
            <tr>
              <td>Se7en</td>
              <td>Crime, Drama, Mystery</td>
              <td>22 September 1995</td>
 </tr>
 </tbody>
 </table>
 
 
 
 <ul class="menu">
  <!-- menu header text -->
  <li class="divider" data-content="LINKS">
  </li>
  <!-- menu item standard -->
  <li class="menu-item">
    <a href="#">
 <i class="icon icon-link"></i> Slack
    </a>
  </li>
  <!-- menu item with form control -->
  <li class="menu-item">
  <label class="form-checkbox">
 <input type="checkbox">
 <i class="form-icon"></i> form-checkbox
    </label>
  </li>
  <!-- menu divider -->
  <li class="divider"></li>
  <!-- menu item with badge -->
  <li class="menu-item">
 <div class="menu-badge">
<label class="label label-primary">2</label>
 </div>
 <a href="#">
 <i class="icon icon-link"></i> Settings
</a>
  </li>
</ul>

  <div class="columns">
<div class="column col-4 col-xs-12">
 <ul class="menu">
 <li class="menu-item">
 <div class="tile tile-centered">
  <div class="tile-icon">
 <img src="img/avatar-4.png" class="avatar" alt="Avatar">
   </div>
    <div class="tile-content">
     Steve Rogers
     </div>
   </div>
  </li>
   <li class="divider"></li>
   <li class="menu-item">
   <div class="menu-badge">
<label class="label label-primary">2</label>
</div>
<a href="#menus" class="active">
 My profile
 </a>
  </li>
 <li class="menu-item">
 <a href="#menus">
                  Settings
 </a>
 </li>
  <li class="menu-item">
 <a href="#menus">
   Logout
 </a>
  </li>
 </ul>
 </div>
<br>

<div class="column col-4 col-xs-12">
  <ul class="menu">
              <li class="divider" data-content="LINKS"></li>
              <li class="menu-item">
                <a href="#menus">Slack</a>
              </li>
              <li class="menu-item">
                <a href="#menus">Hipchat</a>
              </li>
              <li class="menu-item">
                <a href="#menus">Skype</a>
              </li>
            </ul>
 </div>
 <div class="column col-4 col-xs-12">
<ul class="menu">
              <li class="menu-item">
    <label class="form-checkbox">
                  <input checked="" type="checkbox">
                  <i class="form-icon"></i> form-checkbox
 </label>
  </li>
              <li class="menu-item">
<label class="form-radio">
                  <input checked="" type="radio">
                  <i class="form-icon"></i> form-radio
  </label>
</li>
<li class="menu-item">
   <label class="form-switch">
   <input checked="" type="checkbox">
 <i class="form-icon"></i> form-switch
  </label>
 </li>
 </ul>
 </div>
 </div>
 
 


<br>
https://picturepan2.github.io/spectre/experimentals.html#comparison

<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-primary"</span>&gt;primary color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-secondary"</span>&gt;secondary color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-gray"</span>&gt;gray color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-light"</span>&gt;light color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-success"</span>&gt;success color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-warning"</span>&gt;warning color&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">"text-error"</span>&gt;error color&lt;<span class="tag">/span</span>&gt;
</code></pre>

 <div class="docs-note">
 <p><a class="text-primary p-1" href="#colors">primary link</a></p>
<p><a class="text-secondary p-1" href="#colors">secondary link</a></p>
  <p><a class="text-gray p-1" href="#colors">gray link</a></p>
  <p><a class="text-light bg-dark p-1 rounded" href="#colors">light link</a></p>
 <p><a class="text-success p-1" href="#colors">success link</a></p>
 <p><a class="text-warning p-1" href="#colors">warning link</a></p>
 <p><a class="text-error p-1" href="#colors">error link</a></p>
</div>

<!-- colors -->
<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-primary"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;primary color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-secondary"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;secondary color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-gray"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;gray color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-light"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;light color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-success"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;success color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-warning"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;warning color&lt;<span class="tag">/a</span>&gt;
&lt;<span class="tag">a</span> <span class="atn">class</span>=<span class="atv">"text-error"</span> <span class="atn">href</span>=<span class="atv">"#"</span>&gt;error color&lt;<span class="tag">/a</span>&gt;
</code></pre>

 <h4 id="colors-background" class="s-subtitle">Background colors</h4>
 <div class="docs-note">
 <p><span class="bg-primary p-1 rounded">primary bg</span></p>
<p><span class="bg-secondary text-primary p-1 rounded">secondary bg</span></p>
<p><span class="bg-dark p-1 rounded">dark bg</span></p>
<p><span class="bg-gray p-1 rounded">gray bg</span></p>
 <p><span class="bg-success p-1 rounded">success bg</span></p>
 <p><span class="bg-warning p-1 rounded">warning bg</span></p>
  <p><span class="bg-error p-1 rounded">error bg</span></p>
</div>

<!-- colors -->
<pre class="code" data-lang="HTML"><code>&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-primary"</span>&gt;primary bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-secondary"</span>&gt;secondary bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-dark"</span>&gt;dark bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-gray"</span>&gt;gray bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-success"</span>&gt;success bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-warning"</span>&gt;warning bg&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"bg-error"</span>&gt;error bg&lt;<span class="tag">/div</span>&gt;
</code></pre>


<div class="container">
<div class="docs-ad docs-ad-sidebar">
<script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=picturepan2githubio" id="_carbonads_js"></script>
 </div>
 </div>

 <div id="cursors" class="container">
<h3 class="s-title"><a href="#cursors" class="anchor" aria-hidden="true">#</a>Cursor utilities</h3>
<div class="docs-note">
<p>Cursor utilities specify which mouse cursor to display when mouseover.</p>
</div>
<div class="columns">
<div class="column">
 <div class="bg-gray docs-block c-hand">c-hand</div>
</div>
 <div class="column">
  <div class="bg-gray docs-block c-move">c-move</div>
 </div>
   <div class="column">
  <div class="bg-gray docs-block c-zoom-in">c-zoom-in</div>
   </div>
  <div class="column">
 <div class="bg-gray docs-block c-zoom-out">c-zoom-out</div>
  </div>
   <div class="column">
   <div class="bg-gray docs-block c-not-allowed">c-not-allowed</div>
   </div>
   <div class="column">
   <div class="bg-gray docs-block c-auto">c-auto</div>
  </div>
  </div>

<!-- display utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- cursor: hand; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-hand"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: move; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-move"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: zoom-in; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-zoom-in"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: zoom-out; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-zoom-out"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: not-allowed; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-not-allowed"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- cursor: auto; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"c-auto"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

      </div>

      <div id="display" class="container">
        <h3 class="s-title"><a href="#display" class="anchor" aria-hidden="true">#</a>Display utilities</h3>
        <div class="docs-note">
          <p>Display utilities are used for display and hidden things.</p>
        </div>

<!-- display utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- display: block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-block"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline-block"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-flex"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-inline-flex"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: none; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-none"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-hide"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: visible; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-visible"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: hidden; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"d-invisible"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- hide text contents --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-hide"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- assistive text for screen reader --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-assistive"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

 
 <div id="divider" class="container">
        <h3 class="s-title"><a href="#divider" class="anchor" aria-hidden="true">#</a>Divider</h3>
        <div class="docs-note">
          <p>A Divider is used for separating elements.</p>
        </div>
        <div class="columns">
          <div class="column">
            <div class="divider"></div>
          </div>
        </div>
        <div class="columns">
          <div class="column">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus.
            <div class="divider text-center" data-content="OR"></div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus.
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <form>
              <div class="form-group">
                <label class="form-label" for="input-example-1">Email</label>
                <input class="form-input" id="input-example-1" placeholder="Email" type="text">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-example-2">Password</label>
                <input class="form-input" id="input-example-2" placeholder="Password" type="password">
              </div>
              <div class="form-group">
                <label class="form-checkbox">
                  <input type="checkbox">
                  <i class="form-icon"></i> Remember me
                </label>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Sign in</button>
              </div>
            </form>
          </div>
          <div class="divider-vert" data-content="OR"></div>
          <div class="column">
            <form>
              <div class="form-group">
                <label class="form-label" for="input-example-3">Email</label>
                <input class="form-input" id="input-example-3" placeholder="Email" type="text">
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block">Sign up</button>
                <button class="btn btn-link btn-block">Learn more</button>
              </div>
            </form>
          </div>
        </div>

<!-- divider utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- divider element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- divider element with text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider text-center"</span> <span class="atn">data-content</span>=<span class="atv">"OR"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- vertical divider element with text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"columns"</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"column"</span>&gt;
    <span class="com">&lt;!-- column content --&gt;</span>
  &lt;<span class="tag">/div</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"divider-vert"</span> <span class="atn">data-content</span>=<span class="atv">"OR"</span>&gt;&lt;<span class="tag">/div</span>&gt;
  &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"column"</span>&gt;
    <span class="com">&lt;!-- column content --&gt;</span>
  &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</code></pre>

 

  <div id="loading" class="container">
   <h3 class="s-title"><a href="#loading" class="anchor" aria-hidden="true">#</a>Loading</h3>
<div class="docs-note">
 <p>Loading indicator is used for loading or updating. Also, you can add the <code>loading</code> class to buttons for loading status.</p>
  </div>
  <div class="columns">
<div class="column col-12 text-center">
  <div class="loading"></div>
  </div>
</div>
  <div class="docs-note">
<p>Add the <code>loading-lg</code> class for large size. </p>
 </div>
 <div class="columns">
 <div class="column col-12 text-center">
 <div class="loading loading-lg"></div>
 </div>
  </div>

<!-- loading -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- loading element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"loading"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"loading loading-lg"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

 

 <div id="position" class="container">
  <h3 class="s-title"><a href="#position" class="anchor" aria-hidden="true">#</a>Position utilities</h3>
 <div class="docs-note">
 <p>Position utilities are used for useful layout and position things, including clearfix, float, position and margin/padding utilities.</p>
</div>

<!-- position utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- clear float --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"clearfix"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- float: left and right --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"float-left"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"float-right"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- position: relative, absolute and fixed --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"relative"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"absolute"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"fixed"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- centered block --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"centered"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- m-1 {margin: 4px;} m-2 {margin: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"m-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"m-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- margin in 4 directions. mt-1 {margin-top: 4px;} mt-2 {margin-top: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mt-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mt-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- mx-1 {margin-left: 4px; margin-right: 4px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mx-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"mx-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"my-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"my-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- p-1 {padding: 4px;} p-2 {padding: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"p-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"p-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- padding in 4 directions. pt-1 {padding-top: 4px;} pt-2 {padding-top: 8px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"pt-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"pt-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- px-1 {padding-left: 4px; padding-right: 4px;} --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"px-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"px-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"py-1"</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"py-2"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

 

 <div id="shapes" class="container">
   <h3 class="s-title"><a href="#shapes" class="anchor" aria-hidden="true">#</a>Shape utilities</h3>
   <div class="docs-note">
   <p>Shape utilities are used for change element shapes.</p>
    </div>
        <div class="columns">
          <div class="column col-6 text-center">
   <div class="bg-primary text-light docs-shape rounded centered">
      rounded
     </div>
    </div>
  <div class="column col-6 text-center">
   <div class="bg-primary text-light docs-shape circle centered">
       circle
  </div>
 </div>
  </div>

<!-- shape utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- rounded element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"rounded"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- circle element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"circle"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

 

 <div id="text" class="container">
<h3 class="s-title"><a href="#text" class="anchor" aria-hidden="true">#</a>Text utilities</h3>
 <div class="docs-note">
 <p>Text utilities are used for text alignment, styles and overflow things.</p>
  </div>

<!-- text utilities -->
<pre class="code" data-lang="HTML"><code><span class="com">&lt;!-- left-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-left"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- center-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-center"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- right-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-right"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- justified text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-justify"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Lowercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-lowercase"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Uppercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-uppercase"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Capitalized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-capitalize"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Normal weight text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-normal"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Bold text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-bold"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Italicized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-italic"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Larger text (120%) --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-large"</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Overflow behavior: display an ellipsis to represent clipped text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-ellipsis"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Overflow behavior: truncate the text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-clip"</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Text may be broken at arbitrary points --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">"text-break"</span>&gt;&lt;<span class="tag">/div</span>&gt;
</code></pre>

