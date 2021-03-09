
{{--<script src="{{ assets('assets/admin/js/bootbox.min.js') }}"></script>--}}

<script>

    //sweetalert
    $(document).ready(function () {
        $(document).on('click','.confirm-delete-row',function (e) {
            var $this = $(this);
            swal({
                title: 'Do you want to delete?',
                text: "You won't be able to revert this!",
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                html: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $this.closest('td').find('form').submit();
                }
            })
        })
    });


    $('.bulk_list').click(function (e) {

        var list_id = this.id;


        swal({
            title: "Are you sure to "+ list_id +" selected rows?",
            type: "warning",
            buttons: true,
            showCancelButton: true,
            dangerMode: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes "+ list_id + " selected rows",
            html: false,
        }, function (isConfirm) {
            if(isConfirm){
                var ids = '';
                $('#table-tbody').find('input:checkbox').each(function (i, v) {
                    if ($(v).is(':checked')) {
                        ids = ids + $(v).val() + ',';
                    }
                });
                $('.row_ids').val(ids);
                $('.bulk_actions').val(list_id);
                $('#bulk-action-form').submit();
            }
        })
    });



    function toggleCheckbox($this) {

        checkboxes = document.getElementsByName('chkData[]');
        // console.log(checkboxes);
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = $this.prop('checked')?true:false;
        }
    }

    $(function () {

        /** hide show filter */
        $(document).on('click', '#toggle-filter-div-form', function () {
            $(document).find('div#filter-form-div').toggle();
            $(this).html(function(i, html){
                return html === "<strong>Hide Filter</strong>" ? "<strong>Show Filter</strong>" : "<strong>Hide Filter</strong>";
            })
        });

    });

</script>
