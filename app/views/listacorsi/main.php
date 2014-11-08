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
                    Lista dei corsi
                </h1>
    
                <div class="post">
                    <h2>Base di dati</h2>
                    <p><span class="glyphicon glyphicon-time"></span> Anno Accademico: 2014/2015</p>
                    <p>Questo corso si basa sulla progettazione e realizzazione di una base di dati efficiente e consistente. Per accedere
                    al corso vi consigliamo di avere una preparazione sulla FOL per essere sicuri di passare l'esame finale.</p>
                </div>
                <hr>
                
                <?php
                foreach($lista_corsi as $corso)
                {
                    echo ('
                    <div class="post">
                        <h2><a href="'. base_url('/index.php/corso_c/v/ ') . $corso->codice .'">');
                    echo( $corso->titolo);
                    echo('</a></h2>
                            <p><span class="glyphicon glyphicon-time"></span> Anno accademico: ');
                    echo ($corso->annoac);
                    echo('</p>
                    </div>');
                
                }
                ?>
                
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

            <div class="col-md-4">

                <div class="well">
                    <h4>Cerca</h4>
                    <div class="row">
                        <input type="text"> <button type="submit" class="btn btn-primary">Cerca </button>
                    </div>
                    <!-- /.row -->
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
    <?=$footer;?>

</body>

</html>
