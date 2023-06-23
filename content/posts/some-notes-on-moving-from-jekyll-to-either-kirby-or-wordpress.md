---
date: "2023-03-05 18:56:45"
title: "Some notes on moving from Jekyll to either Kirby or WordPress"
categories: ["web"]
sub: ''
hide-from-twitter: false
twitter-note: "Go more indieweb and enjoy a proper CMS. It’s time to move on, but to  Kirby or WordPress?"
tags: ["WordPress", "Kirby", "Indieweb"]
hide_from_social_media: false
---

I’ve 99% made the decision to move away from Jekyll to either WordPress or [Kirby](https://getkirby.com/) – which explains why I haven’t been posting much recently. I’m currently erring towards Kirby – reasons below.

## Why move from my Jekyll setup?

### Fragility

Jekyll would be fine if I was just writing posts on this laptop, pushing them to a bogstandard host and displaying them without comments or webmentions. But I’m not. I also publish notes and links using a CMS, so that I can publish from anywhere with an internet connection. On top of that, I accept and publish native comments without javascript, and send and accept and display webmentions. Also without javascript.

I’m sure you’ll allow this is all very fucking impressive. But it’s dependent on many things:

* Forestry CMS
* Netlify webmention plugin
* The `jekyll-get-json` Jekyll plugin to display incoming webmentions
* Nelify forms for comment forms
* Airtable to store comments
* An Airtable plugin I wrote (or rather, copied and pasted) which is dependent on two Ruby gems
* Zapier to link Netlify forms and Airtable and send confirmation emails to commenters
* IFTTT to autopost to Mastodon
* Netlify build hooks to fire site builds whenever I like
* Netlify for Github deploys
* Netlify itself
* Github itself
* …and so on

I’m really happy with how this all works, but it’s starting to creak. [Forestry is being sunsetted](../../posts/choosing-a-headless-cms-for-your-simple-static-blog/), `jekyll-get-json` is returning warnings when the site is built and Airtable is moving to a new authentication system. It also has a really annoying API where it’s impossible to return more than 100 results from a table.

I also have a nagging concern that Netlify itself is beginning to struggle – it recently [laid staff off](https://www.teamblind.com/post/Netlify-just-had-a-16-WFR-layoffs-SS3JRke3) and [divested itself of Netlify CMS](https://www.netlify.com/blog/netlify-cms-to-become-decap-cms/).

### It’s a bit like work

My website has been a hobby for years, and it is satisfying when you rig up a system that actually works. Until it gets frustrating. Recently, webmention.app went down (another dependency) due to a [Vercel (another indirect dependency) pricing change](https://remysharp.com/2023/01/30/on-vercel-if-some-of-my-sites-are-down). This meant my outgoing webmentions (and those of several other people) just stopped working.

Thankfully, Netlify offers a [webmention integration](https://www.netlify.com/integrations/community-built/webmentions-build-plugin/) (for how long?) that works a treat. But there’s minimal documentation and it took me a few hours work to get it up and running. This was frustrating more than anything else.

I’m also mindful of [how self-referential this makes my website](https://manuelmoreale.com/website-complexities); often, I’m posting about running a static website that does dynamic things. I always add a _but you’d be better off using WordPress_ – which is, well, true.

### It’s not indieweb

Netlify, Vercel, Github, Airtable… although you could run a simple static site on Jekyll, an FTP client and cheap hosting, the chances are you’re using one of the big providers and Github for deployment. The static/JAMstack world is largely VC-funded, west-coast tech, or owned by Microsoft. It is free, and very convenient, but it’s not indieweb in the same way as running a self-hosted CMS on a small provider is.

## What do I need/want from the new setup?

### Must haves

* A CMS
* A monolithic service, resulting in
* Fewer dependencies, resulting in
* More time to not write about setting up the website

### Would like to haves

* Guaranteed speed and security of static
* Ease of creating themes/listings/templates the way I want them
* Comments
* Webmentions (in and out)
* Cheap (free if possible)
* Autoposting to Mastodon and micro.blog

How to prioritise these? Over the last couple of weeks I’ve been exprimenting with WordPress and Kirby. The options are:

* **Just meeting the must haves.** I think I’d go with WordPress run as a static site. And to do that, I’d use [HardyPress](https://www.hardypress.com/). Partly because it makes it very simple, partly because I could really hack at WordPress because the backend would never be exposed, and partly because it’d cost me €4/month. Downsides: a dependency on HardyPress itself and HardyPress is run on AWS. Theming with WordPress. No comments or webmentions.
* **Full on indieweb blogging: categories, tags, crossposting, comments and webmentions.** This is probably a standard WordPress installation using the indieweb plugins. I have looked into running WordPress statically with the plugins, but there’s no way to do it. If I was using standard WordPress, I’d pay for good hosting, probably [Fused](https://www.fused.com/) at $30/month. Downsides: probably slower, slight concern over security, theming with WordPress. Expensive.
* **Possible crossposting, comments and webmentions with Kirby.** The single thing about Jekyll I would miss most is Liquid, and how easy it makes it to create templates and data types _exactly_ as you want them. The single thing I most dislike about WordPress is its templating, and the sense there’s always something at a level you don’t have control over. Kirby, on the other hand, is direct, flexible and clear. It also uses files instead of a database, so it’s certainly quicker than WordPress, and probably more secure – if only because it’s not used as much. Downsides: I’m not sure how good the comments and webmention plugins are, and they’re not “official”, so possibly more fragile than WordPress’s. Hosting might be more than €4/month. Importing Jekyll posts not as easy as WordPress. £87 one-off license fee.

At the moment, I think it’ll be Kirby. Now to find the time to make the switch. I could do it in stages, just getting a barebones site up and running first.
