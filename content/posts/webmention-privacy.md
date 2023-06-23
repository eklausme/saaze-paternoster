---
title: "Webmentions and privacy"
categories: ["web"]
date: "2022-12-04T16:00:00.000+00:00"
fmexcerpt: "Theoretically, webmentions are great, providing a means to move conversations  from proprietary platforms to your own, independent website. But what happens when  comments made elsewhere are edited or removed?"
twitter-note: "The ethics of copying comments without permission."
---

Webmentions provide a means for websites to notify each other when they link:

> A Webmention is a notification that one URL links to another. For  example, Alice writes an interesting post on her blog. Bob then writes a response to her post on his own site, linking back to Alice's original  post. Bob's publishing software sends a Webmention to Alice notifying that her article was replied to, and Alice's software can show that reply as a comment on the original post. <cite>[W3C webmention Recommendation, 12 January 2017](https://www.w3.org/TR/webmention/#w3c-recommendation-12-january-2017)</cite>

As such, they’re a theoretically important part of the indieweb; instead of liking each others’ tweets, Facebook posts etc. on proprietary, billionaire-owned platforms, we can communicate across our own blogs.

Of course, in reality webmentions mainly allow us to track – and publish – how many likes and reposts we get on Twitter, Facebook, Mastodon etc. That’s pretty cool, but can just serve as a social signal. Look how popular I am with my 76 likes.

Anyway, I think webmentions – or rather, the process of duplicating online comments in another context, such as your website – pose several privacy questions. You _could_ argue that once you’ve published something online, you can’t control where it’ll appear and that’s just what the internet is like. Someone could screenshot that tweet, or the Wayback Machine will take a snapshot. To a large degree, whether this is a concern for you depends on how much you want – or are able – to respect the original author’s right to edit or delete their comment.

When I post a link from here to Mastodon or micro.blog it’ll send a webmention back should someone respond, whether that’s with a comment, like or repost. It’s good to be able to collect responses in one place, but the respondent probably isn’t aware I’m doing that. Isn’t this a bit, well, rude? You may well have a public social media account, but I’m willing to bet you’d respond differently _on_ social media rather than in the more formal setting of a website – your social media account at least _feels_ more intimate, or hidden even.

It certainly feels more _temporary_. Although we should be aware that publishing anything online anywhere creates a permanent record, it’s more findable by a search engine and presented more starkly as a comment on a blog post.

More serious questions are raised when we consider what happens if a comment is edited or deleted on social media. Thomas provides a possibly worrying [example of someone who transitions after they make a comment that generates a webmention](https://pinafore.social/statuses/109438196839532495). Your implementation becomes important – is the commenter’s name and image updated, or does the pre-transition identity show, thereby linking the two? Similarly, let’s say you make a drunken, spectacularly ill-judged response to my website post (hard to think which one it would be, but bear with), and delete it from Mastodon, expecting that to be the end of the matter. Do websites respect your deletion, or continue to show the unexpurgated comment?

I’m not really sure how I feel about this, and I don’t even know whether the [webmention.io](https://webmention.io/) API honours edits and deletions, and whether my implementation does a lot of caching. I should test. What do you reckon? And yes, feel free to leave a webmention.
