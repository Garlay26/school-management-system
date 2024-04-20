<html>
  {{-- @php
      dd(session('message'));
  @endphp --}}
    <head>
        <title>School Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
          <div class="container">
            <div class="row">
              @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
              @endif
             
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Register Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $student)
                        <tr>
                          <th scope="row">{{$student->id}}</th>
                          <td>{{$student->name}}</td>
                          <td>{{$student->age}}</td>
                          <td>{{$student->regsiter_date}}</td>
                          <td>
                            <a href="{{route('edit-student',['id' => $student->id])}}">
                              <button class="btn btn-success">Edit</button>
                            </a>
                            <a href="{{route('delete-student',['id' => $student->id])}}">
                              <button class="btn btn-danger">Delete</button>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>