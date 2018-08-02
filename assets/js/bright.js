  
  $('a[href*=#]').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
               && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
                    if ($target.length) {
                        var targetOffset = $target.offset().top;
                        $('html,body')
                        .animate({ scrollTop: targetOffset }, 2000,'swing'); //set scroll speed here
                        return false;
                    }
                }
            });
  

 $(document).ready(function() {
 	
  
  $('#newmember').click(function(){
      $('#new-member-pop-up').show();
      var audio = new Audio("assets/js/alert/alert.3gpp");
      audio.play();
  });
  
  $('#close-x').click(function(){

    $('#new-member-pop-up').fadeOut(1000);

  });
  




});
