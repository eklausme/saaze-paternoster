---
date: "2021-03-28 20:01:52"
title: "Firefox in-page anchor linking oddity"
---

Not sure if this is a bug... the [comments link on this page](../../posts/cms-component-ui/) just beneath the title should link to the comment form. Instead, it appears to link to an image when I click it in Firefox `86.0.1 Build ID 20210310152336`. There are a few large lazy-loaded images on the page, and the `HTML` element has `scroll-behavior: smooth;` applied in the CSS. Appears fine in Safari in MacOS.

What I think’s happening is the link scrolls to the correct place, but then the images lazy-load. Instead of moving the the focus to the target, it stays in the same (wrong to the user) place.
