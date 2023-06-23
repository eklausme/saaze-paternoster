---
title: "Some notes on leading (or line height) on websites"
categories: ["web"]
feature: true
date: "2021-08-27 14:10:00 +00:00"
series: microtypography
hide-from-twitter: true
---


Recently I’ve written about how we can make longer, online texts such as blog posts as readable as possible by [getting the measure (or number of words per line) right](/paternoster/posts/getting-measure-right/), and by [scaling the font size](/paternoster/posts/setting-responsive-fonts-sizes-in-CSS/) as the screen gets wider.

In this article I’ll look at another aspect of [micro typography](https://en.wikipedia.org/wiki/Microtypography), namely the <i>leading</i>, or what we refer to in CSS as `line-height`. In this article I’ll use the terms interchangeably.

{% include series-list.html %}

## What is leading?

In one sense, leading is simple to explain. It’s the space between each line of text in prose – when leading increases, that space increases. Leading affects the _feel_ of a paragraph. Take these two examples, where the second image has a more generous leading than the first:

![Two paragraphs of the same text next to each other. The right hand paragraph has more space between lines.](https://thisdaysportion.com/images/leading-7.png "Two paragraphs of the same text next to each other. The right hand paragraph has more space between lines.")
<figcaption><a href='https://fonts.adobe.com/fonts/athelas'>Athelas</a> set with a tight leading on the left and more generously on the right.</figcaption>

Technically speaking, for browsers leading isn’t actually the space _between_ lines. It’s the height of each line (hence `line-height` rather than, say, `line-spacing`).

Within the height of the line, the text itself is given a content area <i>x</i> pixels high, which is determined by the CSS `font-size` property _and_ the font’s own metrics. So you could have a `font-size` of `16px`, a `line-height` of `24px`, and a content area height somewhere in between, depending on how the font has been designed. This will affect how generous the leading _seems_. We’ll discuss this later in the article.

![A diagram showing what a line consists of in a browser.](https://thisdaysportion.com/images/leading-pic.png "A diagram showing what a line consists of in a browser.")
<figcaption>Components of a line of text in a browser. Note the glyph heights in the content area can vary, which can make the line height seem different from font to font. Credit: <a href='https://iamvdo.me/en/blog/css-font-metrics-line-height-and-vertical-align'>Vincent de Oliveira</a>.</figcaption>

For our purposes, all we need to know is that the calculated `line-height` relates to `font-size`, and that different fonts will look different, even with the same settings.

As font-size increases the line height needs to grow. Handily, we can – and should – express `line-height` as a multiple of `font-size`. For example:

```
html {
  font-size: 100%; /* Probably 16px */
}

p {
  font-size: 1rem; /* Probably 16px */
  line-height: 1.5; /* Probably 24px */
}
```

## Deciding on leading

When we’re writing a long form text such as a blog post, we need to consider two things:

- _The main text’s leading_: our paragraphs, lists etc. should have a `line-height` that makes reading comfortable.
- _The title and heading leading_: titles and headings have a smaller `line-height` than paragraphs. This helps make them distinct from the rest of the body copy, and a clearer, single, typographic element.

As with measure, our aim is to make reading as comfortable as possible. Leading affects readability in two ways:

- When the reader reaches the end of a line and sweeps back to the next line, the gap between the lines needs to be small enough so the reader doesn’t have to start reaching down the text, and big enough so they can actually move their eye comfortably.
- While reading, glyphs on adjacent lines should have enough space between them so they don’t clash and create noise.

_As a rule of thumb, body text should have a `line-height` between 1.3 and 1.7 times the `font-size`. Titles and headings should have a `line-height` between 1.1 and 1.25 times the `font-size`_.

Note – these are rough guides. Authors and their readers will have their own preferences. For example, _generally_ I prefer something around the lower range when I’m reading an article on a laptop, say `1.45`, but that can change quite easily. As with all typography, it’s a mixture of art and science.

However, there are a couple of objective factors you should consider:

### The typeface

We know that typefaces vary in their proportions and how browsers calculate their content area height in a line of text. As we’ve seen with measure, the same CSS values can result in very different-looking results. Take this example, where IBM Plex Serif and Athelas are set at the same size with a `1.5` `line-height`. Athelas appears to have a more generous leading.

![IBM Plex Serif and Athelas typefaces side by side.](https://thisdaysportion.com/images/leading-3.png "IBM Plex Serif and Athelas typefaces side by side.")
<figcaption>IBM Plex Serif left and Athelas right.</figcaption>

We often refer to a typeface’s [<i>x height</i>](https://en.wikipedia.org/wiki/X-height) when describing its overall size. The x height is the height of the lower case <i>x</i>. Again, compare the two fonts (and also note how Plex Serif is ‘squarer’ than Athelas, but Athelas’s lines are thicker):

![IBM Plex Serif and Athelas typefaces’ “x” side by side.](https://thisdaysportion.com/images/leading-4.png "IBM Plex Serif and Athelas typefaces’ “x” side by side.")
<figcaption>IBM Plex Serif “x” left and Athelas right.</figcaption>

_Your `line-height` will therefore partly depend on the typeface you use_. The larger the x height and content area, the larger the required `line-height`.

### The measure (or line width)

When we set text we need to consider the effort it takes for our readers to move between lines of text. As lines get wider they need more space to locate the next line.

Conversely, short lines should be set closer together as the sweep back from the end of a line to the next is less pronounced.

Take [Matt Gemmell’s website](https://mattgemmell.com/compressing-your-keyboard/). The maximum width of a blog post pararaph is `750px`. At this width the `line-height` is `1.6`:

![A paragraph from the Matt Gemmell website on a wide screen.](https://thisdaysportion.com/images/leading-5.png "A paragraph from the Matt Gemmell website on a wide screen.")
<figcaption>Matt Gemmell’s website at 750px</figcaption>

But when paragraphs are viewed on a narrower screen, such as a mobile phone, and lines are therefore narrower, the `line-height` is `1.3`:

![A paragraph from the Matt Gemmell website on a mobile phone screen.](https://thisdaysportion.com/images/leading-6.png "A paragraph from the Matt Gemmell website on a mobile phone screen.")
<figcaption>Matt Gemmell’s website on a mobile phone</figcaption>

Unlike when we set `max-width` to determine measure, we should consider the actual width of the line, rather than the number of words it consists of. This is because the effort readers make in moving to the next line is a function of the distance from the end of the current line to the next, not the number of words in the line.

Note, we can’t actually tell how wide a line is. We can only change `line-height` based on the width of the viewport, which is the screen width plus the scrollbar width. As line width is obviously limited by the width of the viewport, the correlation is close enough.

## The CSS

As ever, we should use relative units rather than `px` so we can respect user preferences and make it easier for us to manage the relationship between our various micro typographical elements.

`line-height` is a unique CSS property in that it can take a <i>unitless</i> value. All other proportional properties require some form of unit, such as `%`, `em`, `vh`, `px` etc. It _can_ take a unit, but sometimes it’s useful not to apply one.

By not using a unit we can set a `line-height` that will be inherited and applied across our web pages on all elements _as a multiplier_. This saves a lot of work in making sure everything looks in proportion. Take this example:

```
html {
  font-size: 125%; /* Probably 20px */
}

body {
  line-height: 1.5; /* Unitless! */
}

p {
  font-size: 1rem;
  /*
  Will automatically inherit a x1.5 line height.
  Probably compute to 20px font size
  And 30px line height.
  */
}

blockquote {
  font-size: 0.875rem;
  /*
  Will automatically inherit a x1.5 line height.
  Probably compute to 14px font size
  And 21px line height.
  */
}
```

When we don’t want to use our default `line-height` multiplier (when we are setting headings, for example), we would explicitly set the element’s `line-height` to override our default:

```
html {
  font-size: 125%; /* Probably 20px */
}

body {
  line-height: 1.5;
}

h1 {
  font-size: 2.25rem;

  /*
  Will automatically inherit a x1.5 line height.
  Probably compute to 36px font size
  And 54px line height.
  Which looks wrong!
  So we’ll set its own line height.
  */

  line-height: 1.25; /* Still unitless! */

  /*
  Which will probably compute to 45px
  Which looks just right 👍.
  */
}
```

Finally, just as when we [scale type sizes](/paternoster/posts/setting-responsive-fonts-sizes-in-CSS/), we can use media queries to up our `line-height` as the screen width – and therefore line widths – increase:

```
body {
  line-height: 1.375;
}

@media screen & (min-width: 30em) {
  body {
    line-height: 1.4375;
  }
}

@media screen & (min-width: 30em) {
  body {
    line-height: 1.5;
  }
}
```



## Art and science, trial and error

As with measure, leading is determined by a combination of various more or less objective factors (e.g. typeface proportions and line width) and taste and feel. Furthermore, although we want to make our text as easy to read as possible, our visitors have different tastes and needs, and are generally fairly adaptable, even when horrible combinations of font, measure and leading are thrown at them. Besides, as long as we’re using relative units throughout our CSS, they can modify them pretty easily.

This means you have some freedom when setting your blog’s type. Experiment with real text across a few devices until you hit on the right, readable combination.



