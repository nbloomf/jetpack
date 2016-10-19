<?php

/**
 * Class containing utility static methods that other advanced seo features are relying on.
 */
class Advanced_SEO {
	/**
	 * Site option name used to store front page meta description.
	 */
	const FRONT_PAGE_META_OPTION = 'advanced_seo_front_page_description';

	/**
	 * Old version of option name that was previously used under Free plan.
	 */
	const GRANDFATHERED_META_OPTION = 'seo_meta_description';

	/**
	 * Used to check whether advanced seo features are enabled.
	 *
	 * @param int $blog_id Optional. Defaults to current blog id if not given.
	 *
	 * @return bool True if advanced seo features are enabled, false otherwise.
	 */
	public static function is_enabled_advanced_seo( $blog_id = 0 ) {
		if ( empty( $blog_id ) ) {
			$blog_id = get_current_blog_id();
		}

		if ( defined( 'IS_WPCOM' ) && IS_WPCOM ) {
			/*
			 * Avoid using has_business_plan check here because of performance issues:
	         * https://lannisterp2.wordpress.com/2016/07/19/displaying-seo-features-based-on-current-site-plan/
	         * https://code.a8c.com/D2341
			 *
			 * @hide-in-jetpack
			 */
			return has_blog_sticker( 'unlimited-premium-themes', $blog_id );
		}

		// Enable for Jetpack sites.
		return true;
	}

	/**
	 * Checks if this option was set while it was still available under free plan.
	 *
	 * @return bool True if we should enable grandfathering, false otherwise.
	 */
	public static function has_grandfathered_front_page_meta() {
		return ! self::is_enabled_advanced_seo() && get_option( self::GRANDFATHERED_META_OPTION );
	}

	/**
	 * Returns front page meta description for current site.
	 *
	 * Since we allowed non-business users to set Front page meta description for some time,
	 * before bundling it with other advanced SEO features that require a business plan,
	 * we are supporting grandfathering here.
	 *
	 * @return string Front page meta description string or empty string.
	 */
	public static function get_front_page_meta_description() {
		if ( self::is_enabled_advanced_seo() ) {
			$front_page_meta = get_option( self::FRONT_PAGE_META_OPTION );
			return  $front_page_meta ? $front_page_meta : get_option( self::GRANDFATHERED_META_OPTION, '' );
		}

		// Support grandfathering for non-business users.
		return get_option( self::GRANDFATHERED_META_OPTION, '' );
	}

	/**
	 * Updates the site option value for front page meta description.
	 *
	 * We are taking care to update the correct option, in case the value is grandfathered for current site.
	 *
	 * @param $value string New value for front page meta description.
	 *
	 * @return string Saved value, or empty string if no update was performed.
	 */
	public static function update_front_page_meta_description( $value ) {
		$front_page_description = sanitize_text_field( $value );

		// By default, seo front page meta description should be shorter than 300 characters
		$description_max_length = apply_filters( 'advanced_seo_front_page_description_max_length', 300 );
		$front_page_description = mb_substr( $front_page_description, 0, $description_max_length );

		$can_set_meta = self::is_enabled_advanced_seo();
		$has_old_meta = ! empty( get_option( self::GRANDFATHERED_META_OPTION ) );
		$option_name = self::has_grandfathered_front_page_meta() ? self::GRANDFATHERED_META_OPTION : self::FRONT_PAGE_META_OPTION;

		$did_update = update_option( $option_name, $front_page_description );

		if ( $did_update && $has_old_meta && $can_set_meta ) {
			// Delete grandfathered option if user has switched to Business plan and updated meta description.
			delete_option( 'seo_meta_description' );
		}

		if ( $did_update ) {
			return $front_page_description;
		}

		return '';
	}
}
