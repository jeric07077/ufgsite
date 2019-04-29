$(document).ready(function(){
	fadeInProfile();
	fadeInProfile();
});



function fadeInProfile(){
	$('#profileSlide').on("click", function(){
		$('#profileContents').removeClass('hide-div');


		$('#profileContents').fadeIn();
		$('#profileContents').removeClass('animated fadeOutLeft');
		$('#profileContents').addClass('animated bounceInLeft');
	});

}
