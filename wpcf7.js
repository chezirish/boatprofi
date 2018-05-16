    // form
jQuery(document).ready(function($) {


    $('.wpcf7-form').submit(function(e){
        if( !$('.wpcf7-form').find($('.css-checkbox')).prop( "checked" ) ){
            alert('Вам нужно согласиться с политикой конфидециальности1');
            // e.preventDefault();
            return false;
        }
        
    })

});