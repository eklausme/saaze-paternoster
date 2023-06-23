---
title: "More webmention woes"
tags: ["indieweb,netlify,webmention"]
date: "2020-01-01 12:00:00"
date: "2023-04-23 08:00:00"
---


So, I use [Netlify’s webmention integration](https://github.com/CodeFoodPixels/netlify-plugin-webmentions#readme) to send webmentions. It took ages to get just right, but it looks like it pings WordPress websites’ `xmlrpc.php` rather than a webmention endpoint. Makes sense, as `xmlrpc.php` will always exist, except there’s less chance your webmention will actually appear 🤷‍♂️

