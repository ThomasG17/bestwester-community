<form method="post" id="add-group" action="/addGroup/insert" class="col-md-offset-1" enctype="multipart/form-data">
    <div class="box-body col-md-11">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="name">Choisissez votre groupe</label>
                <select class="form-control" id="group-name" name="Groupes">
                    <option value="no-value"></option>
                    <?php foreach($groups as $group) : ?>
                        <option value="<?php echo $group['name']; ?>"><?php echo $group['name'] ?><div id="select-group-id"></div></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-3 col-md-offset-3"></div>
        </div>

        <input type="submit" class="btn btn-primary col-md-6" name="submit-addGroup">
    </div><!-- /.box-body -->
</form>