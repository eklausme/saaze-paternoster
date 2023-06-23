---
title: "Some notes on using clamp and vw to set font size"
date: "2022-04-30 17:50:00"
categories: ["web"]
series: microtypography
---


There are many ways to set a base font size on your website. When I wrote about this last year, I was [using media queries to up the base font size](/paternoster/posts/setting-responsive-fonts-sizes-in-CSS/) as the screen got wider. This works well enough, but poses three problems.

{% include series-list.html %}

Firstly, it’s verbose. You have to write a separate media query whenever you want to change the font size. Secondly, it results in font sizes that jump suddenly when an arbitrary screen width is reached – a single font size will apply across a broad pixel range, doing a lot of lifting. Take this example:

```
html {
  font-size: 118.75%;
}

@media screen & (min-width: 30em) {

  html {
    font-size: 125%;
  }

}

@media screen & (min-width: 60em) {

  html {
    font-size: 150%;
  }

}

@media screen & (min-width: 80em) {

  html {
    font-size: 175%;
  }

}
```

Assuming an `em` equates to `16px`, the browser will calculate the following base font sizes:

<table>
  <thead>
    <tr>
    	<th>Browser width (px)</th>
    	<th>Calculated base font size (px)</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
    	<td>479</td>
    	<td>19</td>
    </tr>
    <tr>
    	<td>480</td>
    	<td>20</td>
    </tr>
    <tr>
    	<td>959</td>
    	<td>20</td>
    </tr>
    <tr>
    	<td>960</td>
    	<td>24</td>
    </tr>
    <tr>
    	<td>1279</td>
    	<td>24</td>
    </tr>
    <tr>
    	<td>1280</td>
    	<td>28</td>
    </tr>
  </tbody>
</table>

You’ll note the browser uses the same base font size at widths of, say, `490px` and `950px`, but will increase it by `4px` when it reaches `960px`. This seems an unsatisfactory experience. Wouldn’t it be better if the font size increased more gradually in relation to the screen width? This is possible using more media queries, but we already have three.

Our last problem betrays a way of thinking rooted in the early days of mobile-first, responsive design. Our breakpoints are meant to kick in whenever a different type of device is used, or when a visitor flips their device orientation. In this case, it’s an attempt to provide different font sizes for mobiles, tablets/laptops then desktop monitors.

Of course, it’s impossible to know what type of screen a visitor is using. Some laptop – or even mobile phone – screens will contain more pixels than a desktop monitor. If we were able to relate our font size more closely to the screen width we’d no longer create arbitrary breakpoints for mobile, tablet and desktop monitors.

And we can do this in a single CSS declaration. Here’s what I’m using at the time of writing:

```
html {
	font-size: clamp(var(--min-font-size), var(--font-size), var(--max-font-size));
}
```

Without custom properties it’s…

```
html {
	font-size: clamp(118.75%, 1.9vw, 175%);
}
```

Which probably computes to…

```
html {
	font-size: clamp(19px, 1.9vw, 28px);
}
```

The `clamp` property has three values:

- A minimum value (in this case `118.75%`, which will most likely compute to `19px`)
- A desired value (in this case `1.9vw`, i.e. 1.9% of the browser viewport width)
- A maximum value (in this case 175%, which will most likely compute to 28px)

So we’re setting the base font size in a nuanced way – it’ll be 1.9% of the browser viewport width, but never below `19px` and never above `28px`.

## Things to bear in mind when using vw

Make sure you test your website scales predictably up to 200% with `cmd +` in MacOS and `ctrl +` in Windows and Linux-based distros. If it doesn’t, you’ll have [an accessibility problem for users who alter default text sizes](https://adrianroselli.com/2019/12/responsive-type-and-zoom.html).

[Browser support for `clamp` and `vw` is good](https://caniuse.com/?search=clamp()), and you can offer a fall back by setting a normal font size before using `clamp`. For example, my complete font size CSS is:

````
html {
	font-size: 118.75%;

	// If the browser (e.g. IE) doesn’t support clamp the following will be ignored and font-size set to 118.75%

	font-size: clamp(var(--min-font-size), var(--font-size), var(--max-font-size));
}
````

`clamp` and `vw` work well. Setting predictable looking type across different devices is difficult using any method because there are so many variables involved. On this laptop (an early 2015 MacBook Pro with a 13-inch Retina screen and a reported 2560 × 1600 resolution), if I use a `2.1vw` I get a `27px` font size when the browser is maximised, which is a bit like being battered around the eyeballs. On my seemingly similar work laptop (a 2018 MacBook Pro with a 15-inch Retina screen and a 2880 × 1800 reported resolution) I get a `28px` font size, but that seems just right. Reducing the suggested size to `1.9vw` results in a `24px` on the older Pro, which is <span role="img" aria-label="just right">👍</span> – to my eyes, at least.

It’s worth checking how your type scales on different devices and by resizing your browser as much as possible. You may find the actual scaling takes place within a fairly narrow range of widths because the `min` and `max` values are restrictive, or the `vw` maths just work out that way. Whether this is a problem is a matter of judgement. For example, setting lower and upper limits of `19px` and `21px` may be the best approach in a multi-column layout, while a single column allows more freedom.

As with all typography, it’s a mixture of art, science and experimentation. Disparate settings affect each other. At the moment, I’m liking large sans serifs with a short measure and a tight leading; finding a calculation that (maybe) works with that combination has taken some fine tuning.









