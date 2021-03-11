@push('css')
    <link href="{{ asset('assets/dropify/dropify.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script>
        var dropify =  $('.dropify');
        $(function (){
            dropify.dropify();
        })
    </script>
    <script src="{{ asset('assets/dropify/dropify.js') }}"></script>
@endpush
