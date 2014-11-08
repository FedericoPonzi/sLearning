<?=$header;?>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('/css/user.css'); ?>" rel="stylesheet">
</head>
<body>


<?=$navigation;?>

    <!-- Page Content -->
    <div class="container main">

        <div class="row">
        
            <div class="col-md-8">
                <div class="panel panel-default plain profile-panel">
                    <div class="panel-body">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="profile-avatar">
                                <img class="img-responsive" src="http://federicoponzi.kd.io/sLearning/img/avatar.png" alt="profile picture">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="user-name">
                                Federico Mari <span class="label label-success">admin</span>
                            </div>
                            <div class="user-information">
                                <p>Docente (professore aggregato) di Basi di Dati, II Modulo. Le lezioni dell'edizione 2013/2014 del corso saranno a canali unificati. Il materiale didattico è reperibile sul sito del prof. Toni Mancini..</p>
                                <p>Inscritto dal: 20.10.2014</p>
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
            </div> <!-- fine col-md-8 -->
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Impostazioni</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Modifica profilo</a>
                                </li>
                                
                                <li><a href="#">Elimina account</a>
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

            
            </div> <!-- /row -->
        </div><!-- main -->
    <?=$footer;?>
</body>

</html>