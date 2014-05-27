# Changelog

## Version 4.1.1

* update grunt packages

## Version 4.1.0

* update to latest [_s](https://github.com/Automattic/_s) code base
* update to latest [h5bp](https://github.com/h5bp/html5-boilerplate) code base
* remove modernizr since we're only supporting IE9+
* move scss source files back to assets/styles
* update to latest [TGM Plugin Activation](https://github.com/thomasgriffin/TGM-Plugin-Activation) code
* add imagemin back to grunt watch tasks (no longer causing issues)
* update grunt packages
* general cleanup

## Version 4.0.0

* update to latest [_s](https://github.com/Automattic/_s) code base
* move template partials to root of theme folder
* reorganize scss with new, more logical partials
* update to latest [TGM Plugin Activation](https://github.com/thomasgriffin/TGM-Plugin-Activation) code
* update to [normalize 3.0.1](http://necolas.github.com/normalize.css)
* remove imagemin from grunt watch tasks (currently causing issues)
* change back to putting `style.css` and `editor-style.css` in the root of theme folder from scss compilation
* general cleanup

## Version 3.6.0

* fix gruntfile paths

## Version 3.6.0

* change from using compass to just using sass
* setup autoprefixr and cssmin grunt tasks
* use `style.css` for base stylesheet for theme detection
* rename `style.scss` to `main.scss` and change css enqueuing to be from `assets/styles/build`
* update to TGM Plugin Activation 2.4.0
* update to latest HTML5 Boilerplate
* move sharing styles out to its own scss partial
* move page template styles out to their own partials
* reformat and cleanup scss code
* change microclearfix() mixin to clearfix()
* run images through grunt imagemin
* update grunt dependencies

## Version 3.5.1

* update grunt dependencies
* move load-grunt-tasks to devDependencies
* update removing version query string

## Version 3.5.0

* rename assets/scss to assets/styles/source
* move scss directory
* process and livereload image in watch task
* don't livereload html and php due to collisions and bugs in watch task
* tweak imagemin processing
* run all tasks on grunt run initially

## Version 3.4.8

* update to normalize 3.0
* update grunt dependencies

## Version 3.4.7

* fix navigation class spelling error

## Version 3.4.6

* update grunt dependencies
* update spacing in functions

## Version 3.4.5

* update to normalize v2.1.3

## Version 3.4.4

* update deployment info to fit new rsyncwrapper options

## Version 3.4.3

* source maps fully work now!

## Version 3.4.2

* update grunt dependencies

## Version 3.4.1

* update grunt dependencies
* switch to load-grunt-tasks for loading everything
* restructure deploy task based on grunt-rsync updates

## Version 3.4

* manually manage plugins in `Gruntfile` instead of automatically pulling all files to streamline bower usage.

## Version 3.3

* add bower support with `.bowerrc` (thanks [tjtate](https://github.com/tjtate))

## Version 3.2

* tweak Gruntfile.js to fix LiveReload issues and generate source maps for both main.js and plugins.js
* update to normalize v2.1.2
* optimizations and tweaks here and there

## Version 3.1

* create `templates` folder and include example portfolio page template
* create `templates` and move all template parts there for cleaner directory structure, update all `get_template_part()` calls to use new path

## Version 3.0

* reorganize code in `assets` folder for fonts, images, js and scss
* setup Gruntfile to use Grunt for all compiling, concatenation and minification
* add deployments via rsync
* update to normalize v2.1.0
* refactor theme functions in `lib` folder
* general code cleanup

## Version 2.6.7

* Fix remove_menu_page to trigger on admin_menu instead of admin_init

## Version 2.6.6

* Add grid column sizes I typically use, general code cleanup

## Version 2.6.5

* Fix calls for favicon and apple-touch-icon in header
* Remove older IE conditional comments since I don't support IE7 and below
* Change chromeframe call to include IE7

## Version 2.6.4

* Clean up footer dynamic_sidebar() call
* Add comment blocks for template parts
* Add functions to remove dashboard widgets, remove admin menu pages, reorder admin menu
* Include add_image_size if needed in init

## Version 2.6.3

* Fix text selection bg and color not pulling from variables

## Version 2.6.2

* Move border-box from `_grid.scss` to `_global.scss`
* Add border-box support for pseudo elements, because it makes the world a better place

## Version 2.6.1

* Fix broken call in sidebar.php
* Properly translate widget titles

## Version 2.6

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

## Version 2.5

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


## Version 2.1

* added compass with config.rb
* removed mixins covered by compass

## Version 2.0

* added SCSS as preprocessor files
* upgraded modernizr to 2.5.2
* upgraded jQuery to 1.7.2
* renamed script.js to jquery.functions.js
* functions.php points to minified versions of plugins.js and jquery.functions.js
* removed unneeded code in functions.php
* cleaned up header.php and footer.php
* added google +1 button to social buttons

## Version 1.0

* initial version
