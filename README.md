# api-first.com

Welcome to the git repository for `www.api-first.com`!

We've established API-first.com to evolve over time as teams experiment with our suggestions and share insights of their own.  You can contribute your thoughts, edits, comments, stories, and visions here. Feel free to challenge what we've written and share your learnings! 

## Where did the comments go?

Rather than have the community's knowledge burred in comments, we would rather let you contribute directly to the site.  This gives you first-class access to share what you know with the world.

## How can I help?

API-first will be stronger if we can learn from each other.

Right now, there are 2 parts of the site that need major help: the Community page and the Illustrations.  If you've given a relevant talk or written a related blog post, please submit to our community page.  We also need help turning our ugly process flows into beautiful illustrations.  If that is something you can help with, please let us know!

To contribute, please fork the site and send us a pull request with your changes.  GitHub has some [excellent free tools to help you](https://help.github.com/articles/using-pull-requests).  I cannot guarantee that all content will make it into the site, but if enough folks think your contribution adds value, we will be sure to include it.

## How do I build the site?

[api-first.com](http://api-first.com) is a static site hosted by [GitHub pages](http://pages.github.com/).  We use [Jekyll](http://jekyllrb.com/) to build the site and test it locally.  Here's a quick guide:

- insall [Ruby](http://www.ruby-lang.org/) (comes with OSX)
- [git](http://git-scm.com/) clone this project
- [install](http://gembundler.com/) bundler
- insall the gems this project needs with `bundle install`
- run jekyll `jekyll --auto` which will run this site locally on port 4000.