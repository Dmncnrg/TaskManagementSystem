<div class="col-2 px-1 bg-light position-fixed tasknav" style="height:100%;" id="sticky-sidebar">
          <div class="container-fluid">
            <a href="#" class="navbar-brand">Task Manager</a>
            <div class="row-auto flex-row align-content-center">
              <img class="rounded-circle" src="<?php echo base_url(); ?>/images/<?php echo $_SESSION['userinfo'][0]->profile_pic; ?>" width="150" height="150">
              <h2><?php
                echo $_SESSION['userinfo'][0]->username;
                ?></h2>
            </div>
            <div class="row-auto">
              <nav class="navbar navbar-text">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>taskmanager/tasks" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>taskmanager/profile" class="nav-link active">View Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>taskmanager/logout" class="nav-link">Logout</a>
                    </li>
                  </ul>
              </nav>
            </div>
          </div>
        </div>