<?php include('inc/header.php');
      include('inc/aside.php');
      include 'inc/db.php'; 
      
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // var_dump($_POST);die;
        $password = $_POST['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $err =  'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        }else {
                $c_password = $_POST['c_password'];
                $email = $_SESSION['email'];
                if ($password == $c_password) {
                  $update_sql = "UPDATE `admin_tbl` SET `password`= '$password' WHERE email = '$email'";
                  $update = mysqli_query($conn, $update_sql);
                  if ($update) {
                    header('Location: logout.php');
                  }
                }else {
                  $err = "Password And Confirm Password Is Not Match";
        }
        }
      }
 ?>

<!-- Main Sidebar Container -->
<?php include('inc/aside.php'); ?>

<div class="page-container">
  <!-- Content Wrapper START -->
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Manage Password</h2>
      <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
          <a href="index.php" class="breadcrumb-item"
            ><i class="anticon anticon-home m-r-5"></i>Home</a
          >
          <a class="breadcrumb-item" href="#">SETTINGS</a>
          <span class="breadcrumb-item active">Manage Password</span>
        </nav>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h4>Manage Password</h4>
          </div>
        </div>
        <div class="m-t-25">
          <?php if (!empty($err)) : ?>
          <p class="text-danger"><?php echo $err ?></p>
          <?php endif; ?>
          <form action="" method="post" enctype="multipart/form-data">
            <!-- <input type="number" name="commision" placeholder="Commision in (%) **" class="form-control commision" required="" value="<?php echo $var['commission'] ?>"> -->
            <input
              type="password"
              name="password"
              placeholder="Password **"
              class="form-control"
              required=""
            />
            <br />

            <input
              type="password"
              class="form-control"
              name="c_password"
              required=""
              placeholder="Confirm Password **"
            />
            <br />

            <br />
            <input
              type="submit"
              class="btn btn-success btn-block"
              value="SUBMIT"
              style="background-color: #ef4765; border: none"
            />
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Page Container END -->

  <!-- Quick View START -->

  <?php include('inc/footer.php'); ?>
</div>
