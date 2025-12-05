=== IceCubo ===
Contributors: MaxPressy
Requires at least: 6.1
Tested up to: 6.9
Requires PHP: 7.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

IceCubo is a block-based theme for WordPress. Fundamentally may be used as a starter theme and be built upon with block libraries or page builders. However, as a stand-alone solution, it comes with pre-built design patterns that you can utilize to make pages quickly. Basically, easily assemble most of the presentational Websites like business, corporate, portfolio, or other kinds of sites. IceCubo is fully responsive, cross-browser compatible, translation ready & SEO friendly. It is also compatible with Woocommerce, so it can serve as a base even for e-commerce sites. Though it's lightweight, still, it comes with several pre-designed styles, which enables quick switching between different color schemes.

== Changelog ==

= 1.2.4 - 2025-12-07 =
* Multiple css tweaks
* Small patterns tweaking
* Add some patterns
* Some slugs of the nav styles are changed
* Update color palettes with few contrasing colors
* Update some colors from the palettes for better contrasing

= 1.2.3 - 2025-04-05 =
* Add font presets - It allows you to keep the existing color set, but to change among available font presets
* Add templates "Single Post - Narrow" and "alike-page-narrow" for a narrowed post/page layout
* Removed Rotate style options from the Cover block, it's coming improved and packed with other transform options in the upcoming Pro version. If you've used this option, open a support thread/ticket, and we'll provide a workaround solution for your site
* Update: Various styling adjustments over the patterns and general css

= 1.2.2 - 2024-11-29 =
* Styling tweaking over the patterns
* Other small improvements, e.g. order of categories in patterns listing, remove the duplicated code, empty lines, etc.

= 1.2.1 - 2024-10-23 =
* Improved: Color contrast for some Style skins
* Improved: Styling of the sub-menu on the mouse hover
* Improved: Styling of multi-column sub-menu in the Editor
* Improved: Removed shadowing on the Logo with a mouse hover
* Improved: Change overall blockGap to fluid spacing
* Additional small CSS improvements
* Added some colors to the palette for the contrast purpose
* Added some styling classes

= 1.2.0 - 2024-07-18 =
* Add: Front Page template. IMPORTANT: Upgrading to this version requires a new Front Page adjustment (See docs page)
* Update: Various styling adjustments over the patterns and general css
* Update: Various technical improvements over the Patterns and its Parts inclusion
* Fix: Changed the matching colors of the "Grape skin style" to reflect the standard contrasting that other skin styles have

= 1.1.9 - 2024-03-09 =
* Add few color skins (styles)
* Add few patterns
* Small style improvements in the patterns and templates


= 1.1.8 - 2023-11-25 =
* Spacing adjustments for the mob menu modal overlay
* Featured image included on the templates with a sidebar
* Comments section included in other templates outside of those related to posts (You still have to enable them from the UI while editing a page)
* Add tagName to header and footer patterns
* IceCubo patterns for the header/footer template parts and query block are accessible from the WP built-in toolbar "Replace" option, now
* Spacing on the Title for the index (default blog) page adjusted to align with other templates
* Small internal file structure changes

= 1.1.7 - 2023-11-13 =
* Fix styling on some patterns (e.g. missing background, padding adjustment, color)
* Change margin for the image block

= 1.1.6 - 2023-11-08 =
* Update exisitng patterns
* Add new patterns (pages, posts, magazine)
* New block styles for images, list, heading and post titles
* Changed the Background color of the "boxed" template to be more theme related
* Changed some pattern group names for the better classification

= 1.1.5 - 2023-09-05 =
* Update: Background gradients
* Update: Styling of the blog layout, spacing correction
* Update: Spacing correction for the "Single no post header" template
* Fix: The way the images are called from the patterns, so it's compatible from the child themes
* Add: "Details" block styles
* Add: FAQ pattern based on the details block
* Small styling adjustments across patterns and overall

= 1.1.4 - 2023-08-17 =
Fix: Remove the top padding from the "main" tag on the templates: "notitle-alike-page" and "notitle-noheader-alike-page"

= 1.1.3 - 2023-08-17 =
* Fix: After the recent update, some templates were left with no padding at the bottom on the "main" tag
* Add: new pattern, Author box - 2 columns
* Update: Set headings with fluid spacing and target adequate classes. Now, !important is removed so that it can be overwritten from the UI
* Update: Rename a button style - "Highlight up" to "Accent up"
* Update: Small styling tweaks

= 1.1.2 - 2023-08-09 =
Fix: Headings' spacing. Moved its styling to theme.json, but the downside is that it cannot be overwritten from UI.

= 1.1.1 - 2023-08-09 =
* Fix: Rename "page-alike*" templates. It started to produce "No found" error. This is probably due to the WordPress naming conventions. These template names finish with "alike-page", now.
* Add: Various block styles for: paragraphs, headings, group, list, etc.
* Update: Varios small styling tweaks

= 1.1.0 - 2023-06-24 =
* Update: Remove the Home template, it remains available as a pattern. This returns the regular posts index as a default for a Blog page.
* New: Added some box-based patterns
* New: Added fluid spacing as the default option to blocks
* Update: Applied fluid spacing to some patterns

= 1.0.9 - 2023-06-19 =
* Made some additionlnal accessibility checks
* Set additional tags in style.css

= 1.0.8 - 2023-06-17 =
* Fix: Remove from your style.css file: "Update URI". This feature is only for themes that are distributed outside the theme directory.

= 1.0.7 - 2023-06-17 =
* Remove some tags (block-editor-patterns, block-editor-styles, style-variations) in style.css. Though they are present in the repo filter, the submission returns the error
* Remove the tag accessibility-ready until the additional checks are done

= 1.0.6 - 2023-06-17 =
* Add: Home page and basic About page as patterns
* Add: home.html which will make the Home template as default for the Home page
* Update: Added comments section to the "Single without post header" template
* Update: screenshot with larger button and no all caps for h1 elements
* Update: add image as a placeholder for the major Header-hero pattern
* Update: various small css and patterns adjustments
* Update: style.css - Add Update URI and additional tags
* Update: theme.json - Set schema at v6.2

= 1.0.5 - 2023-06-11 =
* Fix: Block syntax on the template page-alike-notitle

= 1.0.4 - 2023-06-11 =
* Fix: Bring back margin-top to the template page-alike-notitle. It was accidentally deleted on previous update.

= 1.0.3 - 2023-06-11 =
* Fix: Block syntax missing attributes on the following templates: sidebar-left, sidebar-right, boxed, page-alike-notitle-noheader, page-alike-notitle
* Add: footer pattern, structured as site title - nav - soc icons
* ... set that as the default footer for the templates, now
* Set a wide alignment for the headers' patterns as the default
* Small adjustments across the patterns like padding correlation, button alignments, typos on placeholders, etc.


= 1.0.2 =
* Corrected block syntax in a couple of patterns

= 1.0.1 =
* Tagging correction for the theme submission
* Changed the screenshot to comply with submission requirements

= 1.0.0 =
* Initial release


== Copyright ==

IceCubo WordPress Theme, (C) 2023 
IceCubo is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
