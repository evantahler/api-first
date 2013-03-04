---
layout: default
title: API First - Engineers
---

# Engineers

### Introduction

API-First development can also assist in making your scaling and operations more efficient.  API-First development can often be seen as taking the MVC paradigm to next step as you will be formally decoupling your views from your application logic (which we have been calling actions).  Many API-first applications take the form one API-sever (perhaps written in Node.js or Rails), and many separate View applications.  The view applications may take the form of a static HTML site(s), single-page-apps, or your mobile applications.  Separating these applications may be tedious at first, but there are many positives:

### Deployment Safety

Decoupling your API layer from your views also helps with a rapid / continuous deployment culture.  The smaller units of code which you need to deploy reduce the risk of each deployment.  If your front-end teams are updating the interface, you know there is no risk of corrupting the data in the database.  Conversely, if your API team is running a data migration, you know there is no risk that the front-end website will go down.  We previously discussed some of the benefits for API change management (/v1, /v2, etc).  This also is a benefit to deployment because you can be sure that the addition of a new API feature (with a new version) will not have an adverse effect on an existing feature.

Changing your views no longer has any risk of changing your API.  Your front-end teams can now iterate faster and worry-free with the knowledge that any deployment they do cannot harm the API (and vice-versa)

### Scaling Only what You Need

Take a common Rails application as an example.  A running Rails app may serve both the needs of a customer-facing website and API via separate routes.   However, the thread required to serve either a WWW request or an API request is the summation of both of their loads.  If I have 100MB of view templates, these are all required to be present in-memory to serve just an API request.

Building your applications in an API-first way also allows you to think about the load profile of each part of your application.  To scale your API servers, you may need more CPU and RAM.  To scale your asset servers for the now static front-end, you may want more disc space.  You may want to develop your API in Sintata or Node.JS, but you may only need a static Nginx server for your views.  Splitting your application's load profile as we have been describing here will allow you to scale portions of your application as needed, not every potentially unneeded part.  Operationally, maximum re-usability, modularity, and scale is reached through separating API & data from view hardware loads (in true unix-style).

### Enforcing Best Practices and Using the Best tool for the Job

If your consumer-facing application no longer needs to be coupled to your back-end, you now have the freedom to explore alternative deployment strategies.  Want to host your static site on S3?  You can! Want o explore a new UI Framework against the same endpoint? Now you can!  API-First embraces the client-side logic trend.

### Embracing the Unix Philosophy

Smaller applications are easier to test and maintain.  Smaller applications run faster.  It is easer to ramp up new people up on smaller application.