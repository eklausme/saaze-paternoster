---
date: "2022-06-26 07:56:00"
title: "Write HTML Right"
link-published: "2022-06-10 12:00:00 +0000"
link-url: "https://lofi.limo/blog/write-html-right"
link-author: "Aaron D. Parks"
hide-from-twitter: false
twitter-note: "This is a good read on how using a minimal approach to valid HTML makes writing it easier."
is_reply: false
is_like: true
fmexcerpt: "You don’t need to close those tags."
---


This is a good read which suggests taking an ultra-minimal approach to writing valid HTML – sans most `head` bits and pieces, the `body` and `html` and by omiting closing tags. You’ll also learn about a wayback, Markdown-like language called [troff](https://en.wikipedia.org/wiki/Troff) (my word of the week).

You can see how much easier it is to write HTML when we don’t close tags:

```
<h1>
An exciting article
<p>
This is a good read.
I can even start new sentences on new lines.
```

[Jens made the same argument](https://css-tricks.com/write-html-the-html-way-not-the-xhtml-way/), but posited different reasons. You’ll see some disagreement in the comments. Perhaps Jens was writing for the wrong audience – if you’re a developer you’re probably creating templates rather than longform documents. Agreement and clarity is all important, and an XHTML mindset suits programmers. And if you _are_ a developer who blogs, you’re using Markdown rather than handcrafting HTML.

Which raises the question <i>who actually writes HTML these days?</i> If you blog you probably use some form of rich text editor or Markdown. If [you’re taking a purist approach](/paternoster/links/2021-01-13-next-gen-static-blogging) and want to remove _all_ technical dependencies this could be for you, but you’re in a tiny minority.

But then it occurred to me that people are still writing HTML. In fact, I’m one of them. Web editors will often have to deal with text copied from Word, content submitted by non-editors or even a CMS that struggles to output paragraphs rather than a stream of `&nbsp;`s. Often we enter the HTML to fix the content and make it accessible. Minimal, valid HTML could make our lives easier.

