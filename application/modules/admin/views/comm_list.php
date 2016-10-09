<div class="container">
<h2>Community List</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
  <button type="button" class="btn btn-info">Create Community</button><hr>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Community</th>
        <th>Community Name</th>
        <th>Genre</th>
        <th>Date Created</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($comm_list as $ini): ?>
      <tr>
        <td><?php echo $ini->id_comm; ?></td>
        <td><?php echo $ini->comm_name; ?></td>
        <td><?php echo $ini->type; ?></td>
        <td><?php echo $ini->date_created; ?></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
