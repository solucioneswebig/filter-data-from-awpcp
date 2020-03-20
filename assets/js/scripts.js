(function($) {
    $(document).ready(function() {



        $('.table').DataTable( {
           responsive: true,
           dom: 'Bfrtip',
           buttons: [
               'copy', 'csv', 'excel', 'print'
           ]
        } );            
    


    });
})(jQuery);