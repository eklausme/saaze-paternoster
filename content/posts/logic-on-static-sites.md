---
title: "Logic on static sites (and the advantages of failing catastrophically but knowably)"
date: "2022-03-22 21:31:00"
categories: ["web"]
---


A while back Max helpfully summarised [where _logic_ can take place on Jamstack (as opposed to plain static) websites](https://css-tricks.com/where-does-logic-go-on-jamstack-sites/). We need logic if what your web page displays depends on when it’s requested. Max provides the example of events. You probably don’t want to display events that have passed, and you might express the logic like this:

````
// An example of logic
// A decision needs to be made, and now!

if the event takes place in the future
  display it
else
  don’t display it
````

On the other hand, something like a blog post doesn’t normally need any logic because you’ll want to display it as is whenever it’s requested.

(Note: In the comments, [Dustin identifies a better, fifth place to perform logic](https://css-tricks.com/where-does-logic-go-on-jamstack-sites/#comment-1761935), namely the API. So instead of requesting all events and then performing some logic on them at the compilation stage or in the browser, the logic is performed wherever you store the events. This would presumably mean simply adjusting your endpoint query to something like `https://website.com/events-api?time=future`.)

I’ve got some experience in this area having created a fairly complex events system for the last version of the Suffolk Libraries website. As I was running [a “truly” static site](/paternoster/posts/static/), the logic took place in step two, when the site was compiled.

Max is right when he points out that running the logic before it’s actually required is not ideal. In the example of events, the further the compilation time is from the time the page is requested by a visitor, the more likely the logic will be wrong, and display an event that’s passed. The solution is to run lots of automated builds; and it’s at this point you might consider reaching for a non-static/non-Jamstack approach to perform the logic on the server.

In practice this problem was trivial. The Suffolk Libraries website would automatically compile and build early every morning, only displaying events which began after this time. If you visited the site at 4pm you would still see an event that had ended at 10am, but because most events followed a pattern, knowing the next one would occur at 10am next Monday could be useful. Besides, each edit pushed to Github would fire a site build, meaning the site was updated several times a day, apart from at weekends.

What are the potential problems of moving the logic to step four, i.e. the browser and javascript? Most obviously, if javascript isn’t working then the visitor gets no logic, and potentially no events at all, depending on how much the page relies on javascript.

Alternatively, javascript _could_ be running, but not very well. Connectivity might be patchy, or your device unable to cope with anything too intensive without slowing to a crawl. The result could be difficult to gauge for the website owner; analytically, the page was visited and <i>x</i>% of devices are running javascript, so that’s a success. But the visitor may have just given up after waiting 20 seconds for the page to load properly.

Of course, compilation can also fail, and when it does it fails for everyone. The page will load, but <i>sans</i> logic – so yesterday’s events would appear. While this is more catastrophic than, say, 5% of your pages not working fully due to problems on the device, it does have the advantage of being a clear failure in one place. We can manage our own servers and deployments, but have no control over our visitors’ devices, browsers or network connections.







