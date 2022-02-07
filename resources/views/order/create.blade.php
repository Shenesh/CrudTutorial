@extends('layout.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.js"></script> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>
                    <strong class="card-title" v-if="headerText">New Order</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg col-4">
                            <div class="form-group{{ $errors->has('order-no') ? ' has-error' : '' }}">
                                <label for="order-no" class="col-md-10 control-label">#Order No</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="order-no" name="order-no" disabled>
                                    @if ($errors->has('order-no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order-no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-10 control-label">Customer</label>
                                <div class="col-md-10">
                                    <select name="customer_id" autofocus id="customer_id" class="form-control" required>
                                        <option value="" disabled selected>select customer</option>
                                        @foreach ($customer as $cus)
                                        <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-4">
                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-10 control-label">Due - Date</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="due_date" id="due_date" value="<?php echo date('Y-m-d'); ?>">
                                    @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg col-4">
                            <div class="form-group{{ $errors->has('order-no') ? ' has-error' : '' }}">
                                <label for="order-no" class="col-md-10 control-label">Select Product</label>
                                <div class="col-md-10">
                                    <select name="product" id="product" class="form-control">
                                        <option value="" disabled selected></option>
                                    </select>
                                    @if ($errors->has('product_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-10 control-label">Quantity</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <input class="form-control" name="quantity" id ="quantity" type="text"  placeholder="Quantity" onkeydown="return ( event.ctrlKey || event.altKey 
                                        || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                                        || (95<event.keyCode && event.keyCode<106)
                                        || (event.keyCode==8) || (event.keyCode==9) 
                                        || (event.keyCode>34 && event.keyCode<40) 
                                        || (event.keyCode==46) )">
                                        @if ($errors->has('quantity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-4">
                            <div class="form-group">
                                <label for="name" class="col-md control-label"></label>
                                <div class="col-md-10">
                                    <div style="" class="col-lg ">
                                        <button class="btn btn-info" id="add">Add</button>
                                        <button class="btn btn-info" id="update">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 15px;" >
                        <table class="table table-bordered table-hover dataTable" id="ordertable" role="grid" style="width: 100%">
                            <thead>
                                <tr role="row">
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Line Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="row{{ $errors->has('total_cost') ? ' has-error' : '' }}"   >
                        <div class="col-sm-9">
                            <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-10 control-label">Note</label>
                                <div class="col-md-10">
                                    <textarea name="note" id="note" cols="30" rows="10" class="form-control" style="height:100px"></textarea>
                                    @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="float:right;">
                            <div class="input-group">
                                <input class="form-control" name="sub_total" id="sub_total" type="text" required autofocus placeholder="Sub Total" disabled>
                                @if ($errors->has('sub_total'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sub_total') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="discount" id="discount" type="text" required autofocus placeholder="Discount" disabled>
                                @if ($errors->has('discount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('discount') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="total" id="total" type="text" required autofocus placeholder="Total" disabled style="background-color:lightcoral">
                                @if ($errors->has('total'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('total') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="float:left;" class="col-lg col-6">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-info" id="save" >Create Order</button>
                    <input type="hidden" value="" id="orderHidden">
                    <button class="btn btn-facebook" id="pdf"  >Print Invoice <span><i class="fas fa-print"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var testtable = $('#ordertable').DataTable( {
            searching:false,
            paging:false,
            "ordering":false,
            bInfo:false,
            data:[],
            columns: [
            { data: 'product_id' },
            { data: 'name' },
            { data: 'quantity' },
            { data: 'unit_price' },
            { data: 'line_total' },
            { data: 'action' }
            ]
        } );
        $('#add').click(function(){
            var p =  $('#product').val();
            var params = {
                product: $('#product').val(),
                _token:"{{ csrf_token() }}",
            };
            var quantity = $('#quantity').val();
            $.ajax({
                url: BASE + 'porder_getdata/'+p,
                type: 'post',
                dataType: 'JSON',
                data: $.param(params),
                success: function (response) {
                    var array = response;
                    console.log(array);
                    var table = $('#table1').DataTable();
                    table.row.add( {
                        "product":  response.product,
                        "quantity":    quantity,
                        "action": '<button class="btn btn-sm btn-info" id="edit">Edit</button> <button id="remove" class="btn btn-sm btn-warning">Remove</button>',
                    } ).draw();
                    $('#quantity').val('');
                }
            });
        });
    });
</script>
@endsection
