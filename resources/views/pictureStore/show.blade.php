@extends('layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            test
        </div>
        <div class="card-body">
            id: {{$image->id}}<br>
            name: {{$image->image}}<br>

            <img src="{{ asset("storage/images/$image->image") }}" alt="" height="150px" width="150px" >
            

        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection