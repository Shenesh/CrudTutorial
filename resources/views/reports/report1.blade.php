<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1> <center>This is a sample report</center> </h1>
        <table class="table table-bordered table-active">
            <thead>
                <tr>
                    <th>Income</th>
                    <th>Month</th>
                </tr>
            </thead>
            <tfoot>
                @foreach ($data as $item)
                    <tr><td>{{ $item->amount }}</td><td>{{ $item->month }}</td></tr>
                @endforeach
            </tfoot>
        </table>
    </div>

</body>
</html>