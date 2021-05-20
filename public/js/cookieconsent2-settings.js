$(document).ready(function(){

	document.getElementById("chi-close").addEventListener("click", function()
	{
		window.location.replace("http://google.com");
	});
	var chiConfirm = localStorage.getItem("chi-confirm");
	setTimeout(function(){
		if (!chiConfirm)
		{
			/*document.querySelector(".chi-bg-modal").style.display = "flex".hide();*/
			$("#popupContainer")
				.css("display", "flex")
				.hide()
				.fadeIn();
		}
	}, 1000)
	document.getElementById("chi-submit").addEventListener("click",
		function(e){
			if ($('#customCheck1').is(':checked')) {
				document.querySelector(".chi-bg-modal").style.display = "none";
				localStorage.setItem('chi-confirm', 'true');
			}
		});
});
