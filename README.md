# WordPress Starter Theme

Version: 2.6

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as a starting template for building custom themes. Uses Compass/SCSS, HTML5 Boilerplate 4 with Modernizr and Normalize.css. Tested with WordPress 3.4 - 3.5.

## Usage

Rename folder to your theme name and begin development. Code as you will.

I use [CodeKit](http://incident57.com/codekit/) for Compass/SCSS compiling, but feel free to use whatever app or command line tool you prefer. [LiveReload](http://livereload.com/) and [Grunt](http://gruntjs.com/) are also great tools for compiling SCSS.

- Compile `scss/style.scss` to `style.css` (defined in config.rb for Compass)
- Compile `js/plugins.js` to `js/plugins.min.js`
- Compile `js/main.js` to `js/main.min.js`
- ??
- Profit

### Features

1. Normalized stylesheet for cross-browser compatibility using Normalize.css version 2 (IE8+ only)
2. Easy to customize
3. Flexible grid from [Chris Coyier](https://twitter.com/chriscoyier)
4. Media Queries for mobile and tablets ready to populate
5. Removed comments from pages
6. Compass & SCSS with plenty of mixins ready to go
7. Much much more

### Suggested Plugins

* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [WordPress SEO by Yoast](http://wordpress.org/extend/plugins/wordpress-seo/)
* [Google Analytics for WordPress by Yoast](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
* [Gravity Forms](http://www.gravityforms.com/)

### Changelog

#### Version 2.6

* Break functions out into their own included files
* Register style before enqueue
* Redo comments template based on [Underscores Theme](https://github.com/Automattic/_s)
* Added required classes to _posts.scss to remember to style them
* Broke register_sidebar() out of loop
* Add support for custom-header, custom-background, editor-style.css, content_width
* Add GPL license info to style.scss
* Add function to remove query strings from static resources
* Remove shortlink from wp_head
* Ran theme through Theme Check plugin to verify things were in order

#### Version 2.5

* remove jQuery loading from Google CDN. Use Google Libraries plugin is a better option while using version of jQuery in WordPress Core
* cleaned up functions.php and made it more robust
* Moved index, single and page displays out to template parts
* Properly enqueue stylesheet in functions.php instead of manually in header.php
* Updated social network buttons to latest code
* Renamed jquery.functions.js to main.js
* Add flexible grid SCSS
* Updated to HTML5 Boilerplate 4
* Updated to Normalize.css 2
* Updated to Modernizr 2.6.2
* Include @media bubbling mixins, [via Chris Coyier](http://css-tricks.com/snippets/css/media-queries-for-standard-devices/)
* Other bug fixes and changes


#### Version 2.1

* added compass with config.rb
* removed mixins covered by compass

#### Version 2.0

* added SCSS as preprocessor files
* upgraded modernizr to 2.5.2
* upgraded jQuery to 1.7.2
* renamed script.js to jquery.functions.js
* functions.php points to minified versions of plugins.js and jquery.functions.js
* removed unneeded code in functions.php
* cleaned up header.php and footer.php
* added google +1 button to social buttons

#### Version 1.0

* initial version

### Credits

Without these projects, this WordPress Starter Theme wouldn't be where it is today.

* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Normalize.css](http://necolas.github.com/normalize.css)
* [Blank WordPress Theme by Digging Into WordPress](http://digwp.com/2010/02/blank-wordpress-theme/)
* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
* [Don't Overthink It Grids](css-tricks.com/dont-overthink-it-grids/)
* [Underscores Theme](https://github.com/Automattic/_s)
