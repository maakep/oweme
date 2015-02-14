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

    <title>OweMe - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

<style>


.<?php echo $_SESSION['username']; ?> td{
    color:green !important;
}

tr td{
    color:red;
}

.middleBar{
    float:left;
    background-color:#222;
    width:10%;
    height:600px;
    
}

.btnMargin{
    margin-top:10px;
    margin-bottom:10px;
    width:85%;
}

.left{
    float:left;
    width:45%;
    
}

.right{
    float:right;
    text-align:left;
    width:45%;

    
}

.placeholderX{
    width:100%;
    height:1px;
}

#upArrow{
    background-color:#222;
    width:10%;
}

#cvBox, #pbBox, #faqBox{
    
}

</style>


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
        <?php
            $queryOwesMe = "select * from owe_Archive where UserGet = '".$_SESSION['username']."' or UserPay = '".$_SESSION['username']."'";
                $rOwesMe = mysqli_query($db_conn, $queryOwesMe);
        ?>
        <!-- Marketing Icons Section -->
        <div class="row">
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-piggy-bank"></i> Archive - <?php echo mysqli_num_rows($rOwesMe); ?> debts archived</h4>
                </div>
                <div class="panel-body">
                    <?php
                        echo '<table class="table">
                                <th>
                                    Reciever
                                </th>
                                <th>
                                    Payer
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>
                                    Creation date
                                </th>
                                <th>
                                    Payed date
                                </th>
                                <th>
                                    Description
                                </th>
                        ';
                        while($rowOwesMe = mysqli_fetch_array($rOwesMe, MYSQLI_ASSOC)){
                            echo '
                            <tr class="'.$rowOwesMe["UserGet"].'">
                                <td>
                                    '.$rowOwesMe["UserGet"].'
                                </td>
                                <td>
                                    '.$rowOwesMe["UserPay"].'
                                </td>
                                <td>
                                    '.$rowOwesMe["Amount"].'
                                </td>
                                <td>
                                    '.substr($rowOwesMe["DateGet"],0,10).'
                                </td>
                                <td>
                                    '.substr($rowOwesMe["DatePay"],0,10).'
                                </td>
                                <td>
                                    <textarea readonly style="border:none; overflow:hidden;">'.$rowOwesMe["Desc"].'</textarea>
                                </td>
                            </tr>
                            ';   
                        }
                        echo '</table>';
                    ?>
                    </div>
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
