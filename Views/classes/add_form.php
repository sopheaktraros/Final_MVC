<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Class Form</h2>
                </div>
                <form action="index2.php?action=form_data" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Class Name:</label>
                                <input type="text" name="class_title" id="name" class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="index2.php?action=list_class" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>