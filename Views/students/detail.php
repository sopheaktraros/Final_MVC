<div class="container">
  <div class="row">

    <?php 
    foreach ($data['student'] as $rows) {
      ?>
      <div class="col-md-12"></div>
      <table class="table table-border">
        <tr>
          <th class="header-table">ID</th>
          <td class="content"><?php echo $rows['id']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Fullname</th>
          <td class="content"><?php echo $rows['firstname']." ".$rows['lastname'];?></td>
        </tr>
        <tr> 
          <th class="header-table">Class</th>
          <td class="content"><?php echo $rows['title'];?></td>
        </tr>
        <tr>
          <th class="header-table">Subject</th>
          <td class="content"><?php echo implode(", ",$rows['sub_title']);?></td>
        </tr>
        <tr>
          <th class="header-table">Gender</th>
          <td class="content"><?php echo $rows['sex'];?></td>
        </tr>
      <?php
      }
      ?>
      </table>
      <a class="btn btn-success pull-left mb-5" href="index.php?action=view">Back</a><br>
  </div>
</div>