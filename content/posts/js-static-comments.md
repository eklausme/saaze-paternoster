---
title: "Javascript and comments on a static website"
date: "2023-04-01T15:00:00.000+00:00"
twitter-note: "I don’t want to use a javascript-driven comments system on this site, but it’d make things a lot easier. Are comments an example of a progressive enhancement?"
---

I’ve been tying myself in knots over comments for a couple of weeks. This website’s built on Jekyll, a static site generator, which means there’s no way to send and fetch comments to and from a database or a set of files that live on this site.

However, the HTML `form` element allows us to send data to a script or database located at the address specified in the `action` attribute. Brilliant! That means it is possible to at least send data _somewhere_, even if it’s not this website. Couple that with the ability to read data from _somewhere_ whenever the site is built, then you can maybe see a way to implement comments on a static site.

I’ve used this method in three ways:

* With [Welcomments](https://welcomments.io), which sends comments to your site repository and puts them in your `_data` folder to be read as a collection.
* By using Zapier to send the comments to Airtable, which offers an API that can be read when the site is built.
* By downloading comments from [Netlify Forms](https://www.netlify.com/products/forms/) in a `csv` file which can be used to create a collection.

While all these methods have done the job, they’ve not been without their problems and annoyances. Welcomments just stopped working altogether, while Airtable makes it very difficult to grab more than 100 comments. Downloading and editing a `csv` file is laborious.

So I’m thinking about a hosted service that uses javascript to load the form and send and read the data to and from a database. That’s quick and involves little work once it’s up and running.

I’ve been loath to do this in the past, partly because I enjoy the challenge of making things interactive without resorting to javascript, and partly because it’s inherently inaccessible. If a website visitor has javascript turned off, or if it [fails for a myriad of reasons](https://www.kryogenix.org/code/browser/everyonehasjs.html), then you don’t get comments.

On the other hand, this all depends on how you define the “enhancement” in “progressive enhancement”. You can happily read articles on this website without javascript – is being able to comment on them an equally important part of the “experience”?

Perhaps I could implement a fallback? Perhaps wrap a plain comment form in a `no-js` div?
