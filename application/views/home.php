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
							<li><?php echo anchor('/home/', '<span class="glyphicon glyphicon-home"></span>   Home'); ?></li>
							<li><?php echo anchor('/about/', '<span class="glyphicon glyphicon-briefcase"></span>   About'); ?></li>
							<li><?php echo anchor('/facilities/', '<span class="glyphicon glyphicon-tower"></span>   Facilities'); ?></li>
							<li><?php echo anchor('/class_study/', '<span class="glyphicon glyphicon-list"></span>   Class Study'); ?></li>
							<li><?php echo anchor('/contact/', '<span class="glyphicon glyphicon-phone-alt"></span>   Contact Us'); ?></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>

			<!--ISI NE-->
			<div class="container">
				<?php
					if(isset($data_featured)){
					foreach($data_featured as $row){
				?>
					<div class="row">
						<div class="col-lg-8 featured">
							<img class="img-responsive img-thumbnail" src="<? site_url(); ?>assets/uploads/files/<? echo $row->file_url; ?>">
						</div>
						<div class="col-lg-4">
							<h2 class="heading-text-featured">
							<?php echo $row->quote; ?>
						</div>
					</div><!--row-->
				<? } } ?></h2>
			</div><!--container-->
			<!-- Jumbotron -->
			<div class="jumbotron">
				<div class="container">
					<?php
						if(isset($data_quote)){
						foreach($data_quote as $row){
					?>
						<h2 class="judul_quote"><?php echo $row->judul; ?></h2>
						<p><?php echo $row->quote; ?></p>
					<? } } ?>
				</div>
			</div>
			<!-- why choose us -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="judul-chooseus"><span class="glyphicon glyphicon-bookmark icon-chooseus"></span>		Why Choose Us ?</h3>
					</div>
				</div><!-- /.row -->
				<div class="row section-chooseus">
					<?php
						if(isset($data_chooseus)){
						foreach($data_chooseus as $row){
					?>
						<div class="col-lg-3 col-md-6 hero-feature">
							<div class="thumbnail ">
								<img src="<? site_url(); ?>assets/uploads/files/<? echo $row->file_url; ?>" alt="" class="img-thumbnail">
								<div class="caption">
									<h4 class="judul-chooseus-1 heading-text"><?php echo $row->judul; ?></h4>
									<p><?php echo $row->isi; ?><a href="<?php echo $row->link_button; ?>" class="btn btn-primary btn-xs">Read More	<span class="glyphicon glyphicon-chevron-right"></span></a></p>
									<p></p>
								</div>
							</div>
						</div>
					<? } } ?>
				</div><!-- /.row -->
			</div>
		</div><!--wrap-->
		<!--AKHIR ISI NE-->
		
		<div id="footer">
			<div class="footer-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-md-4">
								<ul class="list-unstyled">
									<li><h4 class="heading-text-footer"><span class="glyphicon glyphicon-list"></span>   MAIN MENU</h4><li>
                                    <?php if(isset($data_left_footer)){ foreach($data_left_footer as $row){ ?>
										<li><a href="<?php echo $row->link; ?>"><?php echo $row->judul; ?></a></li>
									<? } } ?>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="list-unstyled">
									<li><h4 class="heading-text-footer"><span class="glyphicon glyphicon-phone"></span>   CONTACT US</h4><li>
									<li id="contact"><?php
										if(isset($data_contact)){
										foreach($data_contact as $row){
										?>
										<address>
											<?php echo $row->isi; ?>
											<? } } ?>
										</address>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="list-unstyled">
									<li><h4 class="heading-text-footer"><span class="glyphicon glyphicon-envelope"></span>   SEND US A MESSAGE</h4><li>
                                    <?php
                                      if(isset($data_right_footer)){
                                      foreach($data_right_footer as $row){
                                    ?>
                                    <li id="send-email"><?php echo $row->isi; ?></li>
                                    <a href="mailto:<?php echo $row->email;?>"><img src="<?php echo base_url('assets/images/mail.png');?>"></a>
                                    <a href="<?php echo $row->fb;?>"><img src="<?php echo base_url('assets/images/fb.png');?>"></a>
                                    <a href="<?php echo $row->twitter;?>"><img src="<?php echo base_url('assets/images/twitter.png');?>"></a>
									<? } } ?>
									<br/>
								</ul>
							</div>
						</div><!--col-lg-12-->
					</div><!--row-->
				</div><!--container-->
			</div><!--footer 2-->
			<div class="footer-3">
				<div class="container">
					<p class="warna-footer credit">Copyright © 2013 NATIVE SPEAKER | Language School.</p>
				</div>
			</div>
		</div>
    
		<!-- Bootstrap core JavaScript -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
		<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	</body>
</html>