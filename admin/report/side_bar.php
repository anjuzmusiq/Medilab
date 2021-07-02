
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light text-white bg-light elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
    &nbsp;&nbsp;&nbsp;<i class="fa-solid fas fa-backward text-center"></i><span class="text-center">&nbsp;&nbsp;&nbsp;Go Back</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="..\..\assets\img\doctors\avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block">Admin</a>
        </div>
      </div>

  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>All User Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="users_patients_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>User Patient's Reports</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wheelchair"></i>
              <p>
                Patient
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="patient_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>All Patient Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_active_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Active Patient's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_inactive_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Inactive Patient's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_female_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Female Patient's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_male_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Male Patient's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_engaged_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Engaged Patient's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patient_category_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Categorised Patient's</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-nurse"></i>
              <p>
                Nurse
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nurse_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>All Nurses Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nurse_engaged_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Nurse Engaged </p>
                </a>
              </li>
              
            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pager"></i>
              <p>
               Consolidated Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="consolidated_allocate_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Complete Allocation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consolidated_requested_user_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Requested User's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consolidated_nurse_accepted_user_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Nurse Accepted User's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consolidated_completed_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Allocation Completed User's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consolidated_rejected_user_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Rejected User's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="consolidated_rejected_nurse_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Rejected Nurse</p>
                </a>
              </li>
              
            </ul>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>