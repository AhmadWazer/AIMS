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

   <div class="container mt-5">
      <h2><b>Update</b></h2>
     <form action="/update" method="post" class="form">
        @csrf
        <input type="hidden" name="id" value="{{$data['student_id']}}">

        <div class="mb-3">
           <label for="sName" class="form-label m-2">Student Name:</label>
           <input type="text" class="form-control xl" id="sName"value="{{$data['student_name']}}" name="sName">
        </div>
        <div class="mb-3">
           <label for="fName" class="form-label m-2">father Name:</label>
           <input type="text" class="form-control xl" id="fName"value="{{$data['father_name']}}" name="fName">
        </div>
        <div class="mb-3">
           <label for="dob" class="form-label m-2">DateOfBirth:</label>
           <input type="date" class="form-control xl" id="sdob"value="{{$data['dob']}}" name="sdob">
        </div>
        <div class="mb-3">
           <label for="email" class="form-label m-2">email:</label>
           <input type="email" class="form-control xl" id="semail"value="{{$data['email']}}" name="semail">
        </div>
        <div class="btn-toolbar justify-content-between">
           <button type="submit" class="btn btn-primary m-3">Update</button>
        </div>
     </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
