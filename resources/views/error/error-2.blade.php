
    @foreach($errors->all() as $error)
    <li class="alert alert-danger">{{ $error}}</li>
    @endforeach

    @if (session('created'))
        <li class="alert alert-success">{{ session('created') }}</li>
    @endif
