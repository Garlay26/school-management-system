<html>
    <head>
        <title>School Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            <form action="{{route('update-teacher')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="{{$edit_teacher->id}}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$edit_teacher->name}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Code</label>
                            <input type="text" class="form-control" name="code" value="{{$edit_teacher->code}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$edit_teacher->phone}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" value="{{$edit_teacher->age}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$edit_teacher->address}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Birthday</label>
                            <input type="date" class="form-control" name="birthday" value="{{$edit_teacher->birthday}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Register Date</label>
                            <input type="date" class="form-control" name="register_date" value="{{$edit_teacher->regsiter_date}}">
                          </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>