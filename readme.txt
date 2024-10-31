
=== Fern Leaf Regulatory Notices ===

Contributors: AndrewHodges
Tags: disclaimer, regulation, compliance, copyright, head code, footer code, head, footer, head footer code, header footer code, header footer, header code, header, custom head, custom footer, custom header, script, code script, head script, footer script, head footer script, header footer script, header script, custom head script, custom footer script, custom header script, head javascript, footer javascript, header javascript,  javascript code, tracking code, tracking script, tracking javascript, Google Analytics code, Google Analytics, Google Analytics head code, Google Analytics footer code, Google Analytics tracking code, Google Analytics conversion code, Google Analytics remarketing code, Google Analytics script, Google Analytics, Google Analytics head script, Google Analytics footer script, Google Analytics tracking script, Google Analytics conversion script, Google Analytics remarketing script, Google Analytics javascript
Author URI: http://www.fernleafconsulting.co.uk
Plugin URI: http://www.fernleafconsulting.co.uk/plugins
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.11
License: GPLv3 or later
License URI: http://www.gnu.org/copyleft/gpl.html

Add notices to the header or footer of your site and/or control notices on individual posts. Add script to your site or posts.

== Description ==

Allows administrators to add notices to the top and bottom of a site and/or add a notice to posts for the purpose of compliance, statutory requirement or disclaimers.

It provides a secure way for an administrator to ensure that they have control of regulatory notices that may be required by the site whilst giving creative access to other users. It is often the case that those who are creative are the least likely to ensure that the legal niceties are conformed to. This plugin allows for:

**Features**
* Administrator access only,
* Add notice above the site,
* Add notice below the site,
* Add notice to each post,
* Add a notice to any combination of the above,

**Benefits**
* Add and control compliance notces,
* Add scripts to your footer like Google Analytics,
* Add a copyright notice to all of your bloggs,
* Control style in your footer and headers,

**Coming Soon**
* Exclude post categories,

You can add tags into your notices and can then use your own style sheet classes or use inline styles to set the layout of your notices.

Bonus: Should you want to add script to the bottom of your pages, such as Google Analytics then you are able to add that in the Footer section and it will be added to each page

Limitations: We are aware that themes are getting ever more complicated and the plugin works by inserting the content before wp_head and  after wp_footer which for some sites may not be the best place for a disclaimer or may be used be other layout features of a theme. By providing three separate locations for the next we believe that it will work in some combination for all sites. If you require any custom help in adding notices to your theme then please mail wordpress@fernleafconsulting.co.uk

For more information and detail go to our site page to [Regulatory Notices Plugin](http://www.fernleafconsulting.co.uk/plugins) page.

== Installation ==

To add a WordPress Plugin using the built-in plugin installer:

Go to Plugins > Add New.
Under Search, type in the name of the WordPress Plugin or descriptive keyword, author, or tag in the search form or click a tag link below the search form.
Find the WordPress Plugin you wish to install.
Click Details for more information about the Plugin and instructions you may wish to print or save to help setup the Plugin.
Click Install Now to install the WordPress Plugin.
A popup window will ask you to confirm your wish to install the Plugin.
If this is the first time you've installed a WordPress Plugin, you may need to enter the FTP login credential information. If you've installed a Plugin before, it will still have the login information. This information is available through your web server host.
Click Proceed to continue with the installation. The resulting installation screen will list the installation as successful or note any problems during the install.
If successful, click Activate Plugin to activate it, or Return to Plugin Installer for further actions.

To install a WordPress Plugin manually:

Download your WordPress Plugin to your desktop.
If downloaded as a zip archive, extract the Plugin folder to your desktop.
Read through the "readme" file thoroughly to ensure you follow the installation instructions.
With your FTP program, upload the Plugin folder to the wp-content/plugins folder in your WordPress directory online.
Go to Plugins screen and find the newly uploaded Plugin in the list.
Click Activate Plugin to activate it.

== Frequently Asked Questions ==

= How can I change the layout of my notice =

You can add html tags into your notices and can then use your own style sheet classes or use inline styles to set the layout of your notices. For example you can use a Span and the Style attributes to set things like the notice alignment and font.

= We have an error saying Failed to open stream =

Check with your host that SSI (Server Side Includes)are enabled on your hosting package

= Why the choices of box =

The ability to place a notice above or below the site is for flexibility. You can of course use both but many people will just choose to use one and of course the one that works with there theme. We are aware that themes are getting ever more complicated and the plugin works by inserting the content before wp_head and  after wp_footer which for some sites may not be the best place for a disclaimer or may be used be other layout features of a theme.

The third box allows you to add a notice to the bottom of a post and this is defined by is_single().

= Will this break my Theme =

It shouldn't but with the increasing complexity and variety of themes out there it is impossible to say that it won't. However, the plugin does not do anything that will harm a theme and if it does interfere with it you can easily deactivate the plugin and delete the files from you plugin panel. Of course regardless of the plugin, child theme or new theme that you are using it is good practice to back up your site before you install anything new.


== Screenshots ==

1. Simply paste your code into one of these two fields and it will be included on every page of your website.

2. Add your code to these fields respectively and it will output specifically to this page, post or custom post type.

and the result will be 

/assets/RN_site_top1.png

== Changelog ==

No changes have been made at the time this plugin was released.

== Upgrade Notice ==

We are currently testing a release which will allow you to add notices to posts excluding certain categories defines by the user.
