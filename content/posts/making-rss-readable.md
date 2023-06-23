---
title: "Making RSS readable in a browser"
fmexcerpt: "You can style and transform RSS files so they look good <em>and</em> continue to work in the normal way."
date: "2022-07-16 11:02:00"
categories: ["web"]
---


Unlike Facebook, RSS has no marketing budget, relying on enthusiasts to spread the word. That could be through blogging, [writing explanations](/about/what-is-rss/) or just advertising its existence.

Putting a link to [your RSS feed](/feed/index.xml) in your navbar (or even a graphic: you’ll see <span role="img" aria-label="Satellite transmittor">📡</span> emojis dotted around the web) is one way of doing this. If your reader knows about RSS it sends a signal that a) you have a feed and b) you possibly value publishing to your website over social media. No further action required – they’ll use their RSS app or service to subscribe.

However, if your reader doesn’t know about RSS but is intrigued by the link, we have a problem. As feeds aren’t HTML files, they look ugly when the browser opens them. This isn’t the friendliest introduction to RSS:

{% include figure.html url="guardian-rss.jpg" alt="Screenshot of an RSS feed in a browser. It’s a lot of dense code." height="685" width="960" caption="The Guardian’s RSS feed." %}

However, we have options when it comes to placing a more friendly RSS feed in our website navigation.

We _could_ link to a normal web page. This would be handy for newcomers: you can explain what RSS is, why it is a good thing and how to get started.

But what about your readers who are familiar with RSS? They’ll be expecting an `xml` or `atom` file their app or service can work with; yes, apps like [NetNewsWire](https://netnewswire.com/) are smart enough to discover RSS feeds from normal URLs, but you’re still providing a jarring experience.

Handily, there is a way to get the best of both worlds, and it’s fairly magical – and as old as the hills. `xml` files can use `xsl` in the same way that `html` uses `CSS`. Better still, you can add HTML, CSS and even templating elements to `xsl` files to completely transform the content the browser outputs, while the `xml` file itself remains exactly the same. This means an RSS-savvy reader can use your RSS link to subscribe to the website, while neophytes can open it like any other web page and get an introduction to subscribing to feeds.

Try it on my site. You can copy this link into your feed reader, or click it to see a nicely formatted page with some explanatory text:

[https://www.thisdaysportion.com/feed/index.xml](https://www.thisdaysportion.com/feed/index.xml).

(Note: your mileage may vary on mobile, depending on the browser and any apps you have installed. For example, in iOS the NetNewsWire app will offer to open a feed in Safari.)

It takes a bit of work, but I found my HTML and CSS skills sufficient to get it up and running. If you’d like to style your RSS feed, take a look at the code I’m using:

[My xml, xsl and CSS files on Github](https://github.com/leonp/thisdaysportion/blob/master/feed/index.xml).





