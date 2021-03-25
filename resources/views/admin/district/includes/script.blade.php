<script>
    $(function (){

        $('#district-table').DataTable({
            language   : {search : ""},
            bInfo      : false,
            processing : false,
            serverSide : true,
            lengthMenu : [5, 10, 50, 100],
            ajax: {
                url : '{{route('admin.district.index')}}',
                type: 'get',
            },
            columns: [
                {data: 'id', name: 'id', orderable: false},
                {data: 'name', name: 'name', orderable: true},
                {data: 'province', name: 'province', orderable: true},
                {data: 'action', name: 'action', orderable: true},
            ],
        })
    })
</script>
