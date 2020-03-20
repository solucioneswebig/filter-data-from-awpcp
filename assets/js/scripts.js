(function($) {
    $(document).ready(function() {


        if($(window).width() < 768){
        $('.table').DataTable( {
           responsive: true,
           dom: 'Bfrtip',
           buttons: [
               'copy', 'csv', 'excel', 'pdf', 'print'
           ]
        } );            
        }else{
         $('.table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
         });                  
        }


    });
})(jQuery);