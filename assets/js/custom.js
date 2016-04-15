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
		$('.pop-wrpr').hide();
		if(!$('body').hasClass('startQuiz')){
			$('.diamond-overlay').hide();	
		}
		
	});	
	$('.gsap-demo .diamond').click(function(e){
		e.stopPropagation();
		$(this).next('.pop-wrpr').show();
		$('.diamond-overlay').show();
	});
	
	$('.pop-wrpr').click(function(e){
		e.stopPropagation();
	});

	$('#startQuiz').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').addClass('startQuiz');
		$('.quiz-wrpr').show();
		$('.diamond-overlay').show();
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
	});
	$('#exploreColor').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').removeClass('startQuiz');
		$('.quiz-wrpr').hide();
		$('.diamond-overlay').hide();
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
	});	
	$('#designSpace').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('body').removeClass('startQuiz');
		$('.quiz-wrpr').hide();
		$('.diamond-overlay').hide();
		$('.main-menu li').removeClass('menu-active');
		$(this).parents('li').addClass('menu-active');
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
		$('.quiz-wrpr').hide();
		$('body').removeClass('startQuiz');
		$('.diamond-overlay').hide();
	});
	
});