<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    @foreach ($data1 as $item)
        {{$item}} <br>
    @endforeach
    <hr>
    @foreach ($data2 as $item)
    {{$item}} <br>
@endforeach
</body>
</html>