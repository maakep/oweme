<?php include('base.php'); ?>
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

    <script src="js/contact.js"></script>
    <?php require_once('analytic.php'); ?>
    
<style>
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

        <!-- Marketing Icons Section -->
        <div class="row">
            <div id="contactFormBox">
                <br><br>
                <form action="sendMail.php" method="POST">
                    <table>
                    <tr><td><input type="text" name="from" placeholder="From"><br>
                        <input type="text" name="subject" placeholder="Subject"></td><td><h1>Send me an email!</h1></td>
                    </tr><tr>
                
                    
                    <td colspan="2"><textarea placeholder="Message" name="message" cols="100" rows="11"></textarea><br></td>
                </tr>
                    </table>
                    <input type="submit" value="Send" class="btn btn-success">
                </form>

                <center><button id="upArrow" class="btn btn-default"><span style="color:white" class="fa fa-fw fa-arrow-up"> </span></button></center>
            </div>
            <div id="contentBox">
                <div class="left">
                    <div class="placeholderX"></div>
                    <div class="panel panel-default" id="cvBox">
                        <div class="panel-heading">
                            <h4>Curriculum Vitae</h4>
                        </div>
                        <div class="panel-body">
                            <p><ul><li>
                                Testing the content</li><li> thingsasf asf  asdad sdf sdfa sad saddaf dfasdf sdf sda </li><li>sfadsadfdfsa sfa sfas dfd </li><li>asdfsdfa sdf sdfsdfsdf sdfsf adsdf s  ssasasads </li><li>ad sas adf sad sd sad sdfa sdf asdfsaf d asdfd asdf</li></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="meBox">
                        <div class="panel-heading">
                            <h4>A picture of me?</h4>
                        </div>
                        <div class="panel-body">
                            <p>Testing the content thingsasf asf  asdad sdf sdfa sad saddaf dfasdf sdf sda sfadsadfdfsa sfa sfas dfd asdfsdfa sdf sdfsdfsdf sdfsf adsdf s  ssasasads ad sas adf sad sd sad sdfa sdf asdfsaf d asdfd asdf</p>
                        </div>
                    </div>
                </div>
                <div class="middleBar">
                    <center>
                        <button id="cvBtn" class="btn btn-default btnMargin">Résumé</button><br>
                        <button id="meBtn" class="btn btn-default btnMargin">Me.jpg</button><br>
                        <button id="pbBtn" class="btn btn-default btnMargin">About me</button><br>
                        <button id="faqBtn" class="btn btn-default btnMargin">FAQ</button><br>
                        <button id="contactBtn" class="btn btn-default btnMargin">Contact</button><br>
                    </center>
                </div>
                 <div class="right">
                    <div class="placeholderX"></div>
                    <div class="panel panel-default" id="pbBox">
                        <div class="panel-heading">
                            <h4>I am me</h4>
                        </div>
                        <div class="panel-body">
                            <p>And there are lots of interesting things about me!</p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faqBox">
                        <div class="panel-heading">
                            <h4>Frequently Asked Questions</h4>
                        </div>
                        <div class="panel-body">
                            <h3>
                                Question
                            </h3>
                            <p>Answered in a cool mannered way</p>
                            <h3>
                                Will there be bugs
                            </h3>
                            <p>No bugs</p>
                            <h3>
                                Will AI take over world
                            </h3>
                            <p>Not likely</p>
                            <h3>
                                Is fire hot
                            </h3>
                            <p>Yes, avoid.</p>
                        </div>
                    </div>
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
