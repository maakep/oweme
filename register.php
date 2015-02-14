<?php ob_start(); include('base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OweMe - A Debt Management System for keeping track of money debts">
    <meta name="author" content="oweme">

    <title>OweMe - Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <?php require_once('analytic.php'); ?>
      <script src="js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $("#submit").hide();
    });

    

    function validateMail(){
        var mail1 = document.getElementById("mail1").value;
        var mail2 = document.getElementById("mail2").value;

        if(mail1 != mail2 || mail1 == ""){
            $("#submit").hide();
        }else{
            $("#submit").show();
        }
    }

    </script>

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
                <h1 class="page-header">
                    Register your OweMe account
                </h1>
                <p>
                <form method="POST" action="registerMail.php">
                    <table class="tr-margin">
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                                : &nbsp; 
                            </td>
                            <td>
                                <input type="text" placeholder="Username" name="username" required>
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
                                <input type="password" placeholder="*********" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                : &nbsp;
                            </td>
                            <td>
                                <input type="email" placeholder="email@domain.com" name="email" id="mail1" onkeyup="validateMail();" required> &nbsp; Repeat Email: <input type="email" placeholder="email@domain.com" onkeyup="validateMail();" id="mail2" required>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="3"><center><input type="reset" value"Clear" class="btn btn-danger">&nbsp;&nbsp;
                            <input type="submit" value"Login" class="btn btn-success" id="submit"></center></td>
                        </tr>
                    </table>
                </form>
                
                <i><a href="login.php">Already have an account? Click here to login!</a></i>

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

</body>

</html>
