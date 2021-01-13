@extends('layout.layout')

@section('content')

<h3> <center>Weclome to charts</center> </h3>  




{{$data}}

{!! $chart->container() !!}


@endsection


