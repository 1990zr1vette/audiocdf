
var homesliderHeight = $(window).height() - $('header').height() - 150;
if (homesliderHeight < 400)
{
	homesliderHeight = 400;
}

var homesliderWidth = $(window).width();
$('.banner_overlay').css('height',homesliderHeight);
$('#homeslider').css('height',homesliderHeight).css('width',homesliderWidth);
$('#homeslider').find('img').css('height',homesliderHeight).css('width',homesliderWidth);
$('#messages').css('top',($('#homeslider').position().top + $('#homeslider').height() - $('#messages').height()) + 'px');

$.each($('#messages .message'),function(index){$(this).attr('data-left',$(this).position().left);});
var messageHeight = $('#messages .message').eq(0).height();
var messageLeft = $('#messages .message').eq(0).position().left;

$.each($('#messages .message'),function(index){
	
	if (index != 0)
	{
		if (index % 3 == 0)
			$(this).attr('data-position','onbottom').css('top',$(this).height());
		else if (index % 3 == 1)
			$(this).attr('data-position','ontop').css('top','-' + $(this).height() + 'px');
		else if (index % 3 == 2)
			$(this).attr('data-position','right').css('left',$(window).width() + 'px');
	}
	
});
	
var slideNo = 0;
var noOfSlides = $('#homeslider').find('img').size();
var interval = setInterval(function(){nextSlide();}, 5000);
var animationSpeed = 2000;
function nextSlide()
{
	var oldSlideNo = slideNo;
	if (slideNo < (noOfSlides - 1)){slideNo++;}else{slideNo = 0;}
	$('#homeslider').find('img').eq(oldSlideNo).animate({opacity:0},animationSpeed);	
	$('#homeslider').find('img').eq(slideNo).animate({opacity:1}, animationSpeed);
	var message = $('#messages').find('.message').eq(slideNo);
	var dataPosition = $(message).attr('data-position');
	if (dataPosition == 'ontop')
	{
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','ontop').animate({top:'-' + messageHeight + 'px'},animationSpeed / 2);
		$(message).animate({top:0},animationSpeed / 2);
	}
	else if (dataPosition == 'onbottom')
	{
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','onbottom').animate({top:messageHeight + 'px'},animationSpeed / 2);
		$(message).animate({top:0},animationSpeed / 2); 
	}
	else if (dataPosition == 'right')
	{
		var leftPos = parseInt($(message).attr('data-left'));
		$('#messages').find('.message').eq(oldSlideNo).attr('data-position','right').animate({left:$(window).width()},animationSpeed / 2);
		$(message).animate({left:leftPos},animationSpeed / 2); 
	}
}