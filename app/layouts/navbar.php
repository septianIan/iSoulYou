        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <?php 
                include '../db/connection.php';
                  $pesan = $mysqli->query("select * from tanya where status = 0");
                  $row = mysqli_num_rows($pesan);

                  $lapor = $mysqli->query("select * from lapor where status = 0");
                  $rowLapor = mysqli_num_rows($lapor);

                  $mess = $mysqli->query("select * from tanya where status = 0 order by jam asc");
                  $lapor = $mysqli->query("select * from lapor where status = 0 order by jam asc");
             ?>
              
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                
                  <?php 
                    if ($row == "0") 
                    {
                      ?>
                        <span class="badge badge-danger"></span>
                      <?php
                    }
                    else
                    {
                      ?>
                        <span class="badge badge-danger badge-counter"><?php echo $row; ?></span>
                      <?php
                    }
                   ?>
               
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
              <?php foreach ($mess as $val): ?> 
                <a class="dropdown-item d-flex align-items-center" href="index.php?content=contactUs">
                  <div class="mr-3">
                   <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="../frontend/images/userKomen.png">
                      <div class="status-indicator bg-success"></div>
                    </div>
                  </div>
                    
                    <div>
                        <div class="small text-gray-500"><?php echo $val['tanggal'] ?> <?php echo $val['jam']; ?></div>
                        <span class="font-weight-bold"><?php echo $val['subject'] ?></span>
                    </div>
                    
                </a>
              <?php endforeach ?>
                <a class="dropdown-item text-center small text-gray-500" href="index.php?content=contactUs">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <?php 
                  if ($rowLapor == "0") 
                  {
                    ?>
                      <span class="badge badge-danger badge-counter"></span>
                    <?php
                  }
                  else
                  {
                    ?>
                      <span class="badge badge-danger badge-counter"><?php echo $rowLapor; ?></span>
                    <?php
                  }
                ?>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>

                <?php foreach ($lapor as $key): ?>
                    <a class="dropdown-item d-flex align-items-center" href="index.php?content=listPelaporan">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="../frontend/images/user.png">
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate"><?php echo $key['namaPelapor'] ?>.</div>
                      <div class="small text-gray-500"><?php echo $key['jam'] ?> <?php echo $key['tanggal'] ?></div>
                    </div>
                  </a>
                <?php endforeach ?>

                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admintrator</span>
                <img class="img-profile rounded-circle" src="../frontend/images/admin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->