<?php ob_start(); include('base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OweMe - A Debt Management System for keeping track of money debts">
    <meta name="author" content="oweme">

    <title>OweMe - Login</title>

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
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($_SESSION['username']){ //inloggad ?> 
                <h1 class="page-header">
                    <?php echo 'Welcome '.$_SESSION['username'];?>
                </h1>
                <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i style="color:green" class="glyphicon glyphicon-piggy-bank"></i> <i style="color:green" class="glyphicon glyphicon-hand-left"></i> Someone owes you money</h4>
                    </div>
                    <div class="panel-body">
                        <p>If someone owes you money this is where you click</p>
                        <a href="createGetDebt.php" class="btn btn-default">Create debt</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i style="color:red" class="glyphicon glyphicon-piggy-bank"></i> <i style="color:red" class="glyphicon glyphicon-hand-right"></i> You owe someone money</h4>
                    </div>
                    <div class="panel-body">
                        <p>If you owe someone else money, you click here.</p>
                        <a href="createPayDebt.php" class="btn btn-default">Create debt</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-list-alt"></i> See your debts</h4>
                    </div>
                    <div class="panel-body">
                        <p>See all debts linked with your account</p>
                        <a href="myDebts.php" class="btn btn-default">View debts</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-list-alt"></i> Account settings</h4>
                    </div>
                    <div class="panel-body">
                        <p>Change account related settings</p>
                        <a href="changePassword.php" class="btn btn-default">Change Password</a>
                    </div>
                </div>
            </div>

                <?php }else if($_POST['username'] || $_POST['password']){ ?>
                <!-- Check login - set session or say wrong password -->
                <?php

                    $username = mysqli_real_escape_string($db_conn, $_POST['username']);
                    $username = ucfirst(strtolower($username));
                    $password = md5(mysqli_real_escape_string($db_conn, $_POST['password']));
                    //kolla om den matchar någon i databasen 
                    $checklogin = @mysqli_query($db_conn, "select * from owe_User where Username = '" . $username . "' and Password = '" . $password . "'");
                    
                    //om användaren hittades
                    if(mysqli_num_rows($checklogin) == 1)
                    {
                        $row = mysqli_fetch_array($checklogin);
                        // sätter relevanta session-variabler som följer med över alla sidor man besöker
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['mail'] = $row['Email'];

                        $friends = @mysqli_query($db_conn, "select * from owe_Friendlist where Username = '" . $_SESSION['username'] . "'");
                        echo mysqli_error($db_conn);
                        $array = array();
                        if($friends){
                            while($friend = mysqli_fetch_array($friends)){
                                array_push($array, $friend['Friend']);
                            }
                        }

                        $_SESSION['friends'] = $array;



                        
                        
                        header("refresh: 0;");
                    }else{
                        login("Wrong password or username, please try again");
                    }

                ?>
                <?php }else if(!$_POST['username'] || !$_POST['password']){ 
                    login("");
                 } ?>
                </p>
            </div>

            <?php 
            function login($msg){
                ?>
                <h1 class="page-header">
                    Login to your OweMe account
                </h1>
                <p>
                <form method="POST" action="">
                    <table class="tr-margin">
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                                : &nbsp; 
                            </td>
                            <td>
                                <input type="text" placeholder="Username" name="username" required autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                : &nbsp;
                            </td>
                            <td>
                                <input type="password" placeholder="********" name="password" required>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="3"><center><input type="reset" value"Clear" class="btn btn-danger">&nbsp;&nbsp;
                            <input type="submit" value"Login" class="btn btn-success"></center></td>
                        </tr>
                    </table>
                </form>

                <p style="color:red"><?php echo $msg; ?></p>
                
                <i><a href="register.php">No account? Click here to register your account!</a></i><br>
                <i><a href="forgottenPassword.php">Forgotten password? Click here to reset your password!</a></i>
                <?php
            }

            ?>
        <!-- /.row -->
        <!-- Footer -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <p>Copyright &copy; hajkep.se 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
