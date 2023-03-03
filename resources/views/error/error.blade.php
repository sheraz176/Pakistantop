@if (session('created'))
        <li class="alert alert-success">{{ session('created') }}</li>
    @endif
    @if (session('updated'))
        <li class="alert alert-success">{{ session('updated') }}</li>
    @endif
    @if (session('deleted'))
        <li class="alert alert-success">{{ session('deleted') }}</li>
    @endif
    @if (session('error'))
    <li class="alert alert-danger">{{ session('error') }}</li>
    @endif

