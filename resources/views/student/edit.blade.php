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
                        <h1 class="float-start">Edit Update</h1>
                        <a href="{{ route('student.index') }}" class="btn btn-info btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control mt-3" placeholder="Enter Your Name">
                            @if($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                            <input type="file" name="image" accept="image/*" class="form-control mt-3">
                            @if($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            @if ($student->image)
                                <div class="div mt-3">
                                    <img src="{{ asset('storage/'.$student->image) }}" alt="{{ $student->name }}" height="100px" width="100px" class="rounded">
                                </div>
                            @endif
                            <input type="text" name="roll" value="{{ $student->roll }}" class="form-control mt-3" placeholder="Enter Your Roll">
                            @if($errors->has('roll'))
                                <div class="text-danger">{{ $errors->first('roll') }}</div>
                            @endif
                            <input type="text" name="reg" value="{{ $student->reg }}" class="form-control mt-3" placeholder="Enter Your Registration">
                            @if($errors->has('reg'))
                                <div class="text-danger">{{ $errors->first('reg') }}</div>
                            @endif
                            <input type="email" name="email" class="form-control mt-3" value="{{ $student->email }}" placeholder="Enter Your Email">
                            @if($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                            <input type="submit" value="Update" class="btn btn-outline-primary w-100 mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>