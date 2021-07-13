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
      .task-button .btn-task{
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #5791ff;
        border: 1px solid #5791ff;
        color: white;
        margin-top: 20px;
      }
      .task-button .btn-task:hover{
        background-color: #fff;
        border: 1px solid #5791ff ;
        color: #5791ff;
      }

      .table-heads{
        background-color: #5791ff;
        color: #fff;
      }
      </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
      <?php 
      $_SESSION['page'] = false;
      if(count($list)>5){
        $_SESSION['page'] = true;
      }
      include 'sidenav.php'; ?>
      <div class="col offset-2" id="main">
        <div class="container mt-5">
          <h2> <b>Task Table</b></h2>
          <div class="row d-flex justify-content-between">
            <div class="col-auto">
              <h5>Welcome 
              <?php
                echo $_SESSION['userinfo'][0]->fname;
                ?>
              </h5>
            </div>
            <div class="col-auto mb-3 task-button">
              <button class="btn btn-primary btn-task" onclick="document.location='<?php echo base_url();?>TaskManager/create_task'"><i class="fas fa-plus-circle mr-2"></i>Create Task</button>
            </div>
          </div>
          <table class="table shadow p-3 mb-5 bg-body">
              <caption><?php
              echo $_SESSION['total']." tasks"; 
              ?></caption>
              <thead class="table-heads">
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
                  $id = $_SESSION['task_page'] + 1;
                  if(empty($list)){
                    echo '<tr><td style="text-align:center;" colspan="7">Create new task</td></tr>';
                  }
                  foreach($list as $l){
                    $tr = "";
                    switch($l->task_status){
                      case('Pending'): $tr = "bg-default"; break;
                      case('On Progress'): $tr = "table-active"; break;
                      case('Done'): $tr = "table-success"; break;
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
                        echo '<a class="dropdown-item" href="'.base_url().'TaskManager/edit_task/'.$l->id.'">Edit</a>';
                        echo '<a class="dropdown-item" href="'.base_url().'TaskManager/delete_task/'.$l->id.'">Delete</a>';
                    echo '</div>
                    </div></td>';
                    echo '</tr>';
                    $id++;
                  }
                ?>
            </tbody>
          </table>
          <?php
          if(!empty($list)){
          ?>
          <div>
            <ul class='pagination d-flex justify-content-center'>
              <?php echo $this->pagination->create_links(); ?>
           </ul>
          </div>
          <?php
          }
          ?>
      </div>
  </div>
</div>

</body>
</html>