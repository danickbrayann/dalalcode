
$(document).ready(function() {

    $(window).scroll(function(){
        if (this.scrollY > 20) {
            $(".navbar").addClass("sticky");
            $(".goTop").fadeIn();
        } else {
            $(".navbar").removeClass("sticky");
            $(".goTop").fadeOut();
        }
    });

    $(".goTop").click(function(){scroll(0,0)})

    $('.menu-toggler').click(function(){
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
    
    $(".works").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{enabled:true}
    });
});

/*===================================*
	01. LOADING JS
	/*===================================*/
	$(window).on('load', function() {
		setTimeout(function () {
			$(".preloader").delay(700).fadeOut(700).addClass('loaded');
		}, 800);
	});