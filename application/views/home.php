<? include 'master/header.php'; ?>

          <!--ISI NE-->

          <div class="container">
              <div class="row">
                  <div class="col-lg-8 featured">
                  	<?php
            				if(isset($data_featured)){
            					foreach($data_featured as $row){
    					?>
                      <img class="img-responsive img-thumbnail" src="<? site_url(); ?>assets/uploads/files/<? echo $row->file_url; ?>">
                  </div>
                  <div class="col-lg-4">
                      <h2 class="heading-text-featured">
                      	
						<?php echo $row->quote; ?>

    					<? } } ?></h2>
                      
                  </div>
              </div><!--row-->
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
      
<? include 'master/footer.php'; ?>