<? include 'master/header.php'; ?>

          <!--ISI NE-->

          <div class="container">
          	<div class="well">

          		<div class="row">
			        <div class="col-md-8">
			        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
			    	</div>
			    	
			      	<div class="col-md-4">
			      		<?php
            if(isset($data_contact)){
            foreach($data_contact as $row){
    		?>
			    		<h2 class="heading-text"><?php echo $row->judul; ?></h2>
			    		<address>
			    			 

    		<?php echo $row->isi; ?>

    		<? } } ?>
			    		</address>
			    	</div>
			    </div>

               </div><!--akhir isi kontent-->
          </div><!--container-->
      </div><!--wrap-->

      <!--AKHIR ISI NE-->
      
<? include 'master/footer.php'; ?>