<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attandence table</title>
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
<h2>Attandence:</h><br><br>
<form action="{{url('/StudentAttandence/store')}}" method="post">
@csrf
<div class="row">
<div class="col-md-10">
<label for="classid">Class:
<input type="hidden" name="classid" value="{{ $class->Class_id}}" id="classid" readonly>{{ $class->Class_name}}
</label>
</div>
<div class="col-md-2">
<label for="atdate">Date:<input type="date" name="atdate" class="form-control" required></label>
</div>
</div>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>studendId</th>
      <th>studentName</th>
      <th>Attandence</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $std)
    <tr>
      <td name="">{{$std->student_id}}</td>
      <td name="">{{$std->student_name}}</td>    
      <td>
         <label>
           <input type="radio" class="" id="{{$std->student_id}}" name="attendance[{{$std->student_id}}][]" value="P"> Present
          </label>

          <label>
            <input type="radio" class="" id="{{$std->student_id}}" name="attendance[{{$std->student_id}}][]" value="A"> Absent
        </label>
      </td>
      </tr>
      @endforeach
  </tbody>
</table>
    <button type="submit" class="btn btn-primary m-3">Submit</button>
</form>
</div>
</body>
</html>