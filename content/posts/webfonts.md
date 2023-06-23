---
title: "On webfonts, performance and typography"
date: "2023-03-28 20:31:00"
twitter-note: "You can be quite purist over (not) using webfonts, and sometimes that approach makes sense."
---


I’ve read a couple of posts recently on a perennial favourite subject in the web design world, namely webfonts.

I find all this quite interesting because your attitude to using fonts that aren’t available on your website visitor’s device serves as a cipher for a bunch of other opinions about the web.

On one hand, when we talk about webfonts and _performance_ we really mean a surprising number of other things. Anyone with a low-end device and/or a poor connection is more likely to notice the effects of downloading a set of `woff` files than someone visiting a website on their Macbook from an office. They may even have to pay more for the privilege. In other words, webfonts can affect social accessibility.

Similarly, every request your website envokes on a visitor’s device and every kb downloaded from a server hundreds or thousands of miles away, has some form of impact on the environment as a whole. In other words, we see that _performance_ can serve as a shorthand for _ethical_, which perhaps explains why we can take a somewhat zealous approach to webfonts.

On the other hand – and to be clear, this doesn’t mean _unethical_ – using a third-party font can imply a certain level of taste and craftsmanship, especially if it’s paid-for, rather than ferried in on a copy-and-pasted snippet from Google.

Me? I err toward the purist approach, as I’m more than happy working with the apparent limitations of HTML and the myriad of devices that consume it. I can be as self-righteous as the next man. I will sometimes use a (good quality, natch) freebie, though, and you can [optimise how you serve webfonts from Google](https://csswizardry.com/2020/05/the-fastest-google-fonts/) (or any other third party provider), even maintaining that perfect 100 Lighthouse score.

I did have an instructive half hour or so using a coffee shop wifi and VPN at the weekend. I was trying to read a blog post on a site that normally passes Google core web vitals, and the experience was painful: the fallback fonts disappeared, then the webfonts took ages to appear, shifting the page around as they did so. It was then that I thought is it really worth making this post impossible to read for the sake of some nice looking letters? This is far from my normal experience of the web, but it does happen occasionally; and perhaps it’s right we build web pages just for these occasions. Besides, you can [be inventive with native fonts](https://modernfontstacks.com/).
