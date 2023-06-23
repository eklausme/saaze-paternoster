---
title: "Making your simple blog display properly on a Samsung TV"
tags: ["Accessibility", "WebDesign"]
twitter-note: "It was easier getting the site to work on a Nokia 8110 than a Samsung TV browser, but a mixture of browser fallbacks, declaring traditional properties and variables and dropping logical properties did the job. Bonus: another photo of my TV."
date: "2023-05-29 12:00:00"
date: "2023-05-29 09:38:00"
---


Over the weekend I blogged about [checking whether your website renders well on all devices](../../posts/what-blogs-should-be-viewable-on-any-device/), using a Nokia 8110 as a baseline. The thinking being: if your website displays decently on the smallest possible device, the likelihood is it will work on anything your reader throws at it.

I think this is a useful approach, but I encounterd [a problem when I tested this site on my Samsung TV](../../posts/conservative-css/). Obviously, screen width isn’t a problem, but CSS support definitely is.

You’ll no doubt be very relieved to hear that I’ve got the site looking OK on the TV:

![A TV with a browser displaying a web page.](https://thisdaysportion.com/images/samsung-working.jpg "A TV with a browser displaying a web page.")
<figcaption>Making my website display more or less properly on a Samsung TV took a bit of work.</figcaption>

The Samsung presents three CSS problems, not recognising:

- custom properties
- logical properties
- `column-gap` when used with flexbox

To get round these problems, you can do a few things:

## Write a traditional CSS declaration then use a custom property

For example:

```
color: black;
color: var(--dark);
```

The browser will adopt the traditional value (`black`) then override it with the custom property value (`var(--dark)`) only if it understands custom properties.

## Declare traditional spacing and then use logical properties

This was a trickier one. The problem here is that logical properties don’t simply replace a traditional CSS declaration. For example, this will only work in left-to-right languages:

```
margin-right: 1.5rem;
margin-block-end: 1.5rem;
```

In a right-to-left-language, the `block-end` margin corresponds to `margin-left`, so this would give you both left and right margins of `1.5rem`.

This solution works if your browser doesn’t understand both custom and logical properties:

```
--zero: 0;
margin-right: 1.5rem
margin-right: var(--zero);
margin-block-end: 1.5rem;
```

In this CSS the browser:

- Applies a right margin of `1.5rem`
- Applies a right margin of the custom property of `--zero` (unsurprisingly that’s `0`) only if it recognises custom properties
- Applies a `block-end` margin of `1.5rem` only if it recognises logical properties

Of course, we still have a problem if the browser does recognise custom properties but not logical properties.

## Use a similar technique to add margins to inline list items

So your CSS could look like this:

```
/* Parent element CSS */
display: flex;
column-gap: 1rem;

/* Item CSS */
padding-right: 1.375rem;
padding-right: var(--zero);
```

## C’est compliqué and you might need to compromise

So the site now displays more or less correctly on my TV, but the solution isn’t entirely resilient. If a browser recognises custom properties but not logical properties you’ll still see a page with lots of collapsed margins between elements.

Other approaches might be to use the `@supports` rule and/or write a separate, very basic stylesheet for browsers that don’t recognise, say, logical proprties, just like we did when we were supporting older versions of Internet Explorer.

Altrnatively, you could adopt a “defensive” approach to CSS and not use logical properties at all. I’d be really loath to do this as logical properties help your site render in other languages with minimum work.

Or you could just aim to provide _good enough_ coverage for the weirder browsers. Of course, that raises the question <i>what’s good enough?</i> I dunno.



