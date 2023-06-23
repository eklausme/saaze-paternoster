---
title: "Decorating minimalism"
date: "2023-06-03 12:00:00"
twitter-note: "Really minimal sites have the added benefit of being easy to decorate – every addition has a clear effect on appearance. A splash of colour, a rule and a serif and you’re away."
tags: ["WebDesign", "Accessibility", "Minimalism"]
draft: false
---


I spent last weekend poking around the outer edges of devices, browsers and websites, trying to find a way to make this site display nicely in as many of those places as possible. Of course, we can’t test every browser and device, but it’s worth trying some outside your everyday laptop or phone. In this case I opted for the Nokia 8110 and my TV’s browser.

Turns out even very simple sites can struggle to work everywhere. While designing for all screen dimensions is doable, [accounting for browser CSS support is a lot more tricky](../../posts/conservative-css/). Before this exercise, I was merrily using a combination of custom and logical properties – both of which are brilliant CSS features – and assuming progressive enhancement would take care of the rest. It didn’t.

I ended up grudgingly dropping logical properties. During my experiments, I discovered the concept of <i>[restricted enhancement](https://seirdy.one/posts/2020/11/23/website-best-practices/)</i>, and I’m broadly following its tenets:

> Restricted enhancement limits all enhancements to those that solve specific accessibility, security, performance, or significant usability problems faced by people besides the author. These  enhancements must be made progressively when possible, with a preference for using older or more widespread features, taking into account  unorthodox user agents. Purely-cosmetic changes should be kept to a  minimum.

So this resulted in a _very_ minimal design: one `sans-serif` typeface and no decoration at all. I _quite_ liked it, but I’m not hardcore enough to not want _some_ decoration.

But there’s a pay-off to [non-designing a website](../../posts/blog-non-design/): decoration is easy, even for someone as visually ungifted as myself. Every deviation from the minimal baseline has a clear and obvious effect. Adding a serif (our trusty Iowan Old Style on Apple devices, a more underused and possibly risky [Calisto](https://en.wikipedia.org/wiki/Calisto_MT) for Windows and an admittedly ugly Droid Serif for Android) lifted the feel immediately, and all it took after that was a bright, contrasting highlight colour and a rule running across the top of the screen.

Visually, I’ve returned to where I was when I started, but functionally the site – should! – be a lot more resilient across more devices and screens. Now I just need to rewrite [the post that started this](../../posts/what-blogs-should-be-viewable-on-any-device/).
