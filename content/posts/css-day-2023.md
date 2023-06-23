---
title: "9 Apr is CSS Naked Day"
categories: ["web"]
date: "2023-04-09 10:35:32"
twitter-note: "It’s always worth checking your site makes sense without CSS…"
---


It’s that time of year when we take off our site’s CSS. No, it’s not broken: this is what my site looks like when I don’t apply any styles at all and [9 Apr was CSS Naked Day](https://css-naked-day.github.io/2023.html).

![An unstyled HTML page.](https://thisdaysportion.com/images/naked-2023.jpg "An unstyled HTML page.")
<figcaption>Unstyled HTML still has dark and light modes.</figcaption>


It’s always a worthwhile exercise as your site should make sense with no CSS. After all, it’s how a screen reader and a bot understand what you’ve written. This year there weren’t too many unpleasant surprises, although I did realise that if you are going to create your own HTML elements they’ll display inline by default. They’ll also need some “default” HTML around them to make sense.

Beyond that, I hide my webmention section with CSS. I knocked it into shape with some judicious use of `ul`s. All good now, and I’ve shaved about 10s off the build time and 90% from the home page’s weight <span role="img" aria-label="Thumbs up">👍</span>.
