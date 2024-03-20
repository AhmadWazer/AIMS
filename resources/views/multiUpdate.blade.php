<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
    <h3>Selected rows:</h3>
         
                     <form method="post" action="{{url('/updateMultiAttendance')}}">
                     @csrf
                     @foreach($selectedRecords as $selectedRecords)
                     <input type="hidden" name="selected_records[]" value="{{$selectedRecords->attend_id}}">
                     <div class="row g-3">
                     <div class="col">
                     <input type="text"class="form-control" name="class_name" value="{{$selectedRecords->Class_name}}" readOnly>
                     </div>
                     <div class="col">
                     <input type="text"class="form-control" name="sname" value="{{$selectedRecords->student_name}}" readonly>
                     </div>
                     <div class="col">
                     <input type="date"class="form-control" name="date" value="{{$selectedRecords->attend_date}}" required>
                     </div>
                     <div class="col">
                     <select name="attendance" class="form-select" id="attendance">
                     <option name="{{$selectedRecords->status}}">{{$selectedRecords->status}}</option>
                     <option value="A">A</option>
                     <option value="P">P</option>
                     </select>
                     </div>
                     </div>
                     <br>
                     @endforeach
                     <br>
<input type="submit"class="btn btn-success" name="update_btn" > 
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body> 
</html>