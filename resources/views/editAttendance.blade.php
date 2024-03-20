<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UpdateAttendance</title>

        <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body>

   <div class="container mt-5">
      <h2><b>UpdateAttendance</b></h2>
     <form action="/updateAttendance" method="post" class="form">
        @csrf
        <input type="hidden" name="id" value="{{$data1->attend_id}}">

        <div class="mb-3">
           <label for="cName" class="form-label m-2">Class Name:</label>
           <input type="text" class="form-control xl" id="cName"value="{{$data1->Class_name}}" name="cName">
        </div>
        <div class="mb-3">
           <label for="sName" class="form-label m-2">Student Name:</label>
           <input type="text" class="form-control xl" id="sName"value="{{$data1->student_name}}" name="sName">
        </div>
        <div class="mb-3">
           <label for="attend" class="form-label m-2">Attendance:</label>
           <!-- <input type="text" class="form-control xl" id="attend"value="{{$data1->status}}" name="attend"> -->
           <select name="attend" class="form-select" id="attend">
           
            <option value="A" {{ $data1->status == 'A' ? 'selected':'' }}>A</option>
            <option value="P" {{ $data1->status == 'P' ? 'selected':'' }}>P</option>
        </select>
        </div> 
        <div class="mb-3">
           <label for="Date" class="form-label m-2">AttendanceDate:</label>
           <input type="date" class="form-control xl" id="semail"value="{{$data1->attend_date}}" name="date">
        </div>
        <div class="btn-toolbar justify-content-between">
           <button type="submit" class="btn btn-primary m-3">Update</button>
        </div>
     </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
