# WordPress Starter Theme

Version: 3.4.7

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as a starting template for building custom themes. Uses Compass/SCSS, HTML5 Boilerplate 4 with Modernizr and Normalize.css, and Grunt for all tasks. Tested with WordPress 3.6 RC2.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile Compass/SCSS, lint, concatenate and minify JavaScript (with source maps), optimize images, and [LiveReload](http://livereload.com/) the browser (with extension), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, change the `assets/scss/style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will. If you have the LiveReload browser extension, it will reload after any SCSS or JS changes. To optimize images, run `grunt imagemin`.

- Compile `assets/scss/style.scss` to `style.css` (all paths defined in config.rb for Compass)
- Compile `assets/scss/editor-style.scss` to `editor-style.css`
- Concatenate and minify plugins in `assets/js/vender` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

To concatenate and minify your jQuery plugins, add them to the `assets/js/vendor` directory and add the `js` filename and path to the `Gruntfile` `uglify` task. Previous versions of the starter theme automatically pulled all plugins in the `vendor` directory, but this has changed to allow more granular control and for managing plugins and assets with bower.

### Bower

Supports [bower](https://github.com/bower/bower) to install and manage JavaScript dependencies in the `assets/js/vendor` folder.

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - edit your paths and host, then run `grunt rsync:staging` or `grunt rsync:production` to deploy your files via rsync.

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

![dependencies](https://david-dm.org/mattbanks/WordPress-Starter-Theme.png)

### Changelog

#### Version 3.4.7

* fix navigation class spelling error

#### Version 3.4.6

* update grunt dependencies
* update spacing in functions

#### Version 3.4.5

* update to normalize v2.1.3

#### Version 3.4.4

* update deployment info to fit new rsyncwrapper options

#### Version 3.4.3

* source maps fully work now!

#### Version 3.4.2

* update grunt dependencies

#### Version 3.4.1

* update grunt dependencies
* switch to load-grunt-tasks for loading everything
* restructure deploy task based on grunt-rsync updates

#### Version 3.4

* manually manage plugins in `Gruntfile` instead of automatically pulling all files to streamline bower usage.

#### Version 3.3

* add bower support with `.bowerrc` (thanks [tjtate](https://github.com/tjtate))

#### Version 3.2

* tweak Gruntfile.js to fix LiveReload issues and generate source maps for both main.js and plugins.js
* update to normalize v2.1.2
* optimizations and tweaks here and there

#### Version 3.1

* create `templates` folder and include example portfolio page template
* create `templates/partials` and move all template parts there for cleaner directory structure, update all `get_template_part()` calls to use new path

#### Version 3.0

* reorganize code in `assets` folder for fonts, images, js and scss
* setup Gruntfile to use Grunt for all compiling, concatenation and minification
* add deployments via rsync
* update to normalize v2.1.0
* refactor theme functions in `lib` folder
* general code cleanup

#### Version 2.6.7

* Fix remove_menu_page to trigger on admin_menu instead of admin_init

#### Version 2.6.6

* Add grid column sizes I typically use, general code cleanup

#### Version 2.6.5

* Fix calls for favicon and apple-touch-icon in header
* Remove older IE conditional comments since I don't support IE7 and below
* Change chromeframe call to include IE7

#### Version 2.6.4

* Clean up footer dynamic_sidebar() call
* Add comment blocks for template parts
* Add functions to remove dashboard widgets, remove admin menu pages, reorder admin menu
* Include add_image_size if needed in init

#### Version 2.6.3

* Fix text selection bg and color not pulling from variables

#### Version 2.6.2

* Move border-box from `_grid.scss` to `_global.scss`
* Add border-box support for pseudo elements, because it makes the world a better place

#### Version 2.6.1

* Fix broken call in sidebar.php
* Properly translate widget titles

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
* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
* [Don't Overthink It Grids](css-tricks.com/dont-overthink-it-grids/)
* [Underscores Theme](https://github.com/Automattic/_s)
* [Grunt](http://gruntjs.com/)
