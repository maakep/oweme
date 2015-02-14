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
                Enter your email to get help with resetting your password.
                    <form action="" method="POST">
                        <input type="email" name="email" placeholder="mail@domain.com">
                        <input type="submit" class="btn btn-success" value="send mail">
                    <form>
            </div>
           <?php

            if($_POST['email']){
                $rand = rand();
                $_SESSION['resetMail'] = $_POST['email'];
                $_SESSION['resetPw'] = $rand;

                $subject ="Resetting your password";
                $to = $_POST['email'];           
                $message="Hi,\n\n here's a link for resetting your password! Your new password will be: ".$rand.". Please follow the link and then log in to change it. \n\n http://hajkep.se/oweme/resetPassword.php?p=".$rand." \n\n Regards,\nOweMe";
               $from = "From: OweMe <noreply@hajkep.se>";
             
                mail($to, $subject, $message, $from);
                echo "Mail sent. Don't forget to check the spam folder";
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
