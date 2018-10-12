(function($){
    $.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = $.extend( {}, defaults, opts );

        $(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var $section = $(document).find( $(this).data('section') );
            if ( $section.length < 1 ) {
                return false;
            };

            if ( $('html, body').is(':animated') ) {
                $('html, body').stop( true, true );
            };

            var scrollPos = $section.offset().top;

            if ( $(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, $section);

            $('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, $section);
            });
        });
    };
}(jQuery));



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


(function(){
 jQuery('.smooth-scroll').scrollingTo();
}());

});

$(document).ready(function(){




    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $(".navbar-brand a").css("color","#fff");
            $("#top-bar").removeClass("animated-header");
			$(".carets").addClass("top-margin");
        } else {
            $(".navbar-brand a").css("color","inherit");
            $("#top-bar").addClass("animated-header");
			$(".carets").removeClass("top-margin");

        }
    });

      /* ----------------------------------------------------------- */
      /*  Skills
      /* ----------------------------------------------------------- */

          if($('.percentage').length){
          $('.percentage').easyPieChart({
            animate: 5000,
            onStep: function(value) {
            this.$el.find('span').text(~~value);
            }
            });
          }

});

/*back to top*/

$(document).ready(function() {
  var height=120;

  $(window).scroll(function() {
    if ($(window).scrollTop() > height) {
	  $(".backtop").addClass("islive");
    } else {
	  $(".backtop").removeClass("islive");
	}
  });
});

/*FORM CONTATTI*/
$(document).ready(function() {
  
  $("#button").click(function(){
    var nome = $("#nome").val();
    var email = $("#email").val();
    var oggetto = $("#oggetto").val();
    var message = $("#message").val();
    var privacy = $("#privacy");
    var datastring ='nome=' + nome + '&email=' + email + '&oggetto=' + oggetto +'&message=' + encodeURIComponent(message)+'&privacy=' + privacy;
    
    if(nome.length<1){
    	valid += '<p class="alert">*Name is required';
    }
    if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {

		valid += '<p class="alert">*Please enter a valid e-mail address';

	}
	
	if(message.length<1){
    	valid += '<p class="alert">*Name is required';
    }
    

	if ((privacy).is(":not(:checked)")){ 
		valid += '<p class="alert">*Please enter a valid e-mail address';
		
	}

	$(".load").fadeIn("fast");
		
	$.ajax({	

		type: "POST",

		url: "http://www.freewebsolution.it/wp-content/themes/sublime2.0/assets/include/mail2.php",

		data: datastring,

		cache: false,
		
		success: function(html){
		
		$("#responde").fadeIn("slow");
		
		$("#responde").html("<p class='success'><i class='fa fa-check'></i> Message sent successfully!</p>");

		//$("#risposta").css("background-color","#40f732");

		setTimeout('$("#responde").fadeOut("slow")',2500);
		
		setTimeout('$(".load").fadeOut("slow")');
		
		
		$('#contact-form')[0].reset();
			
		}

	});
	
    return false;
  });
});
/*EVIDENZIARE LINK PAGINA CORRENTE*/
$(document).ready(function() {
  
  var url = window.location;
  $('a[href="'+url+'"]').addClass('active');
  
	    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 110
    });
	
      // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
          $('.navbar-toggle:visible').click();
    });	
	
	    // Offset for Main Navigation
    
});

/*PRELOADER*/
	$(window).load(function() { 
		$("#preloader").delay(1500).fadeOut(500);
		$(".block").delay(2000).fadeIn("fast");
		$(".carets").delay(2000).fadeIn("slow");
	});	
	
	/*CERCA MODAL*/
	$(window).load(function() { 
		$('li.cercamodal >a').attr('data-toggle','modal');
		$('li.cercamodal >a').attr('data-target','#search');
	});	






 




