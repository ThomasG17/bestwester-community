<div id="container" class="col-ms-12 col-xs-12 col-sm-12">
  <div id="inside-content" class="col-md-offset-1 col-sm-offset-1 col-ms-10 col-xs-10 col-sm-10" enctype="multipart/form-data">
    <div class="inside-field">
      <h1 class="col-ms-10 col-xs-10 col-sm-10"><span class="mail-open col-md-1">Mail icon</span><?php echo $mesargs['mail'][0]['title']; ?></h1>
      <div class="trash col-md-2 col-xs-10 col-sm-10 ">
        <span><i class="fa fa-trash"></i></span>
      </div>
      <h2 class="col-ms-12 col-xs-12 col-sm-12"><?php echo $mesargs['mail'][0]['firstname']; ?> <?php echo $mesargs['mail'][0]['lastname']; ?></h2>
      <h3 class="col-ms-12 col-xs-12 col-sm-12">le <?php echo date("d-m-Y H:i", strtotime(str_replace('-','/', $mesargs['mail'][0]['creation_date']))); ?> </h3>
      <p class="text-mail col-ms-12 col-xs-12 col-sm-12">
        <?php echo $mesargs['mail'][0]['content']; ?>
      </p>
      <div class="reply col-md-offset-9 col-sm-offset-9 col-xs-offset-9 col-ms-3 col-xs-3 col-sm-3">
        <a class="btn-send btn btn-primary" href="/mail/new?reply"> Répondre</a>
      </div>
    </div>
  </div>
</div>