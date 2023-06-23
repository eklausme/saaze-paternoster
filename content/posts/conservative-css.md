---
title: "To make your website viewable on any device you’ll have to be conservative with your CSS"
tags: ["WebDesign", "Accessibility"]
date: "2023-05-28 16:39:00"
twitter-note: "Even simple sites can break when they encounter an old browser. Lots of devices let you surf the web, but what is the browser built on and when does it get updated?"
---


In [my last article](../../posts/what-blogs-should-be-viewable-on-any-device/) I encouraged us to make sure our simple blogs were viewable on _any_ device. We can use Firefox’s Responsive Design Mode to emulate screen dimensions and network conditions, but not anything else. The best approach is to therefore test on a real device if we want to get a true idea of how it handles our site.

My Samsung TV has a web browser. <i>Good</i>, I thought, I can see how <cite>This day’s portion</cite> renders in the wild. The browser looks a bit like Chrome, which is encouraging, but actually using it was… bad.

![A TV with a browser displaying a web page which doesn’t seem to be styled much.](https://thisdaysportion.com/images/samsung-browser.jpg "A TV with a browser displaying a web page which doesn’t seem to be styled much.")
<figcaption>What this site looks like this on the Samsung TV browser.</figcaption>

We can infer this browser doesn’t support: logical properties (e.g. `margin-inline`), custom properties (e.g. `--spacer-3: 1rem`), `vw`, `column-gap` with flexbox or `clamp`. This isn’t surprising as it’s hard to see when we can update these browsers – it just about _works_, but it’s not very readable. Most of these I can work around – perhaps through using grid instead of flexbox – or I can progressively fall back when the CSS declaration value isn’t understood. If the property isn’t understood I’ll have to change tack.

This is a shame. Logical properties make your website language agnostic and therefore more accessible. Shows that however “pure” you’re trying to be, you’ll face tradeoffs.

