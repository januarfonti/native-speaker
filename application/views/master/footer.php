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
              </address></li>
                                
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