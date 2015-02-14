<?php include('base.php'); ?>
<?php include('loginRedirect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OweMe - A debt management system</title>

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

    <?php
    $r = mysqli_query($db_conn, "select Username, Email from owe_User");
    $arrayUser = array();
    $arrayBoth = array();
    while($row = mysqli_fetch_array($r, MYSQLI_NUM)){
        array_push($arrayUser, $row[0]);
        array_push($arrayBoth, $row);
    }
    $js_array = json_encode($arrayUser);
    $js_arrayBoth = json_encode($arrayBoth);
    ?>

    $(document).ready(function(){

        $('#submit').hide();
    });

        var phpArrayUser = <?php echo $js_array; ?>;
        var phpArrayBoth = <?php echo $js_arrayBoth; ?>;

    

    function validateUser(val){
        if(phpArrayUser.indexOf(val) == -1){
            $('#submit').hide();
            $('#usernameOwes').css("border","2px solid red");
            return false;
        }
            $('#submit').show();
            $('#usernameOwes').css("border","2px solid green");
            $('#emailOwes').val(phpArrayBoth[phpArrayUser.indexOf(val)][1]);
        console.log(val + " finns med email " + phpArrayBoth[phpArrayUser.indexOf(val)][1]);
        return true;
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
                   You owe someone
                </h1>
                <p>
                    <form action="" method="POST">
                    <table>
                        <tr>
                            <td>
                                Who do you owe?
                            </td>
                            <td>
                                How much?
                            </td>
                            <td>
                                For what?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="usernameOwes" id="usernameOwes" placeholder="Who?" onkeyup="validateUser(this.value)" required>
                            </td>
                            <td>
                                <input type="number" name="amountOwes" placeholder="Numbers only" required>
                            </td>
                            <td>
                                <input type="text" name="why" placeholder="Why?">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="hidden" name="emailOwes" id="emailOwes" value="">
                    <input type="submit" value="Debt!" class="btn btn-success" id="submit">
                </form>
                <br><br><br>

                <?php
                    if($_POST['usernameOwes'] && $_POST['amountOwes'] && $_POST['emailOwes']){
                        mysqli_query($db_conn,"insert into owe_Debt values('".$_POST['usernameOwes']."','".$_SESSION['username']."',".$_POST['amountOwes'].",default,'".$_POST['why']."');");
                        if(mysqli_error($db_conn)){
                            echo 'Something went wrong with the creation of the debt. Maybe you tried to trick the system';
                            exit();
                        }else{
                            $to = $_POST['emailOwes'];
                            $subject = $_SESSION['username']." owes you";

                            $message ="Hello ".$_POST['usernameOwes'].",\r\n\r\nI owe you ".$_POST['amountOwes']." and have created a debt for it! For more details, please see http://hajkep.se/oweme \r\n\r\nRegards,\r\nThe OweMe Team and ".$_SESSION['username'];

                            $from = "From: OweMe <noreply@hajkep.se>";
                            
                            mail($to, $subject, $message, $from);

                            echo 'You, '. $_SESSION['username'].' now owes, ' .$_POST['usernameOwes']. ', '.$_POST['amountOwes'].' shiny coins. An email has been sent.';
                        }
                    }
                ?>
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
