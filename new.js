  /*src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"*/
        
            jQuery(document).ready(function(){
                var touch = jQuery('#touch-menu');
                var menu = jQuery('.nav');
                
                jQuery(touch).on('click',function(e){
                    e.preventDefault();
                    menu.slideToggle(1);
                });
                jQuery(window).resize(function(){
                    var wid = jQuery(window).width();
                    if(wid > 426 && menu.is(':hidden')){
                        menu.removeAttr('style');
                    }
                });
        });
    