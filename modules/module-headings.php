<?php
// Do not edit this file. It's generated by jetpack/tools/build-module-headings-translations.php

/**
 * For a given module, return an array with translated name, description and recommended description.
 *
 * @param string $key Module file name without .php
 *
 * @return array
 */
function jetpack_get_module_i18n( $key ) {
	static $modules;
	if ( ! isset( $modules ) ) {
		$modules = array(
			'after-the-deadline' => array(
				'name' => _x( 'Spelling and Grammar', 'Module Name', 'jetpack' ),
				'description' => _x( 'Check your spelling, style, and grammar with the After the Deadline proofreading service.', 'Module Description', 'jetpack' ),
			),

			'carousel' => array(
				'name' => _x( 'Carousel', 'Module Name', 'jetpack' ),
				'description' => _x( 'Transform standard image galleries into full-screen slideshows.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Brings your photos and images to life as full-size, easily navigable galleries.', 'Jumpstart Description', 'jetpack' ),
			),

			'comments' => array(
				'name' => _x( 'Comments', 'Module Name', 'jetpack' ),
				'description' => _x( 'Let readers comment with WordPress.com, Twitter, Facebook, or Google+ accounts.', 'Module Description', 'jetpack' ),
			),

			'contact-form' => array(
				'name' => _x( 'Contact Form', 'Module Name', 'jetpack' ),
				'description' => _x( 'Insert a contact form anywhere on your site.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Adds a button to your post and page editors, allowing you to build simple forms to help visitors stay in touch.', 'Jumpstart Description', 'jetpack' ),
			),

			'custom-content-types' => array(
				'name' => _x( 'Custom Content Types', 'Module Name', 'jetpack' ),
				'description' => _x( 'Organize and display different types of content on your site, separate from posts and pages.', 'Module Description', 'jetpack' ),
			),

			'custom-css' => array(
				'name' => _x( 'Custom CSS', 'Module Name', 'jetpack' ),
				'description' => _x( 'Customize your site’s CSS without modifying your theme.', 'Module Description', 'jetpack' ),
			),

			'enhanced-distribution' => array(
				'name' => _x( 'Enhanced Distribution', 'Module Name', 'jetpack' ),
				'description' => _x( 'Increase reach and traffic.', 'Module Description', 'jetpack' ),
			),

			'gravatar-hovercards' => array(
				'name' => _x( 'Gravatar Hovercards', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable pop-up business cards over commenters’ Gravatars.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Let commenters link their profiles to their Gravatar accounts, making it easy for your visitors to learn more about your community.', 'Jumpstart Description', 'jetpack' ),
			),

			'infinite-scroll' => array(
				'name' => _x( 'Infinite Scroll', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add support for infinite scroll to your theme.', 'Module Description', 'jetpack' ),
			),

			'json-api' => array(
				'name' => _x( 'JSON API', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow applications to securely access your content through the cloud.', 'Module Description', 'jetpack' ),
			),

			'latex' => array(
				'name' => _x( 'Beautiful Math', 'Module Name', 'jetpack' ),
				'description' => _x( 'Use LaTeX markup language in posts and pages for complex equations and other geekery.', 'Module Description', 'jetpack' ),
			),

			'likes' => array(
				'name' => _x( 'Likes', 'Module Name', 'jetpack' ),
				'description' => _x( 'Give visitors an easy way to show their appreciation for your content.', 'Module Description', 'jetpack' ),
			),

			'manage' => array(
				'name' => _x( 'Manage', 'Module Name', 'jetpack' ),
				'description' => _x( 'Manage all your sites from a centralized place, https://wordpress.com/sites.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Helps you remotely manage plugins, turn on automated updates, and more from <a href="https://wordpress.com/plugins/" target="_blank">wordpress.com</a>.', 'Jumpstart Description', 'jetpack' ),
			),

			'markdown' => array(
				'name' => _x( 'Markdown', 'Module Name', 'jetpack' ),
				'description' => _x( 'Write posts or pages in plain-text Markdown syntax.', 'Module Description', 'jetpack' ),
			),

			'minileven' => array(
				'name' => _x( 'Mobile Theme', 'Module Name', 'jetpack' ),
				'description' => _x( 'Optimize your site with a mobile-friendly theme for smartphones.', 'Module Description', 'jetpack' ),
			),

			'monitor' => array(
				'name' => _x( 'Monitor', 'Module Name', 'jetpack' ),
				'description' => _x( 'Reports on site downtime.', 'Module Description', 'jetpack' ),
			),

			'notes' => array(
				'name' => _x( 'Notifications', 'Module Name', 'jetpack' ),
				'description' => _x( 'Receive notification of site activity via the admin toolbar and your Mobile devices.', 'Module Description', 'jetpack' ),
			),

			'omnisearch' => array(
				'name' => _x( 'Omnisearch', 'Module Name', 'jetpack' ),
				'description' => _x( 'Search your entire database from a single field in your Dashboard.', 'Module Description', 'jetpack' ),
			),

			'photon' => array(
				'name' => _x( 'Photon', 'Module Name', 'jetpack' ),
				'description' => _x( 'Speed up images and photos.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Mirrors and serves your images from our free and fast image CDN, improving your site’s performance with no additional load on your servers.', 'Jumpstart Description', 'jetpack' ),
			),

			'post-by-email' => array(
				'name' => _x( 'Post by Email', 'Module Name', 'jetpack' ),
				'description' => _x( 'Publish posts by email, using any device and email client.', 'Module Description', 'jetpack' ),
			),

			'protect' => array(
				'name' => _x( 'Protect', 'Module Name', 'jetpack' ),
				'description' => _x( 'Prevent brute force attacks.', 'Module Description', 'jetpack' ),
			),

			'publicize' => array(
				'name' => _x( 'Publicize', 'Module Name', 'jetpack' ),
				'description' => _x( 'Automatically promote content.', 'Module Description', 'jetpack' ),
			),

			'related-posts' => array(
				'name' => _x( 'Related Posts', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display similar content.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Keep visitors engaged on your blog by highlighting relevant and new content at the bottom of each published post.', 'Jumpstart Description', 'jetpack' ),
			),

			'sharedaddy' => array(
				'name' => _x( 'Sharing', 'Module Name', 'jetpack' ),
				'description' => _x( 'Visitors can share your content.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Places Twitter, Facebook and Google+ buttons at the bottom of each post, making it easy for visitors to share your content.', 'Jumpstart Description', 'jetpack' ),
			),

			'shortcodes' => array(
				'name' => _x( 'Shortcode Embeds', 'Module Name', 'jetpack' ),
				'description' => _x( 'Embed content from YouTube, Vimeo, SlideShare, and more, no coding necessary.', 'Module Description', 'jetpack' ),
			),

			'shortlinks' => array(
				'name' => _x( 'WP.me Shortlinks', 'Module Name', 'jetpack' ),
				'description' => _x( 'Enable WP.me-powered shortlinks for all posts and pages.', 'Module Description', 'jetpack' ),
			),

			'site-icon' => array(
				'name' => _x( 'Site Icon', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add a site icon to your site.', 'Module Description', 'jetpack' ),
			),

			'sitemaps' => array(
				'name' => _x( 'Sitemaps', 'Module Name', 'jetpack' ),
				'description' => _x( 'Creates sitemaps to allow your site to be easily indexed by search engines.', 'Module Description', 'jetpack' ),
			),

			'sso' => array(
				'name' => _x( 'Single Sign On', 'Module Name', 'jetpack' ),
				'description' => _x( 'Secure user authentication.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Lets you log in to all your Jetpack-enabled sites with one click using your WordPress.com account.', 'Jumpstart Description', 'jetpack' ),
			),

			'stats' => array(
				'name' => _x( 'Site Stats', 'Module Name', 'jetpack' ),
				'description' => _x( 'Collect traffic stats and insights.', 'Module Description', 'jetpack' ),
			),

			'subscriptions' => array(
				'name' => _x( 'Subscriptions', 'Module Name', 'jetpack' ),
				'description' => _x( 'Allow users to subscribe to your posts and comments and receive notifications via email.', 'Module Description', 'jetpack' ),
				'recommended description' => _x( 'Give visitors two easy subscription options — while commenting, or via a separate email subscription widget you can display.', 'Jumpstart Description', 'jetpack' ),
			),

			'tiled-gallery' => array(
				'name' => _x( 'Tiled Galleries', 'Module Name', 'jetpack' ),
				'description' => _x( 'Display your image galleries in a variety of sleek, graphic arrangements.', 'Module Description', 'jetpack' ),
			),

			'vaultpress' => array(
				'name' => _x( 'Data Backups', 'Module Name', 'jetpack' ),
				'description' => _x( 'Daily or real-time backups.', 'Module Description', 'jetpack' ),
			),

			'verification-tools' => array(
				'name' => _x( 'Site Verification', 'Module Name', 'jetpack' ),
				'description' => _x( 'Verify your site or domain with Google Search Console, Pinterest, Bing, and Yandex.', 'Module Description', 'jetpack' ),
			),

			'videopress' => array(
				'name' => _x( 'VideoPress', 'Module Name', 'jetpack' ),
				'description' => _x( 'Upload and embed videos right on your site. (Subscription required.)', 'Module Description', 'jetpack' ),
			),

			'widget-visibility' => array(
				'name' => _x( 'Widget Visibility', 'Module Name', 'jetpack' ),
				'description' => _x( 'Specify which widgets appear on which pages of your site.', 'Module Description', 'jetpack' ),
			),

			'widgets' => array(
				'name' => _x( 'Extra Sidebar Widgets', 'Module Name', 'jetpack' ),
				'description' => _x( 'Add images, Twitter streams, your site’s RSS links, and more to your sidebar.', 'Module Description', 'jetpack' ),
			),
		);
	}
	return $modules[ $key ];
}
/**
 * For a given module tag, return its translated version.
 *
 * @param string $key Module tag as is in each module heading.
 *
 * @return string
 */
function jetpack_get_module_i18n_tag( $key ) {
	static $module_tags;
	if ( ! isset( $module_tags ) ) {
		$module_tags = array(
			// Modules with `Other` tag:
			//  - modules/contact-form.php
			//  - modules/notes.php
			//  - modules/site-icon.php
			'Other' =>_x( 'Other', 'Module Tag', 'jetpack' ),

			// Modules with `Writing` tag:
			//  - modules/after-the-deadline.php
			//  - modules/custom-content-types.php
			//  - modules/enhanced-distribution.php
			//  - modules/json-api.php
			//  - modules/latex.php
			//  - modules/markdown.php
			//  - modules/post-by-email.php
			//  - modules/shortcodes.php
			'Writing' =>_x( 'Writing', 'Module Tag', 'jetpack' ),

			// Modules with `Photos and Videos` tag:
			//  - modules/carousel.php
			//  - modules/photon.php
			//  - modules/shortcodes.php
			//  - modules/tiled-gallery.php
			//  - modules/videopress.php
			'Photos and Videos' =>_x( 'Photos and Videos', 'Module Tag', 'jetpack' ),

			// Modules with `Social` tag:
			//  - modules/comments.php
			//  - modules/gravatar-hovercards.php
			//  - modules/likes.php
			//  - modules/publicize.php
			//  - modules/sharedaddy.php
			//  - modules/shortcodes.php
			//  - modules/shortlinks.php
			//  - modules/subscriptions.php
			//  - modules/widgets.php
			'Social' =>_x( 'Social', 'Module Tag', 'jetpack' ),

			// Modules with `Appearance` tag:
			//  - modules/custom-css.php
			//  - modules/gravatar-hovercards.php
			//  - modules/infinite-scroll.php
			//  - modules/minileven.php
			//  - modules/photon.php
			//  - modules/shortcodes.php
			//  - modules/widget-visibility.php
			//  - modules/widgets.php
			'Appearance' =>_x( 'Appearance', 'Module Tag', 'jetpack' ),

			// Modules with `Developers` tag:
			//  - modules/json-api.php
			//  - modules/omnisearch.php
			//  - modules/sso.php
			'Developers' =>_x( 'Developers', 'Module Tag', 'jetpack' ),

			// Modules with `Centralized Management` tag:
			//  - modules/manage.php
			'Centralized Management' =>_x( 'Centralized Management', 'Module Tag', 'jetpack' ),

			// Modules with `Recommended` tag:
			//  - modules/manage.php
			//  - modules/minileven.php
			//  - modules/monitor.php
			//  - modules/photon.php
			//  - modules/protect.php
			//  - modules/publicize.php
			//  - modules/related-posts.php
			//  - modules/sharedaddy.php
			//  - modules/sitemaps.php
			//  - modules/stats.php
			'Recommended' =>_x( 'Recommended', 'Module Tag', 'jetpack' ),

			// Modules with `Mobile` tag:
			//  - modules/minileven.php
			'Mobile' =>_x( 'Mobile', 'Module Tag', 'jetpack' ),

			// Modules with `Traffic` tag:
			//  - modules/sitemaps.php
			'Traffic' =>_x( 'Traffic', 'Module Tag', 'jetpack' ),

			// Modules with `Site Stats` tag:
			//  - modules/stats.php
			'Site Stats' =>_x( 'Site Stats', 'Module Tag', 'jetpack' ),
		);
	}
	return $module_tags[ $key ];
}
