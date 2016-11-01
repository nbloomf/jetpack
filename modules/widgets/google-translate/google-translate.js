/*global google:true*/
/*global _wp_google_translate_widget:true*/
/*exported jetpackGoogleTranslateInit*/
function jetpackGoogleTranslateInit() {
	var langRegex = /[?&#]lang=([a-z]+)/,
	    langParam = window.location.href.match( langRegex ),
	    lang      = 'object' === typeof _wp_google_translate_widget && 'string' === typeof _wp_google_translate_widget.lang ? _wp_google_translate_widget.lang: 'en';
	if ( langParam ) {
		window.location.href = window.location.href.replace( langRegex, '' ).replace( /#googtrans\([a-zA-Z|]+\)/, '' ) + '#googtrans(' + lang + '|' + langParam[ 1 ] + ')';
	}
	new google.translate.TranslateElement( {
		pageLanguage: lang,
		layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
		autoDisplay: false
	}, 'google_translate_element' );
}
