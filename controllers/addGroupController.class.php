<?php

class addGroupController{
    public function indexAction($args){
        $groupListObj = new groupModel();
        $groups = $groupListObj->getAll(true);

        $v = new view("addGroup");
        $v->assign("groups", $groups);

        $v->assign("mesargs", $args);
    }

    public function insertAction($args){
        var_dump($_SESSION["login_user"]);
        $id = -1;
        $id_user = $_SESSION['id'];
        $group = $_POST['Groupes'];

        $id_group = $this->getGroup($group)['id'];
        $addUser = new user_GroupModel($id, $id_user, $id_group);
        $addUser->save();
    }

    public function getGroupAction($groupName) {

        $groupListObj = new groupModel();
        $groupTest = $groupListObj->getOneBy($groupName, $column = "name");
        return $groupTest;

    }

    public function indexCreateGroupAction($args) {
        $v = new view("createGroup");
        $v->assign("messargs", $args);
    }
    public function insertGroupAction($args) {
        var_dump($_POST['group-title']);
        $id = -1;
        $name = $_POST['group-title'];
        $insertGroup = new groupModel($id, $name);
        $insertGroup->save();

    }
}