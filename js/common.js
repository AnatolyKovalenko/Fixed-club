$(function() {

	//Menu slide
	var navBut = $('.menu-but'),
			navMenu = $('.menu ul');
	navBut.on('click', function(){
		navMenu.slideToggle();
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
		
});
	
	
	
	