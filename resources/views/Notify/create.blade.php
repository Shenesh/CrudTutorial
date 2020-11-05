@extends('layout.layout')
@section('content')

<style>
.error
{
 border:1px solid red;
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
            <input type="text" name="fname" id="" value="{{ old('fname') }}" class="form-control">
        </div>
        <div class="form-group{{ $errors->has('lname') ? ' error' : '' }}">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="" value="{{ old('lname') }}" class="form-control" >
        </div>
        <div class="form-group{{ $errors->has('email') ? ' error' : '' }}">
            <label for="email">eMail</label>
            <input type="email" name="email" id="" value="{{ old('email') }}" class="form-control">
        </div>
  
            <input type="submit" value="Save">


    </form>
@endsection