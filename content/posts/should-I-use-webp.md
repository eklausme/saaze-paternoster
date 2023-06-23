---
date: "2021-09-18 19:13:00 0000+00:00"
title: "Should I use… webp?"
categories: ["web"]
---


`webp` is a an image format that produces good quality images that are significantly smaller than `jpg`. If you want to add them to a web page, they work in the same way as any other image:

```
<img src="image-url.webp" alt="Alternative text">
```

And you are thinking “Great! I will now use webp images” because they’re easy to produce with a tool like [Squoosh](https://squoosh.app) and they will make your website leaner. Images and fonts are the two assets that add more _weight_ to a page than any other.

However, not all browsers support `webp` and may simply behave like the the image doesn’t exist if you try and use it – i.e. display the `alt` text instead (yet another reason to ensure you use `alt` text, incidentally).

So you’re maybe thinking you shouldn’t use `webp`.

Well, no. You can in fact use the HTML `picture` element to say to browsers: <i>if you can handle `webp` serve it up, if not use this fallback instead</i> (which will be one of traditional formats, such as `jpg`). The HTML will look something like:

```
<picture>

  <source srcset="your-image-in-webp-format.webp" type="image/webp">

  <img src="your-image-in-jpg-format.jpg" alt="Alt text" class="bunch of classes">

  /* Note that all additional attributes,
  such as class and alt,
  added to the img element,
  will apply to the source image. */

</picture>
```

The nice thing about `picture` is that if your browser doesn’t understand `picture` and `source srcset` it just ignores them and uses `img`.

That’s great, but it does mean you need to prepare two images every time you want to add just one to your web page. This soon becomes very tedious. It’s possible to have a build process in place that automatically does this work for you, or use an external service like [Cloudinary](https://cloudinary.com/). That’s OK if you can afford it/have the requisite technical knowledge, but seems laborious just to serve an image.

So maybe the question should be <i>can I use `webp` instead of `jpg`</i> in a simple `img` tag?

That brings us to a [Can I Use? judgement](https://caniuse.com/webp) And I think the answer is probably <i>no</i>, but it may depend on who your users are.

By my calculation, at the time of writing around 7% of users won’t be able to see `webp` images. In and of itself, this is probably too many.

But we can drill down into who these users are, and see that most of them are using Safari desktop, along with IE. The interesting thing is that 7% becomes quite a bit lower if your Safari desktop users have installed MacOS Big Sur.

So if you’re happy making _that_ judgement, fill your boots with webp.

The other thing to consider is how badly `webp` fails. When a browser doesn’t understand `display: grid` it will still display the HTML and style it using any other CSS you throw at it. When `webp` images fail, they don’t display at all. Just displaying `alt` text is OK for an emergency, but not a good example of _graceful_ degradation.

Could be a long wait until `webp` replaces `jpg` simply.

