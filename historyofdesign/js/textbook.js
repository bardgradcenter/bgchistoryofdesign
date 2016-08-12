 $(document).ready(function() {
 	$(".readMoreButton_1").click(function(){
 		$("div.excerptSection_1:visible:first").nextAll(":hidden:first").slideDown(function(){
 			var ex1Point = ($(this).offset().top)-240;
 			$("html, body").animate({scrollTop: ex1Point}, 750, function(){
 				history.pushState(null, null, "#Samples");
 			})
 		});
 		var $next = $("div.excerptSection_1:visible:first").nextAll(":hidden:first");
 		if( $next.length == 0 ) {
 			$(".gradient_1").fadeOut();
 			$("#rm_1").fadeOut();
 			$(".rmPurchase_1").fadeIn();
 		}
 	});

 	$(".readMoreButton_2").click(function(){
 		$("div.excerptSection_2:visible:first").nextAll(":hidden:first").slideDown(function(){
 			var ex2Point = ($(this).offset().top)-240;
 			$("html, body").animate({scrollTop: ex2Point}, 750, function(){
 				history.pushState(null, null, "#Samples");
 			})
 		});
 		var $next = $("div.excerptSection_2:visible:first").nextAll(":hidden:first");
 		if( $next.length == 0 ) {
 			$(".gradient_2").fadeOut();
 			$("#rm_2").fadeOut();
 			$(".rmPurchase_2").fadeIn();
 		}
 	});

 	$("#top").click(function() {
 		var topPoint = 0
 		$("html, body").animate({scrollTop: topPoint}, 750, function(){
 			history.pushState(null, null, " ");
 		})
 	});
 	$("#introLink").click(function() {
 		var introPoint = ($("#purchaseQuote").offset().top)-80;
 		$("html, body").animate({scrollTop: introPoint}, 750, function(){
 			history.pushState(null, null, "#Introduction");
 		})
 	});
 	$("#edconLink").click(function() {
 		var edconPoint = ($("#editors").offset().top)-80;
 		$("html, body").animate({scrollTop: edconPoint}, 750, function(){
 			history.pushState(null, null, "#Editors-and-Contributors");
 		})
 	});
 	$("#sampLink").click(function() {
 		var exPoint = ($("#excerpt").offset().top)-80;
 		$("html, body").animate({scrollTop: exPoint}, 750, function(){
 			history.pushState(null, null, "#Samples");
 		})
 	});
});


(function($) {
    $(function() {
        $('.jcarousel').jcarousel();

        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination({
            	'perPage':1
            });
    });
})(jQuery);
// Count number of images in the jcarousel gallery and then set appropriate widths
$(document).ready(function(){
	var n = $(".jItem").length;
	var ulWidth = ((n*100.5) + "%");
	var liWidth = ((100/n) + "%");
	$(".jcarousel ul").css("width", ulWidth);
	$(".jcarousel ul li").css("width", liWidth);
})

$(window).load(function(){
 	var hashVal = window.location.hash;
 	if(hashVal == "#Introduction") {
 		$(window).scrollTop( ($("#purchaseQuote").offset().top)-80);
 	}
})
$(window).load(function(){
	var hashVal = window.location.hash;
	if(hashVal == "#Editors-and-Contributors") {
 		$(window).scrollTop( ($("#editors").offset().top)-80);
 	}
})
$(window).load(function(){
	var hashVal = window.location.hash;
	if(hashVal == "#Samples") {
 		$(window).scrollTop( ($("#excerpt").offset().top)-80);
 	}
})