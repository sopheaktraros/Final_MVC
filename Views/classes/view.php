<div class="row">
    <div class="col-md-12">
        <a href="index2.php?action=add_form" class="btn btn-success">Add New</a>
    </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Class Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
    if(isset($data['class_data'])){
      $id = 1;
        foreach ($data['class_data'] as $rows) {
        
  ?>
  <tbody>
    <tr>
      <td><?php echo $id;?></td>
      <td><?php echo $rows['title'];?></td>
      <td>
        <a href="index2.php?action=edit_form&id=<?php echo $rows['id'];?>"><i class="material-icons">edit</i></a>
        <a href="index2.php?action=delete&id=<?php echo $rows['id'];?>"><i class="material-icons" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
      </td>
    </tr>
  </tbody>
  <?php
        $id++;
        }
    }
  ?>
</table>