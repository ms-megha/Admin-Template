
<?php
session_start();
if (!$_SESSION['email']) {
  header('Location: logout.php');die;
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Apex | Doctor Panel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet"> -->
    <!-- dataTables -->
    <link rel="stylesheet" href="assets/datatables/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatables/css/responsive.bootstrap4.min.css">
    <!-- Core css -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

    <link href="assets/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style media="screen">
.side-nav .side-nav-inner .side-nav-menu li.dropdown .arrow .arrow-icon:before, .side-nav .side-nav-inner .side-nav-menu li.dropdown .arrow .arrow-icon:after{
    background-image:linear-gradient(to right, #ffffff, #ffffff)!important;
}
  .side-nav a{
    font-size: 15px;
  }
   .open span,a,i{
    color: #fff;
  }

  .e_b_card{
        background-color: #078586;
    }

        .e_b_card, p, span{
       color: #fff;
    }

    .h5{
        background-color: #078586;
        padding: 10px;
        color: #fff;
        text-transform: uppercase;

}


.form_cl, span{
 color: #000;
}
.form_cl input{
 border: 1px solid gray;
}

.form_cl textarea {
 border: 1px solid gray;
}

.form_cl select{
 border: 1px solid gray;
}

/*.form_cl{
    box-shadow: 10px 10px 5px 15px lightblue;
}*/
.text_color{
        /*font-size: 13px;*/
       color: #fff;

}

.form_card{
    /*border: 2px solid gray;*/
    border-radius: 10px;
}

.pass_eye{
    position: relative;
}

.eye_icon{

    position: absolute;
    cursor: pointer;

    color: #078586;
    font-size: 25px;
    top: 50px;
    right: 10px;
    transform: translateY(-50%);

}

.in_select{
    border: 1px solid gray;
}

.h_inv_detl{
        background-color: #078586;
        padding: 20px;
        border-radius: 5px;

}
.h_inv_detl span{
    color: #fff;
    font-size: 18px;
    font-weight: normal;
}

.modal_ac_dtl{
    display:flex;
    justify-content:space-around;
    background-color:#2F5454;
    padding: 5px 5px 5px 5px;
    border-radius:10px;
    color:#fff;
}

.modal_ac_dtl span{
    color: #fff;
}


     .month_year{
        border: 1px solid gray;
     }




/***********Responsive*************/
@media only screen and (max-width: 992px){
.header .nav-wrap .desktop-toggle {
    display: block!important;
}

@media only screen and (max-width: 992px){
.header .nav-wrap .desktop-toggle {
    display: block!important;
}
}

@media only screen and (max-width: 992px){
.side-nav {
    left: 0;
}
}
</style>
<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header" style="background-color: #ef4765; border:none;">
                <div class="logo logo-dark" style="border-right:none;">

                
                    <a href="index.php" style="padding:10px 0; font-size: 25px;">
                        <!-- <img src="assets/images/logo.png" alt="Logo" class="img-fluid" >
                        <img class="logo-fold img-fluid" src="assets/images/medigate-logo.png" alt="Logo" style="max-width: 60%; margin: 0 auto;"> -->
                        Admin Panel
                       
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.php" style="padding:10px 0; font-size: 25px;">
                        <!-- <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
                        <img class="logo-fold img-fluid" src="assets/images/medigate-logo.png" alt="Logo" style="max-width: 60%; margin: 0 auto;"> -->
                        Doctor Panel
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <!-- -->
                    </ul>
                </div>
            </div>
            <!-- Header END -->
