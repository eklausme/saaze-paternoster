---
title: "Notes on marking up two navigation lists on the same HTML page"
date: "2021-10-09 15:04:00 +00:00"
categories: ["web"]
---


I tweak this website’s navigation on a regular basis. It’s a fairly low stakes pursuit as the site is simple enough to have no navigation at all – I could perhaps just link to the latest posts and categories on the home page. If I do want to create a navigation menu there are only a handful of pages to deal with, and just three types of post.

At the moment I’m using two navigation menus. At the top of every page, you’ll see links to home and my three post categories – posts, links and notes. At the bottom, there’s a more complete menu, which adds links to the About, Contact and Search pages.

What’s the best way to mark this up?

Obviously, we have the `nav` element:

> The `nav` element [represents](http://www.w3.org/TR/2011/WD-html5-20110525/rendering.html#represents) a section of a page that links to other pages or to parts within the page: a section with navigation links. <cite>[HTML5: Edition for Web Authors](https://www.w3.org/TR/2011/WD-html5-author-20110809/the-nav-element.html)</cite>

And we can use as many `navs` as we like:

> In the following example, there are two `nav` elements, one for primary navigation around the site, and one for secondary navigation around the page itself.

So one approach could be to use a `nav` element for both navigation areas. But this doesn’t seem quite right as the element is intended for  _major_ navigation blocks.

> Not all groups of links on a page need to be in a `nav` element — the element is primarily intended for sections that consist  of major navigation blocks.

On my page, we have two versions of a single list, which suggests that only one of them should be major – whatever that means. In this case I’m interpreting “major” as the complete list, which sits in the website footer. Note, _where_ the markup occurs in the document is unimportant; we’re only considering its meaning.

So I use one `nav`, which sits in the document’s `footer`. The navigation menu at the top of the page is wrapped in a `div`. If the navigation menus were serving different purposes – for example, if one of them was providing a list of categories – I may have used two `navs`, differentiated by [`aria-label` attributes](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Techniques/Using_the_aria-label_attribute).

This approach is further justified when we consider what the `nav` element is for. Its main purpose is to provide assistive technology with a landmark so navigation can be identified, and linked to, in a page summary. The gov.uk accessibility blog has a good article on [using HTML elements to create a structural page summary for screenreaders](https://accessibility.blog.gov.uk/2016/05/27/using-navigation-landmarks/). In this light, it wouldn’t make much sense to give screenreaders two navigation landmarks for slightly different versions of the same set of links.

This is a useful way of thinking about how to use HTML elements meaningfully. The spec rarely provides a black and white answer to the question <i>How do I use the x element?</i> as it will often depend on what you’re writing and the user’s context. Many users will take advantage of the page’s visual design and conventions – for example, we can be certain a list of links across the top of the page will serve as website navigation. Those of us unable to use visual cues will rely on how the page author has used landmarks; if they’ve simply used the “correct” elements without considering how a screenreader renders them, it can result in potentially repetitive and frustrating experiences.





