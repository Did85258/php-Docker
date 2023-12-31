<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                SPORT
            </a>
          </div>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="borrow.php" class="nav-link px-2">จองอุปกรณ์</a></li>
            <li><a href="equipment.php" class="nav-link px-2">ดูอุปกรณ์</a></li>
            <li><a href="mybooking.php" class="nav-link px-2">การจองของฉัน</a></li>

          </ul>
    
          <div class="col-md-3 text-end">
            <?php
            if (!isset($_SESSION['username'])) {
              ?>
                <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href='login.php'">Login</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='register.php'">Sign-up</button>
              <?php
            }else{
              ?>
                Username : <strong><?php echo $_SESSION['username']; ?> </strong> &nbsp;
                <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href='logout.php'">Logout</button>

              <?php
            }
            ?>
            
          </div>
        </header>
      </div>