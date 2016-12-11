<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<?php insert("partials/flash_message") ?>

		<div class="row">
			<div id="login-form" class="col l4 m4 s12 offset-m4 offset-l4 offset-s0 card-panel">
				<h5 class="center-align"><?php mutation("users.registerHeading") ?></h5>
				<div class="row">
					<form method="POST" action="/register" class="col s12">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<input id="email" type="email" name="email" class="validate">
								<label for="email"><?php mutation("users.email") ?></label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="password" type="text" class="validate" name="password">
								<label for="password"><?php mutation("users.password") ?></label>
							</div>
							<div class="input-field col s12 m12 l12">
								<textarea id="description" name="description" class="materialize-textarea validate"></textarea>
								<label for="description"><?php mutation("users.description") ?></label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m4 l4">
								<button class="waves-effect waves-light btn orange lighten-1" type="submit"><?php mutation("users.registerSubmit") ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
