$(document).ready(function(){
	$('.navbtn').click(function(){
		$(this).css('color','#ffd400');
		$(this).css('text-decoration','none');
	});
	$('.nn').click(function(){
		$(this).css('color','#fff');
		$(this).css('text-decoration','none');

	});


	var $animation_elements = $('.ansar');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }
    	 $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

    //  $('.blok7').hover(function () {
    //    $(this).children("p").css('text-decoration', 'underline');
      
    // }, function () {
    //    $(this).css('border-bottom', ' 0px solid rgb(101, 179, 233)');
    //    });
});
