<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance table</title>
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
          <a class="nav-link active" href="{{'/attandence'}}">Attandence</a>
        </li>
      </ul>
    </div>
    </div>
   </nav>


<div class="container">
<h2>Attandence Table:</h2>
<form action="{{url('/selectAttendane')}}">
<table class="table table-bordered">
  <thead>
    <tr>
      <th><input type="checkbox" name="" id="selectAll">SelectAll</th>
      <th>#</th>
      <th>ClassName</th>
      <th>StudentName</th>
      <th>Attandence</th>
      <th>UpdatedDate</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Attendance as $Attend)
    <tr>
      <td><input type="checkbox" name="selected_records[]" class="record-checkbox" value="{{$Attend->attend_id}}"></td>
      <td scope="row">{{ $loop->iteration }}</td>
      <td>{{$Attend->Class_name}}</td>
      <td>{{$Attend->student_name}}</td>
      <td>{{$Attend->status}}</td>
      <td>{{$Attend->attend_date}}</td>
      <td> 
         <a href="{{'/delete'. $Attend->attend_id}}"class="btn btn-danger m-1 btn-sm">Delete</a>
         <a href="{{'/edit'. $Attend->attend_id}}"class="btn btn-success m-1 btn-sm">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<button type="submit"class="btn btn-primary m-1 btn-sm">Update</button>
<!-- 
<a href="{{'/selectAttendane'. $Attend->attend_id}}" class="btn btn-primary m-1 btn-sm">Update Selected Records</a> -->
</div>

<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.record-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>
</body>
</html>