<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1><center>Select a report to genarate</center> </h1>
        <div class="row" style="padding-top:50px;">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                    <a href="{{ route('report.report1') }}" class="btn btn-info">Report 1</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                    <a href="{{ route('report.report2') }}" class="btn btn-info">Report 2</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                    <a href="{{ route('report.report3') }}" class="btn btn-info">Report 3</a>
                    </div>
                    
                </div>
            </div>
        </div>
   
    
       
    </div>

</body>
</html>