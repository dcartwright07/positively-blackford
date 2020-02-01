/* #region  Switch mobile top menu */

var element = jQuery( '.top-right-links' );
var windowWidth = jQuery( window ).width();

if ( windowWidth <= 992 ) {
	element.removeClass( 'fright' );
}

/* #endregion */
