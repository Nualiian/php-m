<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<?php insert("partials/buttons/_newUser") ?>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card">
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">
							<?php mutation("users.showUser") ?> <?php echo $user["email"] ?>
						</span>
						<p>
							<?php echo $user["description"] ?>
						</p>
					</div>
					<div class="card-action">
						<a href="<?php url('user/' . $user["id"] . '/quotations') ?>"><?php mutation("users.seeQuotations") ?></a>
						<?php if (isUserBlocked($user["id"])): ?>
							<a href="<?php url('user/unblock/' . $user["id"]) ?>" class="red-text"><?php mutation("users.unblock") ?></a>
						<?php else: ?>
							<a href="<?php url('user/block/' . $user["id"]) ?>" class="red-text"><?php mutation("users.block") ?></a>
						<?php endif ?>
						<a href="<?php url('user/delete/' . $user["id"]) ?>" class="red-text"><?php mutation("users.delete") ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
