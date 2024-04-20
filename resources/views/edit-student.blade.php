{{-- @php
    dd($edit_student);
@endphp --}}
<html>
    <head>
        <title>School Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            <form action="{{route('update-student')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="{{$edit_student->id}}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$edit_student->name}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Code</label>
                            <input type="text" class="form-control" name="code" value="{{$edit_student->code}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$edit_student->phone}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" value="{{$edit_student->age}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$edit_student->address}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Birthday</label>
                            <input type="date" class="form-control" name="birthday" value="{{$edit_student->birthday}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Register Date</label>
                            <input type="date" class="form-control" name="register_date" value="{{$edit_student->regsiter_date}}">
                          </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>