---
date: "2022-11-06 18:11:47"
title: "Fixing comments"
hide-from-twitter: true
has_image: false
---

Realised Airtable only displays a max of 100 records on each API request page, which means some comments weren’t appearing. Fixed (or cludged, rather) by creating a Jekyll collection for each page and `concat`ing them into one comments array. Not a longterm solution, but then it took me over a year to get more than 100 comments 😁
