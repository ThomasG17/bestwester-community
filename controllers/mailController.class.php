<?php
class mailController extends basesql{

	public function indexAction($args){
		$this->mailAction($args);
	}

  public function mailAction($args){
    $v = new view("mail");
    $args['mails'] = $this->getMailByUserId($_SESSION['login_user']['id']);
    $v->assign("mesargs", $args);
  }

  public function showAction($id){
    $v = new view("showMail");
    $args['mail'] = $this->getMailById(implode("", $id), "id");
    $v->assign("mesargs", $args);
  }

  public function newAction($args){
    $v = new view("addMail");
    $v->assign("mesargs", $args);
  }

  public function createAction($args){
    
    $mail= trim($_POST['mail_receiver']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $id_sender = $_POST['id_sender'];

    //Enregistrer le message
    $mailObj = new mailModel(-1, $title, $content, $id_sender);
    $mailObj->save();

    //Récupérer dernière actu créée
    $lastMail = $mailObj->lastId();

    $user_mail = preg_split("/[ ]/", $mail);

    foreach ($user_mail as $umail) {
      $userid = $this->getUserByMail($umail);

      if (!$userid == null) {
        //Lier le message à un destinataire
        $user_MailObj = new user_mailModel(-1, $lastMail, $userid[0]['id']);
        $user_MailObj->save();
      }
    }

    header('Location: /mail/new');
  }
}