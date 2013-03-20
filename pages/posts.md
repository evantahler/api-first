---
layout: default
title: Posts
---

# Posts

<div id="home">
  <ul class="posts">
    {% for post in site.posts %}
      <li><span>{{ post.date | date_to_string }}</span> &raquo; <strong><a href="{{ post.url }}">{{ post.title }}</strong></a> ({{ post.categories | array_to_sentence_string }})</li>
    {% endfor %}
  </ul>
</div>