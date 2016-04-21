$j = jQuery.noConflict();


$j(function(){

    /*-------------------------------------------------------------------*/
    /*  1. Preloader. Requires jQuery jpreloader plugin.
    /*-------------------------------------------------------------------*/
    $j(document).ready(function() {
        if ($j.fn.jpreLoader){
            $j('body').jpreLoader({
                showPercentage: false,
                loaderVPos: '50%'
            });
        }
    });
    

    /*-------------------------------------------------------------------*/
    /*  2. Makes the height of all selected elements (".match-height")
    /*  exactly equal. Requires jQuery matchHeight plugin.
    /*-------------------------------------------------------------------*/
    $j(window).smartload(function(){
        if ($j.fn.matchHeight){
            $j('.match-height').matchHeight();
        }
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  3. Full screen
    /*-------------------------------------------------------------------*/
    function setResizeContent() {
        var minHeight = $j(window).height();
        $j('.full-screen').css('min-height', minHeight);
    }
    
    setResizeContent();

    $j(window).smartresize(function(){
        setResizeContent();
    });

    
    /*-------------------------------------------------------------------*/
    /*  4. Just did another hack of dropdown menu for Bootstrap scrollspy.
    /*-------------------------------------------------------------------*/
    $j('body').on('activate.bs.scrollspy', function(){
        $j('.page-scroll.dropdown > .dropdown-toggle').each(function(){
            $j(this).attr('data-target', '#');
        });
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  5. Page scrolling feature, requires jQuery Easing plugin.
    /*-------------------------------------------------------------------*/
    var pageScroll = function(){
        $j('.page-scroll > a, .plan > a').bind('click', function(e){
            e.preventDefault();
            
            var anchor = $j(this),
            href = anchor.attr('href'),
            offset = $j('body').attr('data-offset');
            
            $j('html, body').stop().animate({
                scrollTop: $j(href).offset().top - (offset - 1)
            }, 1500, 'easeInOutExpo');
            
            /*
             * Automatically retract the navigation after clicking 
             * on one of the menu items.
             */
            if(!$j(this).parent().hasClass('dropdown')){
                $j('.zakir-collapse').collapse('hide');
            }
        });
    };
    
    pageScroll();
    
    
    /*-------------------------------------------------------------------*/
    /*  6. Make navigation menu on your page always stay visible.
    /*  Requires jQuery Sticky plugin.
    /*-------------------------------------------------------------------*/
    var stickyMenu = function(){
        var ww = Math.max($j(window).width(), window.innerWidth),
        nav = $j('.navbar.navbar-fixed-top');

        if ($j.fn.unstick){
            nav.unstick();
        }
        
        if ($j.fn.sticky && ww >= 992){
            nav.sticky({topSpacing: 0});
        }
    };
    
    stickyMenu();
    
    // Call stickyMenu() when window is resized.
    $j(window).smartresize(function(){
        stickyMenu();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  7. Navbar dropdown opening on hover,
    /*  and opening on click for collapsed navbar.
    /*-------------------------------------------------------------------*/
    var toggleNavbarMethod = function(){
        var ww = Math.max($j(window).width(), window.innerWidth),
        dropdown = $j('.navbar .dropdown');
        
        if (ww >= 992){
            dropdown.on('mouseover', function(){
                if (!$j(this).hasClass('open')){
                    $j(this).addClass('open');
                }
            }).on('mouseout', function(){
                if ($j(this).hasClass('open')){
                    $j(this).removeClass('open');
                }
            });
        }
        else {
            dropdown.off('mouseover').off('mouseout');
        }
    };
    
    toggleNavbarMethod();
    
    // Call toggleNavbarMethod(); when window is resized.
    $j(window).smartresize(function(){
        toggleNavbarMethod();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  8. Prevent bootstrap dropdown closing when clicked.
    /*-------------------------------------------------------------------*/
    $j('.dropdown-menu').click(function(e){
        e.stopPropagation();
    });
    
 
    /*-------------------------------------------------------------------*/
    /*  9. Portfolio gallery. Requires jQuery Magnific Popup plugin.
    /*-------------------------------------------------------------------*/
    if ($j.fn.magnificPopup){
        $j('.portfolio').magnificPopup({
            delegate: 'a.zoom',
            type: 'image',
            fixedContentPos: false,

            // Delay in milliseconds before popup is removed
            removalDelay: 300,

            // Class that is added to popup wrapper and background
            mainClass: 'mfp-fade',

            gallery: {
                enabled: true,
                preload: [0,2],
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                tPrev: 'Previous Project',
                tNext: 'Next Project'
            }
        });
    }
    
    
    /*-------------------------------------------------------------------*/
    /*  10. Column Chart (Section - My Strengths)
    /*-------------------------------------------------------------------*/
    var columnChart = function (){
        $j('.column-chart').find('.item-progress').each(function(){
            var itemProgress = $j(this);
            var itemProgressHeight = $j(this).parent().height() * ($j(this).data('percent') / 100);
            
            itemProgress.css('height', itemProgressHeight);
        });
    };
    
    // Call columnChart() when window is loaded.
    $j(window).smartload(function(){
        columnChart();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  11. Section - My Resume
    /*-------------------------------------------------------------------*/
    var resumeCollapse = function (){
        var ww = Math.max($j(window).width(), window.innerWidth),
        workItem = $j('.collapse:not(:first)', '#work'),
        educationItem = $j('.collapse:not(:first)', '#education');
        
        if (ww < 768){
            workItem.collapse('show');
            educationItem.collapse('show');
        }
        else{
            workItem.collapse('hide');
            educationItem.collapse('hide');
        }
    };
    
    // Call resumeCollapse() when window is loaded.
    $j(window).smartload(function(){
        resumeCollapse();
    });
    
    // Call resumeCollapse() when window is resized.
    $j(window).smartresize(function(){
        resumeCollapse();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*	12. References slider. Requires Flexslider plugin.
    /*-------------------------------------------------------------------*/
    $j(window).smartload(function(){
        if ($j.fn.flexslider){
            var flex = $j('.flexslider.references');
    
            flex.flexslider({
                selector: ".slides > .item",
                manualControls: ".flex-control-nav li",
                directionNav : false,
                slideshowSpeed: 8000,
                after: function(slider){
                    if (!slider.playing) {
                        slider.play();
                    }
                }
            }); 
        }
    });
    
    $j('a.flex-prev').on('click', function(e){
        e.preventDefault();
        $j('.flexslider').flexslider('prev');
    });
    
    $j('a.flex-next').on('click', function(e){
        e.preventDefault();
        $j('.flexslider').flexslider('next');
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  13. Circle Chart (Section - Skills & Expertise)
    /*-------------------------------------------------------------------*/
    var circleChart = function (){
        $j('.circle-chart').find('.item-progress').each(function(){
            var item = $j(this),
            maxHeight = 108,
            newHeight = maxHeight * ($j(this).data('percent') / 100);
            
            // Only animate elements when using non-mobile devices    
            if (jQuery.browser.mobile === false){
                item.one('inview', function(isInView) {
                    if (isInView){
                        // Animate item
                        item.animate({
                            height: newHeight
                        },1500);
                    }
                });
            }
            else{
                item.css('height', newHeight);
            }
        });
    };
    
    // Call circleChart() when window is loaded.
    $j(window).smartload(function(){
        circleChart();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  14. Bar Chart (Section - Knowledge)
    /*-------------------------------------------------------------------*/
    var barChart = function (){
        $j('.bar-chart').find('.item-progress').each(function(){
            var item = $j(this),
            percent = $j(this).prev(),
            newWidth = $j(this).parent().width() * ($j(this).data('percent') / 100);
            
            // Only animate elements when using non-mobile devices    
            if (jQuery.browser.mobile === false){
                item.one('inview', function(isInView) {
                    if (isInView){
                        // Animate item
                        item.animate({
                            width: newWidth
                        },1500);
                        
                        percent.animate({
                            left: newWidth - percent.width()
                        },1500);
                    }
                });
            }
            else{
                item.css('width', newWidth);
                percent.css('left', newWidth - percent.width());
            }
        });
    };
    
    // Call barChart() when window is loaded.
    $j(window).smartload(function(){
        barChart();
    });
    
    // Call barChart() when window is resized.
    $j(window).smartresize(function(){
        barChart();
    });
    
    
    /*-------------------------------------------------------------------*/
    /*  15. Milestones counter.
    /*-------------------------------------------------------------------*/
    var counter = function (){
        var number = $j('.milestones').find('.number');
        
        if ($j.fn.countTo){
            number.countTo({
                speed: 3000
            });
        }
    };
    
    if (jQuery.browser.mobile === false){
        var number = $j('.milestones .number');
        
        number.one('inview', function(isInView) {
            if (isInView){
                counter();
            }
        });
    }
    else{
        counter();
    }
});