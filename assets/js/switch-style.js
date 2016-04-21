$j = jQuery.noConflict();

(function ($j) {
    switch_style = {
        onReady: function () {      
            this.switch_style_click();
        },

        switch_style_click: function(){
            $j(".color").click(function(){
                var id = $j(this).attr("id");

                $j("#switch_style").attr("href", "http://zakirsajibonline.com/wp-content/themes/zsonline/assets/css/colors/" + id + ".css");
                
                return false;
            });
        }
    };

    $j().ready(function () {
        switch_style.onReady();
    });
})(jQuery);


// EXPAND COLLAPSE

$j(document).ready(function(){
    $j('#toggle-switcher').click(function(){
        if($j(this).hasClass('open')){
            $j(this).removeClass('open');
            
            if($j('#switch-style').hasClass('right')){
                $j('#switch-style').animate({'right': '-190px'});
            }else{
                $j('#switch-style').animate({'left': '-190px'});
            }
        }else{
            $j(this).addClass('open');
            
            if($j('#switch-style').hasClass('right')){
                $j('#switch-style').animate({'right': '0'});
            }else{
                $j('#switch-style').animate({'left': '0'});
            }
        }
    });
});