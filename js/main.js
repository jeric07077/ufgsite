$(document).ready(function(){
	slideInRegister();
	slideOutRegister();
});



function slideInRegister(){
	$('#join').on("click", function(){
		$('#register').removeClass('hide-div');
		$('#login').addClass('hide-div');
					
		//slideIn register

		$('#register').fadeIn();
		$('#register').removeClass('animated slideOutRight');
		$('#register').addClass('animated slideInRight');
	});
}


function slideOutRegister(){
	$('#back').on("click", function(){
		$('#login').removeClass('hide-div');
		$('#register').addClass('hide-div');
					
		//slideOut register
		$('#register').removeClass('animated slideInRight');
		$('#register').addClass('animated slideOutRight');
		$('#register').fadeOut();
		$('#login').fadeIn();
		$('#login').addClass('animated slideInRight');

	});
}