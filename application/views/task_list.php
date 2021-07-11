<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <title>Task Management System</title>
      <style>
        .word-wrap {
        word-break: break-all;
        word-wrap: break-word;
         overflow-wrap: break-word;
      }
      .tasknav{
        padding:10px;
      }
      </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-1 bg-light position-fixed tasknav" id="sticky-sidebar">
          <div class="container-fluid">
            <a href="#" class="navbar-brand">Task Management System</a>
            <div class="row-auto">
                Image Here
              </div>
              <div class="row-auto">
                <nav class="navbar navbar-text">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link active">View Profile</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                      </li>
                    </ul>
                </nav>
              </div>
          </div>
        </div>
        <div class="col offset-2" id="main">
          <div class="container">
            <h1>Task Table</h1>
            <div class="row d-flex justify-content-between">
              <div class="col-auto">
                <p>Some Information</p>
              </div>
              <div class="col-auto">
                <button class="btn btn-primary" onclick="document.location='taskmanager/create_task'">Create Task</button>
              </div>
            </div>
            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                  <th class="p-2">#</th>
                  <th class="p-2">Task</th>
                  <th class="p-2">Description</th>
                  <th class="p-2">Task Started</th>
                  <th class="p-2">Task Due Date</th>
                  <th class="p-2">Task Status</th>
                  <th class="p-2">Action</th>
                </tr>  
                </thead>
                <tbody>
                  <?php
                  /*
                  tr colors
                  Pending - Default
                  On Progress - Warning
                  Done - Success
                  
                  */
                    $user = 10;
                    while($user != 0){
                      echo '<tr class="bg-default">';
                      echo '<td class="p-2">ID</td>';
                      echo '<td class="p-2">Web System Technologies Final Exam</td>';
                      echo '<td class="p-2">Description Description Description Description Description Description Description</td>';
                      echo '<td class="p-2">01-01-2000</td>';
                      echo '<td class="p-2">01-02-2000</td>';
                      echo '<td class="p-2">Pending</td>';
                      echo '<td class="p-2>
                      <div class="dropdown show">
                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="edit_task">Edit</a>
                          <a class="dropdown-item" href="delete_task">Delete</a>
                        </div>
                      </div></td>';
                      echo '</tr>';
                      $user--;
                    }
                  ?>
              </tbody>
            </table>
            
          </div>
        </div>
    </div>
</div>
</body>
</html>