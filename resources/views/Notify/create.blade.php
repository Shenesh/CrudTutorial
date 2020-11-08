@extends('layout.layout')
@section('content')

<style>
.error
{
 border:1px solid red;
}

.bgcolor{
    background: red;
}


</style>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css') }}">
    <form action="{{ route('notify.store') }}" method="POST">
        @csrf
        <div class="form-group error">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="" value="{{ old('fname') }}" class="form-control error">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="" value="{{ old('lname') }}" class="form-control {{ $errors->has('lname') ? ' is-invalid ' : '' }} " >
        </div>
        <div class="form-group">
            <label for="email">eMail</label>
            <input type="email" name="email" id="" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid ' : '' }} ">
        </div>
  
            <input type="submit" value="Save">

            



    </form>
@endsection