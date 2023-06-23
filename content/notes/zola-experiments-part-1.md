---
date: "2023-03-18 10:47:27"
title: "Zola experiments part 1"
hide-from-twitter: false
has_image: false
tags: ["zola", "jekyll", "ssg"]
hide_from_social_media: false
---

This is promising. I copied a bunch of `.md` files from my Jekyll `_posts` folder to a [Zola](https://www.getzola.org/) `posts` folder, and they all rendered with the same URLs (after I removed the `date` YAML, but Zola picked the date up correctly from the filename, where they begin `YYYY-MM-DD`).

So the importing content from Jekyll to Zola part of any migration looks relatively painless. Bonus: the site built in 46ms.
