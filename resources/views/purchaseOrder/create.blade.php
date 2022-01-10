    @extends('layout.layout')
    @section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.js"></script>
   
    <div class="row">
        <div class="form-group col-5">
            <input type="text" class="form-control" name="" id="po_number" placeholder="po_number">
        </div>
        <div class="form-group col-5">
            <input type="date" class="form-control" name="" id="due_date">
        </div>
    </div>
    
    
    
    <div class="form-row">
       

        <div class="form-group col-5">

          



            <select name="product" id="product" class="form-control">
                <option value="">Select product</option>
                <option value="Product 1">Product 1</option> 
                <option value="Product 2">Product 2</option>
                <option value="Product 3">Product 3</option>
                <option value="Product 4">Product 4</option>
                
            </select>
        </div>
        <div class="form-group col-5">
            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
        </div>
        <div class="form-group col-2">
            <button class="btn btn-info" id="add">Add</button>
            <button class="btn btn-info" id="update">Update</button>
        </div>
    </div>
    <hr>
    <table class="table table-bordered table-hover dataTable" id="table1" role="grid">
        <thead>
            <tr role="row">
                <th>Product</th>
                <th>Quantity</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <button id="save" class="btn btn-primary">Save to database</button>
</div>
<script>
    $(document).ready(function() {
        var BASE = "{{url('/')}}/";
        var testtable = $('#table1').DataTable( {
            searching:false,
            paging:false,
            "ordering":false,
            bInfo:false,
            data:[],
            columns: [
            {data: 'product', name: 'product'},
            {data: 'quantity', name: 'quantity'},
            {data: 'action', name: 'action'},
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
        var table = $('#table1').DataTable();
        $('#table1 tbody').on( 'click', '#remove', function () {
            table
            .row( $(this).parents('tr') )
            .remove()
            .draw();
        });
        $('#save').click(function(){
            var params ={
                po_number: $('#po_number').val(),
                due_date: $('#due_date').val(),
                table_data:table.data().toArray(),
                _token: "{{ csrf_token() }}",
            }
            $.ajax({
                url:BASE+'porder',
                type: 'POST',
                dataType: 'JSON',
                data: $.param(params),
                success:function(response){
                    console.log('data added to database');
                }
            })
        });

    } );
</script>

@endsection
