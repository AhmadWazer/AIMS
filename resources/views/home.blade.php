<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body>

    
    <nav class="navbar navbar-expand bg-body-tertiary">
       <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>AIMS-M</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/class'}}">Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/section'}}">Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/student'}}">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/student_C')}}">StudentClass</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/attandence')}}">Attandence</a>
        </li>
      </ul>
    </div>
    </div>
   </nav>

    <div class="container-fluid text-center mt-3 ">
        <h1>Well Come To AIMS-M</h1>
        </div>
        <img src="images/school.jpg" class="img-fluid" alt="...">
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
