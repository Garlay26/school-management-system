<html>
    <head>
        <title>School Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
          <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/teacher.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Teacher</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/student.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Student</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="{{route('student')}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/teacher.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Teacher</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/teacher.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Teacher</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>