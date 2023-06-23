---
date: "2023-02-19 07:50:00"
title: "Reply to https://www.jayeless.net/2023/02/current-indieweb-status.html"
in_reply_to: "https://www.jayeless.net/2023/02/current-indieweb-status.html"
show_webmention_target: true
---


(Reply to [https://www.jayeless.net/2023/02/current-indieweb-status.html](https://www.jayeless.net/2023/02/current-indieweb-status.html))

Well, I did have crossposting to Mastodon working well enough with [Matthias’ RSS/IFTTT guide](https://matthiasott.com/notes/syndicating-posts-personal-website-twitter-mastodon), but it’s always taken ages for the post to show up in Mastodon, and just lately I’ve got an intermittent `422` error. You can set up micro.blog to do it (and it’s quick and reliable), but then you don’t pick up Mastodon replies in your webmentions.

Outbound webmentions have always been problematic. I’m using [Netlify’s own webmentions plugin](https://github.com/CodeFoodPixels/netlify-plugin-webmentions#readme), which sounds great but just doesn’t seem to work. Although it could be my markup? I’ve been using `data` elements.
