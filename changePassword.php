<?php include('base.php'); ?>
<?php include('loginRedirect.php'); ?>
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
 <script>
    $(document).ready(function(){
        $("#submit").hide();
    });

    

    function validatePwd(){
        var pw1 = document.getElementById("password1").value;
        var pw2 = document.getElementById("password2").value;

        if(pw1 != pw2 || pw1 == ""){
            $("#submit").hide();
        }else{
            $("#submit").show();
        }
    }

    </script>

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
            if($_POST['oldPw'] && $_POST['password1'] && $_POST['password2']){

                $userQ = "select Username from owe_User where Username ='".$_SESSION['username']."' and Password ='".md5($_POST['oldPw'])."'";
                $result = mysqli_query($db_conn, $userQ);
                
                $row = mysqli_fetch_array($result);
                
                if($row["Username"] == $_SESSION['username']){

                    $q = "update owe_User set Password = '" . md5($_POST['password2']) . "' where Username = '".$_SESSION['username']."' and Password='".md5($_POST['oldPw'])."'";
                    $r = mysqli_query($db_conn, $q);
                    
                    echo 'Password updated!';
                }else{
                    echo 'Wrong password!';
                }
            }else{
            ?>
            <form method="POST" action="">
                    <table class="tr-margin">
                        <tr>
                            <td>
                                Old Password
                            </td>
                            <td>
                                : &nbsp;
                            </td>
                            <td>
                                <input type="password" placeholder="*********" id="oldPw" name="oldPw" value="<?php echo $_GET['tmp']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                New Password
                            </td>
                            <td>
                                : &nbsp;
                            </td>
                            <td>
                                <input type="password" onkeyup="validatePwd();" placeholder="*********" id="password1" name="password1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Repeat Password
                            </td>
                            <td>
                                : &nbsp;
                            </td>
                            <td>
                                <input type="password" onkeyup="validatePwd();" placeholder="*********" id="password2" name="password2" required>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value"Login" class="btn btn-success" id="submit"></td>
                        </tr>
                    </table>
                </form>
                <?php
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
