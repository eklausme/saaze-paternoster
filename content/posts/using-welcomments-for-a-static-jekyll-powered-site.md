---
title: "Implementing comments without javascript on a static, Jekyll-powered site using Welcomments"
date: "2022-11-10 15:35:00"
twitter-note: "Finding a comments system that works on a static site without requiring javascript."
---




You can leave comments on this blog. For a year or so, this sorcery was powered by a combination of [Netlify Forms](https://netlify.com/products/forms), [Zapier](https://zapier.com) and [Airtable](https://airtable.com). And it worked well, until new comments suddenly stopped appearing.

I’d hit a snag with Airtable, which is where the comments were stored. The API returned a maximum of 100 results per page – a fairly standard limitation, but getting to further pages was tricky. Normally, you’d add a `page` parameter to your API call, something like:

`https://service/api?key=qbhqidbqdbjxh&page=2`

But Airtable doesn’t work like that. Instead, queries return results and an `offset` value you add to reach the next page of results. For some reason, this is updated every 20 minutes or so. On a static site, it’s impossible to use the dynamic offset to get further results (or impossible for me, at least – I spent a good day trying to find a way).

As I’d reached 100 comments I couldn’t use Airtable any more. Short of migrating to WordPress, what’s the alternative?

You _could_ get comments up and running quickly with a service like Disqus or [Commento](https://commento.io) (which looks cool), but they’re reliant on javascript to work, which is a no-no for me. I have three main requirements from a commenting system:

- **It isn’t reliant on javascript**. For me, this is a basic accessibility requirement. Disqus generates all its HTML and CSS using a script, so if [javascript isn’t working or isn’t available to the browser](https://kryogenix.org/code/browser/why-availability/), you don’t get _any_ comments. Also, any forms must be submittable using an endpoint that accepts a standard POST request.
- **It allows me to markup and style comments and the comment form how I like**. One of the main reasons I’m using Jekyll is that I have, for better or worse, complete control of the site’s HTML and CSS. If my site is inaccessible, I want that to be my responsibility, rather than that of a third party.
- **I get to store the comments in my website repo**. If I’m going indieweb, I should own my posts and any replies made on this site. Also, if any third-party service I’m using goes under, I want a copy of comments I can still use while I find an alternative.

## (Your periodic reminder that you’re better off using WordPress)

WordPress does 95% of this out of the box – and it would be relatively easy for me to edit the comment form. But here we are, still with Jekyll.

## How to implement comments without javascript on a static site

There are two similar ways to get comments up and running on your Jekyll/Hugo/eleventy site. Which you use will depend on your preference and your hosting.

### Method 1: submit to a third party and read comments from an API

This is the most flexible method and will work regardless of your hosting set up. It goes something like this:

1. Markup a form that sends comments to a third-party endpoint (this could be a service like [Basin](https://usebasin.com) or [Formspree](https://formspree.io)). The form’s `action` attribute will tell the browser where the endpoint is. (This is built into HTML! No special coding, javascript or frameworks required, you can even validate with HTML.)
2. Have the third party service deal with spam, moderation and notifications.
3. Whenever the site is built, read comments from the third party API and add them to the appropriate pages on the website.

Note: you can use an automation service like Zapier to handle things like email notifications.

### Method 2: submit to a third party that puts comments directly into your repo

If you’re using Github or similar to host your code you can authorise a third-party service to put comments directly into your repo. The process will look like this:

1. As above – have a native form send data to an endpoint.
2. Also as above – have it deal with spam and moderation.
3. Have the third party commit changes to your repo, adding data submitted in your comment form. In Jekyll, this might consist of adding `json` to your `_data` directory, thereby creating a new collection you can use in the normal way.
4. Bonus: Changes to your repo will probably trigger a new site build.
5. Whenever the site is built, reference the new collection to add comments to the appropriate pages.

Before, I was using the first method, but the second allows me to host my own comments, rather than having them sit in Airtable.

## Enter Welcomments

[Welcomments](https://welcomments.io) is a service that accepts form submissions and commits them to a Github repo hosting a Jekyll, Hugo or eleventy website. I’d imagine that covers most of the non-javascript dependent static site generators.

You can login to a dashboard and moderate, delete and spam submissions. Comments are committed to your repo on submission, or you can choose to moderate them beforehand.

![A table of published comments in the Welcomments dashboard.](https://thisdaysportion.com/images/welcomments.jpg "A table of published comments in the Welcomments dashboard.")
<figcaption>You can choose to spam published comments. It’s probably best to moderate them first.</figcaption>

On set up, which is all done on the Welcomments website – there’s nothing to install anywhere – Welcomments asks for permission to access your website repo. Tell it what generator you’re using, and it places four files in your `_includes` (or equivalent) folder. Your site will use these to display a standard HTML form and your comments. It’s all normal HTML and Liquid, and you can edit the files, thereby retaining control of your markup and styling.  The only things you need to bear in mind are:

- you can’t change the form `action` attribute (otherwise Welcomments won’t receive your form submissions), nor any `input` and `textarea` `name`s
- if you choose to include its javascript (which enables direct replies and is wholly optional), keep any element `id`s as the javascript refers to them

It’s relatively easy to set up, more so if you use its out-of-the-box markup and CSS. If you don’t want the CSS, just remove the `link` element it inserts in its markup.

I’ve been working with Welcomments over the last day or so, and have a system in place that appears to meet my three requirements. Feel free to leave a comment to see if it works for you.



