---
published: true
layout: post
title: Design Overview
author: Evan
author_link: https://evantahler.com
categories:
- Teams
- Design
---

The beauty of being a designer on an API-First project is freedom.

### The Freedom to be work at your own pace

When starting a feature or a new project, teams always conclude the inception with a clear API document drafted.  While this document is very likely to change as the teams develop the product, knowing exactly which information you need to collect from your users, and how to deliver it, allows the engineering team and the design team to decouple their work.  

Having a clear API to orient yourself around, you can be sure that regardless of whether or not the server is ready, you can deliver functional HTML pages / partials which will work when integrated.

### The Freedom to Test

With the back end decoupled from your work (whether you are working on HTML, a mobile device, or a desktop application), you can be sure that your changes will not adversely harm the application.  With that in mind, it is now simpler and faster to iterate on your designs.  You can even have multiple versions of the front-end running in parallel all speaking to the same API.  

### The Freedom to Explore and Easily Express Changes

As you test, odds are you will end up wanting to make a change to the API.  With a clear way to express exactly what changes are needed (a new filed in a form and a change to the `userAdd` API or a new `resumeRegistartion` API), you can be sure that both you and the engineers will have the information needed to make an accurate priority and difficulty estimation... and you can go back to step 1 and begin working on this new feature in parallel. 