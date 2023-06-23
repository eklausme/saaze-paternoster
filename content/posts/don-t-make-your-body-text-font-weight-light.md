---
date: "2022-09-19 09:30:53"
title: "Don’t make your body text font-weight light"
categories: ["web"]
sub: Unless you want to make your website completely unreadable.
hide-from-twitter: false
twitter-note: "The single most common change I make to websites with the Stylus add-on  is the body font-weight."
---

I use the excellent [Stylus add-on](https://addons.mozilla.org/en-GB/firefox/addon/styl-us/) to fix a lot of broken websites, and by far the most common single line of text I enter is `body {font-weight: normal;}`, because someone, somewhere has declared `body {font-weight: 300;}`, thereby making _all_ elements render with a lighter font weight than they would by default. That includes paragraphs and list items.

Don’t do this! In one fell swoop, you’re making your website difficult to read for anyone:

* using a less than high-spec mobile phone
* using a less than high-spec desktop monitor
* who doesn’t have perfect eyesight

Assuming your reader _does_ have a great device and perfect eyesight, you’re still taking a risk – it’s quite possible you’ve paired `font-weight: 300` with `color: #888` on `background-color: #fff`. Or you’ve not made your body copy nice and big.

Lighter than normal text _is_ readable over short runs at a large type size, so it _might_ be appropriate for titles and various call-outs. If you want to use `font-weight: 300` (or even lighter), only apply it to specific elements, e.g. `h1 {font-weight: 300;}`, _never_ to your `body`.
