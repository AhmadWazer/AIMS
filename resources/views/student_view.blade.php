<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
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
          <a class="nav-link active" href="{{'/student'}}">Student</a>
        </li>
      </ul>
    </div>
    </div>
   </nav>




<div class="container">
<h2>Student Table:</h2>
<form action="">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>StudentName</th>
      <th>FatherName</th>
      <th>DateOfBirth</th>
      <th>Email</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $student)
    <tr>
      <td>{{$student->student_id}}</td>
      <td>{{$student->student_name}}</td>
      <td>{{$student->father_name}}</td>
      <td>{{$student->dob}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->updated_at}}</td>
      <td> 
         <a href="{{'/delete/'. $student['student_id']}}"class="btn btn-danger m-1 btn-sm">Delete</a>
         <a href="{{'/edit/'. $student['student_id']}}"class="btn btn-success m-1 btn-sm">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>