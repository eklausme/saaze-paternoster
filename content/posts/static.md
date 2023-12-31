---
title: "Static works"
categories: ["web"]
date: "2020-05-03 12:00:00"
sub: "We ran a static library service website for four years. “Static” in its purest, pre-compiled, not-with-React sense. Most informational, public service websites, can (and probably should) be run like this."
---


I’ve been managing the [Suffolk Libraries](https://www.suffolklibraries.co.uk) website for seven years, during which it’s been through three incarnations. The first two were built on standard PHP/MySQL database CMSs – WordPress in version two. The third version, built in 2016 and still used at the time of writing, is probably the most interesting. It’s a [“static” site](https://techterms.com/definition/staticwebsite), built using [Jekyll](https://jekyllrb.com), a static site generator.

In 2016 this was revolutionary. As far as I’m aware, it was the first public sector/not-for-profit website to be built in this way. Static was the big new thing. From an organisational point of view the move was successful, I think. The web team has always consisted of just one (me) or two people, with no budget to speak of, and it’s responsible for everything web: hosting, designing and building the site, writing and managing the content and social media. All this with no large, cross-departmental council web team to provide support; yet, before the service was divested to an independent not-for-profit, the library was traditionally the most visited part of the Suffolk County Council website. In very practical terms, moving to static meant we didn’t have to worry about two things out of hours: the site falling over with a 500 error, or getting hacked.

Users also benefited. Most importantly, the Suffolk Libraries website is _fast_. It scores As across the board on [WebPageTest](https://www.webpagetest.org/result/200608_8K_afb4a46e0f02d7b8a7f63ab102f3f793/), recording load times of under a second. I’ve accessed the site in plenty of Suffolk villages using a Moto G4 phone and a patchy 3G connection; it’s inherently accessible in a rural county with vast differences in income. Indeed, I would have liked to have written a [progressive web app](https://en.wikipedia.org/wiki/Progressive_web_application) so certain key pages could have been served without a connection at all, but, alas, no time or money for this. Because our host offers _some_ basic dynamic functionality (such as [forms](https://www.netlify.com/products/forms/) and [build hooks](https://docs.netlify.com/configure-builds/build-hooks/) for automated daily builds), users had _just enough_ interactivity to find up-to-date information quickly.

Apart from the fact users could depend on the site being available at all hours – it’s not been uncommon to have 100% uptime over a month – it’s handled traffic spikes effortlessly. On Thursday 19 March our page views increased threefold over the previous Thursday. Our [coronavirus page](https://www.suffolklibraries.co.uk/coronavirus/) was served more than 2,500 times in a two hour period – unsurprising, as it contained important information on what we were doing about customer fines and we’d just announced we’d be shutting all our buildings. It was a good example of Eric Meyer’s call to get static:

> If you are in charge of a web site that provides even slightly important information, or important services, it’s time to get static. [<cite>Get Static</cite>](https://meyerweb.com/eric/thoughts/2020/03/22/get-static/)

In short, serving a traditionally static site, enhanced with minimal features and javascript (mainly in the form of jQuery) has _worked_ for us and users for over four years.

## Static changed

Back when static was the new thing advocates often noted that it represented a return to the halcyon days of the early-2000s web – pre-CMS, pre-scripting and pre-databases. This was a selling point. After all, it’s simpler, faster and more secure to serve plain HTML than have a router assemble pages on the fly from data stored in a database, right?

If you buy this argument you need to accept its corollary: _static pages are enough to meet most user needs most of the time_. The Suffolk Libraries website proves this is true. So, if you’re publishing a blog or a site that just provides users with information, 90% of that can be done with flat HTML, and you either sacrifice some or all of the other 10% (probably forms or automatic updates based on variables such as the date) or you find another means. That might be some basic server side functionality (a la Netlify forms), or through javascript.

But static changed pretty quickly from around 2017, and I think we’ve lost an important strand of web development where we make sure our websites deliver important information as quickly as possible to as many people as possible all of the time. [Coronavirus may have refocused our thinking](https://emergency-site.dev/).

Under the traditional static model, the heavy lifting of building pages from includes and local or external data is done when the website is compiled into flat HTML files, whether that’s on a PC or a server. This happens out of view (hence _Jekyll_, incidentally), completely separately from any user involvement. Javascript is used to enhance UI, perhaps through offering sorting or filtering functions. All the user does is download the HTML file and its assets.

Under a newer model (which even has its own Netlify-created brand name of <abbr title="Javascript APIs Markup stack">JAMstack</abbr>) much of this heavy lifting is moved to the user’s browser. Websites are created as <abbr title="Single Page Applications">SPA</abbr>s, where HTML, CSS, data and javascript are downloaded in one bundle and the javascript creates pages based on user interaction.

Now, this is still static in that there’s no server-side scripting or database involved when users see pages, and it makes sense for websites where state needs to change often – for websites that behave more like apps. And it may make it easier to develop sites with predictable CSS “at scale”.

But the downside is that [we lose two of the things static promised in the first place](https://timkadlec.com/remembers/2020-04-21-the-cost-of-javascript-frameworks/): speed and resilience. To go back to the Suffolk Libraries example, do we want to be in a situation where users download the whole of the React library on a Moto G4 in an area with a patchy internet connection in order to find out whether a library is closed?

There is no more reliable and fast way to provide users with content than by serving static HTML and CSS. This is an extremely powerful feature of the web, and something static once clearly promised. Static _can_ mean static in the purest sense, and it’s something that works for developers and users.
