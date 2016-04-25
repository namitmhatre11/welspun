$(document).ready(function(){
	
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

	$(window).click(function(){
		$('.pop-wrpr').fadeOut(400);
		if(!$('body').hasClass('startQuiz')){
			$('.diamond-overlay').fadeOut(400);	
		}
		
	});	
	$('.gsap-demo .diamond').click(function(e){
		e.stopPropagation();
		$(this).next('.pop-wrpr').fadeIn(400);
		$('.diamond-overlay').fadeIn(400);
	});
	
	$('.pop-wrpr').click(function(e){
		e.stopPropagation();
	});

	$('#startQuiz').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').addClass('startQuiz');
		$('.quiz-wrpr').fadeIn(400);
		$('.diamond-overlay').fadeIn(400);
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
		if($('body').hasClass('menu-open')){
			$('body').toggleClass('menu-open');
			$('.main-menu').toggle();
			$('.mob-close-btn').toggle();
			$('.menu-icon').toggle();
		}
	});
	$('#exploreColor').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').removeClass('startQuiz');
		$('.quiz-wrpr').fadeOut(400);
		$('.diamond-overlay').fadeOut(400);
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
		if($('body').hasClass('menu-open')){
			$('body').toggleClass('menu-open');
			$('.main-menu').toggle();
			$('.mob-close-btn').toggle();
			$('.menu-icon').toggle();
		}
	});	
	$('#designSpace').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').removeClass('startQuiz');
		$('.quiz-wrpr').fadeOut(400);
		$('.diamond-overlay').fadeOut(400);
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
		if($('body').hasClass('menu-open')){
			$('body').toggleClass('menu-open');
			$('.main-menu').toggle();
			$('.mob-close-btn').toggle();
			$('.menu-icon').toggle();
		}
	});	
	var count=1;
	$('.qust-nav-btn-prev').click(function(e){
		$('.qust-nav-btn-next').find('img').show().next('button').hide();
		if(!$('.qusion-items-first').hasClass('active-question')){
			$('.active-question').removeClass('active-question').prev('.qusion-items').addClass('active-question');
			count--;
			$('.js-counter').html(count);
		}
	});
	$('.qust-nav-btn-next').click(function(e){		
		if($('.active-question').next('.qusion-items').hasClass('qusion-items-last')){
			$(this).find('img').hide().next('button').show();
		}
		if(!$('.qusion-items-last').hasClass('active-question')){
			$('.active-question').removeClass('active-question').next('.qusion-items').addClass('active-question');
			count++;
			$('.js-counter').html(count);
		}
	});	
	$('.qust-nav-btn-next button').click(function(e){
		$('.quiz-wrpr').fadeOut(400);
		$('body').removeClass('startQuiz');
		$('.diamond-overlay').fadeOut(400);
	});

	$('.main-menu-icon').click(function(){
		$('body').toggleClass('menu-open');
		$('.main-menu').toggle();
		$('.mob-close-btn').toggle();
		$('.menu-icon').toggle();
	});
	function run(interval, frames) {
	    var int = 1;
	    
	    function func() {
	        document.body.id = "bg"+int;
	        int++;
	        if(int === frames) { int = 1; }
	    }
	    
	    var swap = window.setInterval(func, interval);
	}

	run(5000, 5);

	$('.popup-close').click(function(){
		$(this).parents('.pop-wrpr').fadeOut(400);
		$('.diamond-overlay').fadeOut(400);
	});

	
});