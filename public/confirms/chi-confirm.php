<?php


	if ( isset( $_GET["company"] ) && $_GET["company"] == "pfizer" ) {
		$url = "?company=pfizerOK";
	} else {
		$url = "#";
	}

?>

<div class="chi-bg-modal" id="popupContainer">
	<div class="chi-modal-content mt-3">
		<a href="#" class="chi-close" id="chi-close"><img src="<?php echo URL ?>/public/img/close.svg" alt="krížik"></a>
		<img src="<?php echo URL ?>/public/img/chi-logo-black.svg" alt="" class="chi-logo-black">
		<?php if ( ! empty( get_option( 'chi_sub_logo_title' ) ) ) {
			echo get_option( 'chi_sub_logo_title' );
		}; ?>
		<p class="chi-claim-text mt-3">
			<strong>Obsah stránek je určen odborným pracovníkům ve&nbsp;zdravotnictví.</strong>
		</p>
		<form action="">
			<div class="custom-control custom-checkbox pl-0">
				<input type="checkbox" id="customCheck1" required >
				<label for="customCheck1" class="chi-lable">Jsem odborníkem ve&nbsp;smyslu §2a Zákona č.&nbsp;40/1995 Sb., o&nbsp;regulaci reklamy, ve&nbsp;znění pozdějších předpisů, tedy osobou oprávněnou předepisovat léčivé přípravky nebo osobou vydávat léčivé přípravky.</label>
			</div>
			<div class="custom-control custom-checkbox pl-0">
				<input type="checkbox" id="customCheck2"  required >
				<label for="customCheck2" class="chi-lable">Jsem si vědom/a rizik, kterým se&nbsp;vystavuje jiná osoba než odborník, vstoupí-li na&nbsp;stránky určené pro odborné pracovníky ve&nbsp;zdravotnictví.</label>
			</div>
			<a href="#" id="chi-submit" type="submit" class="btn chi-btn-more-acticle mx-auto w-100">Potvrzuji</a>
		</form>
	</div>
</div>
