---
date: "2022-01-10 12:30:01"
title: "The only thing stopping me from using WordPress is the lack of a truly barebones, unopinionated parent theme"
categories: ["web"]
sub: ''
hide-from-twitter: false
---

I’ve been toying with the idea of moving this site back to WordPress for a while now. There are a few reasons for taking such a seemingly retrograde step, including a mature, available-anywhere CMS and plugins to handle things like Twitter, micro.blog and Pocket integration, and webmentions.

I’d probably still publish a static site – via [Hardypress](https://www.hardypress.com/) or similar – as that allows for some of the basic, dynamic functionality I’ve managed to create in Jekyll – namely, comments and webmentions, while using the WordPress CMS and its plugins. And I keep the benefits of static – speed, resilience and security.

The problem I never seem to overcome – and it’s a fairly big one – is building a WordPress theme. I simply don’t have the time to learn the system to the degree I’d be confident I’d created something stable and secure (although I guess that’s not so much of a problem if you’re decoupling the CMS from the static site you end up serving).

Jekyll’s use of [Liquid]( "https://shopify.github.io/liquid/") is elegant and surprisingly powerful. It’s simpler than many static site generators’ (SSG) templating engines (especially Hugo’s), and much more so compared to WordPress’s layouts, functions, hooks and actions. I understand complexity is necessary when you’re not pre-compiling a website but, as I say, it’s not something I have the time to learn properly.

What’s lacking for me is a barebones parent theme I can simply style with a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/). The problem is that even basic WordPress themes are opinionated when it comes to styles, widget and navigation areas and javascript. Especially javascript. Inevitably I end up deregistering styleseets and scripts, and using `display: none` to get rid of markup that relies on the javascript I’ve just deregistered.

The ideal theme would allow configuration before download so as to avoid having to make relatively complex changes in layout files and `functions.php`. Here are some options I’d like:

* Whether to include _any_ CSS at all
* Whether to include javascript libraries such as jquery
* Whether to include mobile navigation markup and javascript
* Whether to use ajax comments or not
* Whether to include a header, footer and various widget and navigation areas
* The order of these areas and some of their content. For example, do you want the header to include a logo, site title, navigation menu and description (and in what order should they occur in the HTML?)

My requirements are niche, so I’m likely stuck with Jekyll (or another SSG) for the time being, but it’s surprisingly difficult to find a truly unopinionated WordPress theme that allows its users the real freedom to build what they want.
