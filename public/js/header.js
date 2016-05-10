
$('.topli').css('width',(100 / $('.topli').size()) + '%');

$('.bottomli').css('width',(100 / $('.bottomli').size()) + '%');
$.each($('.submenu'),function(){$(this).css('width',$(this).parent().width());});
$('.bottomli, .topli').hover(function(){$(this).find('.submenu').css('display','block');},function(){$(this).find('.submenu').css('display','none');});
$.each($('.topa'),function(){if ($(this).attr('href') == '{{ Request::segment(1) }}'){$(this).addClass('active');}});
