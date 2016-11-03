<div class="container">
<h2>User List</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><hr>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID User</th>
        <th>Community</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($user_list as $ini): ?>
      <tr>
        <td><?php echo $ini->id_user; ?></td>
        <td><?php echo $ini->comm_name; ?></td>
        <td><?php echo $ini->name; ?></td>
        <td><?php echo $ini->email; ?></td>
        <td><?php echo $ini->birth; ?></td>
        <td><?php echo $ini->gender; ?></td>
        <td><?php
        if($ini->status==1){
          echo'Sudah Aktif';
        }
        else{
          echo'Belum di verifikasi';
        }
        ?></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
