---
date: "2021-09-19 09:54:00"
title: "Automating webp in Jekyll"
---


So, we have [a plugin which appears to trawl through a folder of images and output `webp` versions](https://github.com/sverrirs/jekyll-webp). I see in the config you can opt to replace the existing extension (`png`, `jpg` etc.) or append `webp` to it (resulting in a filename like `image.jpg.webp`). Second option sounds best as it will avoid having to do some string manipulation with the filename in the `figure` and `image` includes (i.e. replace `jpg` with `webp`). Assuming the first build will be the most painful as hopefully it checks for an existing `webp` file before creating a new one. Let’s see.
