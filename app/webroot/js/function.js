jQuery(function() {

//scroll-------------------------------------------------
  jQuery('a[href*="#"]').click(function() {		
      var $target = jQuery(this.hash);
      $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        jQuery((navigator.userAgent.indexOf("Opera") != -1) ? document.compatMode == 'BackCompat' ? 'body' : 'html' :'html,body').animate({scrollTop: targetOffset}, 1000);
       return false;
      }

  });



//menu-------------------------------------------------
  jQuery(document).ready(function() {
	//button
	  $(".menubt").click(function(){
		  $(".top").toggleClass("menuclick1")
	  });
	  $(".menubt").click(function(){
		  $(".middle").toggleClass("menuclick2")
	  });
	  $(".menubt").click(function(){
		  $(".bottom").toggleClass("menuclick3")
	  });
  
	//window
      $('.menubt').on('click', function() {
          $('.menusp').animate({'width':'toggle'});
      });
  
	//menu close
	  $('.menusp a').on('click', function(){
		  if (window.innerWidth <= 768) {
			 $('.menubt').click();
		 }
	  });
  });



















});


