---
date: "2022-01-01 16:21:01"
title: "Imagining WordPress without themes"
categories: ["web"]
sub: ''
hide-from-twitter: false
in_reply_to: "https://www.binarymoon.co.uk/2019/09/the-end-of-wordpress-themes-is-in-sight/"
---

Ben Gillbanks foresaw [WordPress becoming a simpler, more standardised CMS where themes were no more](https://www.binarymoon.co.uk/2019/09/the-end-of-wordpress-themes-is-in-sight/) and website owners and editors tweaked a few typographical options:

> …I wonder if the stylesheet aspect of themes will also be consumed into core and themes will be deprecated. Stylesheets will be relegated to selecting fonts, and colours; and setting sizes and spacings. Gutenberg will take care of the layout. This could easily be done by a plugin or in core directly. There are definite benefits to doing this from a user’s perspective – they will have full control of their site – but it’s going to result in some very boring website layouts.

Of course, this hasn’t happened – yet – but it strikes me as a good idea.

At the moment, WordPress editors create pages by selecting blocks and shifting them round the page – a block is a discrete item, such as an image, a prose block, a table, a button, or a more complex entity, such as a gallery. The WordPress core handles this with a system called [Gutenberg](https://wordpress.org/gutenberg/). But every WordPress site also needs a theme, a presentational layer that sits above whatever the website editor has created with Gutenberg. This makes for a complicated system – theme authors have to account for Gutenberg’s HTML, while editors have to check a theme works with however they’re using Gutenberg.

Ben is envisaging a system without the theme layer. Instead, editors would still use Gutenberg to create content blocks, but they’d also control their _appearance_ via CMS settings within the WordPress core, a function currently provided by themes. This is similar to [the ideal, theme-free blogging CMS I outlined](/paternoster/posts/perfect-blogging-through-typography/). The UI might look something like Firefox or Safari’s reader mode widgets.

Ben bemoans the fact that website layouts would be  handed from themes to the WordPress core, resulting in “very boring layouts” across the web. However, it’s not hard to imagine adding layout options such as configurable sidebars, footers and headers to Gutenberg. Besides, most WordPress themes consist of a navbar, hero image and a content area – they’re already samey.

There are lots of benefits to this approach. Most importantly, owners would enjoy a degree of control over the appearance of their website. This is, of course, a double edged sword; as I point out in my post, part of the CMS’s job should be to ensure that whatever styling choices owners and editors make, the front end remains accessible and readable. Theme authors are currently responsible for this, and your mileage may vary depending on their knowledge and experience. If the core did this properly, the public would, in theory, experience more accessible and usable websites.

Additionally, there’s a whole economy built on the provision of canned and bespoke WordPress themes. Website owners would no longer need to pay for cheap themes that didn’t do quite what they wanted, or for more expensive developers to build something that did.

Finally, getting rid of themes removes a source of instability. Poorly coded themes are prone to break or provide a means for hackers to weedle their way into websites.

Would this spell the end for theme developers? Probably, although I can see a place for experienced web typographers in this system rather than coders. They’d work in the CMS itself or provide reusable themes that hooked into a standardised appearance API. Instead of PHP, HTML, CSS and javascript, they’d be writing relatively simple `json` config files, in much the same way you [edit Sublime Text’s settings](https://www.sublimetext.com/docs/settings.html). Personally, I don’t think that’s a bad thing – focusing on accessibility and readability over wrangling a theme could be a more productive use of time, possibly resulting in better website owner and user experiences.
