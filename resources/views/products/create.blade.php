<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>example-1</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="/">product</a>
            </li>
            
            
          </ul>
        </div>
      
      </nav>

    <div class="container">
         

         <div class="col-md-8">
          <div class="card mt-3 p-3">
            <form action="{{route('product.store')}}" method="POST">
              @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="descripton" class="form-control" id="" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name="image" placeholder="Name">
            </div>
            <button type="submit" class="btn btn-dark" >Submit</button>

          </form>
          </div>
          
         </div>

    </div>

    
</body>
</html>