<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('product.api.store')}}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
            <td>Vendor:</td>
            <td><input class="form-control" type="text" name="vendor"></td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="number" class="form-control" name="price"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image"></td>
        </tr>

    </table>
    <button type="submit" class="btn btn-success">Create</button>
</form>
---
<table class="table table-striped table-bordered">
    <thead>
    <th>Image</th>
    </thead>
    <tbody>
    @foreach(\App\Models\Product::all() as $row)
        <td><img class="img img-thumbnail" width="200" src="{{asset('storage/'. $row->image)}}"></td>
        @endforeach
    </tbody>
</table>
</body>
</html>
