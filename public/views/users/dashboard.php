<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card">
					<div class="card-content">
						<h3>Welcome to the DoorHan Admin Page</h3>
						<p>
							This interface allows you to keep track of all the bills from the application, manage users of the applications and export bills as you see fit.
						</p>
						</div>
						<div class="card-action">
							<?php if (! Auth::user()): ?>
								<a href="<?php url('login') ?>">Login</a>
							<?php else: ?>
								<a href="<?php url('users') ?>">Manage Resellers</a>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
