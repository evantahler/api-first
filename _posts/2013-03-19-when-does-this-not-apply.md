---
published: true
layout: post
title: "When does this Not Apply?"
author: Evan
author_link: http://evantahler.com
categories:
- Teams
- Engineering
- Design
---

In this post, I will explore some of the downsides of API-First development, and some of situations where developing in an API-First way may not be appropriate.

### I'm only making a website.  I don't need this.

The main "catch" of developing in an API-First way is that your first release will take longer.  There is no way around it.  There is additional overhead of creating 2 applications (your front end application and your backend API).  There is also additional cognitive overhead for everyone on the team to think not only about their pice of the puzzle (engineering, design, project management, product management), but also how to express their work in the terms of the agreed-upon API.

Doing all of this will slow you team down... at first.  **If you believe that your project will ONLY ever have one expression, then perhaps API first is not for you**.  

However, there are caveats: 

- Even if your project will only ever have one front-end expression (website, iPhone) right now, you can never be sure what the future will hold.  Building from an API to start is a valuable investment in your future.
- Even if your project will only ever have one front-end expression, there are benefits to being able to work on your "server" separate from your "views".  Do you want to experiment with different UIs without worrying about risk to your servers and data?  Do you want your engineers and designers to be able to develop in parallel without relying on each other?  You still may want to develop API-first.
- There are operational benefits to developing API first, mainly you can scale your infrastructure using only the parts you need.  You can scale/distribute your front end without effecting your API servers.  Currently, this takes the form of offloading all of your assets to something like Amazon s3 or Github Pages, and reducing the load on your servers, allowing you to do more with less.

There are many application where API-First doesn't apply.  For example, if you are building a video game with no on line component for just the iPhone, certainly don't waste time with externally facing APIs.  But, if you think you might also port your game to the android one day, it may make sense to extract and modularize as much as you can.

### I'm a very small team.  I can't use this

If you team is very small (1 developer, 1 designer) API-First Development may be too much overhead.  This is a very valid concern!  However, I have found that when I find myself in a group this small, we actually end up doing API-First development anyway! 

We probably didn't agree on a formal API document beforehand, and we probably never had an inception, but we are doing it none-the-less... it's simply a logical way to separate our work!  

If we would have taken the time to have an inception and flesh out the API ahead of time, often we would have saved ourselves some trouble when it came to integrate.  Often times, even though the features match, the variable names or language don't.  Re-Work is required to fix it.

### I'm a design shop, and I don't need to support this

You might be surprised to learn that you are already using an API.  Are you developing a WordPress theme?  You are the front-end consumer of WordPress' post and data APIs.  Are you using a PaaS to host this site (like Heroku or AppFog)?  If you are, you are using their storage and server APIs.

They made their API with some assumptions of what their customers would do, and how they might choose to implement sites on their platform.  This isn't a direct use of API-First, as you are buying a "complete" product from them, but you are bound by the rules of their API.

---

This list will be added to in the future.
