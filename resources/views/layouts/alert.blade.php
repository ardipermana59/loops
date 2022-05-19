@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: {!! json_encode($message) !!},
        })
    </script>
@endif
