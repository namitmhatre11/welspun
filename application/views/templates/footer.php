<footer class="btm-footer">
      
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
     
      
      $('.js--jumper').click(function(){ 

       $("body, html").animate({
                    scrollTop: $($(this).data('href')).offset().top-95
                }, 600);

            });
      var baseUrl = '<?php echo base_url() ?>';
      $(document).ready(function(){
        $('.close-overlay').click(function(){
          $(this).parents('.overlay-wrpr').removeClass('active-mob-overlay');
          
        });
        $('.overlay-wrpr>.row>img,.heros-name').click(function(){
          $(this).parents('.overlay-wrpr').addClass('active-mob-overlay');
        })
        $('.carousel').carousel({interval: false});
          $(window).on("scroll", function(e) {  
            if($(window).width()>1006){
              if ($(this).scrollTop() > 50) {
                $('body').addClass("fix-header");
              } else {
                $('body').removeClass("fix-header");
              }
          }             
        });
        $(window).resize(function(){
          if($(window).width()>=1007){
            $('.video-wrpr,.video-wrpr>img,.top-video-info').height($(window).height());
          }
          else{
            $('.video-wrpr,.video-wrpr>img,.top-video-info').css('height','auto');
          }
          
      });
         if($(window).width()>=1007){
            $('.video-wrpr,.video-wrpr>img,.top-video-info').height($(window).height());
         }
        $('.hero-detail-middle').mCustomScrollbar({
          theme:"dark"
        });

        $('.profile-btn').click(function(){
          var lr= $(this).data('lr');
          var lb= $(this).data('tb');
          var playerId = $(this).data('playerid');
          var playerMode = $(this).data('playermode');
		  $(this).parents('.overlay-wrpr').removeClass('active-mob-overlay');
          $(this).parents('.heros-list').find('.hover-overlays').show();
          $(this).parents('.overlay-wrpr').addClass('active-img').find('.hover-overlays').hide();
          if(playerId && playerMode != 'videos'){
	          $('.hero-detail-info').removeClass('hidden').css({'left':lr})
	          if($(window).width()>1006){
				    switch(lb){
				      case "tr" :    
				      reomoveItem();        
				      $('.hero-detail-info').addClass('right').addClass('top');
				      break;
				      case "tl" :   
				      reomoveItem();         
				      $('.hero-detail-info').addClass('left').addClass('top');
				      break;
				      case 'br':    
				      reomoveItem();        
				      $('.hero-detail-info').addClass('right').addClass('bottom');
				      break;
				      default :
				      reomoveItem();
				      $('.hero-detail-info').addClass('left').addClass('bottom');
				    }  
                }
		        else{
		          $("body, html").animate({
		                scrollTop: $("#hero-wrpr").offset().top
		            }, 600);
		        }
          
	          	$.ajax({
	          		  url: baseUrl+"index.php/home/player_model_data",
			          type: 'POST',            
			          data: { 'mode': playerMode, 'playerId': playerId },
			          dataType: "json",
			          success: function(data) {
			          	if($.trim(data) != "") {
			          		var modalHtml = '';
			          		if(playerMode == 'profile'){
				          		$('.hero-detail-inner-media').addClass('hidden');
		          	    		$('.hero-detail-inner-profile').removeClass('hidden');
		          	    		/*$.each( data, function( index, profileValue ) { 
				          			for(var i=0; i<profileValue.length; i++){
				          				console.log(profileValue[i].media_value);
				          			}
				          		}); */
		          	    	}else if(playerMode == 'media'){
				          		$('.hero-detail-inner-profile').addClass('hidden');
		          	    		$('.hero-detail-inner-media').removeClass('hidden');
		          	    		$.each( data, function( index, mediaValue ) { 
				          			for(var i=0; i<mediaValue.length; i++){
				          				var published_date = converter(mediaValue[i].published_date);
				          				modalHtml += '<div class="media-item"><div class="media-discrp"><div class="media-discrp-txt">'+mediaValue[i].description+'</div><div class="media-discrp-date">'+published_date+'</div></div><div class="media-social-icon"><ul class="list-inline"><li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li><li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li></ul></div></div>';
				          			}
				          		}); 
								$('.media-list-wrpr').html(modalHtml);
		          	    	}
		          	    }
	                	
	                  }
	          	});
          }

          function converter(s) {
			  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			  s =  s.replace(/-/g, '/');
			  var d = new Date(s);
			  return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
			}

          function reomoveItem(){
            return $('.hero-detail-info').removeClass('right').removeClass('top').removeClass('bottom').removeClass('left');
          }           
        });
        $('.hover-overlays').hover(function(e){
          e.stopPropagation();
          e.preventDefault();
          $('.user-prof-wrpr').addClass('hidden');          
        });
        $('.back-btn').click(function(){
          $(this).parents('.hero-detail-info').addClass('hidden');
          $('.user-prof-wrpr').removeClass('hidden');  
          $('.hover-overlays').hide();
          $('.overlay-wrpr').removeClass('active-img');
        });
      });
    </script>
  </body>
</html>