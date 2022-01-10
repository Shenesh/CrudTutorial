@extends('layout.layout')
@section('content')
<div class="card">
    <form action="{{ route('product.search_example') }}" method="post">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="col-5">
                    Product list
                </div>
                <div class="col-5">
                    <input type="search" name="search" id="" class="form-control" >
                </div>
                <div class="col-2">
                    <input type="submit" value="Search" class="btn btn-info">
                </div>
            </div>
        </div>
    </form>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr><th>Image</th><th>Product</th><th>Unit Price</th><th>Action</th></tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr><td><img src="{{ asset("storage/product_images/$product->image") }}"  height="40px" width="40px"/></td><td>{{ $product->product_name }}</td><td>{{ $product->unit_price }}</td>
                <td>
                    <form action="{{ route('product.destroy',$product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{--  {!! $products->links() !!}  --}}
    </div>
</div>
@endsection