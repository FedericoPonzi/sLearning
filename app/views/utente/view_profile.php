<?=$header;?>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('/css/user.css'); ?>" rel="stylesheet">
</head>
<body>
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
                <a class="navbar-brand" href="#">sLearning</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Tutti i corsi</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container main">

        <div class="row" style="margin-left:20px;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default plain profile-panel">
                <div class="panel-heading white-content p-left p-right">
                    <img class="profile-image img-responsive" src="http://lorempixel.com/600/200/sports/1" alt="profile cover">
                </div>
                <div class="panel-body">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="profile-avatar">
                            <img class="img-responsive" src="http://federicoponzi.kd.io/sLearning/img/avatar.png" alt="profile picture">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="user-name">
                            Full name <span class="label label-success">admin</span>
                        </div>
                        <div class="user-information">
                            <p>Creating awesome snippet for bootdey, bootdey is a gellery of free bootstrap snippets</p>
                        </div>
                        <div class="profile-stats-info">
                            <a href="#" title="Views">    <i class="glyphicon glyphicon-eye-open">  </i> <strong>2000</strong></a>
                            <a href="#" title="Comments"> <i class="glyphicon glyphicon-comment">   </i> <strong>120</strong></a>
                            <a href="#" title="Likes">    <i class="glyphicon glyphicon-thumbs-up"> </i> <strong>60</strong></a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer white-content">
                    <ul class="profile-info">
                        <li><i class="glyphicon glyphicon-phone"></i>      +534 354 534</li>
                        <li><i class="glyphicon glyphicon-map-marker"></i>  Medellin, colombia</li>
                        <li><i class="glyphicon glyphicon-envelope"></i>    snippet@test.com</li>
                        <li><i class="glyphicon glyphicon-edit"></i>        Web developer</li>
                        <li><i class="glyphicon glyphicon-share"></i>      factory@mail.com</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
         <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Menu</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">Lezioni</a>
                                </li>
                                <li><a href="#">Forum</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Ultime dal forum: </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
    </div>
            <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>