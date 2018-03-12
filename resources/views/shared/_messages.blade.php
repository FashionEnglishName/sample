@foreach (['error', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <script>
            toastr.{{ $msg }}("{{ session()->get($msg) }}")
        </script>
    @endif
@endforeach