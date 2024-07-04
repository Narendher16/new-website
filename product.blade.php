<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="product" method="post">
    @csrf
        <div class="container">
        <h1 class="text-center">PRODUCTS</h1>
         <div class="form-group">
        <label for="" class="form-label">CATEGORY</label>
        <input type="text" name="category" class="form-control" id="" placeholder="" aria-describedby="helped">
        <span class="text-danger">
          @error('category')
            {{$message}}
          @enderror
        </span>
         </div>
         <div class="form-group">
        <label for="" class="form-label">PRODUCT</label>
        <input type="text" name="product" class="form-control" id="" placeholder="" aria-describedby="helped">
        <span class="text-danger">
          @error('product')
            {{$message}}
          @enderror
        </span>
         </div>
         <div class="form-group">
        <label for="" class="form-label">PRICE</label>
        <input type="integer" name="price" class="form-control" id="" placeholder="">
        <span class="text-danger">
          @error('price')
            {{$message}}
          @enderror
        </span>
         </div>
         <br> <br>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <br> <br> <br>
        <a class="btn btn-secondary" href="{{url ('view_products') }}">VIEW DETAILS</a>
        </div>

    </form> 





</body>
</html>
