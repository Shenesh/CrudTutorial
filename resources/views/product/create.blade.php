@extends('layout.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Create a new product</h5>
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        <option value="1">Pen</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="exp_date">Expire date</label>
                    <input type="date" class="form-control" name="exp_date" id="exp_date">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
        <div class="card-footer">

        </div>
    </div>
    
</div>
@endsection