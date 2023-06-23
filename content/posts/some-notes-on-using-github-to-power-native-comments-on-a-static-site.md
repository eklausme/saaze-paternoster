---
date: "2023-04-06 14:55:32"
title: "Some notes on using Github to power native comments on a static site"
categories: ["web"]
sub: ''
hide-from-twitter: false
twitter-note: "Github makes for a good comments store, and the API looks Jekyll friendly  too."
tags: ["Github", "Comments", "Jekyll"]
hide_from_social_media: false
---

At the risk of sounding like a bot creating phrases from disparate bits of tech… I think I have a solution for onsite comments. \[Deep breath\]:

* Comments are submitted via a standard, native HTML form to Netlify (or Formspark, or etc.)
* Zapier creates a Github issue (or pull request?) from the form submission
* When the site is built, Jekyll reads from the Github issues/pull request API and displays comments

Because Zapier is creating the issue, there’s no Github account required. And at first sniff, there’s no authentication either. If I can use the pull request API, I get an added moderation bonus: if a PR is accepted it’ll also fire a site build.

I _think_ I can attach an author, post slug (for matching comments with their posts) and commenter website to the issue/pull request title as a comma separated list, which I can then use in Jekyll. Let’s see.
