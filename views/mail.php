<div id="mail-box" class="row">
	<div class="message-action col-md-10 col-md-offset-1">
		<ul>
			<li class="col-md-3 col-xs-6">
				<a href="mail/new" class="new_mail btn btn-default"title="Nouveau message">Nouveau message</a>
			</li>
		</ul>
	</div>
	<section id="today" class="col-md-10 col-md-offset-1">
		<div class="messages-header">
			<h3 class="col-md-10">Messages non-lu</h3>
			<div class="trash col-md-2">
				<span><i class="fa fa-trash"></i></span>
			</div>
		</div>
		<div class="box-content">
			<?php if (!$mesargs['mails_unread'] == null) { ?>
				<?php foreach ($mesargs['mails_unread'] as $mail_unread) { ?>
					<div class="message">
						<a href="mail/show/<?php echo $mail_unread['id_mail'] ?>" >
							<span class="mail-open col-md-1">Mail icon</span>
							<div class="subject col-md-6"><?php echo $mail_unread['title'] ?></div>
							<div class="from col-md-4">De : <?php echo $mail_unread['firstname'] ?> <?php echo $mail_unread['lastname'] ?> <br /> le <?php echo date("d-m-Y H:i", strtotime(str_replace('-','/', $mail_unread['creation_date']))); ?> </div>
							<form action="" class="delete-message col-md-1">
								<input type="checkbox" name="delete-message" />
							</form>
						</a>
						</div>
				<?php } ?>
			<?php }else{ ?>
				Aucun messages non-lu
			<?php } ?>
		</div>
	</section>

	<section id="previous" class="col-md-10 col-md-offset-1">
		<div class="messages-header">
			<h3 class="col-md-10">Messages Lu</h3>
			<div class="trash col-md-2">
				<span><i class="fa fa-trash"></i></span>
			</div>
		</div>
		<div class="box-content">
			<?php if (!$mesargs['mails_read'] == null) { ?>
				<?php foreach ($mesargs['mails_read'] as $mail_read) { ?>
					<div class="message">
						<a href="mail/show/<?php echo $mail_read['id_mail'] ?>" >
							<span class="mail-open col-md-1">Mail icon</span>
							<div class="subject col-md-6"><?php echo $mail_read['title'] ?></div>
							<div class="from col-md-4">De : <?php echo $mail_read['firstname'] ?> <?php echo $mail_read['lastname'] ?> <br /> le <?php echo date("d-m-Y H:i", strtotime(str_replace('-','/', $mail_read['creation_date']))); ?> </div>
							<form action="" class="delete-message col-md-1">
								<input type="checkbox" name="delete-message" />
							</form>
						</a>
						</div>
				<?php } ?>
			<?php }else{ ?>
				Aucun messages lu
			<?php } ?>
		</div>
	</section>
</div>