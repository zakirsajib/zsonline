$j = jQuery.noConflict();

$j(function(){
    
    /*-------------------------------------------------------------------*/
    /*  Filterable portfolio. Requires isotope js.
    /*-------------------------------------------------------------------*/
    $j(window).smartload(function(){
        var $container = $j('.filterable-portfolio'),
        nav = $j('.filterable-portfolio-nav');
        
        var isotopePortfolio = function(filter){
            $container.isotope({ 
                filter: filter, 
                animationOptions: { 
                    duration: 750, 
                    easing: 'linear', 
                    queue: false
                }
            }); 
        };
        
        isotopePortfolio('*');
        
        nav.find('a').click(function(e){ 
            e.preventDefault();
            
            var selector = $j(this).attr('data-filter'); 
            
            nav.find('li').removeClass('active');
            nav.find('a').removeClass('disabled');
            
            $j(this).parent('li').addClass('active');
            $j(this).addClass('disabled');
            
            isotopePortfolio(selector);
        }); 
    });
});