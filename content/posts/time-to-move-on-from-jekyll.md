---
date: "2022-06-03 14:35:02"
title: "Time to move on from Jekyll"
categories: ["web"]
sub: I’m finding it harder and harder to get Jekyll working on new PCs, so it’s time  to move to a new CMS. But which one?
hide-from-twitter: false
---

As the title says… I’ve failed to compile my website on the last two PCs I’ve attempted. It _is_ still working on my old laptop, but that’s about to celebrate its seventh birthday. Thankfully, it’s still going strong (the 2015-era Macbook Pro is the perfect laptop, after all), but I need to be able to create my website on any PC.

As Florens argued, [SSGs aren’t really simple in the slightest](https://fvsch.com/static-site-generators) – they’re “tools made for developers by developers”. While I would count myself a half-decent _Jekyll_ developer (which means I’m OK with HTML, CSS, the Liquid templating language and the concept of Bundler and Ruby gems), I don’t know the first thing about Ruby itself, which is what Jekyll is built on. There’s only so far Googling command line error messages will get you. So, I’ve dutifully [raised a ticket for the latest problem](https://github.com/rubygems/rubygems/issues/5598) and resolved to move on.

What to choose, though? Bearing in mind the problems I’ve had with Jekyll – and what I like about it – it needs to be:

* either dependency-free or dependably dependant on something stable and relatively “simple” like PHP
* quick to compile a site (if it needs to compile at all)
* relatively easy to style and control what it outputs
* cheap to host
* fast and secure
* (possibly) able to handle some of the features I’ve wrangled out of Jekyll, such as comments and webmentions
* able to import Markdown posts from Jekyll

I _think_ that leaves me with three options:

* **Hugo**. Yes, it’s another SSG. But it has no dependencies and, unlike Jekyll, it compiles instantly. Downsides: I don’t know if I’d be able to get comments and webmentions working, and I hated its templating language and general fussiness the first time I used it.
* **WordPress.** A return to my 2008 blogging roots! The good – it works anywhere with PHP and deals with any dependencies. Millions of features – brilliant comments out of the box and a webmention plugin. Solid RSS citizen. A proper visual editor that you can use anywhere with a web browser. I still kind of know how it works, I think. The downsides: Gutenberg and blocks. Getting it to output _exactly_ what I want is difficult – there’s an extra layer between intention and the site itself; something unknowable. It’s slower than a static site and a lot more hackable. I could run it locally and generate a static site, though…
* **Kirby.** A sort of lightweight WordPress, perhaps? It enjoys the same PHP advantages, and I really like the editor. It’s the system I know least of all, but it has good documentation and seems a lot clearer then WordPress. A flat file CMS, so not sure how it would (or could) handle comments. From memory, deals in Markdown files.

I think that whatever CMS I choose, importing my 700-odd posts, links and notes will prove a bracing challenge. I don’t really have the time for a big “project”, so I expect this will be done in stages – I might even have to use a theme template to start with :-(

Anyway – any ideas or thoughts gratefully received.
