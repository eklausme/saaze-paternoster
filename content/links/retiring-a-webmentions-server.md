---
title: "Why I Retired My Webmention Server"
date: "2023-05-08 17:40:00"
link-published: "2023-05-08 09:00:00 +0000"
link-url: "https://brainbaking.com/post/2023/05/why-i-retired-my-webmention-server/"
link-author: "Wouter Groeneveld"
tags: ["Indieweb", "Webmention", "Microformats"]
twitter-note: "Also worth noting that sending webmentions is a pain because of microformats. Some endpoints parse and display mine, others don’t."
is_like: true
---


The mood round is here fairly anti-webmentions at the moment. Using webmention.io remains useful in the same way that Google Analytics can help you pick up who’s referring to your site – _if_ they’re sending webmentions and/or using WordPress, of course. 99% of the time these will come from Mastodon via Bridgy. And yes, there’s more and more depressing spam: viagra and gambling, mainly.

Getting microformat classes to play nicely with all endpoints is difficult. Using classes seems the wrong approach these days anyway – wouldn’t `data-` attributes be more appropriate? – and having to nest correctly only increases the possibility of something going wrong. It’s pretty frustrating. I think I’ve spent enough time messing around with something that should be as simple as adding a few classes to my HTML 🤷‍♂️

