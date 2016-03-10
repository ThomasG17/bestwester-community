<div id="container" class="col-ms-12 col-xs-12 col-sm-12">
  <form role="form" id="mail" action="/mail/create" method="POST" class="col-md-offset-1 col-sm-offset-1 col-ms-10 col-xs-10 col-sm-10" enctype="multipart/form-data">
    <div class="field">
      <h1 class="col-ms-12 col-xs-12 col-sm-12">Envoyer un message</h1>
      <input type="text" id="title" name="mail_receiver" class="col-ms-12 col-xs-12 col-sm-12" placeholder="Destinataire(s)">
      <input type="text" id="title" name="title" class="col-ms-12 col-xs-12 col-sm-12" placeholder="Objet">
      <input type="text" id="content" name="content" class="message col-ms-12 col-xs-12 col-sm-12">
      <input type="hidden" name="id_sender" value="<?php echo $_SESSION['login_user']['id'] ?>">
    </div>
    <div class="send">
      <input type="submit" name="submit" class="btn-send btn btn-primary" value="Envoyer">
    </div>
  </form>
</div>