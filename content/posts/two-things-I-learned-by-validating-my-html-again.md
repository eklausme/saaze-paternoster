---
title: "Two things I learned by validating my HTML again"
date: "2022-09-24 11:25:00"
categories: ["web"]
---




I periodically [validate my HTML](../../posts/4-validation-lessons/), because validated HTML should be more robust and accessible than unvalidated. It’s also an [indicator of competence](https://meiert.com/en/blog/professional-web-developer/). (Note to self: I should include validation in my build process.)

This time round I discovered some new errors, which proved easy to fix. My HTML still doesn’t _quite_ validate (so therefore I’m not _quite_ competent, I suppose <span role="img" aria-label="Smiley">😊</span>) because I inline my CSS, and that CSS contains a parse error I can’t figure out. I also knowlingly add an invalid attribute to comment forms so inputs behave properly on Apple phones. View the source and you’ll see the HTML is commented to reflect this.

## Elements should only contain one instance of an attribute

Take this (invalid) code:

```
<link
rel="preload"
as="style"
href="https://fonts.bunny.net/css?family=ibm-plex-sans:400,400i,700&display=swap"
rel="stylesheet">
```

Note the two `rel` attributes – one tells the browser that the resource at `https://fonts.bunny.net/css?family=ibm-plex-sans:400,400i,700&display=swap` is a stylesheet while the other asks the browser to preload it.

Having two `rels` is invalid, but having two `rel` _values_ is fine (and often necessary). This makes sense because how do we determine which is the right `rel`, and if one has been added in error? Instead, use one `rel` and add two space-separated values.

```
<link
rel="preload stylesheet"
as="style"
href="https://fonts.bunny.net/css?family=ibm-plex-sans:400,400i,700&display=swap">
```

Oh yeah, I’d also been sloppy editing my comments include and generated headings with two `class` attributes. Tsk.

## `img` elements must have an `alt` attribute even if they’re hidden from assistive technology

Of course I _know_ images should contain descriptive text for screenreaders. However, we can hide decorative images from screenreaders altogether by setting the `aria-hidden` boolean attribute to `true`:

```
<img src='/images/guards.jpg' aria-hidden="true" height="72" width="72">
```

This is invalid because it doesn’t contain an `alt` attribute. I’m not sure the logic here is right; after all, I’ve said the image should be ignored, so why does it need a description? Or I might not be understanding how to implement this accessibly. Either way, this is valid:

```
<img src='/images/guards.jpg' alt="" aria-hidden="true" height="72" width="72">
```

So there you go. This time round, validation reminded me how to add attributes properly and perhaps keep images accessible.

