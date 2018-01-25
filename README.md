Brilliant Coding Alpha Wordpress Theme
---

Welcome to the Brilliant Coding Alpha, a hackable theme for Wordpress!  This theme is intended to be a starter theme for building your own awesome Wordpress theme.  And best of all it's totally free!

To see this theme in action, head over to https://brilliantcoding.com

Some of the great libraries that are used in this theme are:
* Bootstrap v4 - https://getbootstrap.com/
* Font-Awesome - http://fontawesome.io/
* Highlight + Iosevka for code rendering - https://highlightjs.org/ https://be5invis.github.io/Iosevka/
* Minify PHP lib - https://github.com/mrclay/minify
* Customizable Disqus and Google Analytics scripts
* Google Fonts, Open Sans
* Ondemand tinyurl generator

In addition to all of that, this theme features an innovative template design that can be run without Wordpress!  This is helpful when tweaking SASS or the HTML templates.

Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

1. Clone this repository
2. Grab a copy of Bootstrap and Font-Awesome files and drop them into the file structure
3. npm install to setup the Nodejs build tools
4. npm css and npm js will build and minify your custom SASS and Javascript code
5. Test it out (before even running Wordpress), by running a PHP dev server
6. When your are ready to upload to Wordpress, npm zip will build the zip in the theme dist directory

7. Enjoy!

Other Notes
---------------

- *All* Javascript is minified and concatenated with Uglifyjs via NPM.  Howver script dependencies can be an issue here so rather than adding additional dependency complexity we use a simple numbering convention which will sequence the inclusion of the scripts.  Scripts with low numbers will be included first (ie ones that are needed as dependencies, like jQuery). 

Directory Structure
---------------

```
+---brilliantcodingalpha
|   +---assets  				Resource files referenced in the browser
|   |   +---brand   				Brand icons go here
|   |   +---css
|   |   |   +---fonts   			Any fonts referenced by CSS
|   |   |   |   \---<Font-Awesome>  		Put Font Awesome font files here
|   |   |   \---vendor 				Third-party CSS that is used in the Theme
|   |   +---img                     		Any images that are referenced by CSS
|   |   \---js 						
|   |       \---vendor  			Third-party libraries
|   |           \---dep   			Library dependencies
|   +---customizer 				Code that supports customizing the theme in the Wordpress UI
|   +---highlight 				Put highlightjs here for rendering code blocks
|   +---includes 				You will find the theme templates here
|   |   \---partials  				Theme partials are HTML snippets used in the template
|   +---iosevka 				Put font Iosevka font assets here for rendering code blocks
|   +---languages 				Theme translation files for other languages
|   \---min   					PHP minification - used for HTML pages
+---build 					Build tools for compiling SASS and Javascript
+---dist 					Compiled files
+---js 						Theme specific Javascript source code
|   \---src 						
+---scss 					Theme specific CSS
	\---<Bootstrap-v4.x.x>			Put bootstrap SASS files here
	\---<Font-Awesome>			Put Font-Awesome SASS files here
\---tests 					Theme-based PHP files that allows running the Theme without Wordpress
```
