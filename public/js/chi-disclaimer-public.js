(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$.urlParam = function (name) {
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		return results[1] || 0;
	}

	if ($.urlParam('company') == 'pfizer') {
		document.getElementById("chi-close").addEventListener("click", function () {
			window.location.replace("http://google.com");
		});
		setTimeout(function () {
			/*document.querySelector(".chi-bg-modal").style.display = "flex".hide();*/
			$("#pfizerPopupContainer")
				.css("display", "flex")
				.hide()
				.fadeIn();
		}, 200);

		document.getElementById("pfizer-confirm-yes").addEventListener("click",
			function (e) {
				//var myNewURL = "?company=pfizerOK";//the new URL
				//window.history.pushState("object or string", "Title", myNewURL );
				$("#pfizerPopupContainer").fadeOut();
			});

		document.getElementById("pfizer-confirm-no").addEventListener("click", function () {
			window.location.replace("http://google.com");
		});
	} else {

		document.getElementById("chi-close").addEventListener("click", function () {
			window.location.replace("http://google.com");
		});

		var chiConfirm = localStorage.getItem("chi-confirm");
		setTimeout(function () {
			if (!chiConfirm) {
				/*document.querySelector(".chi-bg-modal").style.display = "flex".hide();*/
				$("#popupContainer")
					.css("display", "flex")
					.hide()
					.fadeIn();
			}
		}, 100)
		document.getElementById("chi-submit").addEventListener("click",
			function (e) {
				if ($('#customCheck1').is(':checked')) {
					document.querySelector(".chi-bg-modal#popupContainer").style.display = "none";
					localStorage.setItem('chi-confirm', 'true');
				}
			});
	}


})(jQuery);
