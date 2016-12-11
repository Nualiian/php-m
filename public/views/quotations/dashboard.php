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
						<h3><?php mutation("quotations.heading") ?></h3>
						<p><?php mutation("quotations.info") ?></p>
					</div>
					<div class="card-action">
						<?php if (getUser()): ?>
							<a href="<?php url('quotation/create') ?>"><?php mutation("quotations.create") ?></a>
							<a href="<?php url('user/' . getUser()["id"] . '/quotations') ?>"><?php mutation("quotations.showMy") ?></a>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
