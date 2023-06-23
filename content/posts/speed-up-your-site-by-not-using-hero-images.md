---
title: "Make your website quicker and improve UX by not placing an image at the top of the home page"
categories: ["web"]
date: "2022-04-03 15:35:00"
meta-description: "Large, above the fold images make your page feel slow by increasing the largest contentful paint. Consider using a text-based alternative."
---


I’ve been tweaking this site to make sure it loads quickly. At the time of writing it scores 100 when you run it through the [Google PageSpeed](https://pagespeed.web.dev/report?url=https%3A%2F%2Fwww.thisdaysportion.com%2F) site – [as long as there isn’t a (Google) YouTube video on the page](/paternoster/notes/youtube-will-ruin-your-pagespeed-score). Add some Google Fonts, and that’ll shave off a few points as well.

This is all in preparation for when I start a new job at the end of May managing a university website. In the interview I was asked about page speed, which I took as a good sign. To put this in context, when someone visits the Suffolk Libraries website, they’re more likely to be using a mobile than any other device. As I’ll be working for a university, I assume the proportion of mobile users will be even higher. I therefore want the website strategy to focus on a genuine “mobile first” approach, and a major part of that will be around speed.

Harry Roberts recently posted some [advice on improving the (clumsily named) Largest Contentful Paint (LCP) metric](https://csswizardry.com/2022/03/optimising-largest-contentful-paint/). Put simply, this measures how quickly the visible part of a page takes to load:

> …The Largest Contentful Paint (LCP) metric reports the render time of the largest [image or text block](https://web.dev/lcp/#what-elements-are-considered) visible within the viewport, relative to when the page [first started loading](https://w3c.github.io/hr-time/#timeorigin-attribute). <cite>[Largest Contentful Paint](https://web.dev/lcp/)</cite>

By <q>visible within the viewport</q> we mean the content a visitor sees before they need to scroll. It’s also known as anything “above the fold”, a term borrowed from the print world. It’s a hard-to-identify area because web pages can be viewed through an infinite number of different screens. For example, here’s the same page on two simulated phones (made using Firefox’s responsive design mode):

![A web page screenshot which includes a bit of an image of the band Kraftwerk.](https://thisdaysportion.com/images/endless-iphone.jpg "A web page screenshot which includes a bit of an image of the band Kraftwerk.")

![A web page screenshot which includes a bit of an image of the band Kraftwerk.](https://thisdaysportion.com/images/endless-nokia.jpg "A web page screenshot which includes a bit of an image of the band Kraftwerk.")
<figcaption>Screenshots of a web page viewed on an iPhone 8 and a Nokia feature phone. In the iPhone 8 example, LCP will measure how long it takes to load the image of the band Kraftwerk as it appears above the fold.</figcaption>

Assuming you’ve decided where the fold occurs, you’ll want to make sure anything appearing above it loads quickly. If it’s an image – and it probably is if you’re working on any corporate site – that might include serving an appropriately sized asset, using a compressed file format such as `webp` and minimising it as much as possible.

Harry makes an interesting, if obvious suggestion:

> This isn’t going to work for a lot, if not most, sites. But the best way to get a fast LCP is to ensure that your LCP is text-based… That’s it. As simple as that. If possible, avoid image-based LCP candidates and opt instead for textual LCPs.
> The chances are, however, that won’t work for you.

In other words, rather than reaching for a hero image, carousel or, worse still, video, try another design technique. A block of text is _always_ going to be a lot quicker to load than even the smallest, most-minimised image. Using text will keep your LCP next to zero.

And here we enter an interesting area. Website strategies normally balance a range of sometimes contradictory factors. On one hand, we have experiential considerations, such as speed and accessibility. On the other, the more traditional marketing concepts of brand and tone, which may encourage the use of imagery. Add often fuzzy notions of people being somehow “visual” by nature, and “above the fold” becomes a contentious area.

This is not to say “don’t use images”. On the contrary, a good photo of real people doing real things in a real place [quickly conveys important information to website visitors](https://www.nngroup.com/articles/photos-as-web-content/), and builds trust. This organisation says it does x and y, and is z, and here are the photos to prove it.

But consider when and how these images are used. A [lazy loaded](https://web.dev/lazy-loading-images/), informative image placed within the main text is going to provide a more useful experience than a carousel of stock photos placed above the fold, especially on an old mobile with a patchy 3G reception.
