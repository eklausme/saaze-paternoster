---
title: "TIL: Netlify stops processing redirect rules as soon as one is applied"
date: "2022-11-03 09:03:00"
twitter-note: "So put your 404 rule at the bottom."
---


My Netlify `_redirects` file didn’t appear to be working, even though it was processed at build time and outputted to the `_site` directory. There’s a good [support page](https://answers.netlify.com/t/support-guide-making-redirects-work-for-you-troubleshooting-and-debugging/13433) on this problem.

After trying a few of these fixes, I finally found the right one. TLDR: **I put my `404` redirect rule at the bottom of the `_redirects` file**.

You might have a `404` redirect rule that redirects a URI pointing to a non-existent resource to a custom `404` page. It could look like this:

`/*   /404/index.html   404`

That’s what I use, and it works: try visiting [https://www.thisdaysportion.com/this-does-not-exist](https://www.thisdaysportion.com/this-does-not-exist).

That’s good, but bear in mind Netlify will stop processing any of your redirects at this point; therefore, **any redirect rules below your `404` rule will not work if the resource your URI points to isn’t there**. As most redirect rules deal with resources that are no longer there, this means that redirects will appear not to be working at all.

So: make sure your `404` rule is at the bottom of your `_redirects` file or, if you’re using one, your `netlify.toml` config file.

