<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>sLearning | La nuova frontiera dell' insegnamento</title>
        <meta name="description" content="sLearning">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript">
        $(document).ready(function() { 
            $("#navbar ul li a[href^='#']").on('click', function(e) {
            
               // prevent default anchor click behavior
               e.preventDefault();
            
               // store hash
               var hash = this.hash;
               console.log(hash);
               // animate
               $('html, body').animate({
                   scrollTop: $(this.hash).offset().top - 50
                 }, 300, function(){
            
                   // when done, add hash to url
                   // (default click behaviour)
                   window.location.hash = hash;
                 });
            
            });
            
            // Login:
            
            $("#login").submit(function(e){
            $.ajax({

                url: "<?= base_url('index.php/login_c'); ?>",
                type: "POST",
                data: $(this).serialize(),

                success: function(data)
                {
                    if(data == 0)
                    {
                        window.location.replace("<?= base_url('lista_corsi'); ?>");
                    }
                    else
                    {
                        $('#login').append('<div class="alert alert-danger" role="alert"><i class="glyphicon glyphicon-ban-circle" style="float:left;"></i>Invalid username or password</div>');
                    }
                },
                
                error: function(data)
                {
                    alert('Something went wrong. Please retry later!');
                }
                });
                e.preventDefault();
            });
            
            
            
            $("#registerForm").submit(function(e){
            $.ajax({

                url: "<?= base_url('index.php/register'); ?>",
                type: "POST",
                data: $(this).serialize(),

                success: function(data)
                {
                    if(data == 0)
                    {
                        $("#registerForm").replaceWith('<div class="alert alert-success" role="alert"><i class="glyphicon glyphicon-ok"></i> Please login with the account just created.</div>');
                    }
                    //TODO: Da completare
                    else //if(data == 2) 
                    {
                       //$("#email").addClass("has-error");
                       //alert(data);
                        $('#registerForm').replaceWith('<div class="alert alert-danger" role="alert" id="validationErrorEmail"><i class="glyphicon glyphicon-ban-circle" style="float:left;"></i>  Email in uso. Hai dimenticato la password?</div>');
                    }
/*                    else
                    {
                        $("#email").addClass("has-error");
                    }*/
                },
                
                error: function(data)
                {
                    alert('Something went wrong. Please retry later!');
                }
                });
                e.preventDefault();
            });
            
            $("#contattaci").submit(function(e){
                $.ajax({

                url: "<?= base_url('index.php/welcome/contattaci'); ?>",
                type: "POST",
                data: $(this).serialize(),

                success: function(data)
                {
                    if(data == 0)
                    {
                        $("#contattaci").replaceWith('<div class="alert alert-success" role="alert"><i class="glyphicon glyphicon-ok"></i> Abbiamo ricevuto il tuo messaggio. Verrai ricontattato appena possibile!.</div>');
                    }
                    //TODO: Da completare
                    else //if(data == 2) 
                    {
                        alert(data);
                        $('#contattaci').replaceWith('<div class="alert alert-danger" role="alert"><i class="glyphicon glyphicon-ban-circle" style="float:left;"></i> Qualcosa è andato storto. Riprova più tardi.</div>');
                    }
/*                    else
                    {
                        $("#email").addClass("has-error");
                    }*/
                },
                
                error: function(data)
                {
                    alert('Something went wrong. Please retry later!');
                }
                });
                e.preventDefault();
            });
        });

        </script>
        <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">sLearning</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
          <!-- class="active"-->
            <li ><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#corsi">Ultimi Corsi</a></li>
            <li><a href="#contatti">Contattaci</a></li>
            <li><a href="#registrati">Registrati</a></li>
          </ul>
          
          <form class="navbar-form navbar-right" action="<?=base_url('index.php/login_c'); ?>" method="post" id="login" role="form">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" id="home">
      <div class="container" >
        <h1>Imparare, è vivere. Sapere, è morire.</h1>
        <p>sLearning &egrave; una piattaforma di e-learning sviluppata da zero per il web. Scopri come funziona: inscriviti ad un corso e comincia a studiare!</p>
        <p></p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container homepage" id="about" name="about">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">

        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-book fa-stack-1x fa-inverse"></i>
        </span>
          <h2>Impara</h2>
          <p>Su sLearning puoi seguire i tuoi corsi con tutta comodit&agrave;. Scarica il materiale ovunque ti trovi per studiare quando hai tempo.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-question fa-stack-1x fa-inverse"></i>
        </span>
          <h2>Esercitati</h2>
          <p>Tramite i quiz online dopo aver studiato il materiale potrai verificare le tue conoscenze per essere sicuro di aver acquisito le conoscenze necessarie.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-users fa-stack-1x fa-inverse"></i>
        </span>
          <h2>Interagisci</h2>
          <p>Hai dubbi che non riesci a risolvere? Chiedi nel forum del tuo corso: troverai altri studenti e professori pronti a risponderti.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>
    </div>
    <div class="corsi" id="corsi">
        <div class="container homepage-courses">
            <h2>Ultimi corsi iniziati</h2>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="http://1.bp.blogspot.com/_uW8K2hOt_y8/TLRwne1p6gI/AAAAAAAAAiM/9LFjGI-ylXU/s1600/20100218122220aLaRa.jpg" alt="...">
                  <div class="caption">
                    <h3>Base di dati</h3>
                    <p>Questo corso creato dal professor Mari vi offrir&agrave; una panoramica completa su come creare e gestire una base di dati.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Inscriviti</a> <a href="#" class="btn btn-default" role="button">Informazioni</a></p>
                  </div>
                </div>
              </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="http://icons.iconarchive.com/icons/double-j-design/ravenna-3d/256/Database-Active-icon.png" alt="...">
                  <div class="caption">
                    <h3>Database</h3>
                    <p>Questo corso creato dal professor Mari vi offrir&agrave; una panoramica completa su come creare e gestire una base di dati.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Inscriviti</a> <a href="#" class="btn btn-default" role="button">Informazioni</a></p>
                  </div>
                </div>
              </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="https://www.websense.com/content/Assets/Images/master-database-binary-cube.png" alt="...">
                  <div class="caption">
                    <h3>BDD</h3>
                    <p>Questo corso creato dal professor Mari vi offrir&agrave; una panoramica completa su come creare e gestire una base di dati.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Inscriviti</a> <a href="#" class="btn btn-default" role="button">Informazioni</a></p>
                 </div>
                </div>
              </div>
            </div>
    </div>
</div>
<div class="container contacts-container" id="contatti">
    <div class="row">
        <div class="col-sm-4">
        <h3>Dubbi o consigli? Scrivici!</h3>
        <hr>
        <address>
        <strong>Email:</strong> <a href="mailto:#"> admin@slearning.com</a><br><br>
        <strong>Phone:</strong> (555)123-4567
        </address>
        </div>
        
    <div class="col-sm-8 contact-form">
        <form id="contattaci" method="post" action="<?= base_url('/index.php/welcome/contattaci'); ?>" class="form" role="form">
            <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
            <input class="form-control" id="name" name="nome" placeholder="Name" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
            </div>
            <textarea class="form-control" id="message" name="messaggio" placeholder="Message" rows="5"></textarea>
            <br />
            <div class="row">
              <div class="col-xs-12 col-md-12 form-group">
            <button class="btn btn-primary pull-right" type="submit">Submit</button>
        </form>
    </div>
</div></div>
</div></div>

      <footer id="registrati">
      <div class="row">
        <div class="col-md-4">
            <h3>Ultimi registrati</h3>
              <p>
                  <ul>

                  <?php
                    foreach( $ultimiutenti as $utente)
                    {
                        echo('<li> '. $utente->nome .' '. $utente->cognome .' </li>');
                    }
                    ?>
                      <li> Federico Rossi</li>
                  </ul>
              </p>
        </div>
        <div class="col-md-4">
             
              <h3>Registrati</h3>
              <form name="registrazione" action="<?= base_url('index.php/register'); ?>" method="post" role="form" id="registerForm">
                <div class="form-group">
                    <div class="row">
                        <input type="text" name="nome" placeholder="Nome" id="nome" required class="form-control">
                    </div>
                    <div class="row">
                        <input type="text" name="cognome" placeholder="Cognome" id="cognome" required class="form-control">
                    </div>
                    <div class="row">
                        <input type="text" name="email" placeholder="Email" id="email" required class="form-control">
                    </div>
                    <div class="row">
                        <input type="password" name="password" id="password" placeholder="Password" required required class="form-control">
                    </div>
                    <div class="row">
                        <input type="password" name="passwordagain" id="password" placeholder="Conferma Password" required required class="form-control">
                    </div>
                    <div class="row">
                        <select name="sesso" class="form-control">
                            <option value ="maschio">Maschio</option>
                            <option value ="femmina">Femmina</option>
                        </select>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="mailinglist" value="si"> Mailing list?
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-default"> Registrati </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Social Media</h3>
            <p>
                <img src="img/social/facebook.png" alt="facebook">
                <img src="img/social/twitter.png" alt="twitter">
                <img src="img/social/youtube.png" alt="youtube">
            </p>
        </div>
        </div>
        <div class="row copyright">
         <p>&copy; sLearning. Tutti i corsi sono propriet&agrave; dei rispettivi autori. Il codice &egrave; open source e sar&agrave; reso presto disponibile.</p>
        </div>
      </footer>


    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    </body>
</html>
