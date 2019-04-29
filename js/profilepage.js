$(document).ready(function(){
	rightContainerAnimation();
});


function rightContainerAnimation(){
	$('.viewAppointments').on("click", function(){
		$('#appointments').removeClass('hide-div');
		$('#aboutProfile').addClass('hide-div');
		$('#newAppointment').addClass('hide-div');
		$('#sendMsg').addClass('hide-div');

		$('#appointments').addClass('animated fadeIn');
	});

	$('.nameProfile').on("click", function(){
		$('#aboutProfile').removeClass('hide-div');
		$('#appointments').addClass('hide-div');
		$('#newAppointment').addClass('hide-div');
		$('#sendMsg').addClass('hide-div');

		$('#aboutProfile').addClass('animated fadeIn');

	});

	$('.addAppointment').on("click", function(){
		$('#newAppointment').removeClass('hide-div');
		$('#appointments').addClass('hide-div');
		$('#aboutProfile').addClass('hide-div');
		$('#sendMsg').addClass('hide-div');

		$('#newAppointment').addClass('animated fadeIn');

	});


}