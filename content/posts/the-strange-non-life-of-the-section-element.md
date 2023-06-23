---
title: "The phantom life of the section element and the mess of headings"
sub: Sectioning elements, headings and the section element itself are confusing. Perhaps that’s why authors tend to stick with a few  articles and leave the rest to divs and nested headings. At least that makes sense.
date: "2021-07-17 07:59:00"
categories: ["web"]
---


Scott O’Hara on [the accessibility of the `section` element](https://www.scottohara.me/blog/2021/07/16/section.html) (via [@Baldur Bjarnson](https://notes.baldurbjarnason.com/)):

> As far as what gets programmatically exposed to assistive technologies (AT), there is no discernible difference between the `<section>` and `<div>` that contain their respective `<h2>` elements.

Should we simply therefore discard `section` and replace it with `div`? Scott argues <i>no</i>, because it’s still more meaningful than `div`, and _could_ be used for other programmatic purposes.

One such purpose might be parsing articles and re-displaying them free of ads and poor typography, as Pocket does. However, we have a relatively well-establised set of class schemas to structure articles, especially `h-entry`, so it’s hard to see a developer using an inconsistently adopted alternative.

Perhaps a more pertinent question would be <i>is there any reason to start using `section`?</i> The answer is probably <i>yes</i>, but it does perhaps demonstrate how HTML5’s promise of a more semantic web never quite developed in the way we thought it might.

In fact, it’s a bit of a mess. Scott’s post reminds us that while we can use `footer` and `section` within, say, an `article`, we can’t use `header` (as I do on this site) because its scope isn’t defined by its parent. That means you should only use one, top level `header` on a page, which will in all likelihood house information such as the site title, logo and navigation.

While most sectioning elements such as `article` do expose a document structure to AT, and should, in theory, convey a hierarchy of nested articles, footers, sections etc., you’ll still need to remember to maintain a separate heading hierarchy.

If sectioning elements worked as they should, we’d only ever need to use `h1`s. But AT and search engines see headings, rather than sectioning elements, as the markers of new sections, so a document consisting solely of `h1`s would appear flat.

We’ve therefore ended up with a slightly weird, hybrid structure for pages that contain an article. I _think_ this example is right:

```
<header>
<!-- logo, title, nav etc. on every page -->
</header>
<main>
  <article>
    <div> <!-- header grouping, no headers here! -->
      <h1> <!-- title -->
      <p> <!-- some meta -->
    </div>
    <div> <!-- main content grouping, wouldn’t a <content> element be useful? -->
      <section> <!-- Let’s use it! -->
        <h2> <!-- section title, not an h1? -->
        <section> <!-- sub-section -->
          <h3> <!-- headings ignore sections -->
        </section>
      </section>
    </div>
    <footer>
      <!-- some more meta info, comments -->
      <h2> <!-- comments heading -->
      <article> <!-- a comment -->
        <h3> <!-- headings ignore every sectioning element! -->
        <p> <!-- the comment -->
      </article>
    </footer>
  </article>
</main>
<footer>
<!-- site wide (c) info, tool menu -->
</footer>
```

