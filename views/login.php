
<div id="main">
  <div class="header-brand col-md-4 col-md-offset-4 col-xs-12 col-sm-8 col-sm-offset-2"></div>
  <div id="login" class="col-md-4 col-md-offset-4 col-xs-12 col-sm-8 col-sm-offset-2">
    <h2 class="connection col-md-12 col-xs-12 col-sm-12">Connexion</h2>
    <form action="/user/AuthUser" method="post">
      <div class="input-group">
        <div class="input-group-addon">
          <img src="../../public/images/bonhomme.png" class="user-img"/>
        </div>
        <input id="email" class="email col-md-12 col-xs-12 col-sm-12" name="email" placeholder="Email" type="email">
      </div>
      <input id="password" class=" password col-md-12 col-xs-12 col-sm-12"name="password" placeholder="Mot de passe" type="password">
      <input name="submit" class="login col-md-12 col-xs-12 col-sm-12 btn btn-primary" type="submit" value=" Connexion ">
      <a href="#" class="login_link col-md-12 col-xs-12 col-sm-12">Mot de passe oublié?</a>
      <?php if(!empty($mesargs['error'])){ ?>
        <div class="col-md-12 col-xs-12 col-sm-12">
          <p class="error bg-danger"><?php echo $mesargs['error']; ?></p>
        </div>
      <?php } ?>
    </form>
  </div>
</div>