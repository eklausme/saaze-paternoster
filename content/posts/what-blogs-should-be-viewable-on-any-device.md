---
title: "What blogs should be: Viewable on any device, in any context"
date: "2023-05-27 19:47:00"
categories: ["web"]
tags: ["WebDesign", "Accessibility"]
twitter-note: "Or: introducing the does it render on a Nokia 8110? test"
draft: false
---


It makes zero sense to design a blog that can’t be read on any device, but you still find the odd site that has been [designed for a desktop](https://www.twtd.co.uk/) monitor only and requires some form of adjustment to read on a phone, most likely rotating the screen into landscape mode. And even then the text, links and buttons will be too small, and you’ll be pinching and zooming. Hard to believe how common this experience was a few years back.

It’s still worth testing your design on a range of devices, or using something like Firefox’s [Responsive Design Mode](https://firefox-source-docs.mozilla.org/devtools-user/responsive_design_mode/) to see how it fits on those really small screens, such as a [Nokia 8110](https://www.nokia.com/phones/en_int/nokia-8110-4g?sku=16ARGYW1A09). Better still, try and load your site on an 8110.

(Note: Responsive Design Mode can only emulate two things about a device and browsing context: the screen dimensions and the network speed. It doesn’t take into account the browser and its CSS and javascript capabilities. Using a real device is the best approach.)

Why? Well, you never know what device someone is using, or the context in which they’re using it. The 8110 is probably the lowest-spec 4G device that will connect to your website, but your visitor could be using an e-reader or a cheap gaming device which has wifi access and a weird browser. Perhaps they’re borrowing someone else’s phone or their main phone has broken. The point is that just because you’re writing this post at home on a Macbook Pro with a beautiful high-definition display, it doesn’t mean your readers are. If you can get your site to play nicely on the 8110, the chances are it’ll render well on any device, wherever your reader is.

What does this mean for your blog’s design? In my case, I’ll generally opt for a single column because that’s all a blog needs and it works as is on any device. I’ll tweak a few settings, such as the picture in the navbar so that it allows enough room for all the navigation menu items without wrapping, even on a 240px wide screen. The base font size is relatively small up until a `20em` breakpoint, so that you get 4-6 words per line on the 8110. Similarly, the `line-height` is quite tight within the same screen width boundaries.

![An article on this site on a Nokia 8110. The navbar fits on 1 line and there are 4-6 words on each line.](https://thisdaysportion.com/images/nokia-8110.jpg "An article on this site on a Nokia 8110. The navbar fits on 1 line and there are 4-6 words on each line.")
<figcaption>A blog post in Firefox’s Responsive Design Mode set to a Nokia 8110’s screen dimensions.</figcaption>

But that’s all refinement. The real test is whether your site works on an 8110 _over a GPRS connection_. I’ll cover that in a post about speed.

## But a lot of your readers are using a desktop, so what about them?

Targeting the 8110 makes your site resilient, but you want to bear in mind the no doubt large proportion of your readers using a desktop monitor. A narrow column of text surrounded by a sea of whitespace [doesn’t always make for a great reading experience](https://fosstodon.org/@mobiuscog/110445664253146889). While I invariably resize my browser window on my work desktop monitor, you can’t assume that’s what everyone does.

If you want to retain your single column design, there are a couple of options (at least):

- Use different background colours for your article and website background
- Add a widescreen media query that ups the base `font-size` in relation to the screen width (perhaps using `clamp`). I’m experimenting with `html {font-size: clamp(137.5%, 2.2vw, 200%);` wrapped in a `@media screen and (min-width: 100em)` query, while upping the [measure](../../posts/getting-measure-right/) and [leading](../../posts/line-height-leading-website-css/).

It’s worth remembering that building for low end, small devices before scaling up to bigger screens means that your site is most likely to just work, regardless of what readers throw at it.

