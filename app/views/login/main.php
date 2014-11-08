<?=$header;?>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('/css/user.css'); ?>" rel="stylesheet">
</head>
<body>


<?=$navigation;?>

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
                            <img class="img-responsive" src="http://lorempixel.com/600/600/people/9" alt="profile picture">
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
    <?=$footer;?>
</body>

</html>