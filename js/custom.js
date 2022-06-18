$(function(){
		   
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
		
		$('.carousel').carousel({
			interval: 4000
		});
		
		var owl = $(".owl-carousel");
			owl.owlCarousel({
			items: 1,
			autoplay: true,
			loop:true,
			autoplayTimeout: 5000,
			autoplayHoverPause: false
		});
			
		$('.nav').reaktion({navIcon: '<i class="fa fa-bars"></i>',
		arrowIcon: '<i class="fa fa-angle-down"></i>',
		arrowsToggleOnly: false});
		   
});