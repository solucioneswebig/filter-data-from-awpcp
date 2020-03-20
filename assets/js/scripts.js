(function($) {
    $(document).ready(function() {


        if($(window).width() < 768){
        $('#tabla-empleados').DataTable( {
           responsive: true
        } );            
        }else{
         $('#tabla-empleados').DataTable();                  
        }


    });
})(jQuery);