<div class="page-header">
        <h3>Manage User</h3>
</div>

<div class="well">
  <a href="<? echo base_url('admin/add_user');?>" class="btn btn-primary">Add User Admin</a>
  
  
</div>
<table class="table table-bordered text-center">
        <thead>
          
          <tr class="success">
            <th><center>Nama</center></th>
            <th><center>Username</center></th>
            <th><center>Password</center></th>
            <th><center>Actions</center></th>
          </tr>

        </thead>


        <tbody>
          
          <?php foreach($data_profile as $row) : ?>
          

          <tr>

            <td><?php echo $row->nama_lengkap; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password; ?></td>
            <td>                <center>

                <div class="btn-group text-center">
  
  <a href="<?php echo base_url(); ?>admin/edit/<?php echo $row->id_user_login; ?>" class="btn btn-primary">Edit User</a>
  <a href="<?php echo base_url(); ?>admin/hapus/<?php echo $row->id_user_login; ?>" onClick="return confirm('Anda yakin..???');" class="btn btn-danger">Delete User</a>
  

  
</div>
</center>
            </td>
            
            
            

          </tr>

          <?php endforeach; ?>
          
        </tbody>
      </table>