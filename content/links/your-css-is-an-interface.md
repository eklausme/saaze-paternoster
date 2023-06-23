---
date: "2021-11-16 13:27:52"
title: " Your CSS is an interface"
link-published: "2021-11-15 13:00:00 +0000"
link-url: "https://ericwbailey.design/writing/your-css-is-an-interface/"
link-author: "Eric Bailey"
hide-from-twitter: false
is_reply: false
is_like: true
---

> A person inspecting things can then modify these classes with a good deal of confidence about what exactly they’re tweaking. For example, someone could inspect a card component to find the class controlling its title, then modify the title class declarations to suit their needs.

I agree with this (via [Baldur Bjarnason](https://notes.baldurbjarnason.com/)) and wrote something similar about [how frustrating I find Twitter’s arcane class names](../../posts/styling-twitter/) a couple of years back.

I don’t think it really matters how many of us will actually install [Stylus](https://addons.mozilla.org/en-GB/firefox/addon/styl-us/) or similar – websites should be modifiable in order to make them accessible on principle. Why? Because content has to be decoupled from its appearance in order to be accessible in the broadest sense; the website designer cannot have the final say over how content is presented. A site’s CSS is part of its public-facing API.
