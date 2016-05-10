				
$.each($('.activebutton'), function(){
	if ($(this).hasClass('activebutton0') == true)
		$(this).html('NOT ACTIVE');
	else
		$(this).html('ACTIVE');
});
				
$('.activebutton').click(function(){
	if ($(this).hasClass('activebutton0') == true)
	{
		$(this).removeClass('activebutton0').addClass('activebutton1').html('ACTIVE');
		$(this).parent().find('input[name=active]').val('1');
	}
	else
	{
		if ($(this).parent().find('input[name=current]').size() > 0 && $(this).parent().find('input[name=current]').val() == '1')
		{
			$('#info').html('<span class="error">You cannot deactivate something that is the current one.</span>');
		}
		else
		{
			$(this).removeClass('activebutton1').addClass('activebutton0').html('NOT ACTIVE');
			$(this).parent().find('input[name=active]').val('0');
		}
	}
});