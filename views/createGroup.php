<form method="post" id="create-group" action="/addGroup/insertGroup" class="col-md-offset-1" enctype="multipart/form-data">
    <div class="box-body col-md-11">
        <div class="row">
                <div class="row">
                    <div class="form-group">
                        <label for="title-group">Nom du groupe a créer</label>
                        <input type="text" class="form-control" name="group-title">
                    </div>
                </div><!-- /.row -->
            <div class="col-md-3 col-md-offset-3"></div>
        </div>

        <input type="submit" class="btn btn-primary col-md-6" name="submit-addGroup">
    </div><!-- /.box-body -->
</form>