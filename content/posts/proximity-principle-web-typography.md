---
title: "Applying the principle of proximity to improve your web article typography"
categories: ["web"]
feature: true
date: "2021-08-29 14:32:00 +00:00"
series: microtypography
---


The <i>gestalt</i> principles are a set of rules that describe how humans organise what they perceive. One of them is <i>proximity</i>, defined as:

> …elements tend to be perceived as aggregated into groups if they are near each other. <cite>[Gestalt principles](http://www.scholarpedia.org/article/Gestalt_principles#Proximity_principle)</cite>

{% include series-list.html %}

In other words, when things are placed near each other (and conversely, further away from other things), we interpret them as a single entity. Take this diagram, where we perceive four clusters of dots as both four and two distinct objects:

![Groups of different sized dots forming four and two distinct entities.](https://thisdaysportion.com/images/proximity.png "Groups of different sized dots forming four and two distinct entities.")
<figcaption>The placement of the dots suggests both two and four distinct objects as the three right hand groups are placed close enough together to suggest a single grouping.</figcaption>

We can apply this very simple principle to our web typography in order to make the text more meaningful. Here are three examples.

## Move subheadings closer to their related content

We often break up longer articles into sections, each with its own heading. We can make a clearer entity out of a section by moving its heading closer to the following content and away from the preceding content.

![The same text twice with headings shifted closer to the proceeding content in the second image.](https://thisdaysportion.com/images/proximity-subheading.webp "The same text twice with headings shifted closer to the proceeding content in the second image.")
<figcaption>When we move subheadings nearer to the following content we create a clearer entity.</figcaption>

We could approach the CSS like this:

```
article p {
  margin: 1rem 0;
}

article h2 {
  margin: 2rem 0 1rem 0;

  /*
  Margins collapse, so the gap between the
  bottom of the subheading and the following
  paragraph will be 1rem, not 2 rem.
  The gap between the top of the subheading
  and the preceding paragraph will be 2rem.
  */

}
```

## Group article header elements further away from the content

Our article header will often consist of a couple of elements, such as the title and a paragraph containing some meta information – for example, the publication date and author.

Again, we can group these elements together to create a clearer entity.

![The same text twice with the header elements shifted closer together in the second image.](https://thisdaysportion.com/images/proximity-header.webp "The same text twice with the header elements shifted closer together in the second image.")
<figcaption>Drawing the title and meta information closer together makes the article header a more distinct “thing”. Note that the meta paragraph and article content seem part of the same entity in the left hand image because of the gestalt principle of similarity (in this case, the size and colour of the meta paragraph and content are the same).</figcaption>

Possible CSS:

```
article header {
  margin-bottom: 2rem;
}

article header h1 {
  margin-bottom: 0.5rem;
}

article header p {
  margin-top: 0;
}

article p {
  margin: 1rem 0;
}
```

## Group images and captions together to create a figure

We can apply exactly the same principle to figures consisting of an image (or table, code sample etc.) and an accompanying caption.

![The same text twice with the images and their captions shifted closer together in the second image.](https://thisdaysportion.com/images/proximity-figure.webp "The same text twice with the images and their captions shifted closer together in the second image.")
<figcaption>Images and captions naturally form a figure.</figcaption>

The CSS:

```
article p {
  margin: 1rem 0;
}

article figure {
  margin: 2rem 0;
}

article figure img {
  display: block;
  margin-bottom: 0.25rem;
}

article figure p {
  margin: 0;
}
```

## Proximity is simple but effective

The proximity principle is perhaps self-evident, but it’s worth making sure you consider it whenever you’re deciding on your article or post typography. It provides a quick, reliable way to group together related pieces of content into coherent units, thereby making your text easier to understand.
