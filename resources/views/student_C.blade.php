<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentClass</title>  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>
 
<nav class="navbar navbar-expand bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>AIMS-M</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/class')}}">Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/section')}}">Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/student'}}">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/student_C')}}">StudentClass</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/attandence')}}">Attandence</a>
        </li>
      </ul>
    </div>
   </div>
</nav>

<div class="container mt-5">
  <h2><b>StudentClass</b></h2>
<form action="{{url('/')}}/student_C" method="post" class="form">
     @csrf
     <div class="mb-3">
       <label for="StudentName" class="form-label m-2">Student Name:</label><br>
          <select name="StudentName" class="form-select" id="StudentName">
           <option ></option>
           @foreach($student as $student)
           <option name="option" value='{{ $student->student_id}}'>   
                {{ $student->student_name }}
            </option>
          @endforeach
         </select>
     </div>  
     <span class="text-danger">@error('StudentName'){{$message}}@enderror</span>

    <div class="mb-3">
        <label for="className" class="form-label m-2">Class Name:</label><br>
        <select name="className" class="form-select" id="className">
            <option ></option>
            @foreach($class as $classItem)
            <option name="option" value='{{ $classItem->Class_id}}'>   
                {{ $classItem->Class_name }}
            </option>
            @endforeach
        </select>
    </div>
    <span class="text-danger">@error('className'){{$message}}@enderror</span>
  <div class="btn-toolbar justify-content-between">
  <button type="submit" name="submit" value="submit" class="btn btn-primary m-3">Submit</button>
  <a href="{{url('/student_C/view')}}" class="btn btn-success m-3">SectionTable</a>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
