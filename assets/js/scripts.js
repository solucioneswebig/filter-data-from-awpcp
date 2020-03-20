(function($) {
    $(document).ready(function() {


        if($(window).width() < 768){
        $('.table').DataTable( {
           responsive: true
        } );            
        }else{
         $('.table').DataTable();                  
        }


    });
})(jQuery);