$(function(){
	$('.slide-container img:gt(0)').hide(0);
	setInterval(function(){
		$('.slide-container :first-child').fadeOut()
			.next('img').fadeIn()
			.end().appendTo('.slide-continer');
	}, 3000);
});