<?php
session_start();
include 'inc/db.php';
// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // If logged in, redirect to the user page
    header('Location: index.php');
    exit(); // Ensure script execution stops after redirection
}

$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)){
        $get_sql = "SELECT * FROM `admin_tbl` WHERE email = '$email' and password = '$password'";
        $data = mysqli_query($con, $get_sql);
        $num_of_row = mysqli_num_rows($data);
        
        if ($num_of_row == 1) {
            // If login is successful, set session variables and redirect to user page
            $row = mysqli_fetch_assoc($data);
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            header('Location: index.php');
            exit();
        } else {
            // If login fails, set error message
            $err_msg = "Your Email id And Password Is Wrong";

        }
    } else {
        // If email or password is empty, set error message
        $err_msg = 'All Fields Are Required';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="logo2.png">
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="logo2.png" style="width:140px;">
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>
                                    <p class="text-danger text-center">
                                        <?php echo $err_msg; ?>
                                    </p>
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Email:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="email" class="form-control" name="email" id="userName" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© 2012 365Softwares</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>
    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
</body>
</html>
