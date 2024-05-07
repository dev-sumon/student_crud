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
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    {{-- <th>SL: </th>
                                    <th>Name: {{ $students->name }}</th>
                                    <th>Image: {{ $students->image }}</th>
                                    <th>Roll: {{ $students->role }}</th>
                                    <th>Reg: {{ $students->registration }}</th>
                                    <th>Created At: {{ $students->created_at }}</th>
                                    <th>Updated At: {{ $students->updated_at }}</th>
                                    <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                                    <h2>Name: {{ $students->name }}</h2>
                                    <p>Image: <img src="{{ asset('storage/'.$students->image) }}" alt="Student Image" width="100px" height="100px"> </p>
                                    <p>Roll: {{ $students->role }}</p>
                                    <p>Reg: {{ $students->registration }}</p>
                                    <p>Created At: {{ $students->created_at }}</p>
                                    <p>Updated At: {{ $students->updated_at }}</p>
                                    <p>Action</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>