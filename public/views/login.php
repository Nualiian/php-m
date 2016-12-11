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
				<h5 class="center-align">Please login</h5>
				<div class="row">
					<form method="POST" action="/login" class="col s12">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<input id="email" type="email" name="email" class="validate">
								<label for="email">E-mail</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input id="password" type="password" class="validate" name="password">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m4 l4 offset-m4 offset-l4">
								<button class="waves-effect waves-light btn" type="submit">Login</button>
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
