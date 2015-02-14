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

    <title>OweMe - A debt managing system</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/custom.css" rel="stylesheet">
    
    <?php require_once('analytic.php'); ?>
    <style>
        tr td button{
            display:none !important;
        }

        tr:hover td button{
            display:initial !important;
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
<script src="js/myDebts.js"></script>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Your debts
                </h1>
                <p>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i style="color:green" class="glyphicon glyphicon-piggy-bank"></i><i style="color:green" class="glyphicon glyphicon-hand-left"></i> Owes you...</h4>
                            </div>
                            <div class="panel-body">
                    <?php
                        $queryOwesMe = "select * from owe_Debt where UserGet = '".$_SESSION['username']."'";
                        $rOwesMe = mysqli_query($db_conn, $queryOwesMe);
                        echo '<table class="table">
                                <th>
                                    Owes
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Archive
                                </th>
                        ';
                        while($rowOwesMe = mysqli_fetch_array($rOwesMe, MYSQLI_ASSOC)){
                            echo '
                            <tr id="'.$rowOwesMe["UserGet"].$rowOwesMe["UserPay"].$rowOwesMe["Date"].'">
                                <td>
                                    '.$rowOwesMe["UserPay"].'
                                </td>
                                <td>
                                    '.$rowOwesMe["Amount"].'
                                </td>
                                <td>
                                    '.substr($rowOwesMe["Date"],0,10).'
                                </td>
                                <td>
                                    <textarea readonly style="border:none; overflow:hidden;">'.$rowOwesMe["Desc"].'</textarea>
                                </td>
                                <td>
                                    <div style="width:40px;height:1px;"></div><button onclick="archiveDebt(\''.$rowOwesMe["UserGet"].'\',\''.$rowOwesMe["UserPay"].'\',\''.$rowOwesMe["Date"].'\')" class="archiveBtn btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></button>
                                </td>
                            </tr>
                            ';   
                        }
                        echo '</table>';
                    ?>
                    </div>
                </div>
            </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                             <div class="panel-heading">
                                <h4><i style="color:red" class="glyphicon glyphicon-piggy-bank"></i><i style="color:red" class="glyphicon glyphicon-hand-right"></i> You owe...</h4>
                             </div>
                             <div class="panel-body">

                    <?php
                        $queryIOwe = "select * from owe_Debt where UserPay = '".$_SESSION['username']."'";
                        $rIOwe = mysqli_query($db_conn, $queryIOwe);
                        echo '<table class="table">
                                <th>
                                    Owes
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                Archive
                                </th>';
                        while($rowIOwe = mysqli_fetch_array($rIOwe, MYSQLI_ASSOC)){
                            echo '
                            <tr id="'.$rowOwesMe["UserGet"].$rowOwesMe["UserPay"].$rowOwesMe["Date"].'">
                                <td>
                                    '.$rowIOwe["UserGet"].'
                                </td>
                                <td>
                                    '.$rowIOwe["Amount"].'
                                </td>
                                <td>
                                    '.substr($rowIOwe["Date"],0,10).'
                                </td>
                                <td>
                                    <textarea readonly style="border:none; overflow:hidden;">'.$rowIOwe["Desc"].'</textarea>
                                </td>
                                <td>
                                    <div style="width:40px;height:1px;"></div><button onclick="archiveDebt(\''.$rowIOwe["UserGet"].'\',\''.$rowIOwe["UserPay"].'\',\''.$rowIOwe["Date"].'\')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></button>
                                </td>
                            </tr>
                            ';
                        }
                        echo '</table>';
                    ?>
                            </div>
                        </div>
                    </div>
                    <a href="archive.php"><button style="float:right" class="btn btn-primary">Archive</button></a>
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
