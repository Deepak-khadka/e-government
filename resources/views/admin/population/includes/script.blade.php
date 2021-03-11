<script>
    $(function (){

        const datePicker = $('#date_picker');
         datePicker.on('change', function () {
            const value = datePicker.val();
            const today = new Date();
            const date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var age = parseInt(date) - parseInt(value);

            $('#age').val(age);

            if(age < 16){
                $('#citizen_number').hide("slow");
                $('#citizenship_number_input').val('');
            }
            if(age > 16){
                $('#citizen_number').show("slow");
            }
        });
    })


</script>
