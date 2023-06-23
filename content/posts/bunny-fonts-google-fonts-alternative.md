---
title: "Bunny Fonts: an apparently GDPR-compliant, privacy-respecting alternative to Google Fonts"
date: "2022-06-25 19:22:00"
fmexcerpt: "We need an easy-to-use, privacy-respecting hosted font service. Bunny Fonts looks great."
---




You maybe read about how [a website was fined a small sum](https://www.theregister.com/2022/01/31/website_fine_google_fonts_gdpr/) because it served a font from Google. It’s quite possible you’re using [Google Fonts](https://fonts.google.com) on your own website (and firstly – congratulations on running your own website), so this may induce a mild panic.

It’s important to note a plaintiff made a specific complaint about the website in question, and if the website had gained permission to pass on their IP address (through an appropriately-worded consent dialogue), there wouldn’t have been a problem. It’s unlikely you’re about to cough up a hundred quid fine any time soon, especially in the glorious, sunlit uplands of an [intensely-relaxed-over-regulation post-Brexit UK](https://webdevlaw.uk/2022/06/17/data-reform-bill-cookie-popups/).

Still, there’s no reason for Google to collect IP addresses. This has always been the problem with the service. It’s ridiculously easy to use, providing free, high quality fonts. Surely there’s a cost somewhere? It’s normally data – and not even ours, but that of the people who have innocently visited our website.

The best solution is to host fonts yourself. Assuming you’re not on a mission to hoover up your visitors’ data, there’s no privacy problem. You also make your website more resilient, removing an additional point where it can break.

However, self-hosting takes some knowledge, or your CMS may make it tricky. There are a few hosted font services out there, and today I came across [Bunny Fonts](https://fonts.bunny.net/), which claims to be [fully GDPR compliant](https://fonts.bunny.net/about). Perfect!

## Using Bunny Fonts

While the website isn’t as friendly as Google’s, it’s easy enough to use. The process of getting fonts on your site is the same – copy the HTML, paste it into your website `head` and refer to the family in your CSS.

What’s even better is that it uses the same API as Google. This means you _should_ be able to edit your existing code by replacing any instance of `fonts.googleapis.com` with `fonts.bunny.net` – [including any parameters you pass through](https://github.com/leonp/thisdaysportion/blob/master/_includes/external-fonts.html), such as `?display=swap`. I tried this with [STIX Two Text](https://fonts.bunny.net/family/stix-two-text), and it worked without a hitch. I even maintained a 100 [web page speed test score](https://pagespeed.web.dev/report?url=https%3A%2F%2Fwww.thisdaysportion.com%2F). It’s really impressive.

## A free, privacy-friendly font hosting service. What’s not to like?

Indeed – I like Bunny Fonts, and I’ll look to use it instead of Google. It publishes clear [Privacy](https://bunny.net/privacy) and [GDPR](https://bunny.net/gdpr) pages, and is based in the EU.

My only concern is the same I have with _any_ private, for-profit company and privacy on the web: we’re relying on individual integrity. It’s the same with DuckDuckGo. Despite the odd €100 fine, enforcement is uncommon in the private sector. While I doubt Bunny is  lying or making misleading data tracking and collection claims, the devil is always in the detail. We at least _know_ Google and how godawful it is.

