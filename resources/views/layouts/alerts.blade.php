{{-- alert success --}}
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
{{-- alert error --}}
@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Whoops Error!</strong>
        <span>You have {{ $errors->count() }} error</span>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
