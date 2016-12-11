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
						<span class="card-title activator grey-text text-darken-4">
							<?php mutation("users.settingsHeading") ?>
						</span>
						<p>
							<?php echo $user["description"] ?>
						</p>
					</div>
					<div class="card-action">
						<a href="#languageModal"><?php mutation("users.changeLanguage") ?></a>
						<div id="languageModal" class="modal bottom-sheet">
							<div class="modal-content">
								<h4><?php mutation("users.languages") ?></h4>
								<?php foreach ($languages as $language): ?>
									<a href="<?php url('language/' . $language["id"]) ?>"><?php echo $language["name"] ?></a>
								<?php endforeach ?>
							</div>
						</div>

						<a href="#formManagementModal"><?php mutation("users.formVariablesManage") ?></a>
						<div id="formManagementModal" class="modal bottom-sheet">
							<div class="modal-content">
								<h4><?php mutation("users.formVariables") ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php asset("js/app.min.js") ?>" type="text/javascript"></script>
</body>
</html>
