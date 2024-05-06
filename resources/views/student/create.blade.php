<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="card">
                    <div class="card-header">
                        <h1 class="float-start">Add Student</h1>
                        <a href="{{ route('student.index') }}" class="btn btn-info btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" class="form-control mb-3" placeholder="Enter Your Name">

                            <input type="file" name="image" accept="image/*" class="form-control mb-3" class="rounded">
                                
                            <input type="text" name="roll" class="form-control mb-3" placeholder="Enter Your Roll">
                                
                            <input type="text" name="reg" class="form-control mb-3" placeholder="Enter Your Registration">
                               
                            <input type="email" name="email" class="form-control mb-3" placeholder="Enter Your Email">
                                
                            <input type="submit" value="Save" class="btn btn-outline-primary w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>