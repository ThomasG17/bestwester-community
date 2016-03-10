<?php
class UserController extends basesql{

  public function indexAction($args){
    $v = new view("login");
    $v->assign("mesargs", $args);
  } 

  public function loginAction($args){
    $v = new view("login");
    $v->assign("mesargs", $args);
  }

  public function AuthUserAction($args){
    $v = new view("login");

    if(empty($_POST['email']))
    {
      $args['error']= "Erreur: email non renseigné";
    }

    if(empty($_POST['password']))
    {
      $args['error']= "error: password non renseigné";
    }

    if(empty($_POST['email']) && empty($_POST['password'])){
      $args['error'] = "error: email & password non renseignés";
    }
    $user_login = $this->getUserLogin($_POST['email'],$_POST['password']);

    if(!$user_login == false){
      $_SESSION['login_user'] = array(
                                  'id' => $user_login['id'],
                                  'firstname' => $user_login['firstname'],
                                  'lastname' => $user_login['lastname'],
                                  'mail' => $user_login['mail'],
                                  'is_admin' => $user_login['is_admin'],
                                  'fonction' => $user_login['fonction']
                                );
    }else{
      $args['error'] = "error: combinaison mot de passe email invalide";
    }
    $v->assign("mesargs", $args);

    if ($args['error'] == null) {
      $this->redirect("/index", "");
    } 
  }

  public function logoutAction(){
    session_destroy();
    $this->redirect("/user/login", "");
  }

}
