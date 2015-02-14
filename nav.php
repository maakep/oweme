<script src="js/jquery.js"></script>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">OweMe</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><?php if(!$_SESSION['username']){ ?>
                        <a href="login.php">Login</a>
                        <?php }else{ ?>
                            <a href="login.php">Profile - <?php echo $_SESSION['username']; ?></a></li><li><a href="logout.php">Logout</a>
                        <?php }?>
                    </li>
                    <?php 
                    if(!empty($_SESSION['username'])){
                    ?>
                    <li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" onclick="getFriends()" data-toggle="dropdown">Friends <b class="caret"></b></a>
                        <ul class="dropdown-menu" id="friendMenu">
                            <script>
                            function deleteFriend(friend){
                                $.ajax({

                                        url: '/oweme/deleteFriend.php',
                                        type: 'POST',
                                        data: 'friend='+friend,
                                        success: function(result){
                                                //success-meddelande
                                                //result är deleteFriend.php-s print
                                                $('#'+friend).hide();
                                           }

                                     });         
                                }

                            function getFriends(){
                                $.ajax({

                                        url: '/oweme/nav_getFriends.php',
                                        type: 'GET',
                                        data: '',
                                        success: function(result){
                                                //success-meddelande
                                                //result är deleteFriend.php-s print
                                                $('#friendMenu').html(result+'<li><a href="searchUser.php"><span class="glyphicon glyphicon-search"></span> Search new friends!</a></li>');
                                           }

                                     });         
                                }   
                            </script>
                            <?php /*
                            if(!empty($_SESSION['friends'])){
                                foreach($_SESSION['friends'] as $friend){
                                    echo '<li id="'.$friend.'">
                                        <a href="#">'.$friend.'</a> <span onclick="deleteFriend(\''.$friend.'\')"><img width="20" height="20" src="">Del</span>
                                            </li>';
                                }
                                }else{
                                echo '
                                    <li>
                                        <p>No friends</p>
                                    </li>
                                ';
                            }
                        
                            */ ?>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>