
$(window).load(function (){
	$('#cms-actionbarModule span').hover(function(){$(this).animate({opacity: 0.5},'fast')});
	$('#cms-actionbarModule span').mouseout(function(){$(this).animate({opacity: 1.0},'slow')});
	$('#cms-actionbarPage span').hover(function(){$(this).animate({opacity: 0.5},'fast')});
	$('#cms-actionbarPage span').mouseout(function(){$(this).animate({opacity: 1.0},'slow')});
	$('#slider').nivoSlider({
  });
  $('.sponsorSlideshow').cycle({
  	timeout: 300,
  	speed: 500
  });
	
	/*$('#cat-nav a').hover(function(){
		
		$(this).next('div').children('ul').css('display','block');
	});
	$('#cat-nav ul').mouseleave(function(){
		$('#cat-nav ul').css('display','none');
	});*/
});
