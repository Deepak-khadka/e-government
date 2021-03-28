<script>
    $(function (){

        $('#municipality-table').DataTable({
            language   : {search : ""},
            bInfo      : false,
            processing : false,
            serverSide : true,
            lengthMenu : [50, 10, 60, 100],
            ajax: {
                url : '{{route('admin.municipality.index')}}',
                type: 'get',
            },
            columns: [
                {data: 'id', name: 'id', orderable: false},
                {data: 'district', name: 'district', orderable: true},
                {data: 'municipality', name: 'municipality', orderable: true},
                {data: 'action', name: 'action', orderable: true},
            ],
        })
    })
</script>
