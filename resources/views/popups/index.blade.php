@extends('layout.layout')
@section('content')
    
<h2> Laravel Modal Example </h2>



<table class="table table-bordered table-dark ">
  <thead><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Action</th></thead>
  <tbody>
      @foreach ($data as $student)
          <tr> <td>{{ $student->id }}</td><td>{{ $student->fname }}</td><td>{{ $student->lname }}</td><td>{{ $student->city }}</td><td>
              <button class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td></tr>
      @endforeach
  </tbody>
  <tfoot></tfoot>
</table>






@endsection