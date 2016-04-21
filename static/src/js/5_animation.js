$j = jQuery.noConflict();
$j(function(){
    
    // Only animate elements when using non-mobile devices
    if (jQuery.browser.mobile === false){
        
        /*-------------------------------------------------------------------*/
        /*  1. Section subtitle
        /*-------------------------------------------------------------------*/
        /*$j('.section-subtitle').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated bounceInLeft').css('opacity', 1);}
        });*/
        
        
        /*-------------------------------------------------------------------*/
        /*  2. Section - Profile
        /*-------------------------------------------------------------------*/
        $j('.profile-text', '#profile').find('p:not(:first)').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated bounceInUp').css('opacity', 1);}
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  3. Section - Services
        /*-------------------------------------------------------------------*/
        $j('.inner-content', '#services').find('h4').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated fadeInUp').css('opacity', 1);}
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  4. Section - Strengths
        /*-------------------------------------------------------------------*/
        $j('.legend-left', '#strengths').find('.legend-title').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated bounceInLeft').css('opacity', 1);}
        });
        
        $j('.legend-right', '#strengths').find('.item').each(function(i){
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceInUp').css('opacity', 1);
                    } , itemsDelay * (i * 3));
                }
            });
        });
       
        
        /*-------------------------------------------------------------------*/
        /*  5. Section - Resume
        /*-------------------------------------------------------------------*/
        $j('#education').find('.resume-item:not(:first)').each(function(i){            
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceInUp').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });
        
        $j('#work').find('.resume-item:not(:first)').each(function(i){            
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceInUp').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  6. Section - Accolades
        /*-------------------------------------------------------------------*/
        $j('.accolades').find('.item:not(:first)').each(function(i){            
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceInUp').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });
        
        $j('.legend-left', '#accolades').find('.legend-title').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated bounceInLeft').css('opacity', 1);}
        });
        
        $j('.legend-right', '#accolades').find('.item').each(function(i){
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceInUp').css('opacity', 1);
                    } , itemsDelay * (i * 3));
                }
            });
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  7. Section - Work Process
        /*-------------------------------------------------------------------*/
        $j('#work-process').find('.title').each(function(i){            
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated fadeInUp').css('opacity', 1);
                    } , itemsDelay * (i * 5));
                }
            });
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  8. Section - Contact
        /*-------------------------------------------------------------------*/
        $j('.contact-details', '#contact').css('opacity', 0).one('inview', function(isInView){
            if (isInView) {$j(this).addClass('animated flipInX').css('opacity', 1);}
        });
        
        
        /*-------------------------------------------------------------------*/
        /*  9. Footer
        /*-------------------------------------------------------------------*/
        /*$j('.footer').find('.item').each(function(i){
            var element = $j(this),
            itemsDelay   = ( isNaN($j(this).data('animation-delay')) ? 50 : $j(this).data('animation-delay'));
            
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView){
                    setTimeout(function(){
                        element.addClass('animated bounceIn').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });*/
    }
});