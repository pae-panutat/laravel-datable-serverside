<!doctype html>
<html lang="en">
  <head>
    <title>Laravel 7 - Yajra Datatable Implementation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
  
  </head>
  <body>

  <div class="container mt-5">
    <h3 class="text-center font-weight-bold">Yajra Datatable Server Side in Laravel 7 </h3>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="usersTable">
        <thead>
            <th> # </th>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Edit </th>
            <th> Delete </th>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            let table = $('#usersTable').DataTable({
                // "language": {
                // "sProcessing": "กำลังดำเนินการ...",
                // "sLengthMenu": "แสดง_MENU_ แถว",
                // "sZeroRecords": "ไม่พบข้อมูล",
                // "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                // "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                // "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                // "sInfoPostFix": "",
                // "sSearch": "ค้นหา:",
                // "sUrl": "",
                // "oPaginate": {
                //             "sFirst": "เิริ่มต้น",
                //             "sPrevious": "ก่อนหน้า",
                //             "sNext": "ถัดไป",
                //             "sLast": "สุดท้าย"
                //         }
                // },
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "dom": 'Bfrltip',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ],
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'edit', name: 'edit', orderable: false, searchable: false},
                    {data: 'delete', name: 'delete', orderable: false, searchable: false},
                ]
            });
        });
      </script>
</body>
</html>