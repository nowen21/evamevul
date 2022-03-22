<script>
  $(document).ready(() => {
        $('#fein_tare,#fefi_tare').mask('0000-00-00');
        let datepick = $("#fein_tare,#fefi_tare");
        datepick.datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
        }).on('change', function() {
            

        });
     
    });  
</script>
