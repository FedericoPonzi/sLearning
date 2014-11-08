<?=$header;?>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('/css/corso.css'); ?>" rel="stylesheet">
</head>

<body>

<?=$navigation;?>

    <!-- Page Content -->
    <div class="container main">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Base di dati
                    <small>Federico Mari</small>
                </h1>
    
                <div class="post">
                    <!-- Third Blog Post -->
                    <h2>
                        <a href="#">Benvenuti in questo corso</a>
                    </h2>
                    <p class="lead" style="margin-bottom:0;">
                        by <a href="index.php">Federico Mari</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                    <hr>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>Benvenuti nel corso di base di dati. Questo corso tratter&agrave; la teoria dietro le base di dati e vi permetter&agrave; di creare database efficienti e consistenti. Se ancora non l'avete fatto potete scaricare i files della prima lezione che e' attualmente disponibile cliccando sul menu di fianco.</p>
                    <a class="btn btn-primary" href="#">Continua a leggere...<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <hr>
    
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Piu vecchi</a>
                    </li>
                    <li class="next">
                        <a href="#">Piu nuovi &rarr;</a>
                    </li>
                </ul>

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
        <!-- /.row -->

        <hr>
    <?=$footer;?>

</body>

</html>
