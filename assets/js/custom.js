//#region  Switch mobile top menu

var element = jQuery('.top-right-links');
var windowWidth = jQuery(window).width();

if(windowWidth <= 992) {
	element.removeClass('fright');
}

//#endregion
//#region Defer JavaScript from Youtube Videos

function pbDeferYoutubeJS() {

	var vidDefer = document.getElementsByTagName('iframe');

	for(var i = 0; i < vidDefer.length; i++) {
		if(vidDefer[i].getAttribute('data-src')) {
			vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
		}
	}

}
window.onload = pbDeferYoutubeJS;

//#endregion