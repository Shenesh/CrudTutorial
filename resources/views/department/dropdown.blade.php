@extends('layout.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="department">Please select department</label>
                    <select name="department" id="department" class="form-control">
                        <option value="-1">Department</option>
                        @foreach ($collection as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="employee"> Select employee</label>
                    <select name="employee" id="employee" class="form-control">
                        <option value="-1">Employee name</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="from-group">
                    <input type="button" value="Save" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var BASE = "{{url('/')}}/";
            $('#department').change(function(){
                var department = $('#department').val();
                var params ={
                    department:$(this).val(),
                    _token:"{{ csrf_token() }}",
                };
                $.ajax({
                    url: BASE + 'get_employee/'+ department,
                    type: 'POST',
                    dataType: 'JSON',
                    data: $.param(params),
                    success: function (response) {
                        var array = response.employees;
                        console.log(array);                
                        $('#employee').empty();
                        $("#employee").append("<option value='-1'>Employee Name</option>");
                        for(i in array){
                            $("#employee").append("<option value="+array[i].id+">"+array[i].name+"</option>");
                        }
                    }
                })
            });
        });
    </script>
@endsection