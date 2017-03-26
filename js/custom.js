function white(v){
	v.style.color="white";
}

function loginaction(){
$.post( "https://radiant-woodland-44974.herokuapp.com/login", function() {
  alert( "success" );
})
  .done(function() {
    alert( "second success" );
  })
  .fail(function() {
    alert( "error" );
  });
 

	
}

function black(v){
	if(v.className!="active")
		v.style.color="black";
}

  function setbackgroundcolor(v){
		console.log(v);
		document.getElementById(v).className="active";
  		document.getElementById(v).style.background="#0c2d72";
  		document.getElementById(v).style.color="white";
}

$(document).ready(function(){
	
	console.log("working");
  console.log(window.location.href);



  if(window.location.href.indexOf("index") >= 0)
  	{
  		setbackgroundcolor("home_id");
  	}

  else if(window.location.href.indexOf("program") >= 0)
  	{
  		setbackgroundcolor("program_id");
  	}

  else if(window.location.href.indexOf("about") >= 0){
  		setbackgroundcolor("about_id");
  	}

  else if(window.location.href.indexOf("previousconference") >= 0){
  		setbackgroundcolor("pastconf_id");
  	}

  else if(window.location.href.indexOf("sponsors") >= 0){
  		setbackgroundcolor("sponsors_id");
  	}

  else if(window.location.href.indexOf("faq") >= 0)
  	{
  		setbackgroundcolor("faq_menu_id");
  	}

  else if(window.location.href.indexOf("registration") >= 0){
  		setbackgroundcolor("regist_id");
  	}

});
$( "#loginbtn" ).click(function() {
	console.log("login");
$('#loginmodal').modal('toggle');
});




  

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92517454-1', 'auto');
  ga('send', 'pageview');

	/* ---------------------------------------------------------------------- */
	/*	Back To TOp Script
	/* ---------------------------------------------------------------------- */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').css('opacity','1');
		} else {
			$('.back-to-top').css('opacity','0');
		}
	});
	/* ---------------------------------------------------------------------- */
	/*	PrettyPhoto
	/* ---------------------------------------------------------------------- */
	if($("a[data-rel^='prettyphoto']").length){
		$("a[data-rel^='prettyphoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:9000, autoplay_slideshow: false});
	}
	
	/* ---------------------------------------------------------------------- */
	/*	Back to Top Script
	/* ---------------------------------------------------------------------- */
	$('.back-to-top a').on('click',function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	/*
	  ==============================================================
		  ToolTip
	  ============================================================== */

	if($('[data-toggle="tooltip"]').length){
	 $('[data-toggle="tooltip"]').tooltip()
	}
	/*
	  ==============================================================
		  Banner Wrap Script Start
	  ============================================================== */
	  if($('.bxslider-banner').length){
		$('.bxslider-banner').bxSlider();
	  }


/*
	  ==============================================================
		  Party Banner Wrap Script Start
	  ============================================================== */
	  if($('.party_main_banner').length){
		$('.party_main_banner').bxSlider({
			auto:true	
		});
	  }
	
	/*
	  ==============================================================
		  FAQ Banner Wrap Script Start
	  ============================================================== */
	  if($('.faq-banner').length){
		$('.faq-banner').bxSlider();
	
	  }
	/*
	  ==============================================================
		  Count Number(Waypoint) Wrap Script Start
	  ============================================================== */
		if($('.counter').length){
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	/* ==================================================================
							Time Counter Script
	  	=================================================================	*/
		
		$('.countdown').downCount({ date: '08/08/2016 12:00:00', offset: +1 });
		
		
		
	/*
	  ==============================================================
		  Aside Bar Tweets Wrap Script Start
	  ============================================================== */
		$('.aside_tweets').bxSlider({
			auto: true
		});
		
	/*
	  ==============================================================
		  Aside Instagram Wrap Script Start
	  ============================================================== */
		$('.instagram_slider').bxSlider({
			auto: true
		});
		
	/*
	  ==============================================================
		  Calendar Script
	  ============================================================== */
	if($('#calendar').length){
		$('#calendar').fullCalendar({
			height: 373,
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: '2015-02-01'
				}
				
			]
		});
	}
		
	
	/*
	  ==============================================================
		   Our Speaker Detail Testimonial Owl Carousel Script Start
	  ============================================================== */
	if($('#owl-demo').length){
		var owl = $("#owl-demo");
		owl.owlCarousel({	
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1],
			[1200, 1],
			[1400, 1],
			[1600, 1]
		  ],
		  navigation : true

		});
	} 
	
	/*
	  ==============================================================
		   Our Dj Team Owl Carousel Script Start
	  ============================================================== */
	if($('#dj_team_wrap').length){
		var owl = $("#dj_team_wrap");
		owl.owlCarousel({	
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 2],
			[700, 2],
			[1000, 3],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		  ],
		  navigation : true

		});
	} 
	
	/*
	  ==============================================================
		 Slidr Menu
	  ============================================================== */
	
	if($('#responsive-menu-button').length){
		$('#responsive-menu-button').sidr({
		  name: 'sidr-main',
		  source: '#navigation'
		});
	}
	
	/*
	  ==============================================================
		   Our Speaker Owl Carousel Script Start
	  ============================================================== */
	if($('#kode-speaker-causel').length){
		var owl = $("#kode-speaker-causel");
		owl.owlCarousel({	
		  itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 2],
			[1000, 2],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		  ],
		  navigation : true

		});
	}
	
	/*
	  ==============================================================
		   Our Gallery Owl Carousel Script Start
	  ============================================================== */
	if($('#kode-gallery-causel').length){
		var owl = $("#kode-gallery-causel");
		owl.owlCarousel({	
		  itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 2],
			[700, 2],
			[1000, 3],
			[1200, 4],
			[1400, 4],
			[1600, 4]
		  ],
		  navigation : true

		});
	}
	
	/*
	  ==============================================================
		   Home Page TEstimonial Owl Carousel Script Start
	  ============================================================== */
	if($('#kode-testimonial-causel').length){
		var owl = $("#kode-testimonial-causel");
		owl.owlCarousel({	
		  itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 2],
			[700, 2],
			[1000, 3],
			[1200, 3],
			[1400, 3],
			[1600, 3]
		  ],
		  navigation : true

		});
	}
	
	/*
	  ==============================================================
		   About US Brand Owl Carousel Script Start
	  ============================================================== */
	if($('#owl-demo-new').length){
		var owl = $("#owl-demo-new");
		owl.owlCarousel({	
		  itemsCustom : [
			[0, 1],
			[450, 2],
			[600, 3],
			[700, 4],
			[1000, 6],
			[1200, 6],
			[1400, 6],
			[1600, 6]
		  ],
		  navigation : true

		});
	}
	
	/*
	  ==============================================================
		   Filterable Gallery Script Start
	  ============================================================== */
	if($('#filterable-item-holder-1').length){
		jQuery(window).load(function($) {
			var filter_container = jQuery('#filterable-item-holder-1');

			filter_container.children().css('position','relative');	
			filter_container.masonry({
				singleMode: true,
				itemSelector: '.filterable-item:not(.hide)',
				animate: true,
				animationOptions:{ duration: 800, queue: false }
			});	
			jQuery(window).resize(function(){
				var temp_width =  filter_container.children().filter(':first').width();
				filter_container.masonry({
					columnWidth: temp_width,
					singleMode: true,
					itemSelector: '.filterable-item:not(.hide)',
					animate: true,
					animationOptions:{ duration: 800, queue: false }
				});		
			});	
			jQuery('ul#filterable-item-filter-1 a').on('click',function(e){	

				jQuery(this).addClass("active");
				jQuery(this).parents("li").siblings().children("a").removeClass("active");
				e.preventDefault();
				
				var select_filter = jQuery(this).attr('data-value');
				
				if( select_filter == "All" || jQuery(this).parent().index() == 0 ){		
					filter_container.children().each(function(){
						if( jQuery(this).hasClass('hide') ){
							jQuery(this).removeClass('hide');
							jQuery(this).fadeIn();
						}
					});
				}else{
					filter_container.children().not('.' + select_filter).each(function(){
						if( !jQuery(this).hasClass('hide') ){
							jQuery(this).addClass('hide');
							jQuery(this).fadeOut();
						}
					});
					filter_container.children('.' + select_filter).each(function(){
						if( jQuery(this).hasClass('hide') ){
							jQuery(this).removeClass('hide');
							jQuery(this).fadeIn();
						}
					});
				}
				
				filter_container.masonry();	
				
			});
		});
	}
	
	/* ==================================
	Contact Form Ajax
==================================	*/
	
	if($('#contactform').length) {

		var $form = $('#contactform'),
		$loader = '<img src="images/ajax_loading.gif" alt="Loading..." />';
		$form.append('<div class="hidden-me" id="contact_form_responce">');

		var $response = $('#contact_form_responce');
		$response.append('<p></p>');

		$form.submit(function(e){

			$response.find('p').html($loader);

			var data = {
				action: "contact_form_request",
				values: $("#contactform").serialize()
			};

			//send data to server
			$.post("inc/contact-send.php", data, function(response) {

				response = $.parseJSON(response);
				
				$(".incorrect-data").removeClass("incorrect-data");
				$response.find('img').remove();

				if(response.is_errors){

					$response.find('p').removeClass().addClass("error type-2");
					$.each(response.info,function(input_name, input_label) {

						$("[name="+input_name+"]").addClass("incorrect-data");
						$response.find('p').append('Please enter correct "'+input_label+'"!'+ '</br>');
					});

				} else {

					$response.find('p').removeClass().addClass('success type-2');

					if(response.info == 'success'){

						$response.find('p').append('Your email has been sent!');
						$form.find('input:not(input[type="submit"], button), textarea, select').val('').attr( 'checked', false );
						$response.delay(1500).hide(400);
					}

					if(response.info == 'server_fail'){
						$response.find('p').append('Server failed. Send later!');
					}
				}

				// Scroll to bottom of the form to show respond message
				var bottomPosition = $form.offset().top + $form.outerHeight() - $(window).height();

				if($(document).scrollTop() < bottomPosition) {
					$('html, body').animate({
						scrollTop : bottomPosition
					});
				}

				if(!$('#contact_form_responce').css('display') == 'block') {
					$response.show(450);
				}

			});

			e.preventDefault();

		});				

	}
	
	/*
	  ==============================================================
		   Accordian Script Start
	  ============================================================== */  
	  
	  if($('.accordion').length){
		//custom animation for open/close
		$.fn.slideFadeToggle = function(speed, easing, callback) {
		  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

		$('.accordion').accordion({
		  defaultOpen: 'section1',
		  cookieName: 'nav',
		  speed: 'slow',
		  animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  },
		  animateClose: function (elem, opts) { //replace the standard slideDown with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  }
		});
	}
		  


	/*
	  ==============================================================
		 Google Map
	  ============================================================== */
		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, 'load', initialize_new);
	
	/*
	  ==============================================================
		 SLY Script
	  ============================================================== */
		var options = {
		horizontal: 1,
		itemNav: 'basic',
		speed: 300,
		mouseDragging: 1,
		touchDragging: 1
		};
		var frame = new Sly('#scrollbar', options).init();
