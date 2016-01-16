$(function() {

	//Menu slide
	var navBut = $('.menu-but'),
			navMenu = $('.menu ul');
	navBut.on('click', function(){
		navMenu.slideToggle();
	});
  
	//Video pause
	var vid = $('#headerVideo'),
	 		pauseButton = $('#pause');	
	pauseButton.on('click', bPlay);
	function playVid(){
		vid[0].play();
	}
	function pauseVid(){
		vid[0].pause();
	}
	function bPlay(){
		if(!pauseButton.hasClass('fa fa-play fa-4x')){
			pauseVid();
			pauseButton.removeClass().addClass('fa fa-play fa-4x');
		} else {
			playVid();
			pauseButton.removeClass().addClass('fa fa-pause fa-4x');
		}
	}

	//Section 2
	var grid = $('.grid');
	addGridListeners();
	function addGridListeners() {
		grid.find('li').each(function() {
			var el = $(this);
			el.on({
				mouseenter: onItemOver,
				mouseleave: onItemOut
			});
		});
	}
	function onItemOver(e){
		var cur = $(e.currentTarget);
		if (!cur.children('div').hasClass('on')) 
				cur.children('div').addClass('on');	
	}
	function onItemOut(e){
		var cur = $(e.currentTarget);
		if (cur.children('div').hasClass('on')) 
				cur.children('div').removeClass('on');	
	}

	//Slider
	var owl = $(".carousel"),
			nextButton = $(".next_button"),
			prevButton = $(".prev_button");
	owl.owlCarousel({
		items: 1,
		itemsDesktop : [1024,1],
		itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsTabletSmall: false,
	  itemsMobile : [479,1],
		autoPlay:3000,
		stopOnHover:true,
		transitionStyle:"fade"
	});
	nextButton.on('click',function() {
		owl.trigger("owl.next");
	});
	prevButton.on('click',function() {	
		owl.trigger("owl.prev");	
	});

	//Footer wheel
	$('#bic').on({
   	mouseenter: function() {
		  $(this).css({
				'-webkit-transform':'rotate(720deg)',
		    '-moz-transform':'rotate(720deg)',
		   	'-o-transform':'rotate(720deg)',
		   	'transform':'rotate(720deg)'
	    });
  	},
	  mouseleave: function() {
		  $(this).css({
				'-webkit-transform':'rotate(0deg)',
		   	'-moz-transform':'rotate(0deg)',
		 		'-o-transform':'rotate(0deg)',
		   	'transform':'rotate(0deg)'
		 });
  	}  
	});
	
	//Top button
	var win = $(window),
			topScroll = $('.scrollToTop');
	win.scroll(function() {
	    if ($(this).scrollTop() > 100) {
	    	topScroll.fadeIn();
	    } 
	    else {
	    	topScroll.fadeOut();
	    }
 	});  
  	topScroll.click(function(){
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});	

//Fancybox gallery
  var fancy = $(".fancybox"),
  		divTitle = $("#fancyboxTitles div");
  fancy.fancybox({
  	padding : 0, 
		overlayOpacity : 0.45,
		openEffect  : 'elastic',
    closeEffect : 'elastic',
    helpers : {
    	title : {
    		type : 'over'
    	}
    },
    beforeShow : function() {
      this.title = divTitle.eq(this.index).html();
    }
  });
  
//Contact form 
  $('.container-bg.form').mousemove(function(e){
	  var amountMovedX = (e.pageX * -1 / 30),
	     	amountMovedY = (e.pageY * -1 / 9);
    $(this).css(
    	'background-position',
    	amountMovedX + 'px ' + amountMovedY + 'px');
	});

});


	
	