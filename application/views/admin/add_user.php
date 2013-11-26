
        <legend>Manajemen User</legend>




<?
    $attr = array(
      'role' => 'form',
      'class' => 'form-horizontal'
    ); 
   ?>     

     <?php echo form_open('admin/simpan',$attr) ?>
      

       

      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Fullname</label>
        <div class="col-lg-4">
          <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" value="<?php echo $nama_lengkap; ?>">
        </div>
      </div>


      <div class="form-group">
        <label for="inputPassword1" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-4">
          <input name="username" type="text" class="form-control" id="username" value="<?php echo $username; ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-4">
          <input name="password" type="text" class="form-control" id="password" value="<?php echo $password; ?>">
        </div>
      </div>


      
      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </div>

  </form>


