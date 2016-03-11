<form method="post" id="add-group" action="/addGroup/insertMemberGroup" class="col-md-offset-1" enctype="multipart/form-data">
    <div class="box-body col-md-11">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="name">Choisissez votre groupe</label>
                <select class="form-control" id="group-name" name="Groupe">
                    <option value="no-value"></option>
                    <?php foreach($groups as $group) : ?>
                        <option value="<?php echo $group['id']; ?>"><?php echo $group['name'] ?><div id="select-group-id"></div></option>
                    <?php endforeach; ?>
                </select>

                <label for="name">Membre à ajouter</label>
                <select class="form-control" id="users-name" name="User">
                    <option value="no-value"></option>
                    <?php foreach($users as $user) : ?>
                        <option value="<?php echo $user['id']; ?>"><?php echo $user['lastname'] ?><div id="select-user-id"></div></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="col-md-3 col-md-offset-3"></div>
        </div>

        <input type="submit" class="btn btn-primary col-md-6" name="submit-addGroup">
    </div><!-- /.box-body -->
</form>

