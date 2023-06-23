---
title: "View transitions: an obligatory “am I missing something?” post"
categories: ["web"]
date: "2023-05-24 20:42:00"
twitter-note: "To be honest, I’m a bit underwhelmed by the prospect of smooth  between-web-page transitions coming to browsers soon. But that could just be  me missing the point."
draft: false
---



(**Update**. [Brian](https://ohheybrian.com/) points out that view transitions might be [a big thing when it comes to progressive web apps (PWAs, initialism collectors)](https://fosstodon.org/@brianb/110428761941670888). This makes sense to me in the context of trying to move things away from closed apps to the open web.)

There’s been a lot of [excitement about “view transitions” coming soon to browsers](https://robinrendle.com/notes/view-transitions-api/). This will make it easy to animate transitions between pages, regardless of whether you’re building a Single Page App (SPA) or Multi Page App (MPA, AKA a traditional “website”). This is best demonstrated by [Dave Rupert’s demo](https://daverupert.com/2023/05/getting-started-view-transitions/):

<video height="540" width="960" controls>
	<source src="https://cdn.daverupert.com/posts/2023/view-transitions.mp4" type="video/mp4">
</video>


I have no idea how one would go about creating these animations with javascript, so it’s very cool that you’ll be able to get them up and running in minutes with just a `meta` tag and a few lines of CSS, much like you can set up a website dark mode really easily.

Similarly, you can go ahead and use the code right now, even though it only works in bleeding edge releases of Chrome. Until it’s been implemented you’ll just get the traditional page experience. This is the same “progressive enhancement” approach you can use with [`text-wrap`](https://ishadeed.com/article/css-text-wrap-balance/) (even if it does mean you’ll fail HTML validation if you inline your CSS. So it goes.)

So that’s all good, but I’m a bit… underwhelmed. This seems fairly gimmicky to me, in the same way as being able to style your website scrollbars.

I’m assuming there aren’t the [same accessibility problems](https://ericwbailey.website/published/dont-use-custom-css-scrollbars/) – it’s also cool you can turn transitions off by wrapping them in a `not (prefers-reduced-motion: reduce)` media query. I’ll also assume they don’t cause performance problems on low spec devices, and that there’s a fallback if the target page takes ages to load.

No, my only questions are <i>is this actually that amazing?</i> and <i>what problem does it solve?</i> Have web developers been dreaming of this for years? One of the selling points of SPAs is that they offer “instant” transitions, and this does enable us to achieve the same effect on traditional websites.

Perhaps we’ll see a glut of these animations once browser support ramps up, and then the interest will die down as they become an annoyance. Perhaps a few more art-directed sites will explore how they can be used, but most will continue to simply display a new page when visitors follow links. This doesn’t strike me as a particularly broken way of doing things. But then I could be wrong, and this is how movement between web pages will look in the future. I guess then it could become the default browser behaviour, with no coding required at all.
