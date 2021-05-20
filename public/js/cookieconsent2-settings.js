$(document).ready(function () {
	window.addEventListener("load", function(){
		window.cookieconsent.initialise({
			"palette": {
				"popup": {
					"background": "#2E2E2E",
					"text": "#fcfcfc"
				},
				"button": {
					"background": "#E30613",
					"text": "#fffcfc"
				}

			},
			"theme": "edgeless",
			"content": {
				"message": "Tento web používá k poskytování služeb, personalizaci reklam a analýze návštěvnosti soubory cookie. Používáním tohoto webu s tím souhlasíte.",
				"dismiss": "V pořádku",
				"link": "Další informace",
				"href": "https://www.kongres-online.cz/zasady-pouzivani-cookies/"
			}
		})});
});
