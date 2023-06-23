---
title: "Some notes on measure (or line width) on websites"
categories: ["web"]
feature: true
hide-from-twitter: true
sub: We need to consider several factors when setting measure (or line width) on a  screen. Luckily, humans are pretty resilient when it comes to reading, so we can  enjoy some flexibility.
date: "2021-08-01T18:11:00.000+00:00"
series: microtypography
---

<i>Measure</i> is a typographic term for line width. It’s one of the key elements of [micro-typography](https://en.wikipedia.org/wiki/Microtypography) on the web – along with font family, font size, leading (or line height), letter and word spacing and font weight. These elements are fluid (especially on screens) and a mixture of (near) science and art. They also affect each other.

![An example paragraph from my website.](https://thisdaysportion.com/images/measure.png "An example paragraph from my website.")
<figcaption>The measure on this website.</figcaption>

In this article I’m concentrating on measure and how it works with longer texts, such as blog posts.

{% include series-list.html %}

## What we’re trying to achieve

Our most important task is to make our text as comfortable to read as possible. That may seem obvious, but sometimes we might change our measure for a different reason – normally to make our text _look_ better. For example, we might want to make the measure wider so our blog post doesn’t leave acres of white space on a wide screen monitor. Conversely, we might make it narrower in order to lengthen our paragraphs, thereby creating a less fragmented looking text.

It’s worth introducing a principle here that will apply to all our web typography: _We design text to be read, not looked at_.

## How we read

When we read our eyes <i>fixate</i> on points within a line of text for about 100-500ms, taking in information. The movements between these fixations are called <i>saccades</i>, and last for 20-40ms. Note that we also <i>regress</i>, i.e. return to previous points within the text. Saccades are one of the body’s fastest actions.

Reading is therefore not a smooth process; it consists of a series of sudden, muscular movements between moments where the eye stops and takes in information. When we reach the end of a line, and are satisfied we’ve understood it correctly, the eye then has to make a longer, backwards movement and locate the next line. This combination of sudden back and forth movements within lines, and longer, sweeping movements between lines is what makes reading tiring.

## What measure needs to do

Our measure needs to find a balance between the number of saccades, regressions and shifts between lines. Note that the actual line length on a screen is mostly unimportant, which is one reason for using a relative unit (e.g. `em` or `rem`) when declaring our line width.

Fixations don’t fall precisely between words, but the more words you have in a line the more movements you’ll need to read it. Some guides will suggest an ideal measure in terms of characters, but because of the relationship between the number of words and saccades and regressions, I prefer to express this as a number of words. Note that this means that some languages will require wider measures than others because of their word length; German requires a wider measure than English, for example.

_The ideal reading measure is 10-15 words per line._

## Setting measure

Because people read differently, and lines of the same length will consist of different numbers of words depending on the content, writer and their style, this is a matter of judgement. The best way to find the _right_ measure is to experiment: use a real text and count the number of words over a series of lines with different measures.

![An example paragraph from my website.](https://thisdaysportion.com/images/example-paragraph.png "An example paragraph from my website.")
<figcaption>Use real text to guage the ideal measure. This text consists of lines of 11-14 words.</figcaption>

We can set our measure using the CSS `max-width` property:

    .measure {
    	max-width: 30rem;
    }

And then use this HTML:

    <article class="measure">

    	<!-- your article -->

    </article>

By using `rem` rather than `px` our measure will always be relative to the `font-size` we declare on our `html` element. If we decide to change our base `font-size`, the measure will change accordingly. Take this example:

    html {
    	font-size: 118.75%; /* Will probably compute to 19px */
    }

    .measure {
    	max-width: 600px;
    /* Will always be 600px, regardless of our font-size.
    This is probably OK when the font-size is 19px */
    }

    .measure {
    	max-width: 30rem; /* Will probably compute to 570px */
    }

Later, we might want to change our base `font-size`. See what happens:

    html {
    	font-size: 150%; /* Will probably to compute to 24px */
    }

    .measure {
    	max-width: 600px;
    /* Will always be 600px, regardless of our font-size.
    This means fewer words per line when our base
    font-size computes to 24px */
    }

    .measure {
    	max-width: 30rem; /* Will probably compute to 720px */
    }

Always use `max-width` rather than `width`. If we use `width` the measure will remain the same, regardless of our screen width. This could cause a horizontal scrollbar to appear on a mobile phone screen.

## A note on large font sizes

In my experience, the actual width of a line of text on a screen is largely unimportant – it’s the number of words in the line that matters.

You’ll find some websites use really large fonts, which will result in wide lines, especially with a generous `max-width`. Take this example:

    html {
    	font-size: 150%;
    }

    .measure {
    	max-width: 40rem;
    }

This will probably give us a maximum line width of `960px`. This is not necessarily anything to worry about as our number of words per line, saccades and regressions would be the same if the `font-size` was set to `100%` and the line width computed to `640px`. It _does_ affect our leading (or line height), but that’s for another article (remember, all of these micro-typographical elements relate to each other).

## A note on narrow screens such as phones

So far we’ve been talking about setting a maximum width to establish our measure. On narrow screens, such as many mobile phones, we probably won’t hit that limit, and therefore won’t achieve our golden range of 10-15 words per line unless we set our `font-size` to something low, perhaps even below `100%`.

[Butterick advises we take this approach](https://practicaltypography.com/responsive-web-design.html):

> Regardless of screen width, the optimal line length is still 45-90 characters. As you test your layout, make sure that text elements stay within this range.

I don’t agree. We’re faced with a decision here – either we reduce the text size so it results in a 10-15 word line length, or we maintain a good font size, probably resulting in a measure of 5-7 words. I’d argue font size is more important than measure in making our text as readable as possible. Make sure you set a legible `font-size` for narrow screens and accept the measure won’t be ideal. Also bear in mind you’re going to get different results across different devices, so try and test on at least one low end and one decent phone.

## Art and science

Hitting on a good measure is dependent on a couple of set factors, namely `font-size`, and your typeface’s proportions. Take this example, where we use this CSS:

    html {
    	font-size: 118.75%; /* Probably 19px */
    }

    .measure {
    	max-width: 30rem; /* Probably 570px */
    }

But note the same text doesn’t result in the same number of words per line when we use different typefaces. IBM Plex Serif gives us 7-8 words while Source Sans Pro works out at 8-10:

![The same paragraph and proportions in two different typefaces.](https://thisdaysportion.com/images/plex-source.png "The same paragraph and proportions in two different typefaces.")
<figcaption>IBM Plex Serif is a bigger font than Source Sans Pro.</figcaption>

This is because IBM Plex Serif has larger glyphs than Source Sans Pro. As a consequence, you’d probably use a bigger `max-width` with IBM Plex Serif.

So that’s the science of measure, but we also need to consider how a text _feels_. This is largely a matter of taste – sometimes a slightly wider line just looks right with a certain typeface, or within a certain layout. Humans are fairly resilient when it comes to reading, and can deal with a wide range of different typographical factors. This provides an opportunity to say something beyond the actual words – as long as readability remains our primary concern.
