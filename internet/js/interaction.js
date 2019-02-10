$(document).ready(function() {

	customerLogin();

	productPeek();

	customerLogout();

	customerPicForm();
});




function customerLogin() {
	$('#login').on('click', function(event) {
		event.preventDefault();
		
		$('.login-modal').show(250).removeClass('inactive').addClass('active');
	});

	$('.close-button').on('click', function() {
		$('.login-modal').hide(250).removeClass('active').addClass('inactive');
	});
}




function customerLogout() {
	$('#logged-in').on('click', function(event) {
		event.preventDefault();
		
		$('.logout-modal').show(250).removeClass('inactive').addClass('active');
	});

	$('.close-button').on('click', function() {
		$('.logout-modal').hide(250).removeClass('active').addClass('inactive');
	});
}




function customerPicForm() {

	if ($('#profilepic-form').hasClass('inactive')) {
		$('.accountpg-custpic').on('click', function() {
			$('#profilepic-form').show(1000).removeClass('inactive');
		});
	}
	else {
		$('.accountpg-custpic').on('click', function() {
			$('#profilepic-form').hide(1000).addClass('active');
		});
	}
}




function productPeek() {
	$('.js-prodPeek').click(function() {

		if ($('.product-summary').hasClass('inactive'))
		$('.product-summary').removeClass('inactive').addClass('active');
		else {
			$('.product-summary').addClass('inactive');
		}
	});
}