## Redux Framework
[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/redux-framework.svg?maxAge=3600)](https://wordpress.org/plugins/redux-framework) [![WordPress](https://img.shields.io/wordpress/v/redux-framework.svg?maxAge=3600)](https://wordpress.org/download/)

## ATTENTION ##
While we recognize Redux could be embedded in a theme or plugin in the past, we are no longer supporting the practice. 
Too many developers are not keeping their Redux code up-to-date (which could easily accomplished with Composer).
When users of the projects experience issues, they seek support from us,
which we are unable to provide short of suggesting they contact the project author (you) and ask you to update your vendor code.
This puts your users in the middle, and we'd prefer not to do that anymore.

Consequently, the vendor support plugin/extension for `ace_editor` has been discontinued.
The ACE Editor will load exclusively via CDN.
If your project requires a local installation of the ACE Editor JavaScript (whose size is substantial),
please include it in your project and use the `redux/<opt_name>/fields/ace/script` filter to specify the URL to that script.
The `ace_editor` field will use that URL to enqueue the ACE library.

Thank you for your kind attention in this matter.

## NEW: TABBED EXTENSION ##

## New to Version 4.4 ##
* TAXONOMY METABOXES!
* USER PROFILE METABOXES!
* ICON SELECT Extension.
* The Extendify Templates and Patterns library have been unbundled from Redux. To continue using Extendify, please download the standalone plugin from the WordPress.org repository: [https://wordpress.org/plugins/extendify](https://wordpress.org/plugins/extendify)

## New to Version 4.3 ##
* METABOXES!
* REPEATER EXTENSION!
* SOCIAL PROFILES EXTENSION!
* CUSTOM FONTS EXTENSION!
* Multi Media extension.
* DateTime extension.
* JS Button extension.
* Google Maps extension
* Widget Areas extension (applies to Classic Widgets only).
* Gutenberg Template Library updated to the new Extendify library. See more information here about this upgrade and how to access the legacy library: [https://redux.io/gutenberg-template-library-upgrade](https://redux.io/gutenberg-template-library-upgrade).

## New to Version 4.2 ##
### See the sample folder for examples of the new and improved fields. ###
* Additional Typography features: Top and bottom margins, text shadow.
* New Media Image Filters (greyscale, sepia, opacity, contrast, invert, blur, saturate, brightness, hue-rotate).
* New Gradient Field Filters (type, reach, angle), including output for autogenerated CSS.
* New Box Shadow field with output for autogenerated CSS.
* New Flyout Submenus: `flyout_submenus` global arg.
* New Alpha color option for color field: `color_alpha` field arg for fields that support color pickers.
* Removed: `async_typography` global arg.  Google no longer supports it.  Use `font_display` with one of the following `auto|block|swap|fallback|optional`.  See: [https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display](https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display)
* Automatic update option for Google Fonts without a Pro subscription.

## Join us on Slack ##
[Redux Slack](https://join.slack.com/t/redux/shared_invite/zt-1op7uw3up-kXgZp4Y93TeCSmq_LALl~Q)

## Follow us on Social Media! ##
[![Follow us on Twitter](https://www.download82.com/images/produse/iconuri/twitter-for-android.png "Follow us on Twitter")](https://www.twitter.com/ReduxFramework)
[![Like us on Facebook](https://addons.thunderbird.net/user-media/addon_icons/79/79494-64.png "Like us on Facebook")](https://www.facebook.com/ReduxFramework/)

## Changelog ##
See [Changelog.md](https://github.com/reduxframework/redux-framework/blob/master/CHANGELOG.md)

## Documentation ##
Need a little help with Redux? Come check out our brand-new documentation site at  [devs.redux.io](http://devs.redux.io), chock-full of tutorials and examples!

## Help Us Translate Redux ##
Please head over to the plugin page to learn how you can help us translate Redux quickly. Any and all translations are welcome. We appreciate your help!
https://translate.wordpress.org/projects/wp-plugins/redux-framework/

## Features ##
* Uses the [WordPress Settings API](http://codex.wordpress.org/Settings_API "WordPress Settings API")
* Multiple built-in field types
* Multiple layout field types
* Fields can be overloaded with a callback function for custom field types
* Easily extendable by creating Field Classes
* Built-in Validation Classes
* Easily extendable by creating Validation Classes
* Custom Validation error handling, including error counts for each section, and custom styling for error fields
* Custom Validation warning handling, including warning counts for each section, and custom styling for warning fields
* Multiple Hook Points for customization
* Import / Export Functionality — including cross-site importing of settings
* Easily add page help through the class
* Fully responsive options panel
* Much more

## What's new in version 4? ##

### Core Rewrite
Our code base has been rebuilt from the ground up. With compartmentalized code, autoload, and class inheritance, Redux is now faster and more efficient than it's ever been!

### Top of the Line Security!
Redux meets security standards laid out by WordPress Coding Standards, WordPress VIP Standards, and ThemeForest Guidelines.  Focus includes escaping, sanitizing, nonces verification, and database query prep/caching.

### Automatic Google Font Updates.
This is one of the crown jewels of Redux v4!  Your users will have the ability to update Google Fonts as updates are available or automatic ‘behind the scenes’ updates.  No more waiting for updates and no API key is required!

### Field Sanitizing
Field sanitizing allows one to pass an array of function names as an argument to a field in which the return value will be the sanitizing string.  This feature will only work with text-based fields, including text, textarea, and multi_text (ACE Editor and WP Editor not included).

One may use any existing function, including PHP functions, WordPress functions, and custom-written functions.  The return value of any used function must be that of a string.  Any other return value will be disregarded.

Please view the [sample-config.php](https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php) file for specific examples.

### Select2 AJAX Loading
The AJAX loading routines for the select2 fields have been fixed/finished.  See the 'capabilities' field in the demo panel for an example.  

In the interim, this feature will only work when used in conjunction with the `data` argument (that is, the one that fetches WordPress data).  

To set AJAX loading, add the `'ajax' => true` argument to your select field.  The `min_input_length` argument may also be added to specify how many characters should be typed before results are shown.  The default is `1`.

### Field/Section Disabling
This feature has been requested quite a few times over the years.  Fields and sections can now be disabled by adding the `'disabled' => true` argument to either a section or a field.  The section or field will then appear 'greyed out' and not respond to input.  This comes in handy in the event one may want to offer teasers for premium versions of their products.

Since those with a little CSS know-how could easily reactivate disabled fields with a little CSS, we took the added precaution of having Redux remove any `name` attributes on disabled fields/sections.  This way, even if a clever user reactivates the field, it will never save.

### Updated Panel Interface
The option panel interface has been brought up to date with the current WordPress admin design.  It is also now ‘theme aware.’  Panel colors will now follow suit with the selected admin theme.

### Improved Field Validation
Due to the need for multiple field validations, Redux now supports an array of validations versus the previously limiting single argument.  Validation results now appear in real time after a save without the need for a page refresh.

### Full v3 Backward Compatibility
We take backward compatibility very seriously here and strive to maintain it.  Redux v4 has been designed to act as a drop-in replacement to offer new functionality without breaking existing functionality.

## FAQs ##

1. Why should we use ```require_once``` instead of ```get_template_part```?
* First, because ```get_template_part``` is for... you guessed it, themes! Redux is designed to work with both themes *and* plugins.
* Second, read [this](http://kovshenin.com/2013/get_template_part/).
2. Why shouldn't we edit ```sample-config.php``` in the plugin directory?
* Because ```sample-config.php``` will be replaced at each update of the plugin. You will lose all your work.
