---
title: "Using figures for article listings"
tags: ["HTML", "accessibility", "semantics"]
date: "2020-01-01 12:00:00"
date: "2023-06-17 08:20:00"
---


Wondering… is using figure and figcaption the best way to markup a list of links to articles with dates? Such as…

This article title
17 Jun 2023

That article title
12 Jun 2023

The title would be a link wrapped in a div, the date a time wrapped in figcaption. A figure would wrap both elements, linking the title and date. Using article with a heading and no content beyond a date doesn’t make sense.
