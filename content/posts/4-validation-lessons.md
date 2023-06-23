---
title: "Four things I learned by validating my HTML"
categories: ["web"]
date: "2021-12-04 12:00:00"
date: "2021-12-04 15:36:00 +00:00"
---


Prompted by [Jens’ posts on quality HTML](https://meiert.com/en/blog/the-frontend-developer-test/), I validated my HTML for the first time in, well, years.

Publically validating your HTML was a big thing around the time we were debating [whether to go down the strict XHTML route](https://www.w3docs.com/learn-html/xhtml-extensible-hypertext-markup-language.html). Sites often proudly displayed an [XHTML valid image](https://commons.wikimedia.org/wiki/File:Valid_XHTML_1.1.svg) in their footer.

I suspect fewer developers go through the validation process now. I appreciate that’s a very fuzzy statement, and it’s quite possible we simply don’t display badges proclaiming what has become a mundane part of the development process.

However, I do think it’s true that HTML now attracts less professional interest than javascript and CSS. Perhaps it’s because HTML is viewed as a simple markup language, with a more or less settled specification and few recent major developments (I like `details` and `summary`, but we could live without them). Compare that with javascript, which now even generates our HTML and CSS and boasts hundreds of frameworks and build processes, and CSS, which has given us grid and custom properties in recent years.

Anyway, here are a few things I learned from validating my (invalid) website.

## The time element requires a datetime attribute

I knew this, so only sloppiness on my part can explain why I hadn’t added `datetime` attributes to the `times` on [my archive pages](/paternoster/posts/). This makes sense as how we express time varies, even in a single language. For example, today could be 4/12/12, 12/4/12, 4<sup>th</sup> December, 4 Dec, December 4<sup>th</sup>, Dec 4 etc. etc. `datetime` provides a means of objectively experessing the date and time.

This also prompted me to consider whether it was right to use `time` at all. I can envisage Safari’s reader mode or Pocket parsing `datetime` from a single article, but I’m not sure it’s worth marking up over 200 summaries on a single page in this way. And if adding an element doesn’t aid meaning, should we do so just because we can, or because it’s valid? It’s a reminder that [marking up documents often requires some form of judgement](/paternoster/posts/marking-up-navigation/) beyond sticking to the specification.

## for attributes link to input ids, not names

Take this markup from this website:

```
<div hidden>
  <label for="bot-field">Complete if you’re a robot</label>
  <input name="bot-field">
</div>
```

It’s invalid. More sloppiness on my part, unfortunately. I have no idea how I forgot that a `label` `for` attribute should match its associated `input`’s `id`, rather than its `name`. Maybe the fact that it’s wrapped in a `hidden` `div` made me think it doesn’t matter as much?

I guess this makes sense because not every `input` will require a name, while the `id`'s function is to assign it a unique handle within the HTML.

Again, validation is making me think through how I’m using my HTML to aid accessibiity and meaning.

## The autocorrect attribute is invalid

Here’s some markup from my comment form (I’ve removed the `class` attribute):

```
<input autocorrect="off" required type="text" name="name" id="name">
```

This too is invalid because I’ve used the `autocorrect` attribute. However, I decided not to remove it because I feel autocorrecting this field makes for a poor user experience – it’s also plain rude suggesting a name is somehow wrong because it’s not in the device’s dictionary.

Have I made the right decision? Will this cause a problem on some device and browser combinations? I don’t know, but the fact it’s not valid HTML at least makes me consider these possibilities.

## Inline svgs shouldn’t have an alt attribute

I have a logo. It’s a transmission tower. It’s an inline `svg`.

<svg role="img" class="dib v-mid f5" id="TransmissionTower" aria-labelledby="TransmissionTowerTitle" viewBox="0 0 24 24">
                            <title id="TransmissionTowerTitle">A transmission tower</title>
                            <path fill="currentColor" d="M8.28,5.45L6.5,4.55L7.76,2H16.23L17.5,4.55L15.72,5.44L15,4H9L8.28,5.45M18.62,8H14.09L13.3,5H10.7L9.91,8H5.38L4.1,10.55L5.89,11.44L6.62,10H17.38L18.1,11.45L19.89,10.56L18.62,8M17.77,22H15.7L15.46,21.1L12,15.9L8.53,21.1L8.3,22H6.23L9.12,11H11.19L10.83,12.35L12,14.1L13.16,12.35L12.81,11H14.88L17.77,22M11.4,15L10.5,13.65L9.32,18.13L11.4,15M14.68,18.12L13.5,13.64L12.6,15L14.68,18.12Z" />
                        </svg>

Here’s the valid HTML (`class` attribute removed):

```
<svg role="img" id="TransmissionTower" aria-labelledby="TransmissionTowerTitle" viewBox="0 0 24 24">
	<title id="TransmissionTowerTitle">Home</title>
	<path fill="currentColor" d="M8.28,5.45L6.5,4.55L7.76,2H16.23L17.5,4.55L15.72,5.44L15,4H9L8.28,5.45M18.62,8H14.09L13.3,5H10.7L9.91,8H5.38L4.1,10.55L5.89,11.44L6.62,10H17.38L18.1,11.45L19.89,10.56L18.62,8M17.77,22H15.7L15.46,21.1L12,15.9L8.53,21.1L8.3,22H6.23L9.12,11H11.19L10.83,12.35L12,14.1L13.16,12.35L12.81,11H14.88L17.77,22M11.4,15L10.5,13.65L9.32,18.13L11.4,15M14.68,18.12L13.5,13.64L12.6,15L14.68,18.12Z" />
</svg>
```

And here’s what I used before validation:

```
<svg alt="" viewBox="0 0 24 24">
```

The `alt` attribute is invalid here. That makes sense as I’m not using an image file which may or may not load and therefore require alternative descriptive text (or an empty `alt` value).

Removing the `alt` attribute then raised the question of how to make my logo accessible. I’ve opted to use a `title`/`aria-labelledby` combination that I _think_ works. Regardless, the validation process got me researching `aria` and accessible icons and images.

## Why validate?

This is, of course, the wrong question. Why _not_ validate? Jens is right – it’s a basic part of being a professional frontend developer (which by the way I’m not).

What I’ve also found is that validation gets you thinking more deeply about your HTML, asking questions like <i>is this the right element to use?</i>, <i>how do I make this markup accessible?</i> and <i>could this markup cause me a future problem?</i> HTML isn’t difficult <i>per se</i> by design, but requires a thoughtful approach if you want to produce work that’s robust and accessible, especially in complex interfaces and applications.





