<? include 'master/header.php'; ?>

          <!--ISI NE-->

          <div class="container">
          	<div class="well">
              <?php
            if(isset($data_about)){
            foreach($data_about as $row){
    		?>
			    		<h2 class="heading-text"><?php echo $row->judul; ?></h2>
			    		
			    			 

    		<?php echo $row->about; ?>

    		<? } } ?>
    		</div>
          </div>
      </div><!--wrap-->

      <!--AKHIR ISI NE-->
      
<? include 'master/footer.php'; ?>