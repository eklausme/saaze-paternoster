---
title: "My rig &#8211; Getting started with Github Pages and Jekyll"
date: "2014-08-31 12:00:00"
categories: ["web"]
---


Thought I'd share my current website set up and some links I used to get to this stage. If you're a developer/coder probably all a bit <i>and?</i>, but if you're in that generalist hinterland it might be of some use. Knowing Git, Jekyll and how to use a command line is very handy, basic stuff.

## TL;DR

I have my website stored in a Dropbox folder on my PC. I use Jekyll to build the site and then push it to Github Pages to publish it. The only cost is the domain name.

## Jekyll

<a href="https://jekyllrb.com/">Jekyll</a>'s a static site generator. This means your website is generated on your PC rather than on the server itself. Lots of advantages to this:

- Your site serves flat HTML files (fast as there are no requests to a database)
- Security (there's no database to hack)
- Portable (static site generators make HTML files: easy to copy, backup etc.)
- No <abbr title="What you see is what you get">WYSIWYG</abbr> (so <abbr title="What you mark up is what you get">WYMIWYG</abbr> *what you mark up is what you get*). Use lovely <a href="https://daringfireball.net/projects/markdown/">Markdown</a> instead.
- Workflow quick (command line more efficient than GUI)

There are disadvantages:

- No comments (because there's no database to store them in), unless you use something like Disqus (yuck)
- No writing and publishing on the go
- Some technical knowledge required. The command line! If you're on a Mac you're in luck: Ruby and Ruby gems come preinstalled, if you're not there's a bit more work to do (especially in Linux).

I also like <a href="https://hugo.spf13.com/">Hugo</a> a lot &#8211; it's got some excellent features like archetypes, better taxonomies than Jekyll, simple installation and a smart, automatically generated site structure. I only chose Jekyll because it works so well with Github Pages (see below).

### Resources

- <a href="https://github.com/benbalter/wordpress-to-jekyll-exporter">WordPress to Jekyll Exporter</a>. Makes it easy to move your content from WordPress into Jekyll (or any other static site generator).
- <a href="https://rvm.io/rvm/install">Installing RVM</a>. If you're using Linux you'll need something to help you install Ruby gems, such as Jekyll.

## Git and Github

Git is version control software and Github is somewhere to host your version controlled software. Advantages:

- Site backed up automatically
- Site code publically available
- Site versioned (roll back changes you make)
- Work on your site anywhere you've installed Git (and Jekyll)
- If you use Github Pages really easy and fast workflow

Disadvantages:

- I found Git opaque. It's essentially a programmer's tool and programmers don't communicate in layman's terms very well. Once you've got it working it's simple (`git add`, `git commit`, `git push origin master` and you've published your site), but getting to that stage took  me some time.

### Resources

<a href="https://lifehacker.com/5983680/how-the-heck-do-i-use-github">How the heck do I use Github?</a> is a step by step guide to getting started with Git and Github.

## Dropbox

Becuase your site doesn't have a database you can store the local version in a bog standard folder. Make that your Dropbox (or Box or Owncloud) folder. Advantages:

- Back up your site again
- Changes synched across any PCs you work on (saves on `git pull`)

Disadvantages:

None.

## Github Pages for hosting

This is brilliant. Github Pages work with Jekyll, so all you do is create a repository for your website and push your whole Jekyll installation to it. Pages does the rest. Many advantages:

- Brilliant, fast workflow: Write content in markdown &rarr; Build local site &rarr; Commit changes to Github repository
- Free, top quality hosting
- File compression and Content Delivery Network (CDN) included

Disadvantages:

- You're tied into Github (although because you're publishing flat HTML it's easy to move your site)
- Needs some technical knowledge, especially when it comes to pointing your domain name to Github
- Not all domain name providers allow `www` subdomain redirects to a web address (i.e. `your-github-name.github.io`), without which you lose the benefit of Github's CDN

### Resources

- Start with <a href="https://24ways.org/2013/get-started-with-github-pages/">Get started with Github Pages (plus bonus Jekyll)</a>
- The comments on this Stack Overflow <a href="https://stackoverflow.com/questions/23097397/github-pages-setting-up-custom-domain">thread on setting up your domain name to work with Guthub Pages</a> were excellent. Helped make sure I get to use Pages' CDN.

I'm pretty pleased with this setup: I have fast, reliable (and free!) hosting and I can edit, publish and copy my content with a minimum of fuss.
