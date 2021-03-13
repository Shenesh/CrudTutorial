@extends('layout.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Import Data Example - Blogs</h2><hr>
        
            @if ($errors->any())
            <div class="alert alert-danger">
                {{-- <strong>Warning!</strong> Please check your inputs<br><br> --}}
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        @if(session()->has('failures'))
        <li>  Note! Failed to import one or more row(s). Please check. </li>
        <table class="table table-danger table-sm table-bordered table-condensed">
            <thead><tr><th>Row</th><th>Attribute</th><th>Errors</th><th>Value</th></tr></thead>
            <tbody>
                @foreach (session()->get('failures') as $validation)
                    <tr>
                        <td>{{ $validation->row() }}</td>
                        <td>{{ $validation->attribute() }}</td>
                        <td>
                            @foreach ($validation->errors() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </td>
                        <td>{{ $validation->values()[$validation->attribute()] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif



                <form action="{{ route('blogs.import') }}" method="post" enctype="multipart/form-data">
         @csrf
        <div class="form-group">
           <label for="file">Upload file</label>
           <input type="file" name="file" id="" required>
           <button class="btn btn-primary" type="submit">
               Import
           </button>
       </div>
    </div>
        </form>
    </div><br>
@endsection