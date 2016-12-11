<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<div class="row">
			<div id="login-form" class="col l4 m4 s12 offset-m4 offset-l4 offset-s0 card-panel">
				<h5 class="center-align">Register A New Reseller</h5>
				<div class="row">
					<form method="POST" action="/register" class="col s12">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<input id="email" type="email" name="email" class="validate">
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="password" type="password" class="validate" name="password">
								<label for="password">Password</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="password_confirmation" type="password" class="validate" name="password_confirmation">
								<label for="password_confirmation">Repeat password</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m4 l4 offset-m4 offset-l4 offset-s0">
								<button class="waves-effect waves-light btn" type="submit">Register</button>
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
