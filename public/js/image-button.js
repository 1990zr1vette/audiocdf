
$('.imagebutton').click(function(){$(this).parent().find('input[type=file]').click();});
$('#img').change(function(){readURL(this);});
function readURL(input) 
{
	if (input.files && input.files[0]) 
	{
		var reader = new FileReader();
		reader.onload = function (e) 
		{
			$('#image').css('display', 'block').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}