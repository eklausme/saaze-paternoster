---
title: "The perfect blogging platform: crossposting, conversing on social media and monetisation(!)"
categories: ["web"]
feature: true
date: "2021-06-06 16:19:00"
sub: 'How does the perfect blogging platform handle posting to other social media networks and the conversations that take place there? Perhaps the answer also offers a way to make money without tracking or ads.'
series: blogging-platform
---


So far in this series of posts on a never to be built and probably of little interest anyway blogging platform, I’ve established [some principles](/paternoster/posts/some-blogging-platform-principles/) about what it is and should do, and explored [how users might get to customise their blogs without having to code themes](/paternoster/posts/perfect-blogging-through-typography/). In this post I want to consider what integration with other social media networks might look like, specifically Twitter (although the ideas could apply to Facebook, Instagram etc.)

{% include series-list.html %}

One of the main principles of our platform is that we publish to our blog before syndicating posts to other social media networks (a process known as [POSSE](https://indieweb.org/POSSE)); the idea being we, rather than the man, own our content (however trivial or mundane that may be). Personally, I think this is a somewhat dubious theory as once you publish to the Facebooks of this world your content is theirs in perpetuity, whether it’s a copy of the “canonical“ post or not. Still, at least we’re signalling where the content originates from.

Apart from the (supposed) ethical benefit of publishing in this way, there are some practical advantages. For example, should a social media network go under (admittedly unlikely) or decide to remove or lose a post (not impossible), our content still exists on our website, and [wherever else we have our posts backed up](https://github.com/leonp/thisdaysportion/tree/master/_posts). Also, we only have to publish in one place before automatically syndicating across several networks.

## Publishing to Twitter et al

This is the relatively simple part of the process and, in all likelihood, if you’re blogging you’re probably already automatically sending your posts to social media. WordPress offers good, well established plugins that’ll take of wrangling with the Twitter API; in fact, wordpress.com blogs come with this built in, no plugin required.

If you’re foolhardy enough to be using a static site generator such as [Jekyll](https://jekyllrb.com), you’ve got a bit more work on your hands (which should be the motto of static sites). But as long you have an RSS feed you’re probably fine. Sign up for [IFTTT](https://ifttt.com) or [Zapier](https://zapier.com) and connect your RSS feed to your Twitter account. Or work with the Twitter API. Enjoy!

What your website sends to Twitter is important. We want our audience to respond to our posts in a way that’s convenient for them, rather than asking them to jump through hoops by, say, filling in a comment form on our own website. Not only is this polite – they probably have no idea about the indieweb and simply use Twitter like 99% of the rest of the population – it’s also practical: the more difficult you make it to respond the less likely it’ll happen. We should introduce a principle here; namely, that _replying to a post should be as easy as, and feel like, a normal interaction on whatever social media network is hosting the conversation_.

In practice that would mean a few things:

- **By default, Tweets don’t link back to the website.** Although we can add a setting to either override this all of the time or on a per post basis.
- **A post looks like a Tweet on Twitter.** That means it’s sent “as is” – assuming it’s less than 280 characters long. If it’s more than 280 characters long, we get options.
- **Proper “posts” (i.e. anything with a title) or “notes” longer than 280 characters link back to the website.** The platform should allow for simple truncation of a note, a “traditional” title, link and excerpt construction, a handcrafted note and link or any combination of these.
- We should be able to generate **[Twitter cards](https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started)**.
- **Images and video are embedded in the tweet.** Our platform should have image and video formats, with optional captions. These get sent straight to Twitter “as is”, just like a note. Images and videos contained within posts and longer notes are treated the same as any other post.

## Conversation

Crossposting itself is _relatively_ simple, but conversation can get tricky.

At this point it may be worth taking a step back and asking _What is the fucking point of all this?_ If we’re so keen to extricate ourselves from the clutch of the social media leviathans, why don’t we just have done with it and _not use Twitter_? And if we’re happy chatting with people on Twitter then just carry on as before.

That is an entirely fair enough point, but we’re going to plough on and try and plot a way through not only posting to Twitter, but replying to other people’s posts, and then holding some form of threaded conversation. No-one said this was going to be easy.

### Replying to, retweeting or liking a tweet

Actually, this bit _is_ easy. Webmentions and microformats already allow for `replies` and `likes`, and adding the appropriate buttons to our post editor along with a field for the tweet URI seems sensible. Mark the post as a reply, write your pithy comments, enter the tweet address and hit publish.

Likes and retweets are even easier – they don’t require a comment.

### Replying to a reply to your reply

Things become a bit more complex when we try and deal with Twitter conversation threads (although to be fair Twitter doesn’t deal with Twitter conversation threads particularly well).

Take this scenario: you post a short note that gets sent to Twitter. @leonpaternoster and @paternoster reply on Twitter. You’d like to respond to them. What happens next?

Our platform has three things to deal with:

- Notifying you that @leonpaternoster and @paternoster have replied.
- Displaying the reponses on your blog.
- Allowing you to reply from your blog.

Luckily, we do have a means of dealing with conversations on blogs, and that’s **[threaded comments](https://demo.studiopress.com/genesis/threaded-comments.htm)**, which WordPress has supported for over a decade. In fact, the simple process of grouping replies on a single page and indenting them makes threads more readable than they are on Twitter. We could even argue that this abstraction and distance might make social media calmer and clearer, allowing for better, more considered conversations.

So in our example, you’ll reply on your website. Here’s some example UI:

![Screenshot of a threaded conversation.](https://thisdaysportion.com/images/threaded-conversation.jpg "Screenshot of a threaded conversation.")
<figcaption>Some WordPress themes let you respond to a comment in the thread itself. This approach could work well.</figcaption>

**Our platform should therefore send comments to Twitter and receive replies, rendering them all on the initial post page as a formatted, indented list**. Bloggers benefit from a better formatted conversation while readers on social media don’t see any difference.

While this may _work_, we could envisage it soon becoming problematic. What if you’re really active on Twitter, Facebook and Instagram and holding dozens of conversations a day? Are we expecting our platform to handle and mirror three social media networks. To go back to our original question – _what’s the fucking point?_

Now we might start thinking about how we pay for this platform if it does so much; how we might _monetise_ (urgh) it. True, it’ll never be built, but here’s an idea for prospective bloggers.

You get to publish – and own – all your content on a flexible platform where you control how your blog looks and the format of what you publish. If you’ve been using Twitter or Facebook, your readers won’t notice the difference; to them, you’ll reply, like and retweet just as before. Best of all, you’re not tracking them or selling ads for some shady third party.

“Premium” features, such as nested conversations and “advanced” typography, cost, while the basics – blogging itself, sending replies and limited typographical control – are free.









