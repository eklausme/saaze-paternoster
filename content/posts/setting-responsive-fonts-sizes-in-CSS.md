---
title: "Setting responsive font sizes in CSS"
categories: ["web"]
feature: true
series: microtypography
date: "2021-08-23 19:59 +00:00"
hide-from-twitter: true
---


In an ideal world, we wouldn’t have to tell browsers how big we want our fonts to be. Instead, type would just look right on whichever device we were using.

However, because of browser history and the existence of millions of fonts with different dimensions, it’s rare we’ll not want to alter the browser default.

There are several approaches to scaling fonts. Here’s how I go about it.

{% include series-list.html %}

## What we want to achieve

Two things:

### 1. Respect user settings

_Users will sometimes want to change the font size for their own purposes_. This may be due to environmental factors, such as looking at a website on a TV screen from a couch a few metres away, a visual impairment (such as plain deteriorating eyesight as we age) or even just taste.

Whatever the reason, altering the font size should work up to a scale of around 300% at least. Note that some users change their browser’s base font size in its settings, while others do this on an ad hoc basis, by pressing `Cmd/Ctrl` and `+` or `-`.

### 2. Scale up our font size for wider viewports

As the viewport becomes wider we’ll probably want to increase the font size. There are a couple of reasons for this.

Firstly, devices offering wider viewports, such as laptops or a PC connected to a monitor, allow us to read the text from further away. The further we get from the screen, the bigger the text needs to be.

Note we can’t actually tell what _type_ of device (mobile, laptop, TV screen, projector etc.) our users are reading with. We can only know how wide the viewport is.

Secondly, when we have more pixels available we have the luxury of being able to increase our type size in order to make reading easier.

If you can, test your settings on different devices to at least get a sense of how your fonts look in the real world. [As with measure](/paternoster/posts/getting-measure-right/), this is a mixture of art, science and trial and error.

## The CSS

### 1. Set your HTML font size using a %. For example:

```
html {
  font-size: 118.75%;
  /*
  This will probably compute to 19px
  */
}
```

What we’re saying here is that we’d like the browser to scale up the `font-size` 118.75%. Why that weird number? Well, browsers have a default font size of 16 pixels, and 118.75% of 16 works out at 19 pixels.

For reference, here are some other % and pixel values:

<table>
  <tr>
    <th>%</th>
    <th>Pixels</th>
  </tr>
  <tr><td>106.75</td><td>17</td></tr>
  <tr><td>112.5</td><td>18</td></tr>
  <tr><td>118.75</td><td>19</td></tr>
  <tr><td>125</td><td>20</td></tr>
</table>

As it stands, our website will scale _all_ text by 118.75%, regardless of whether you’re viewing your site on an old mobile phone or a modern monitor. This may well be OK – test on a few screens.

If you feel you need something bigger for wider screens, you’ll need to start using media queries.

### 2. Use media queries to set larger font sizes on wider screens

We can tell our browser to scale our text again whenever the viewport (including the width of the scrollbar) reaches a certain width:

```
html {
  font-size: 118.75%;
  /*
  This will probably compute to 19px
  */
}

@media screen & (min-width: 30em) {
  /*
  When the viewport + scrollbar reaches 30x16 = 480px
  */

  html {
    font-size: 125%;
  }
  /*
  This will probably compute to 20px
  */
}

@media screen & (min-width: 60em) {
  /*
  When the viewport + scrollbar reaches 60x16 = 960px
  */

  html {
    font-size: 150%;
  }
  /*
  This will probably compute to 24px
  */
}
```

This time we’re saying: make the default `font-size` `19px`, then, when the screen width reaches `30em`, make it `20px`. Finally, when it reaches `60em`, make it `24px`.

### (A note on media query width units)

We use <code>em</code>s to express our width ranges because they provide the most consistent results across browsers.

In this case, <code>1em</code> is equivalent to 1 times the <em>browser</em>’s base font size, not your website’s. Unless the user has changed the browser base font size in its settings, <code>1em</code> will equal <code>16px</code>, whatever you've set your <code>html</code> font size to.

### 3. Use `rem` to size type

`rem` (<i>relative em</i>) units make sizing elements relatively easy. They work by multiplying your web page’s base `font-size`, which is why we set our `html` `font-size` rather than its `body`. `1rem` equates to 100%, `1.25rem` to 125%, `3rem` to 300%, and so forth.

Take our above example. Body copy elements such as `p` and `li` automatically have a `font-size` of `1 rem` of our `html` base `font-size`. By default this will be `19px`, scaling up to `20px` and `24px`.

We can then set the size of other elements using `rem` units and calculate how many pixels that will equate to:

```
h1 {
  font-size: 2rem;
  /*
  Will probably compute to 38px
  Then at 30em it will compute to 40px
  Then at 60em it will compute to 48px
  */
}

h2 {
  font-size: 1.5rem;
  /*
  Will probably compute to 28.5px
  Then at 30em it will compute to 30px
  Then at 60em it will compute to 36px
  */
}

h3 {
  font-size: 1.25rem;
  /*
  Will probably compute to 23.75px
  Then at 30em it will compute to 25px
  Then at 60em it will compute to 30px
  */
}
```

### And finally, on (not) using CSS clamp

Wouldn’t it be great if we could just set our `font-size` to a proportion of the screen width? Something like `font-size = 2.5% of the viewport width`. That way we could get rid of all these verbose media queries.

Well, we can – nearly. Take this CSS:

```
html {
  font-size: clamp(118.75%, 2.2vw, 131.25%);
}
```

This says:

- Set the minimum `font-size` to `118.75%` of the browser default (probably 19px)
- Set the maximum `font-size` to `131.25%` of the browser default (probably 21px)
- Between these ranges, set the font-size to 2.2% of the viewport width. So at `960px` this would compute to `21.12px` (or whatever your broswer rounds that to).

The only reason not to do this is because [it can make user resizing unpredictable](https://adrianroselli.com/2019/12/responsive-type-and-zoom.html) <span role="img">🤷🏻‍♂️</span>.

