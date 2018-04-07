

/*******************************  Isotope  ***********************************/
$(window).load(function() {
    'use strict';
    var $container = $('#portfolio-wrap');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('#filters a').click(function(){
        $('#filters .all').removeClass('all');
        $(this).addClass('all');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 

}); //end windows load








/*******************************  Carousel  ***********************************/
$(document).ready(function(){
    'use strict';
    $('#fullscreenslider').carousel({
        interval: 5000
    });
});



/*******************************  Dropdown menu  ***********************************/
$(document).ready(function(){
    'use strict';
    $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
        $(this).find(' > .dropdown-menu ').stop(true, true).delay(200).fadeIn();
        }, function() {
        $(this).find(' > .dropdown-menu ').stop(true, true).delay(200).fadeOut();
    });
});


/*******************************  Pretty Photo  ***********************************/
$(document).ready(function(){
    'use strict';
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        theme: "light_square"
    });
});


/*******************************  Google Maps  ***********************************/
$(document).ready(function(){ 
    'use strict';
    if ($('#map').length) {
        
        var map;
        map = new GMaps({
            div: '#map',
            lat: 41.8902624,
            lng: 12.4923096
        });

        map.addMarker({
            lat: 41.8902624,
            lng: 12.4923096,
            title: 'Contanct',
            infoWindow: {
                content: '15rd Avenue, New York,<br /> 156408, US<br /> <br /> Email: info@company.com <br /> Web: company.com'
            }
        });

    }
});

/*******************************  Nice scroll bar  ***********************************/
$(document).ready(function(){ 
    'use strict';
	$("html").niceScroll({
		background:"#eaeaea",
		cursorcolor:"#a44ae4",
		cursorwidth:8, 
		boxzoom:true, 
		autohidemode:false,
		zindex:99999,
		cursorborder:"1px solid #a44ae4",
	});
});


/*******************************  Carousel  ***********************************/
$(document).ready(function(){ 
    'use strict';
	$('.testimonials .carousel').carousel({
		interval: 3000
	});
});

/*******************************  Tool tip ***********************************/
$(document).ready(function(){ 
    'use strict';
    if( $.fn.tooltip() ) {
        $('[class="tooltip_hover"]').tooltip();
    }
});

/******************************* Go to top arrow ***********************************/
$(document).ready(function(){ 
    'use strict';
	$(window).scroll(function(){
		 if ($(this).scrollTop() > 100) {
			 $('.scrollup').fadeIn();
		 } else {
			 $('.scrollup').fadeOut();
		 }
	 }); 
 
	 $('.scrollup').click(function(){
		 $("html, body").animate({ scrollTop: 0 }, 600);
		 return false;
	 });
});