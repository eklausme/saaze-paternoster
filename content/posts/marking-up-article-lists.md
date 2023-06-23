---
title: "Using figures or articles (or nothing) to markup a list of article links"
date: "2023-06-17 10:16:00"
categories: ["web"]
twitter-note: "What’s the best way to markup your blog archive page if it consists of a list of links and publication dates?"
tags: ["HTML", "Markup", "Accessibility", "Semantics"]
---


Most blogs will have some form of archive page that lists posts. Sometimes you might provide some blurb, other times just a title and a date. It might look like this:

![A list of blog titles with their publication dates.](https://thisdaysportion.com/images/figure-listing.jpg "A list of blog titles with their publication dates.")
<figcaption>You may want to remove the bullet points in your CSS.</figcaption>

Let’s say the titles link to the article itself. What’s the best way to mark this up?

## Option 1: a list with items, links and times

The simplest way to do this is by using a list of links:

```
<ul>
	<li><a href="url1.html">An article title</a> <time>17 June 2023</time></li>
	<li><a href="url2.html">Another article title</a> <time>10 June 2023</time></li>
	<li><a href="url3.html">Yet another article title</a> <time>03 June 2023</time></li>
</ul>
```

This makes sense. We’re using an unordered list as a screenreader will announce how many articles we’re listing. Not many downsides I can think of, except there being no semantic relationship between the post title and its publication date: they’re both just bits of text inside a list item.

## Option 2: a list of articles with headings and times

Looks something like this:

```
<ul>
	<li>
		<article>
			<h2><a href="url1.html">An article title</a></h2>
			<time>17 June 2023</time>
		</article>
	</li>
	<li>
		<article>
			<h2><a href="url2.html">Another article title</a></h2>
			<time>10 June 2023</time>
		</article>
	</li>
	<li>
		<article>
			<h2><a href="url3.html">Yet another article title</a></h2>
			<time>03 June 2023</time>
		</article>
	</li>
</ul>
```

Using this technique we keep the benefit of our list and the title and publication are implicitly linked because they sit within an `article`.

But our article doesn’t have any content, just information _about_ the article – which means it’s not really an article. Even MDN’s example of [very short weather updates](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article) contains some content, however terse (<q>Rain</q>, <q>Periods of rain</q> and <q>Heavy rain</q>).

Also, consider how a visitor using a screenreader may experience this pattern. Articles have to include a heading, which will serve as a landmark within the page that summarises the following content. Again, there is no following content to summarise, just a date.

## Option 3: a list of figures with time captions

You can use figures for more than marking up images and captions:

<figure>
  <blockquote>
    <p>The figure element represents some flow content, optionally with a caption, that is self-contained and is typically referenced as a single unit from the main flow of the document.</p>
    <p>The element can thus be used to annotate illustrations, diagrams, photos, code listings, etc, that are referred to from the main content of the document, but that could, without affecting the flow of the document, be moved away from that primary content, e.g. to the side of the page, to dedicated pages, or to an appendix.</p>
  </blockquote>
  <figcaption><cite><a href="https://www.w3.org/TR/2011/WD-html5-author-20110809/the-figure-element.html">HTML5: Edition for Web Authors</a></cite></figcaption>
</figure>

I think a link to an article and an associated publication date _could_ meet these criteria:

- The elements are self-contained (which I take to mean they are related to each other and form a complete, understandable thing on its own)
- They could be moved away from the main document without affecting its flow
- They can be moved to dedicated pages (such as an archive)

As a `figcaption` <q><a href="https://html.spec.whatwg.org/multipage/grouping-content.html#the-figcaption-element">contains additional information about the source</a></q> (note the example contains a `time`) this pattern perhaps forms a good candidate for marking up a list of article links. It could look like this:

```
<ul>
	<li>
		<figure>
			<div><a href="url1.html">An article title</a></div>
			<time>17 June 2023</time>
		</figure>
	</li>
	<li>
		<figure>
			<div><a href="url2.html">Another article title</a></div>
			<time>10 June 2023</time>
		</figure>
	</li>
	<li>
		<figure>
			<div><a href="url3.html">Yet another article title</a></div>
			<time>03 June 2023</time>
		</figure>
	</li>
```

We have the benefits of our list and a clear association between the title and its publication date provided by the enclosing `figure`. There are no misleading headings. As a bonus, we can place the caption before or after the title, which we can’t do with an article’s title, which always has to be the first element within the article. The only problem I can see is that the title isn’t wrapped in a meaningful element.

And yet… does this make sense on a non-technical level? Are these actually figures we might read in a text, such as images and captions or code blocks and captions?
