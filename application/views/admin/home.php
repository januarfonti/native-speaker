<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <?php if( isset($html_title) && $html_title != '' ){
     echo '<title>' . $html_title . '</title>';} ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Add custom CSS here -->
   

    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    

    <!-- Page Specific CSS -->
    
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Native Speaker | Admin Area</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            
            <li><?php echo anchor('/admin/', '<i class="fa fa-dashboard"></i> Home'); ?></li>
            <li><?php echo anchor('/admin/about/', '<span class="glyphicon glyphicon-briefcase"></span>   About'); ?></li>
            <li><?php echo anchor('/admin/facilities/', '<span class="glyphicon glyphicon-tower"></span>  Facilities'); ?></li>
            <li><?php echo anchor('/admin/class_study/', '<span class="glyphicon glyphicon-list"></span>  Class and Study'); ?></li>
            <li><?php echo anchor('/admin/contact/', '<span class="glyphicon glyphicon-phone-alt"></span>  Contact Us'); ?></li>
            <li><?php echo anchor('/admin/left_footer', '<span class="glyphicon glyphicon-shopping-cart"></span>  Left Footer'); ?></li>
            <li><?php echo anchor('/admin/right_footer', '<span class="glyphicon glyphicon-shopping-cart"></span>  Right Footer'); ?></li>
            
          </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li><?php echo anchor('/auth/logout/', '<i class="fa fa-power-off"></i> Log Out'); ?></li>
            
                
              </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title heading-text"><i class="fa fa-bar-chart-o"></i> Featured Section</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-8 featured">
                    <?php
                    if(isset($data_featured)){
                      foreach($data_featured as $row){
              ?>
                      <img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/files/');?>/<? echo $row->file_url; ?>">
                  </div>
                  <div class="col-lg-4">
                      <h2 class="heading-text">
                        
            <?php echo $row->quote; ?>

              <? } } ?></h2>
                      
                  </div>
              </div><!--row-->
              <br/>
              <div class="well">
                <a href="admin/featured/edit/1" class="btn btn-danger"><span class="glyphicon glyphicon-retweet"></span>   Change Featured</a>
              </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->



          <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title heading-text"><i class="fa fa-bar-chart-o"></i> Quote Section</h3>
              </div>
              <div class="panel-body">

              
                <?php
            if(isset($data_quote)){
            foreach($data_quote as $row){
        ?>
              <h2 class="judul_quote heading-text"><?php echo $row->judul; ?></h2>
            <p><?php echo $row->quote; ?></p>

        <? } } ?>

        <div class="well">
                <a href="admin/quote/edit/1" class="btn btn-danger"><span class="glyphicon glyphicon-retweet"></span>   Change Quote Text</a>
              </div>
                  
              
          
              </div>
            </div>


 <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title heading-text"><i class="fa fa-bar-chart-o"></i> Why Choose Us Section</h3>
              </div>
              <div class="panel-body">


            <div class="row section-chooseus">

        <?php
            if(isset($data_chooseus)){
            foreach($data_chooseus as $row){
        ?>

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail ">
                  <img src="<?php echo base_url('assets/uploads/files/');?>/<? echo $row->file_url; ?>" alt="" class="img-thumbnail">
                  <div class="caption">
                    <h4 class="judul-chooseus-1 heading-text"><?php echo $row->judul; ?></h4>
                    <p><?php echo $row->isi; ?><a href="<?php echo $row->link_button; ?>" class="btn btn-primary btn-xs">Read More  <span class="glyphicon glyphicon-chevron-right"></span></a></p>
                    <p></p>
                  </div>
                </div>
              </div>
               <? } } ?>

 </div><!-- /.row -->
 <div class="well">
                <a href="admin/choose_us" class="btn btn-danger"><span class="glyphicon glyphicon-retweet"></span>   Change Why Choose Us Content</a>
              </div>
</div>

        

       

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    
  </body>
</html>
