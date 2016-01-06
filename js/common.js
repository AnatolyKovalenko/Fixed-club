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
		
});
	
	
	
	