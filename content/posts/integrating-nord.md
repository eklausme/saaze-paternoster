---
title: "Integrating the Nord colour scheme into a Jekyll site using custom properties"
categories: ["web"]
date: "2021-08-14 12:00:00"
date: "2021-08-14 18:09:00"
---


There’s some nice web typography discussion going back and forth across micro.blog at the moment. Jessica wrote about [updating (rather than redesigning) her website](https://www.jayeless.net/2021/08/my-new-theme.html) and kindly referenced [my article on measure](../../posts/getting-measure-right/) – it contains a lot of good stuff, including some notes on modifying her colour scheme using the [Nord palette](https://www.nordtheme.com/).

This got me thinking about the colour scheme on my site, which has developed in a somewhat ad hoc way. Before I started using [custom properties](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties) I stuck to the [Tachyons palette](http://tachyons.io/docs/themes/skins/), which is broad and considered enough to provide background and foreground colours, borders, accents and link states in light and dark modes. Tachyons is easy to use (well, it is if you buy into its approach to CSS, which I have done for the last five or six years), following the atomic principle of applying styles directly in the HTML rather than a stylesheet. For example:

```
<div class="dark-blue bg-light-gray">

  <p>This paragraph will be dark blue
  on a light gray background.</p>

</div>
```

Rather than:

```
CSS:

.call-out {
  color: [a colour];
  background-color: [a colour];
}

HTML:

<div class="call-out">

<!--
Your call out content
-->

</div>
```

If I wanted a different colour I’d create a new class in my stylesheet, based on a custom property. So I ended up with Tachyons plus some other bits and pieces.

Custom properties are too good to not use in any project. They’re basically a set of variables you can refer to and even use in calculations in your CSS – ideal for creating a consistent but changeable palette. However, this represents a more “traditional”, non-atomic approach to CSS, where you’re working in the stylesheet.

You can still create classes from your custom properties, and that’s what I’ve done here. By using Nord as the base palette I can keep my colours consistent. Here’s how I’ve approached it.

## 1. Add the Nord palette as custom properties

Note, this sits in my `c.scss` file, where I store my custom properties and classes. Jekyll has an inbuilt `SASS` build process, and this is the last file I import.

```
:root {
    --nord0: #2e3440;  // darkest gray
    --nord1: #3b4252;  // darkerer gray
    --nord2: #434c5e;  // darker gray
    --nord3: #4c566a;  // dark gray
    --nord4: #d8dee9;  // light gray
    --nord5: #e5e9f0;  // lighter gray
    --nord6: #eceff4;  // lightest gray
    --nord7: #8fbcbb;  // green-blue
    --nord8: #88c0d0;  // lightish-blue
    --nord9: #81a1c1;  // blue
    --nord10: #5e81ac; // darker-blue
    --nord11: #bf616a; // red
    --nord12: #d08770; // orange
    --nord13: #ebcb8b; // amber
    --nord14: #a3be8c; // green
    --nord15: #b48ead; // purple

    // Lots of other custom properties

}
```

## 2. Add custom prorpeties for your website UI

This list will vary from project to project, but will almost certainly contain basic settings such as foreground and background colours.

```
--foreground: var(--nord0); // darkest gray
--secondary-foreground: var(--nord3); // dark gray
--secondary-background: var(--nord6); // lightest gray
--header-background: var(--nord5); // lighter gray
--night: var(--nord0); // darkest gray
--rule-color: var(--nord6); // lightest gray
--field-border-color: var(--nord3); // dark gray
--light-border: var(--nord6); // lightest gray
--brand-bg: var(--nord11); // red
```

Note one of the many fantastic things about custom properties – they can take the value of other custom properties.

## 3. Create classes you can use in your HTML

I use a `c-` namespace to keep my custom and Tachyons classes separate.

```
.c-foreground {
  color: var(--foreground); // Nord0
}

.c-header-bg {
  background-color: var(--header-background); // Nord5
}
```

## 4. Add classes to your templates

```
<header class="c-header-bg">

  <!--
  Your header HTML.
  It will have a Nord5 background color.
  -->

</header>
```

The nice thing about this system is that I can use Nord as source for _all_ colours, but, if I do decide I want to change my theme, I’ll only need to edit my custom properties.
