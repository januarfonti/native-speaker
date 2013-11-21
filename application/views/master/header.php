<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>">

     <?php if( isset($html_title) && $html_title != '' ){
     echo '<title>' . $html_title . '</title>';} ?>

    

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-home.css');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url('assets/css/home.css');?>" rel="stylesheet">

  </head>

  <body>
      <div id="wrap">
          <nav class="navbar navbar-inverse" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
          
                      <a class="navbar-brand logo-nav" href="index.html"><img src="<?php echo base_url('assets/images/logo.png');?>"></a>
                  </div>
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li>
                            <?php echo anchor('/home/', '<span class="glyphicon glyphicon-home"></span>   Home'); ?>
                          </li>
                          <li>
                            <?php echo anchor('/about/', '<span class="glyphicon glyphicon-briefcase"></span>   About'); ?>
                          </li>
                          <li>
                            <?php echo anchor('/facilities/', '<span class="glyphicon glyphicon-tower"></span>   Facilities'); ?>
                          </li>
                          <li>
                            <?php echo anchor('/class_study/', '<span class="glyphicon glyphicon-list"></span>   Class Study'); ?>
                          </li>
                          <li>
                            <?php echo anchor('/contact/', '<span class="glyphicon glyphicon-phone-alt"></span>   Contact Us'); ?>
                          </li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
          </nav>