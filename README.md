# WordPress Starter Theme

Version: 2.1

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as a starting template for building custom themes. Uses Compass/SCSS, HTML5 Boilerplate with Modernizr and Normalize.css. Tested with WordPress 3.3 - 3.4.

## Usage

Rename folder to your theme name and begin development, code as you will. 

I use [CodeKit](http://incident57.com/codekit/) for Compass/SCSS compiling, but feel free to use whatever app or command line tool you prefer. [LiveReload](http://livereload.com/) is another great app on Mac for compiling SCSS.

- Compile `scss/style.scss` to `style.css`
- Compile `js/plugins.js` to `js/plugins.min.js`
- Compile `js/jquery.functions.js` to `js/jquery.functions.min.js`
- ??
- Profit

### Features

1. Normalized stylesheet for cross-browser compatibility
2. Easy to customize
3. jQuery loaded from Google CDN
4. Media Queries for mobile and tablets ready to populate
5. Removed comments from pages
6. Compass & SCSS with plenty of mixins ready to go
7. Much much more

### Suggested Plugins

* [WordPress SEO by Yoast](http://wordpress.org/extend/plugins/wordpress-seo/)
* [Google Analytics for WordPress by Yoast](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
* [Gravity Forms](http://www.gravityforms.com/)

### Changelog

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