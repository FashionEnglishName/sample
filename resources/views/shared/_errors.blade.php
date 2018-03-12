@if (count($errors) > 0)
            <script>
                @foreach($errors->all() as $error)
                    toastr.warning("{{ $error }}");
                @endforeach
            </script>
@endif