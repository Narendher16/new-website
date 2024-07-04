<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1> UPDATED PAGE</h1>

  <!--  {{$data->category}}
    {{$data->product}}
    {{$data->price}} -->

    <form action="{{url('updates', $data->id)}}" method="POST">
        @csrf
        <div>
            <label>category</label>
            <input type="text" name="category" value="{{$data->category}}">
        </div>
        
        <div>
            <label>product</label>
            <input type="text" name="product" value="{{$data->product}}">
        </div>

        <div>
            <label>price</label>
            <input type="text" name="price" value="{{$data->price}}">
        </div>
        
        <br> <br>
        <button type="submit" class="btn btn-primary">UPDATE</button>


</body>
</html>