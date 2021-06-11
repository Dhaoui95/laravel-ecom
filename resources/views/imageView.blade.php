<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All products
                    <a href="/products/create" class="btn btn-primary" style="margin-left: 70%">New product +</a></div>
                <hr>
                @foreach ($image as $image)
                    
              
                <div class="card-body">
                   
                  @php $img = explode(',', $image->image); @endphp
                  <img src="/hachfi/{{$img[0]}}" style="width:100%" />
                    
                    <small><?php echo now() ?></small>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>