
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

    $(function (){
        $('#population-table').DataTable({
            language   : {search : ""},
            bInfo      : false,
            processing : false,
            serverSide : true,
            lengthMenu : [25, 10, 50, 100],
            ajax: {
                url : '{{route('admin.population.index')}}',
                type: 'get',
            },
            columns: [
                {data: 'id', name: 'id', orderable: false},
                {data: 'name', name: 'name', orderable: true},
                {data: 'email', name: 'email', orderable: true},
            ],
        })
    })

    $(function (){

       $('#state_dropdown').on('change', function (){
           const state = $('#state_dropdown').val();

               $('#district_value').empty();
               $('#municipality_id').empty();
               $.ajax({
                   data : { stateNo : state},
                   method : 'get',
                   url : '{{ route('admin.getDistrict') }}',
                   success: function(res) {
                       $('#district_value').append("<option value='{{ null }}'>Select One</option>");
                       $.map(res.body , function (district){
                           $('#district_value').append("<option value="+ district.id +">"+ district.name +"</option>")
                       })
                   }
               })
       })

    });
    $(function (){

       $('.service_type').on('change', function (){
           var service_type = $('.service_type').val();
              if(service_type === 'unemployment')
              {
                  $('#service').hide("slow");
              }
              else {
                  $('#service').show();
              }

       })

    });

    $(function (){

       $('#district_value').on('change', function (){
           const district = $('#district_value').val();
               $('#municipality_id').empty();

               $.ajax({
                   data : { districtNo : district},
                   method : 'get',
                   url : '{{ route('admin.getMunicipality') }}',
                   success: function(res) {
                       $('#municipality_id').append("<option value='{{ null }}'>Select One</option>");
                       $.map(res.body , function (municipality){
                           $('#municipality_id').append("<option value="+ municipality.id +">"+ municipality.municipality +"</option>")
                       })
                   }
               })
       })

    })

</script>
