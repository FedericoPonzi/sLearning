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
                <a class="navbar-brand" href="<?=base_url();?>">sLearning</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=base_url();?>">Home</a>
                    </li>
                    <li>
                        <a href="#">Tutti i corsi</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            
                <p class="navbar-text navbar-right">Benvenuto <?php echo($this->session->userdata('logged_in')['nome']. $this->session->userdata('logged_in')['cognome']); ?> <a href="<?=base_url('index.php/login_c/logout');?>" class="navbar-link">Logout</a></p>
            </div>			<!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>