<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="../../../assets/bootstrap/js/jquery-3.6.0.js"></script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

<!-- SWEET ALERT -->
<script type="text/javascript" src="../sweetalert/src/sweetalert.js"></script>
<script>
function sweet(){
    swal("Anda Berhasil Login!");
}
</script>

<script>
    $(document).ready(function(){
        $('#data-table-masyarakat').DataTable({
            dom : 'frtip',

        });
    });

            $(document).ready(function(){
                var buttonCommon = {
        init: function (dt, node, config) {
            var table = dt.table().context[0].nTable;
            if (table) config.title = $(table).data('export-title')
        },
        title: 'default title'
        };
        $.extend( $.fn.dataTable.defaults, {
            "buttons": [
                $.extend( true, {}, buttonCommon, {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                } ),
                $.extend( true, {}, buttonCommon, {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                } ),
                $.extend( true, {}, buttonCommon, {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    exportOptions: {
                        columns: ':visible'
                    }
                } ),
                $.extend( true, {}, buttonCommon, {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    },
                    orientation: 'landscape'
                } )
            ]
        } );
        $('#data-table-admin').DataTable({
            dom : 'Bfrtip',

        });
    });
</script>
