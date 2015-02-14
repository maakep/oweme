<?php include('base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OweMe - A Debt Management System for keeping track of money debts">
    <meta name="author" content="oweme">

    <title>OweMe - A Debt Management System</title>

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

    <?php include('carousel.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to OweMe
                </h1>
                <p>
                    An online free debt management system!<br>
                    But In reality just a side project for some fun and practical website coding. If you stumpled upon this without me forcing you to use my creation, please feel free to do so. The site has the desired and said functionalities and should be working just fine for the intended functionalities. <br>
                    <br>If you should encounter any bugs or other bothersome things, please <a href="contact">contact</a> me and I'll have a look!<br>
                    <br>This entire site has been under construction while watching and enjoying a few good <a href="https://www.youtube.com/watch?v=W4gy3tpgA9Y&list=PLRSR9GR4CP7ivjS-_HzEJzG_yuS83vq3B&index=2">Kenny vs Spenny</a> seasons.
                </p>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Register</h4>
                    </div>
                    <div class="panel-body">
                        <p>By registering you can do all the things in kravspec</p>
                        <a href="register.php" class="btn btn-default">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Login</h4>
                    </div>
                    <div class="panel-body">
                        <p>Already registered? Well login already!</p>
                        <a href="login.php" class="btn btn-default">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Whatever dude, just do it.</p>
                        <a href="how.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Got something to say? A poem of feedback, a hymn of complaint or a melody of praise?</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact.php">Contact me!</a>
                </div>
            </div>
        </div>

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
