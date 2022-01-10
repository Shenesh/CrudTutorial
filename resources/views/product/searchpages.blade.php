@extends('layout.layout')
@section('content')
<div class="card">
    <form action="{{ route('product.search_example_two') }}" method="post">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    Product list
                </div>
                <div class="col-2">
                    <input type="search" name="product" id="" class="form-control" placeholder="product name">
                </div>
                <div class="col-2">
                    <input type="search" name="price" id="" class="form-control" placeholder="price">
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
                <tr><th>Product</th><th>Unit Price</th></tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr><td>{{ $product->product_name }}</td><td>{{ $product->unit_price }}</td></tr>
                @endforeach
            </tbody>
        </table>
     
    </div>
</div>



@endsection



