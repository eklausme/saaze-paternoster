---
title: "Automating webp production in Jekyll"
categories: ["web"]
date: "2021-09-19 12:00:00"
date: "2021-09-19 14:24:00 +00:00"
---


[Assuming you’re happy using `webp`](/paternoster/posts/should-I-use-webp/) – a good quality image format that’s significantly smaller than `jpg` – you’ll need to provide a fallback file that every browser can display. You can do this by using the `picture` element. For example:

```
<picture>

  <!-- For browsers that can display
  webp files -->

  <source srcset="your-image-in-webp-format.webp" type="image/webp">

  <!-- For browsers that can’t display
  webp files -->

  <img src="your-image-in-jpg-format.jpg" alt="Alt text" class="bunch of classes">

  <!-- Note that all additional attributes,
  such as class and alt,
  are added to the img element,
  and will also apply to the source image. -->

</picture>
```

If you have a [Jekyll](https://jekyllrb.com) website with hundreds of posts and images in `jpg` format, you’re not going to retrospectively create new `webp` files and then update your HTML. Ideally, you want a system that:

- automatically generates `webp` files from your existing images
- automatically generates the correct `picture`-based HTML in your Markdown files
- allows you to use one, non-`webp` file when you create future posts

It is possible. In this guide I’m going to assume you:

- know how to install a Jekyll plugin
- generate image HTML with includes (e.g. with a file called `figure.html`)

There may be other ways, but this is how I do it.

## 1. Install the jekyll-webp plugin

[jekyll-webp](https://github.com/sverrirs/jekyll-webp) handles the automatic generation of  `webp` files from `jpg`, `jpeg`, `png`, `tiff` and, if desired, `gif` files. It goes through your designated image folder and creates `webp` files should they not exist. Note, it puts them directly into your `_site` folder, rather than the source directory (which will save you a lot of remote build minutes) and retains the original files.

## 2. Configure the jekyll-webp plugin

As with most plugins, you can configure some settings in Jekyll’s `_config.yml` file. Here’s what I changed – you may want to change other settings depending on your website configuration:

- Set your outputted `webp` quality on a scale of 1-100. The default setting is `75`, which appears to hit a sweet spot of quality and smaller file size.
- Tell the plugin where you store images. In my case, this is in an imaginatively named `/images` folder (keep the preceding slash)

I also wanted to change the `append_ext` setting to `true` so that the plugin appended `webp` to the filenames it outputs. For example, instead of outputting a new file called `image.webp` I wanted `image.jpg.webp`, as this would make the next stage simpler. Unfortunately, this doesn’t seem to make any difference to the `webp` filename <span role="img" aria-label="Shrug">🤷🏻‍♂️</span>.

Here are my settings:

```
# jekyll-webp settings

webp:
  enabled: true

  # The quality of the webp conversion 0 to 100 (where 100 is least lossy)
  quality: 75

  # List of directories containing images to optimize, nested directories will only be checked if `nested` is true

  # By default the generator will search for a folder called `/img` under the site root and process all jpg, png and tiff image files found there.
  img_dir: ["/images"]

  # Whether to search in nested directories or not
  nested: false

  # add ".gif" to the format list to generate webp for animated gifs as well
  formats: [".jpeg", ".jpg", ".png", ".tiff"]

  # File extensions for animated gif files
  gifs: [".gif"]

  # Set to true to always regenerate existing webp files
  regenerate: false

  # Local path to the WebP utilities to use (relative or absolute)
  # Omit or leave as nil to use the utilities shipped with the gem, override only to use your local install
  webp_path: nil

  # List of files or directories to exclude
  # e.g. custom or hand generated webp conversion files
  exclude: []

  # append '.webp' to filename after original extension rather than replacing it.
  # Default transforms `image.png` to `image.webp`, while changing to true transforms `image.png` to `image.png.webp`
  append_ext: false
```

## 3. Use includes to generate your picture HTML

I’ve used a `figure.html` include to generate `figure`, `img` and `figcaption` HTML for many years. As we want to change what we output, we’ll need to edit this. This will be the only file we need to edit.

Here’s what the current include looks like (with classes and additional Liquid removed):

```
{% raw %}
<figure>

  <img src="/images/{{ include.url }}" alt="{{ include.alt }}">

  <figcaption>{{ include.caption }}</figcaption>

</figure>
{% endraw %}
```

And here’s what we use in our Markdown posts:

`{% raw %}![Image alt text.](https://thisdaysportion.com/images/image.jpg "Image alt text.")
<figcaption>Caption text</figcaption>{% endraw %}`

We can change our include so it generates a `picture` element and automatically creates a `webp` filename:

```
{% raw %}
<!--
Automatically create a webp filename.
The jekyll-webp plugin will have created
this file.
It’s in your _site folder.
-->

{% assign webp_filename = include.url | replace: ".jpg", ".webp" | replace: ".jpeg", ".webp" | replace: ".png", ".webp" | replace: ".tiff", ".webp" %}

<figure>

  <picture>
    <!-- Use the webp file -->
    <source srcset="/images/{{ webp_filename }}' type="image/webp">

    <!-- Fallback to the file you added -->
    <img src="/images/{{ include.url }}" alt="{{ include.alt }}">

  </picture>

  <figcaption>{{ include.caption }}</figcaption>

</figure>
{% endraw %}
```

Note that **we don’t have to change what we’ve already entered in our posts possibly hundreds of times** as we are passing in the same variables to the include. Nor do we need to create any new images. Our include automatically generates the correct `webp` filename by replacing the existing extension in the `url` with `webp`, just as the plugin does.

For the full code, [see the repo](https://raw.githubusercontent.com/leonp/thisdaysportion/master/_includes/figure.html).
