/*--------------------------------------------------------------------------*
 *  
 *  hidenavi.js
 *  2014 Kana-Lier Author:Kana
 *  http://kana-lier.com/
 *  
 *--------------------------------------------------------------------------*/
$(function(){
	var scrollPosition = 100;
	var navTopPosition = 20;

	var navWidth = $( '#nav' ).width();
	var navHoverWidth = $( '#nav_hover' ).width();
	var flg = false;
	$('#nav').css({
		'position': 'fixed',
		'top': navTopPosition,
		'left': '0px'
	});
	$('#nav_hover').css({
		'position': 'fixed',
		'top': navTopPosition,
		'left': -navWidth
	});

	$(window).scroll(function(){
		if ($(window).scrollTop() > scrollPosition) {
			if(flg == false){
				flg = true;
				$('#nav').stop().animate({'left': -navWidth});
				$('#nav_hover').stop().animate({'left': '0px'});
			}
		} else {
			if(flg){
				flg = false;
				$('#nav').stop().animate({'left': '0px'});
				$('#nav_hover').stop().animate({'left': -navHoverWidth});
			}
		}
	});

	$('#nav_hover').hover(
		function (e) {
		   if(flg){
			   flg = false;
			   $('#nav').stop().animate({'left': '0px'});
			   $('#nav_hover').stop().animate({'left': -navHoverWidth})
		   }
		}
   );
});