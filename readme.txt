=== ItemPress ===
Contributors: aubreypwd, diddledan
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=aubreypwd%40gmail%2ecom&lc=US&item_name=Aubrey%20Portwood&no_note=0&currency_code=USD&bn=PP-DonationsBF%3abtn_donate_LG%2egif%3aNonHostedGuest
Tags: projects, project, management, notes, remembering, tasks, bugs, issue, tracker
Requires at least: 3.7
Tested up to: 3.7
Stable tag: 0.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ItemPress is a robust custom post type that will allow you to create new content with the freedom of ambiguity.

== Description ==

ItemPress's custom post type stays out of the way of your blog posts and pages and allows you to create content of any kind, organized many different ways.

This is currently a beta product and, if you are interested, you can help me out by installing and using the product, then visiting http://wordpress.org/support/plugin/itempress and giving feedback (Please use `itempress-feedback` tag)! You can also visit `#itempress` on IRC.

**You could use ItemPress to:**

- Take notes
- Write and organize documentation
- Store personal recipes without writing a blog post
- Just make any kind of content that stays out of the way of your posts and pages!

Post what you use ItemPress [here]()

== Frequently Asked Questions ==

**What Can I do with ItemPress**

ItemPress lets you create as much content as you want. ItemPress items (essentially posts) stay out of the way of your blog posts and pages. You can also group content together using labels or by [developing new taxonomy groups](http://wordpress.org/support/topic/develop-additional-taxonomies-into-itempress).

Here are a few things you can do with ItemPress:

- Take and organize notes and notebooks
- Track and organize a project
- Stop using Pastebin!

The possibilities are limitless! What will you make?

**What are Associations?**

They are a way of assigning items to people, groups, etc without cluttering your labels. All users are automatically set with an association that starts with an @. This means can group together items that could be assigned to @user, and they can find them easily.

**What gave you the idea?**

I've use a lot of things to create and organize content, like Trello, Evernote, and and P2, just to name a few. But my content is restricted to what the service offers (I can't extend it like in WordPress), I'm constantly encouraged to upgrade, and I have to usually setup a whole separate blog to use P2. 

ItemPress allows you to create content without the need for upgrading, you can add any kind of content WordPress can give you (with plugins), not change your theme, and use your current WordPress site!

== Installation ==

Best way to install is using your WordPress Dashboard, just search for ItemPress! You can also download and put the extracted content in `/wp-content/plugins/itempress`.

**Developers**

If you want to work on ItemPress, just `svn co http://plugins.svn.wordpress.org/itempress itempress-svn` and `ln -s itempress-svn/trunk itempress`. 

Please see the [Other Notes](http://wordpress.org/plugins/itempress/other_notes/) section on how to get involved.

== Screenshots ==

1. Labels
2. New Items
3. Associations that sync with users

== Changelog ==

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

== Development, Support, & Documentation==

If you want to work on ItemPress, just:

`cd wp-content/plugins`

`svn co http://plugins.svn.wordpress.org/itempress itempress-svn` 

`ln -s itempress-svn/trunk itempress`

...activate, then start hacking! You can submit diff's using the [Support Tab](http://wordpress.org/support/plugin/itempress).

All development-related items that come in through the [Support Tab](http://wordpress.org/support/plugin/itempress) are pushed into a the [ItemPress Development Board on Trello](https://trello.com/b/OrTYa3Bp/itempress-development-board).

**Support**

Please use the [Support Tab](http://wordpress.org/support/plugin/itempress) to get help, suggest new features, etc or use IRC.

**IRC**

**#itempress** is our official channel on freenode. Join there to get help, discuss new features, or just say Hi. I am usually there 10am - 4pm MST-Arizona. Ping my username @aubreypwd to get my attention.

**Documentation**

I am currently working on ItemPress's documentation on the [ItemPress Codex](http://codex.wordpress.org/index.php?title=User:Aubreypwd/itempress)

== Credits & Thanks ==

**Tracy Rotton, TatumCreative, MRW Web Design, TC Custom Taxonomy Filter**

http://www.taupecat.com/ | http://wordpress.org/plugins/tc-custom-taxonomy-filter/

Helped give us the filtering functionality we needed to dig into items.

**Sameer Humagain, Simple Custom Post Order**

http://hsameer.com.np/ | http://wordpress.org/plugins/simple-custom-post-order/

Code from Sameer's plugin helped us make it so you can change the order or items in the WordPress Dashboard.

**diddledan at #wordpress**

Helped solve an issue to help make sure that archive pages sorted posts by menu_order.