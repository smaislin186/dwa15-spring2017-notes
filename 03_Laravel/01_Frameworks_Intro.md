## Web applications - 2 approaches

### Approach 1: Traditional &ldquo;page-redraw&rdquo;
+ Heavy lifting is done on the server producing a page that is displayed by the client
+ May also use Ajax to transfer data from server to client, demonstrating some overlap with Approach 2.

### Approach 2: [Single page applications (SPA)](https://en.wikipedia.org/wiki/Single-page_application)
+ Moves logic from server to client
+ Heavy reliance on Ajax to get data from server to client, as needed
+ The server acts as a pure data API
+ Often powered with JS templating libraries like AngularJS, Vue.js, Ember.js

In this course, we're Approach 1 focussed. But there's overlap, and there are overlapping skills used in both approaches. There's no one best answer; it depends on the needs of your application.

Most sites are a blending of both approaches:
<img src='http://making-the-internet.s3.amazonaws.com/laravel-approach1-v-approach2@2x.png' style='max-width:1002px;' alt=''>

## What is a framework?
<img src='http://making-the-internet.s3.amazonaws.com/laravel-what-is-a-framework@2x.png' style='max-width:693px;' alt='What is a framework'>

A framework provides a starting point for an application.

It is a skeleton of directories and files which you'll build in/upon to develop the functionality you need for *your* application.

Included in a framework are libraries that power essential web application features, such as:

+ Routing
+ Form handling and validation
+ Views/Templating
+ Environment management
+ Session/cookie management
+ Database interaction and management (migrations, seeding)
+ Authentication (sign up, log in, recalling a vistor's data, etc.)
+ Testing
+ Caching
+ Localisation
+ Email
+ Scheduling
+ Integration with 3rd party services (Facebook, Credit card processing, etc.)
+ Etc.

By working with these existing fundamentals, it frees you up to focus on the functionality of *your* application.

Why use a framework
* Avoid reinventing the wheel
* Work with vetted code
* Build projects that are more universally understood and documented

Challenges of working with a framework
* Initial investment in learning the framework
* Keeping up with the evolution of the framework

(These challenges are not unique to frameworks)


## Choosing a web framework

Popular frameworks across different languages:
+ PHP: [Laravel](http://laravel.com), [Symfony](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwims5n1t6XSAhVo1oMKHU1GBLIQFggcMAA&url=https%3A%2F%2Fsymfony.com%2F&usg=AFQjCNHlB9fKEXEpuS-cpl0ow5IdK-Jm_Q)
+ Ruby: [Rails](http://rubyonrails.org)
+ Python: [Django](https://www.djangoproject.com), [Flask](http://flask.pocoo.org)
+ Java: [Spring](https://spring.io)
+ JavaScript (Node.js): [Express](http://expressjs.com)

Points of reference:
+ [Wikipedia: Comparison of web frameworks](https://en.wikipedia.org/wiki/Comparison_of_web_frameworks#PHP)
+ [Google Trends: Laravel, Symfony, Django, Ruby on Rails, Express JS](https://trends.google.com/trends/explore?cat=32&q=Laravel,symfony,django,ruby%20on%20rails,express%20js)
+ SitePoint: Best PHP Frameworks:
[2014](http://www.sitepoint.com/best-php-frameworks-2014/), [2015](http://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/)

Our choice: [Laravel](http://laravel.com)

What makes Laravel so popular?
+ Coincided with PHP's early 2000's renaissance
+ Learned from what other frameworks (Rails, Symfony) got right
+ Active, modern, polished
+ Great documentation
+ Strong community = accessible support
+ Strong partnerships and ecosystem e.g. [Laracasts](https://laracasts.com), [Forge](https://forge.laravel.com/), [Envoyer](https://envoyer.io)
+ Lower learning curve
+ Expressive code (aka [Syntactic sugar](https://en.wikipedia.org/wiki/Syntactic_sugar))

BTW: Laravel (or [Lumen](https://lumen.laravel.com), aka Laravel-light) can be used as your server API if building single page applications (Approach 2 described above)

## MVC Pattern
<img src='http://making-the-internet.s3.amazonaws.com/laravel-mvc@2x.png' class='' style='max-width:541px; width:100%' alt='MVC Explained'>


## Laravel documentation
* Docs: <http://laravel.com/docs>
* API: <https://laravel.com/api/5.4>
* Cheat sheet: <https://learninglaravel.net/cheatsheet>
