<!DOCTYPE html>
<html>
<head>
	<?php insert("partials/head") ?>
</head>
<body>
	<div class="container">
		<?php insert("partials/nav") ?>

		<div class="row">
			<?php if (getUser()["id"] == $user["id"]): ?>
				<h3><?php mutation("quotations.showMy") ?></h3>
			<?php else: ?>
				<h3><?php mutation("quotations.show") ?> <?php echo $user["email"] ?></h3>
			<?php endif ?>
		</div>

		<div class="row">
			<?php if (count($quotations) == 0): ?>
				<h4><?php mutation("quotations.noQuotations") ?></h4>
			<?php endif ?>

			<?php foreach ($quotations as $quotation): ?>
				<div class="col s12 m4 l4">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title truncate"><?php mutation("quotations.number") ?> <?php echo $quotation["id"] ?></span>
							<p class="truncate"><?php echo $quotation["note"] ?></p>
						</div>
						<div class="card-action">
							<a href="<?php url('quotation/' . $quotation["id"]) ?>"><?php mutation("quotations.detail") ?></a>
							<a href="<?php url('quotation/' . $quotation["id"] . '/export') ?>"><?php mutation("quotations.export") ?></a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
