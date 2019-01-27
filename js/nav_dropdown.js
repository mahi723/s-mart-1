
$(document).ready(function() {
		var subNavPane = $('#sub-nav');
		var subNavMenuDivs = $('#sub-nav > div');

	// alert("working js");

	$('#top-nav > li').click(function(event) {
		var id = $(this).attr('id');
		var subNavMenu = "." + id + "-nav";
		var subNavColumn = $(subNavMenu + " > div");


		if ($(subNavColumn).hasClass('subnav-column')) {
			event.preventDefault();

			openSubNav(subNavPane);
		}
		

		// open sub nav and (also switch) sub menu when clicked
		if ($(subNavMenu).hasClass('inactive-nav') && $(subNavColumn).hasClass('subnav-column')) {

			openSubNav(subNavPane);
			switchSubMenuLinks(subNavMenu);

		}
		// close sub nav and sub menu when same top nav link clicked
		else {
			closeSubNav(subNavPane);
			closeSubMenuLinks(subNavMenuDivs);
		}
	}); // end click function



	mouseNavExit(subNavPane, subNavMenuDivs);
	

}); // end doc ready








	function openSubNav(openPane) {
		openPane.removeClass('inactive-nav').addClass('active-nav');
	}




	function switchSubMenuLinks(switchMenus) {
		$('#sub-nav > div').removeClass('active-nav').addClass('inactive-nav');
			setTimeout(function() {
				$(switchMenus).removeClass('inactive-nav').addClass('active-nav');
			}, 500);
	}




	function closeSubMenuLinks(closeSubMenuDivs) {
		closeSubMenuDivs.removeClass('active-nav').addClass('inactive-nav');
	}




	function closeSubNav(closePane) {
		closePane.removeClass('active-nav').addClass('inactive-nav');
	}



	
	// close navigation if mouse exits
	function mouseNavExit(closePane, closeSubMenuDivs) {
		$('.nav').mouseleave(function() {
			// alert("is nav mouse out working?");
			closeSubNav(closePane);
			closeSubMenuLinks(closeSubMenuDivs);
		});
	}