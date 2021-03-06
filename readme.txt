=== ItemPress ===
Contributors: aubreypwd, diddledan
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=aubreypwd%40gmail%2ecom&lc=US&item_name=Aubrey%20Portwood&no_note=0&currency_code=USD&bn=PP-DonationsBF%3abtn_donate_LG%2egif%3aNonHostedGuest
Tags: projects, project, management, notes, remembering, tasks, bugs, issue, tracker
Requires at least: 3.7
Tested up to: 4.2
Stable tag: 0.3.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ItemPress is a robust custom post type that will allow you to create new content with the freedom of ambiguity.

== Description ==

ItemPress's custom post type stays out of the way of your blog posts and pages and allows you to create content of any kind, organized many different ways.

This is currently a beta product and, if you are interested, you can help me out by installing and using the product, then visiting the [Support Tab](http://wordpress.org/support/plugin/itempress) and giving feedback (Please use `itempress-feedback` tag)! You can also visit `#itempress` on IRC.

**You could use ItemPress to:**

- Take notes
- Write and organize documentation
- Store personal recipes without writing a blog post
- Just make any kind of content that stays out of the way of your posts and pages!

== Frequently Asked Questions ==

**What are Associations?**

They are a way of assigning items to people, groups, etc without cluttering your labels. All users are automatically set with an association that starts with an @. This means can group together items that could be assigned to @user, and they can find them easily.

== Installation ==

Best way to install is using your WordPress Dashboard, just search for ItemPress! You can also download and put the extracted content in `/wp-content/plugins/itempress`.

== Screenshots ==

1. Labels
2. New Items
3. Associations that sync with users

== Changelog ==

= 0.3.3 =

- Fix where some dropdowns would show empty for filtering http://wordpress.org/support/topic/some-filter-items-that-dont-have-terms-show-an-empty-dropdown?replies=1

= 0.3.2 =

- Fix to major bug http://goo.gl/PqMhJu causing the new items to be unusable since ItemPress never flushes the rewrite rules.

= 0.3.1 =

- Permalink bases for items and taxonomy can now be updated using Settings > Permalinks

= 0.3 =

- Changes to default slugs (items, labels, associated)

= 0.2.3 =

- Updated plugin information for current users to get support

= 0.2.2 =

- Labels in drop-downs are not hierarchical

= 0.2.1 =

- Fix to issue where selecting terms from WP Admin was not working

= 0.2 =

- Reworked code to be more clean.

- Made it so plugins can add more taxonomy to items (https://bitbucket.org/aubreypwd/itempress/wiki/Additional%20Taxonomies).

= 0.1 =

- Alpha product intended for dogfooding the product initially and gaining feedback. 1.0 will be a more stable version of the product.

== Development ==

This plugin is developed at [Github](https://github.com/aubreypwd/itempress) and deployed here each release.

== Credits & Thanks ==

**Tracy Rotton, TatumCreative, MRW Web Design, TC Custom Taxonomy Filter**

http://www.taupecat.com/ | http://wordpress.org/plugins/tc-custom-taxonomy-filter/

Helped give us the filtering functionality we needed to dig into items.

**Sameer Humagain, Simple Custom Post Order**

http://hsameer.com.np/ | http://wordpress.org/plugins/simple-custom-post-order/

Code from Sameer's plugin helped us make it so you can change the order or items in the WordPress Dashboard.

**diddledan at #wordpress**

Helped solve an issue to help make sure that archive pages sorted posts by menu_order.