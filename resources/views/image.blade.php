<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" class="form-control" name="image[]" multiple>
    <input type="submit" name="submit" class="btn btn-primary">
    </form>
    
</body>
</html>