---
title: typo
published: true
private: true
taxonomy:
    category:
        - test
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