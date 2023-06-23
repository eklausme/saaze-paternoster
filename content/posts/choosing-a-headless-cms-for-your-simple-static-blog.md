---
title: "Choosing a headless CMS for my simple static blog"
date: "2023-01-21 10:46:00"
categories: ["web"]
twitter-note: "On the search for a no-installation, no-configuration replacement for Forestry."
tags: ["cms", "forestry", "headless", "prose", "static", "jekyll"]
---


When you use a “traditional”, or “monolithic” content management system (CMS) such as WordPress, your content editor, data and the website itself are part of the same package. Installing WordPress on a server gives you access to a “back-end” (by default, reachable at `yourwebsite.com/wp-admin`), where you’ll create your pages and posts, which will in turn form the website itself (reachable at `yourwebsite.com`)

![The WordPress post editing screen.](https://thisdaysportion.com/images/wp-post.webp "The WordPress post editing screen.")
<figcaption>Logging into the Wordpress back-end allows editors to create new posts in a browser window.</figcaption>

Static site generators (SSGs), such as Jekyll, Hugo and Eleventy, are not CMSs. Think of them more as a script that you run from a command line. This script will typically convert a collection of files into a website, which, if you’re running the script on your computer, will need uploading to a server.

In order to create a new page or post, you can’t visit a “back-end”: there is no `yourwebsite.com/admin` or similar. Instead, you’ll have to create and edit your source files, run the script and then get the generated files onto a server.

We can therefore see traditional CMSs offer two advantages over SSGs:

- The ability to create and edit posts and pages easily and with little or no technical knowledge
- The ability to create and edit posts and pages from anywhere with a web browser

As SSGs gained popularity, companies saw an opportunity to provide CMSs for static sites. Services like [Forestry](https://forestry.io/), [Contentful](https://www.contentful.com/), [Cloudcannon](https://cloudcannon.com/) and [Sanity](https://www.sanity.io/) allow website editors to login to `yourwebsite.com/admin` or `forestry.io` and enjoy easy-to-use back-ends and remote publishing on static sites.

![The Forestry post edit page consisting of form fields, text editing buttons and a save button.](https://thisdaysportion.com/images/forestry.jpg "The Forestry post edit page consisting of form fields, text editing buttons and a save button.")
<figcaption>I can add posts, links, notes and pages to my website from anywhere using Forestry’s editor, which I login to at forestry.io.</figcaption>

Furthermore, these “decoupled” or “headless” services offer three possible advantages over traditional CMSs, such as WordPress:

- Becuase your content and the system that manages it are separated, it’s sometimes easier (in theory) to copy and move your content.
- Some headless CMSs work by serving your content as `json`, which your SSG will use to build the website itself. You can also use this `json` to build other services, such as an app. One CMS can power several services concurrently. Note that WordPress has offered an API for several years, thereby offering the same functionality (and making it a traditional and headless CMS at the same time).
- Some headless CMSs can scan your existing static site files and infer your data structures, thereby making it easier to create and manage custom data types than in some CMSs, such as WordPress.

## I’m looking for a little or no config CMS

Unfortunately, my CMS [Forestry will be switched off](https://forestry.io) and become [Tina](https://tina.io/) soon. Add another advantage to traditional CMSs: even if development ends, you’ll still have a CMS sitting on your server.

This is obviously a personal thing, but spending time configuring or even installing a CMS seems too much like work to me. The beauty of Forestry in its pre-Tina incarnation – which I’ve used for years – is that you visit [forestry.io](https://forestry.io), give it access to your Github repo and that’s it – it works out your content types from your folder structure. To add or edit a post or page you log back in to [forestry.io](https://forestry.io) and use its back end.

There are optional configuration options so you can tell Forestry what non-standard meta data to add to your content, and what form elements to use in its UI (for example, it has date pickers and dropdowns), but you set these up in Forestry itself.

Tina, on the other hand, requires installing software that you add to your file store. It’s not difficult for someone who has gone to the lengths of installing an SSG, but it’s another technical part of your stack to manage. And it is more work.

Headless CMSs broadly work in one of two ways:

- By storing your content and making it available as `json`, which your SSG then uses to build a website, app or whatever. Sanity works in this way.
- By directly accessing your online file store, and adding, editing or deleting files there. Your file store could be Dropbox, Drive or, most likely, Github. Forestry works in this way.

As the first option entails setting up your content with a third party and then getting your SSG to generate a site from `json`, that’s a non-starter for me: it would entail re-writing my website from the ground up and getting the existing content into the new CMS. This method is better suited to organisations with more complex requirements and more resources, who are looking to edit a data store for use across websites and apps.

So I want a “file store” CMS. The other main consideration will be how much configuration is involved, or whether I need to install anything at all.

As headless CMSs become more sophisticated they require more configuration; too much, perhaps, for a simple blog. So it’s maybe unsurprising that the best post-Forestry solution I’ve found is [Prose](https://prose.io), which is, as far as I’m aware, the oldest headless CMS of all, and requires no configuration beyond giving it access to your Github account.

Prose provides a simple front end for editing Github files and committing any changes you make. That’s all it does; unlike Forestry there are no configuration options, so if I wanted to set up a front end for adding meta data to posts I’d be out of luck. Instead, you add YAML in key value pairs, much as you do when editing a text file.

![The Prose editing page with a few simple text formatting options and a settimngs menu.](https://thisdaysportion.com/images/prose.jpg "The Prose editing page with a few simple text formatting options and a settimngs menu.")
<figcaption>In Prose you are just editing the text file, so you can use Markdown. Note the icons on the right hand side of the screen – you can reach a simple meta data editing box from here.</figcaption>

![A blank text box entitled Raw Metadata.](https://thisdaysportion.com/images/prose-meta.jpg "A blank text box entitled Raw Metadata.")
<figcaption>Enter your YAML key value pairs here.</figcaption>

Despite (or maybe becuase of) its simplicity, I think Prose is the most elegant solution for my site. By just offering a way to edit your files, it respects the way you’ve set up your site – there’s nothing to configure or install. But if I am missing a better option, do leave a comment.
