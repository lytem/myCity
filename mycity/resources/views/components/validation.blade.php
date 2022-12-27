{{-- error message simplice senza swal alert --}}
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Attenzione</strong> Il modulo presenta i seguenti problemi:
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif
@if (session('warning'))
<div class="alert alert-warning">{{ session('warning') }}</div>
@endif
