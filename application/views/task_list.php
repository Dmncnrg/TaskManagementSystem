<?php include 'head.php' ?>
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
      <?php include 'sidenav.php'; ?>
      <div class="col offset-2" id="main">
        <div class="container">
          <h1>Task Table</h1>
          <div class="row d-flex justify-content-between">
            <div class="col-auto">
              <p>Some Information</p>
            </div>
            <div class="col-auto">
              <button class="btn btn-primary" onclick="document.location='create_task'">Create Task</button>
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
                  $id = 1;
                  if(empty($list)){
                    echo '<tr><td style="text-align:center;" colspan="7">Create new task</td></tr>';
                  }
                  foreach($list as $l){
                    $tr = "";
                    switch($l->task_status){
                      case('Pending'): $tr = "bg-default"; break;
                      case('On Progress'): $tr = "bg-warning"; break;
                      case('Done'): $tr = "bg-Success"; break;
                    }
                    echo '<tr class="'.$tr.'">';
                    echo '<td class="p-2">'.$id.'</td>';
                    echo '<td class="p-2">'.$l->task.'</td>';
                    echo '<td class="p-2">'.$l->description.'</td>';
                    echo '<td class="p-2">'.$l->task_start.'</td>';
                    echo '<td class="p-2">'.$l->task_due.'</td>';
                    echo '<td class="p-2">'.$l->task_status.'</td>';
                    echo '<td class="p-2>
                    <div class="dropdown show">
                      <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                        echo '<a class="dropdown-item" href="edit_task/'.$l->id.'">Edit</a>';
                        echo '<a class="dropdown-item" href="delete_task/'.$l->id.'">Delete</a>';
                    echo '</div>
                    </div></td>';
                    echo '</tr>';
                    $id++;
                  }
                ?>
            </tbody>
          </table>
          <div>
          <ul class='pagination d-flex justify-content-center'>
              <?php echo $this->pagination->create_links();?>
          </ul>
          
        </div>
      </div>
  </div>
</div>

</body>
</html>