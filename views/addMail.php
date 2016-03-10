<div id="container">
  <h1>Envoyer un message</h1>
  <form role="form" action="/mail/create" method="POST" class="col-md-offset-1 col-sm-offset-1" enctype="multipart/form-data">
    <label for="title">Destinataire</label>
      <input type="text" id="title" name="mail_receiver">
    <label for="title">Objet</label>
      <input type="text" id="title" name="title">
    <label for="content">Contenu</label>
      <input type="text" id="content" name="content" >
      <input type="hidden" name="id_sender" value="<?php echo $_SESSION['login_user']['user_id'] ?>">
      <input type="submit" name="submit" class="btn btn-customize">
  </form>
</div>