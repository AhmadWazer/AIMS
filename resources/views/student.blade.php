<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student</title>

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
          <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/class'}}">Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/section'}}">Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Student</a>
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


   <div class="container mt-5">
      <h2><b>Section</b></h2>
     <form action="{{url('/')}}/student" method="post" class="form">
        @csrf
        <div class="mb-3">
           <label for="studentName" class="form-label m-2">Student Name:</label>
           <input type="text" class="form-control xl" id="studentName" name="studentName" placeholder="Student Name" requried>
        </div>
        <span class="text-danger">@error('studentName'){{$message}}@enderror</span>

        <div class="mb-3">
           <label for="fatherName" class="form-label m-2">father Name:</label>
           <input type="text" class="form-control xl" id="fatherName" name="fatherName" placeholder="Father Name" requried>
        </div>
        <span class="text-danger">@error('fatherName'){{$message}}@enderror</span>

        <div class="mb-3">
           <label for="dob" class="form-label m-2">DateOfBirth:</label>
           <input type="date" class="form-control xl" id="dob" name="dob" placeholder="" requried>
        </div>
        <span class="text-danger">@error('dob'){{$message}}@enderror</span>

        <div class="mb-3">
           <label for="email" class="form-label m-2">email:</label>
           <input type="email" class="form-control xl" id="email" name="email" placeholder="Email" requried>
        </div>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
        <div class="btn-toolbar justify-content-between">
           <button type="submit" name="submit" value="submit" class="btn btn-primary m-3">Submit</button>
              <a href="{{url('/student/view')}}" class="btn btn-success m-3">StudentTable</a>
        </div>
     </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
