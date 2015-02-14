<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OweMe - A Debt Management System for keeping track of money debts">
    <meta name="author" content="oweme">

    <title>OweMe - A debt managing system</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/custom.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

 <?php include('nav.php'); ?>

 </script>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Change your password
                </h1>
                <p>
            </div>
           <?php
           $urlPw = $_GET['p'];

           if($urlPw == $_SESSION['resetPw']){
            $q = "update owe_User set Password = '".md5($_SESSION['resetPw'])."' where Email = '".$_SESSION['resetMail']."'";
            mysqli_query($db_conn, $q);
            echo "Password reset to " .$_SESSION['resetPw'] . ". Please <a href='logout.php'>log in</a> and change it";
           }
           ?>

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
