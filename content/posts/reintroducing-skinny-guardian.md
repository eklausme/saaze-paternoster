---
title: "(Re)introducing Skinny Guardian, a fast, minimal version of The Guardian"
date: "2022-08-27 19:40:00"
fmexcerpt: "My website that grabs the 50 most recent Guardian articles three times a day and displays them as a simple list. No pop-overs or javascript and articles styled for phones."
---


[Skinny Guardian](https://www.skinnyguardian.xyz) is a minimal website that lists the 50 most recent Guardian articles three times a day (roughly around breakfast, lunch and at 5pm: it’s traditional in that way). It’s fast, mobile-first and strips out extraneous content and styling. There are no pop-overs or cookie dialogues (because there are no cookies).

I first built Skinny Guardian a few years back. Over the last week or so I’ve redesigned it.

## Why?

Although The Guardian loads quickly enough and employs a smart layout, it’s still, like 99% of commercial sites, a pain in the arse for several reasons:

- It nags you with popover cookie consent and “Support us” dialogues
- It loads lots of tracking javascript (from Google, Twitter, Permutive and Amazon ads)
- It loads lots of user behaviour tracking javascript.
- Its javascript weighs in at around 4MB on the home page.
- It can be [slow to load on lower spec devices on slower networks](https://pagespeed.web.dev/report?url=https%3A%2F%2Fwww.theguardian.com%2Fuk), despite being better designed and engineered than most news websites (check out the performance score, although it does pass Google’s Core Web Vitals)
- It can be hard to simply scroll through articles to find something you like

[Skinny Guardian gets round these problems](https://pagespeed.web.dev/report?url=https%3A%2F%2Fwww.skinnyguardian.xyz%2F) by:

- Using no javascript at all: no ads and no analytics
- Serving a pre-compiled, completely static site just three times a day
- Using a mobile first design that just lists articles on its home page
- Lazy loading images 6-50 on the home page

Compare the Guardian and Skinny Guardian home pages:

![The Guardian home page on a phone is completely obscured by a popover asking for donations.](https://thisdaysportion.com/images/guardian-home-popover.jpg "The Guardian home page on a phone is completely obscured by a popover asking for donations.")

![Skinny Guardian home page showing 3 articles and no distraction.](https://thisdaysportion.com/images/sg-home.jpg "Skinny Guardian home page showing 3 articles and no distraction.")
<figcaption>Screenshots of The Guardian and Skinny Guardian on an iPhone SE (2020)</figcaption>

## How

The Guardian provides an [excellent, open API](https://open-platform.theguardian.com/), which Jekyll uses to grab the 50 most recent articles at build time. They’re then converted to flat, static html.

I’m using Netlify for hosting, which means builds, Github integration, a CDN and a build hook URL which I can automatically post to three times a day using [IFTTT](https://ifttt.com/). It’s all free.

## Who’s it for?

Anyone who wants to browse The Guardian for something to read. I use it a lot: in the morning I’ll open it with my RSS feeds, sometimes over lunch. I could see it being useful on a commute (if we still commuted).

It was originally inspired by [Evening Edition](https://www.niemanlab.org/2013/07/evening-edition-looks-to-build-beyond-its-simple-model/) and [Today’s Guardian](https://guardian.gyford.com/), both attempts to provide an online news experience free of the constraints of an antagonistic commercial model. The Guardian has improved a lot over the last few years, but there’s still room for experimentation.

## Lastly

I don’t like the name Skinny Guardian. When I first built this site – in 2017-ish – it seemed fine. Not so much now. I might change the URL.

Also, I appreciate the irony of presenting The Guardian sans “Please donate” popovers when user subscriptions are a source of its income. I’ve therefore added a link to its donate page in the site footer.

Anyway, try it out: [Skinny Guardian](https://www.skinnyguardian.xyz).















