---
title: "Minimal and usable"
twitter-note: "On the tension between minimalism and making a site usable."
date: "2023-04-16 16:16:00"
categories: ["web"]
tags: ["minimalism", "accessibility"]
---


Avid readers will be aware that I change the look of my site a lot.

I wouldn’t go as far as calling it <i>redesigning</i> because the basics remain the same: one column, little decoration, a handful of typefaces. The structure is stable. I may remove comments and webmentions, or implement them differently, but that doesn’t change the appearance much.

I’m often trying to resolve a tension between making it look as minimal as possible while keeping it usable and accessible. This normally plays out in three areas.

## Colour, noise and links

Minimal websites often eschew using colour at all, instead opting for a palette of black, white and gray. Additionally, contrast is muted: text may be a mid-gray on white, and links a pale colour that doesn’t contrast with the surrounding text. Underlines are often removed, or made a pale colour.

All of these approaches run the risk of making the site inaccessible to anyone experiencing a visual impairment. In fact, for anyone at all. We have an agreed set of standards for contrast, and a set of best practices for styling links:

- Text and background should achieve [a certain contrast ratio](https://webaim.org/resources/contrastchecker/)
- [Link text should contrast not only with the background](https://contrast-triangle.com/), but also with the surrounding text
- Links should be underlined (except perhaps in certain circumstances where the text’s purpose is self-evident; in a navigation menu, for example). Talking of which…

## Navigation

Minimalism often takes a hardline “content-first” approach, where ancillary page elements such as site navigation are moved from their conventional position, or even removed altogether.

This doesn’t necssarily make a page inaccessible to a screen reader. For example, there’s no reason why a navigation menu has to be the first element in a document rather than placed in the footer, especially if the designer has provided a skip link to it. In fact, you could argue this is more accessible, as the content is the first thing the reader will naturally encounter.

Similarly, removing all navigation items beyond a link to a home page that provides a means of navigating the whole site is fine as well. That’s why home pages are named `index.html` – it’s a natural enough way of organising a collection of documents.

It’s more a question of muscle memory, convention and convenience. _Most_ websites have employed a navigation bar at the top of the page that contains a link to the home page on the lefthand side. The menu normally contains links to the main sections of the site. When we use this design pattern, we’re taking advantage of this convention and giving our visitors very little to think about.

I was tempted this time round to place the navigation at the bottom of the page and fix it there, much like [Chris Butler](https://www.chrbutler.com/2023-04-15) has done. I opted not to as I naturally kept reaching for the top left of the screen whenever I wanted to head back to the home page. I’m also unsure about fixed navigation bars. What happens if your menu extends beyond a single line on a phone?

Having said that, Chris’s navigation makes sense, and perhaps the extra cognitive work is actually quite low. The pay off is a really nice minimal feel to the site, especially when coupled with the monospace typeface. Furthermore, the article comes before everything else, and that’s why you’re on the site.

## Site features

If your blog does more than display articles – if it has comments and webmentions, for example – you run the risk of creating noise. Comment lists can be difficult. They’re fussy, often consisting of an author image, title, prose and a permalink, and they can extend way down the page, making scrolling more onerous. You can shunt them all behind a `details` and `summary`, but you then run the risk of simply hiding them.

There are of course some very good reasons for not adding things like comments to your website, and perhaps the distraction they cause is one of them. But I like them enough not to want to remove them.

## I find this balance difficult

I’m a big fan of minimal design, and appreciate how difficult it is to get right. Putting more things on a page can hide a multitide of sins: remove them, and you need to make sure what remains is perfect. I guess that’s why I’m always tinkering with this site – I just can’t quite get it.



