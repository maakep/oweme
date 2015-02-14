<?php include('base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OweMe - Activation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/custom.css" rel="stylesheet">
    <?php require_once('analytic.php'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

 <?php include('nav.php'); ?>
<?php

if(!empty($_GET['key']) && !empty($_GET['user']) && !empty($_GET['email'])){
$username = ucfirst(strtolower($_GET['user']));
$q = "insert into owe_User (Username, Password, Email) values('".$username."','".$_GET['key']."','".$_GET['email']."')";


$r = mysqli_query($db_conn, $q);
if(mysqli_error($db_conn)){
    echo 'There was an error activating your account.<br>';
    $theUser = mysqli_query($db_conn, "select Username from owe_User where Username = '".$_GET['user']."'");

    if(mysqli_num_rows($theUser)>=1){
        echo 'This username is already taken or activated<br>';
        exit();
    }

    $theEmail = mysqli_query($db_conn, "select Email from owe_User where Email = '".$_GET['email']."'");

    if(mysqli_num_rows($theEmail)>=1){
        echo 'This email is already taken or activated<br>';
        exit();
    }
    echo 'Please contact an administrator, this shouldnt happen<br>';
    exit();
}

}else{
    exit();
}

?>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Thank you for your activation
                </h1>
                <p>
                    You account has now been activated! <br>
                    Please proceed to the <a href="login.php">login page</a> to login!
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; hajkep.se 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


</body>

</html>
