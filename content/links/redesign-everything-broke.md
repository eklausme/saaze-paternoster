---
date: "2021-08-11 19:32:27"
title: "Redesign: Everything Broke"
link-published: "2021-08-11 15:00:00 +0000"
link-url: "https://www.robinrendle.com/notes/2021-08-11-redesign-everything-broke/"
link-author: "Robin Rendle"
hide-from-twitter: false
is_reply: false
is_like: false
---


Oh my, this sounds a nightmare. [Robin Rendle on changing static site generator](https://www.robinrendle.com/notes/2021-08-11-redesign-everything-broke/), from 11ty to Astro.

> I’m sure this will be fixed eventually but it means I have to _cautiously_ \[my emphasis\] make any change, no matter how small. Change the markup, watch the command line. Change the font, watch the command line; because the slightest thing might break… This broke my RSS feed and made it look like I had a very productive evening of blogging.

I can confirm the RSS problem when I suddenly had 300+ new Robin Rendle posts show up in NetNewsWire.

[Astro boasts that it outputs static HTML and CSS](https://astro.build/blog/introducing-astro), which to me seems a fairly self-evident aim of a static site generator. I do scratch my head when I read:

> In Astro, you compose your website using UI components from your favorite JavaScript web framework (React, Svelte, Vue, etc). Astro renders your entire site to static HTML during the build.

Because this seems a strange approach to building what is at the end of the day a collection of static pages. How many “UI components” does that require?

This is not a criticism of Robin – it’s up to you how you build your website; the same drive to try the new thing was behind my move from WordPress to Jekyll in 2013.

True, I’m not a professional web developer using something like Typescript on a daily basis, but I don’t understand why you would use React, Svelte etc. to build non-interactive pages, rather than a templating language such as Liquid or a CMS like WordPress.
