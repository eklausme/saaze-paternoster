---
title: "Other people’s code: Against embedding third-party widgets"
date: "2023-04-02 14:55:00"
categories: ["web"]
tags: ["HTML", "accessibility"]
twitter-note: "Embedding is easy, but who wants to lose control of their markup?"
---


Yesterday I wrote about succumbing to the [temptation of third-party comment forms](../../posts/js-static-comments/) on this site. I then promptly installed [Commento.io](https://commento.io) which, as promised, took a matter of minutes; after which I had optional authentication (email and social), threaded comments, flagging, spam protection, stickied comments and ratings up and running. What’s not to love?

![The Commento comment form embedded on a website.](https://thisdaysportion.com/images/commento-form.jpg "The Commento comment form embedded on a website.")
<figcaption>Commento is fairly lightly branded and easy to embed on any website with minimal HTML knowledge.</figcaption>

Well, a few things. This is not to criticise Commento in particular, which is a straightforward, paid-for service – the best of a similar bunch, including Disqus and Comment Box. Indeed, these problems extend to _any_ third-party service where you’re handing over control of the backend _and_ the generated HTML, and at least Commento just spits out HTML, rather than an `iFrame`. Nonetheless, here’s where I’d have used different markup:

- Comment submissions aren’t marked up as forms. Apart from not really making sense – submitted data belongs in a form with a `button` for submission by definition – it was presumably harder for the developers to code submiting the appropriate data to Commento using javascript than through just using a `form`.
- Indeed, the `div` is the favoured grouping element throughout the markup – there are no `article`s either, for example. Even comment times are marked up with `div`s rather than `time` with a `datetime` attribute.
- The login button is neither a button or a link. It’s a `div` with some javascript attached to it. There are no `aria-` attributes to even indicate what it’s actually for. Again, presumably this requires a lot of coding to get working. More concerningly, it means it’s not focusable, so you can only activate it by tapping or clicking it: you can’t tab to it and press enter.
- As well as being inconsistently and often incorrectly marked up, links to actions such as login, upvote and Markdown are rendered in a pale grey that fails WCAG 2.1 AA contrast criteria unless bolded.
- There’s a pale grey, centred <i>Add a comment</i> placeholder in the comment `textarea`. Placeholders are an inaccessible alternative to HTML `label`s and can cause some confusion as users try and delete them from an `input` box. The only time I’ve seen anyone get upset during user testing – to the extent that at one point I thought they may start crying – was when they couldn’t navigate an `input` with a placeholder.
- Commento loads Source San Pro (a nice typeface, incidentally), its own stylesheeet and a javascript file, thereby adding around 48kb and four additional requests to the page. While this is efficient in the scheme of things (chatbot javascript tends to weigh in at around 300kb, for example), it’s a lot on a page that weighed only 10kb beforehand.
- While the branding is quite light, it still doesn’t look like my website. I’d never use `12px` text, especially in a font with a small `x-height`.

There’s a bit of a dilemma here. While the selling points of third-party services can be really seductive, especially to those who don’t understand the importance of good quality markup, I don’t think it’s ever worth ceding control of the front end to someone else. Most HTML out there is of a variable quality – you don’t want your site, and its visitors, to suffer as well.
