$j = jQuery.noConflict();

$j(function(){
    
    /*-------------------------------------------------------------------*/
    /*  1. jQuery replacement for select boxes. Requires
    /*  select2.full.js in order to support the containerCssClass and
    /*  dropdownCssClass option.
    /*-------------------------------------------------------------------*/
    if ($j.fn.select2){
        $j(".select2").select2({
            minimumResultsForSearch: 'Infinity',
            containerCssClass: 'select2-container-custom',
            dropdownCssClass: 'select2-dropdown-custom'
        });
    }


    /*-------------------------------------------------------------------*/
    /*  2. Contact form request. Requires jquery validation js.
    /*-------------------------------------------------------------------*/
    $j('.validate').validate({
        errorPlacement: function(error, element) {
            if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
                error.appendTo(element.parent().parent());
            }
            else {
                error.appendTo(element.parent());
            }
        },
        /*rules: {
            'project_class': { // Makes "field (radio button - project_class)" always required
                required: true
            },
            'services[]': { // Makes "field (checkbox - services[])" always required
                required: true
            }
        }*/
    });
    
    $j(document).on('submit', '#contact-form', function(e){
        e.preventDefault();
        
        var buttonCopy = $j('#contact-form button').html(),
            sendingMessage = 'Loading...',
            errorMessage = 'Error Sending. Try Again Later',
            okMessage = 'Email Sent Successfully';
            
        $j('#contact-form button').html("<i class='icon-Mail-Send'></i> " + sendingMessage);
        
        $j.ajax({
            url: $j('#contact-form').attr('action'),
            type: 'post',
            dataType: 'json',
            data: $j(this).serialize(),
            
            success: function(data){
                if (data == 0){
                    $j('#contact-form button').html("<i class='icon-Paper-Plane'></i> " + okMessage);
                    $j('#contact-form')[0].reset();
                } else {
                    $j('#contact-form button').html("<i class='icon-Danger'></i> " + errorMessage);
                }
                
                setTimeout(function(){
                    $j('#contact-form button').html(buttonCopy);
                }, 3000);
            },
            error: function(xhr, err){
                
                $j('#contact-form button').html("<i class='icon-Danger'></i> " + errorMessage);
                
                setTimeout(function(){
                    $j('#contact-form button').html(buttonCopy);
                }, 3000);
            }
           
        });
        
    });
});