<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentClass table</title>
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
          <a class="nav-link active" href="<?php echo e('/student_C'); ?>">StudentClass</a>
        </li>
      </ul>
    </div>
    </div>
   </nav>




<div class="container">
<h2>StudentClass Table:</h2>
<form action="">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>StudentName</th>
      <th>ClassName</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    <tr> 
      <td><?php echo e($student->StudentC_id); ?></td>
      <td><?php echo e($student->Student_name); ?></td>
      <td><?php echo e($student->Class_name); ?></td>
      <td><?php echo e($student->created_at); ?></td>
      <td>
        <a href="<?php echo e(route('student.delete',['id'=>$student->StudentC_id])); ?>">
        <button class="btn btn-danger m-1">Delete</button>
        </a>
        <a href="">
        <button class="btn btn-success m-1">Edit</button>
        </a>
      </td>
    </tr>
  
  </tbody>
</table>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\AIMS_M\resources\views/StudentC-view.blade.php ENDPATH**/ ?>