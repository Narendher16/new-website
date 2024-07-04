<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>

<form action="{{url ('search') }}" method="get" align="right">
    <input type="search" name="search" placeholder="search here">
    <input type="submit" value="search">
</form>

    <center>

    <h2> DATABASE AND FORM DETAILS </h2>

    <table class="table" border="1 px">

    <tr>
        <th scope="col">CATEGORY</th>
        <th scope="col">PRODUCT</th>
        <th scope="col">PRICE</th>
        <th scope="col">DELETE</th><!--TO DELETE THE FILE -->
        <th scope="col">UPDATE</th>


    </tr>
    @foreach($products as $products)


    <tr>
    <td scope="row">{{$products->category}}</td>
        <td scope="row">{{$products->product}}</td>
        <td scope="row">{{$products->price}}</td>
       
        <td scope="row">

            <a href="{{url('delete',$products->id)}}">Delete</a>
        </td>

        <td scope="row">

            <a href="{{url('update',$products->id)}}">Update</a>
        </td>

    </tr>

    @endforeach

    </table>
    
</center>


</body>
</html>