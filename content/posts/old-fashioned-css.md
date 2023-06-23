---
date: "2021-08-31 20:26:00"
title: "How to write old-fashioned CSS"
categories: ["web"]
hide-from-twitter: true
---


This site is built on my [Jekyll Tachyons framework](https://github.com/leonp/jekyll-tachyons), which makes it relatively easy for a developer to get a Jekyll site up and running with the [Tachyons atomic CSS framework](https://tachyons.io).

I’ve used Tachyons for about six years now. It’s a brilliant CSS API – <abbr title="Don’t repeat yourself">DRY</abbr>, consistent and easy to understand just by looking at class names. What `.dark-red` does isn’t really open to a huge amount of interpretation. Once you learn the simple notation, building web UI is really quick.

However, Tachyons is probably overkill for my blog. Take spacing. Tachyons provides 14 base `margin` and `padding` classes: `pa, pr, pl, pt, pb, pv, ph, ma, mr, ml, mt, mb, mv` and `mh`. In turn, each of these has seven values (`mv0, pl0, pa1, pa2, m1, m4, mh6, pa5` etc.), each mapping to a `rem` value. And each of those has three additional `breakpoint` modifiers, giving a total of 294 classes.

There are 36 `font-size` classes, and hundreds covering `flex`. The complete set of styles numbers thousands.

I don’t really need that flexibility and range of styles on a one column blog. For example, I only use flex to make sure the logo and site title are aligned centrally, while scaling the HTML `font-size` when the browser viewport hits certain widths takes care of responsive type sizes.

## So how _does_ one go about writing CSS these days?

In the old, pre-Tachyons days, I would have broken pages down into reasonably reusable classes, such as  `.article`, `.article-header`, `.article-body` and `.site-header`, and used these throughout my templates (or layouts, as Jekyll calls them). I think that’s still doable, but I know that repeating `margin-bottom: 1.5rem` would drive me round the bend.

So one approach could be to use custom properties and refer to these in the HTML. Something like:

```
CSS:

:root {
--a-line: 1.5rem;
--mb-full: var(--a-line);
--mb-third: calc(var(--a-line) / 3);
--mb-half: calc(var(--a-line) / 2);
--mb-double: calc(var(--a-line) * 2);
}

HTML:

.article-header-title {
  margin-bottom: var(--mb-half);
}

.article-header-meta {
  margin-top: var(--mb-half);
}
```

Whereby I’ll still be repeating `margin-bottom: [something]` but at least it’ll be a consistent value that I don’t have to remember. In a way, this is just creating a smaller version of Tachyons.

Still seems overly verbose and repetitive, though. I have had a different – and in a sense ultra-traditional – method in mind for a while now, outlined in this getting on for five years old [article by Heydon Pickering](https://www.smashingmagazine.com/2016/11/css-inheritance-cascade-global-scope-new-old-worst-best-friends/):

> I’m going to revisit inheritance, the cascade and scope here with  respect to modular interface design. I aim to show you how to leverage these features so that your CSS code becomes more concise and self-regulating, and your interface more easily extensible.

This just _seems_ right, exciting, [going with the grain](https://frankchimero.com/blog/2015/the-webs-grain/) stuff, and I think I’m going to give it a go when I next get a few hours to tinker with this site.
