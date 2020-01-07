<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Change Profile</h2>
                </div>
                <?php
                foreach ($data['student'] as $row) {
                    ?>
                    <form action="index.php?action=change_profile&id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file">Profile Picture:</label><br>
                                <input type="file" name="profile" id="file">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                            <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>