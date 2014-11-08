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
                    Base di dati <?php /* echo $data['titolo_corso']; */?>
                    <small>Federico Mari</small>
                </h1>
    
                <div class="post">
                    <h2>Lezione 1: Lorem Ipsum</h2>
                    <p><span class="glyphicon glyphicon-time"></span> Lezione del August 28, 2013 at 10:45 PM</p>
                </div>
                <hr>
                <div class="post">
                    <h2>Lezione 2: Lorem Ipsum</h2>
                    <p><span class="glyphicon glyphicon-time"></span> Lezione del August 28, 2013 at 10:45 PM</p>
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
                                <li><a href="corso_c">Home</a>
                                </li>
                                <li><a href="lezione_c">Lezioni</a>
                                </li>
                                <li><a href="forum_c">Forum</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Ultime dal forum: </h4>
                    <p>
                    <ul>
                        <li> Cosa sono le relazio..</li>
                        <li> Domanda sul diagramm..</li>
                        <li> Dubbio sulla lezione..</li>
                        <li> Lezione 1: Avete dub..</li>
                    </ul>
                    </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
    <?=$footer;?>

</body>

</html>
