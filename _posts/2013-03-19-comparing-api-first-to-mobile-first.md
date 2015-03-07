---
published: true
layout: post
title: Comparing API-First to Mobile First
author: Evan
author_link: http://evantahler.com
categories:
- Teams
- Engineering
- Design
---

You may have been wondering how API-First compares to Mobile-First.  A quick google search will show that that there is a very popular trend currently called "Mobile First" asserting that for many applications, it is best to skip the web and start on the phone with an app or mobile-only site.  Startups and Enterprises alike are embracing this trend.  How does API-First react to this?

#### API-First asserts that Mobile-First is just as harmful as Web-First as you are still building for only one expression of your application.  However, you might be building API-First already and not even know it!

I'm certainly not an expert in your business, and perhaps your audience really is a mobile-first demographic.  That's great and that should be your first target.  However, designing for one use case will still make it harder to expand to the second and third platforms.  More importantly, most  applications which started on Mobile often spread quickly back to the web.

A great example of this is Instagram.  Instagram was one of the fastest-growing mobile apps of the past 5 years, and they were recently acquired by Facebook.  They have been *religious* in their focus on first iOs-only and then mobile-only.  This was the correct call for their business and the team they had.  Product focus is important.  

Very quickly, users wanted a way to see their photos on the web, but Instagram didn't have the time to make a website with the same quality as their iPhone app.  What they could do however was open up their API.  It turns out that while Instagram was developing a mobile app first, they needed to power it with an API, and split their team working on both.  Because they had such a robust API to power the iPhone, they could easily make it available externally.  A number of websites popped up to allow folks to view their photos and collections online, meeting the demand, and Instagram didn't have to do much work at all.

While this author is opposed to "Mobile-First" the good news is that if your application has an online component, you are probably developing API-first as well.  They are not mutually exclusive.  However, I do still feel that allowing your use-cases to be guided only by one expression of your application is likely to lead to negative consequences down the road.
